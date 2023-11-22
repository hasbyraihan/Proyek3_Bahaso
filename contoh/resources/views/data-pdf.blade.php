<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ats CV</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }

        header {
            text-align: center;
            margin-bottom: 20px;
        }

        section {
            margin-bottom: 30px;
        }

        h2 {
            border-bottom: 2px solid #333;
            padding-bottom: 5px;
            margin-bottom: 10px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: left;
        }
    </style>
</head>
<body>

    @foreach ($data as $row)
        <header>
            <h1>{{ $row->nama }}'s CV</h1>
            <p>Email: {{ $row->email }} | Phone: 0{{ $row->notelp }} | Address: {{ $row->alamat }}</p>
        </header>

        <section>
          <h2>Description</h2>
          <p>{{ $row->description }}</p>
        </section>

        <section>
            <h2>Education</h2>
            <table>
                <thead>
                    <tr>
                        <th>Degree</th>
                        <th>University</th>
                        <th>Year</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Bachelor's in Computer Science</td>
                        <td>University of XYZ</td>
                        <td>Year of Graduation</td>
                    </tr>
                    <!-- Add more education entries as needed -->
                </tbody>
            </table>
        </section>

        <section>
            <h2>Work Experience</h2>
            <table>
                <thead>
                    <tr>
                        <th>Position</th>
                        <th>Company</th>
                        <th>Year</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Software Developer</td>
                        <td>ABC Tech Solutions</td>
                        <td>2018 - Present</td>
                    </tr>
                    <!-- Add more work experience entries as needed -->
                </tbody>
            </table>
        </section>

        <section>
            <h2>Skills</h2>
            <ul>
                <li>Programming Languages: PHP, JavaScript, etc.</li>
                <li>Web Technologies: HTML, CSS, etc.</li>
                <!-- Add more skills as needed -->
            </ul>
        </section>

        <!-- Add more sections for projects, certifications, etc. -->

    @endforeach

</body>
</html>
