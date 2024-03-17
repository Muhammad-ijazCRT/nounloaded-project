// resources/views/pdf/user-table-pdf.blade.php

<!DOCTYPE html>
<html>

<head>
    <title>User Table PDF</title>
    <style>
        /* Add your custom styles for PDF here */
        table {
            width: 100%;
            border-collapse: collapse;
        }

        th,
        td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
</head>

<body>
    <h1>User Table</h1>
    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Qualification</th>
                <th>Year</th>
                <th>Matric Number</th>
                <th>Study Centre</th>
                <th>Class Of Degree</th>
                <!-- Add more columns as needed -->
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->qualification }}</td>
                    <td>{{ $user->year }}</td>
                    <td>{{ $user->matric_number }}</td>
                    <td>{{ $user->study_centre }}</td>
                    <td>{{ $user->class_of_degree }}</td>

                </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>
