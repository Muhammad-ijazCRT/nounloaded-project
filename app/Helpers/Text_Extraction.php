<?php

namespace App\Helpers;

use Smalot\PdfParser\Parser;

// START OF TEXT EXTRACTION CLASS
class Text_Extraction
{

    protected static function txt_to_text( $path_to_file ){

        $fh = fopen( $path_to_file, 'r' );
        $response = "";
        while ($line = fgets($fh)) {
            $response .= $line;
        }
        fclose($fh);

        return $response;
    }

    protected static function pdf_to_text( $path_to_file ) {

        $parser = new Parser([]);
        $pdf = $parser->parseFile( $path_to_file );
        $response = $pdf->getText();

        return $response;

    }

    /**
     * @param $path_to_file
     * @return mixed|string
     */
    protected static function doc_to_text( $path_to_file )
    {
        $fileHandle = fopen($path_to_file, 'r');
        $line       = @fread($fileHandle, filesize($path_to_file));
        $lines      = explode(chr(0x0D), $line);
        $response   = '';

        foreach ($lines as $current_line) {

            $pos = strpos($current_line, chr(0x00));

            if ( ($pos !== FALSE) || (strlen($current_line) == 0) ) {

            } else {
                $response .= $current_line . ' ';
            }
        }

        $response = preg_replace('/[^a-zA-Z0-9\s\,\.\-\n\r\t@\/\_\(\)]/', '', $response);

        return $response;
    }

    /**
     * @return bool|string
     */
    protected static function docx_to_text( $path_to_file )
    {
        $response = '';
        $zip      = zip_open($path_to_file);

        if (!$zip || is_numeric($zip)) return false;

        while ($zip_entry = zip_read($zip)) {

            if (zip_entry_open($zip, $zip_entry) == FALSE)
                continue;

            if (zip_entry_name($zip_entry) != 'word/document.xml')
                continue;

            $response .= zip_entry_read($zip_entry, zip_entry_filesize($zip_entry));

            zip_entry_close($zip_entry);
        }

        zip_close($zip);

        $response = str_replace('</w:r></w:p></w:tc><w:tc>', ' ', $response);
        $response = str_replace('</w:r></w:p>', "\r\n", $response);
        $response = strip_tags($response);

        return $response;
    }

    /**
     * @return string
     */
    protected static function xlsx_to_text( $path_to_file )
    {
        $xml_filename = 'xl/sharedStrings.xml'; //content file name
        $zip_handle   = new \ZipArchive();
        $response     = '';

        if (true === $zip_handle->open($path_to_file)) {

            if (($xml_index = $zip_handle->locateName($xml_filename)) !== false) {

                $doc = new \DOMDocument();

                $xml_data   = $zip_handle->getFromIndex($xml_index);
                $doc->loadXML($xml_data, LIBXML_NOENT | LIBXML_XINCLUDE | LIBXML_NOERROR | LIBXML_NOWARNING);
                $response   = strip_tags($doc->saveXML());

            }

            $zip_handle->close();

        }

        return $response;
    }

    /**
     * @return string
     */
    protected static function pptx_to_text( $path_to_file )
    {
        $zip_handle = new \ZipArchive();
        $response   = '';

        if (true === $zip_handle->open($path_to_file)) {

            $slide_number = 1; //loop through slide files
            $doc = new \DOMDocument();

            while (($xml_index = $zip_handle->locateName('ppt/slides/slide' . $slide_number . '.xml')) !== false) {

                $xml_data   = $zip_handle->getFromIndex($xml_index);

                $doc->loadXML($xml_data, LIBXML_NOENT | LIBXML_XINCLUDE | LIBXML_NOERROR | LIBXML_NOWARNING);
                $response  .= strip_tags($doc->saveXML());

                $slide_number++;

            }

            $zip_handle->close();

        }

        return $response;
    }

    /**
     * @return array
     */
    public static function get_valid_file_types()
    {
        return [
            'txt',
            'pdf',
            'doc',
            'docx',
            'xlsx',
            'pptx',
        ];
    }

    /**
     * @param $path_to_file
     * @return bool|mixed|string
     * @throws Exception
     */
    public static function convert_to_text( $path_to_file )
    {
        if (isset($path_to_file) && file_exists($path_to_file)) {

            $valid_extensions = self::get_valid_file_types();

            $file_info = pathinfo($path_to_file);
            $file_ext  = strtolower($file_info['extension']);

            if (in_array( $file_ext, $valid_extensions )) {

                $method   = $file_ext . '_to_text';
                $response = self::$method( $path_to_file );

            } else {

                throw new \Exception('Invalid file type provided. Valid file types are txt, pdf, doc, docx, xlsx or pptx.');

            }

        } else {

            throw new \Exception('Invalid file provided. The file does not exist.');

        }

        return $response;
    }

}
// END OF TEXT EXTRACTION CLASS
