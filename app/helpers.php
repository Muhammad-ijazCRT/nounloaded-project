<?php

use App\Models\Students;
use App\Models\Notifications;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Mail;
use App\Mail\Notifications as MailNotifications;
use App\Models\Tutors;

// DISPLAY IMAGE FROM STORAGE
if (!function_exists("DisplayImage")) {

    function DisplayImage($filename)
    {

        $contents = base64_encode(Storage::get("public/" . $filename));
        return "data:image/jpeg;base64," . $contents;
    }
}

// ADD st, nd, rd, th AT END OF NUMBERS
if (!function_exists("ordinal")) {
    function ordinal($num)
    {

        $last = substr($num, -1);

        if ($last > 3  or $last == 0 or ($num >= 11 and $num <= 19)) {
            $ext = 'th';
        } else if ($last == 3) {
            $ext = 'rd';
        } else if ($last == 2) {
            $ext = 'nd';
        } else {
            $ext = 'st';
        }

        return $num . $ext;
    }
}


// NOTIFICATIONS MANAGEMENT
if (!function_exists("StudentsNotification")) {
    function StudentsNotification($uid, $user_type, $ntype, $ncolor, $nmsg)
    {

        if ($user_type == "student") {
            $ref_id = Auth::guard('admin')->user()->id;
            $ref_role = Auth::guard('admin')->user()->admin_type;
            $ref_email = Auth::guard('admin')->user()->email;
        } elseif ($user_type == "tutor") {
            $ref_id = Tutors::find($uid)->id;
            $ref_role = Tutors::find($uid)->role;
            $ref_email = Tutors::find($uid)->email;
        } elseif ($user_type == "admin") {
            $ref_id = Auth::guard('student')->user()->id;
            $ref_role = Auth::guard('student')->user()->role;
            $ref_email = Auth::guard('student')->user()->email;
        }

        Notifications::create([
            'ref_id' => $ref_id,
            'ref_role' => $ref_role,
            'ref_email' => $ref_email,
            "user_id" => $uid,
            "user_type" => $user_type,
            "not_type" => $ntype,
            "not_msg" => $nmsg,
            "not_status" => "unread",
            "not_color" => $ncolor
        ]);

        if ($user_type == "student") {

            $to = Students::where("id", $uid)->first()->email;

            if ($ntype == "profile") {
                $not_type = 'Profile';
            } elseif ($ntype == "tutor_request") {
                $not_type = 'Tutor Request';
            } elseif ($ntype == "student_courses") {
                $not_type = 'Student Courses';
            } elseif ($ntype == "TMA_courses") {
                $not_type = 'TMA Courses';
            } elseif ($ntype == "past_papers_courses") {
                $not_type = 'Past Papers Courses';
            } elseif ($ntype == "queries") {
                $not_type = 'General Queries';
            } else {
                $not_type = 'Student Notifications';
            }

            $infos = array("ntype" => $not_type, "msg" => $nmsg);
            // Mail::to($to)->send(new MailNotifications($infos));
        }



        if ($user_type == "tutor") {

            $to = Tutors::where("id", $uid)->first()->email;

            if ($ntype == "profile") {
                $not_type = 'Profile';
            } elseif ($ntype == "tutor_request") {
                $not_type = 'Tutor Request';
            } elseif ($ntype == "student_courses") {
                $not_type = 'Student Courses';
            } elseif ($ntype == "TMA_courses") {
                $not_type = 'TMA Courses';
            } elseif ($ntype == "past_papers_courses") {
                $not_type = 'Past Papers Courses';
            } elseif ($ntype == "queries") {
                $not_type = 'General Queries';
            } else {
                $not_type = 'Student Notifications';
            }

            $infos = array("ntype" => $not_type, "msg" => $nmsg);
            // Mail::to($to)->send(new MailNotifications($infos));
        }
    }
}
