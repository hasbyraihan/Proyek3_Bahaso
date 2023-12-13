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
            h5 {
            display: flex;
            justify-content: flex-end;
            }

            th, td {
                border: 1px solid #ddd;
                padding: 10px;
                text-align: left;
            }
        </style>
    </head>
    <body>

    @foreach ($dataUnemployed as $unemployed)
        <header>
            <h1>{{ $unemployed->nama }}'s CV</h1>
            <p>Email: {{ $unemployed->email }} | Phone: 0{{ $unemployed->notelp }} | Address: {{ $unemployed->alamat }}</p>
        </header>

        <section>
          <h2>About</h2>
          <p>{{ $unemployed->deskripsi }}</p>
        </section>
        

        <section>
            <h2>Work Experience</h2>
            @foreach ($dataPekerjaan as $pekerjaan)
            <h3>{{ $pekerjaan->jabatan }}</h3>
            <p>{{ $pekerjaan->perusahaan }}</p>
            <h5>{{ $pekerjaan->bulan_mbekerja }}, {{ $pekerjaan->tahun_mbekerja }} - {{ $pekerjaan->bulan_sbekerja }}, {{ $pekerjaan->tahun_sbekerja }}</h5>
            @endforeach
        </section>


        <section>
            <h2>Education</h2>
            <table>
                <thead>
                    <tr>
                        <th>Degree </th>
                        <th>University</th>
                        <th>Year</th>
                    </tr>
                </thead>    
                <tbody>
                    @foreach ($dataPendidikan as $pendidikan)
                    <tr>
                        <td>{{ $pendidikan->jurusan }}</td>
                        <td>{{ $pendidikan->sekolah }}</td>
                        <td>{{ $pendidikan->tahun_lulus }}</td>
                    </tr>
                    <!-- Add more education entries as needed -->
                    @endforeach
                </tbody>
            </table>
        </section>
        
        <section>
            <h2>Skills</h2>
            <ul>
                @foreach ($dataSkill as $skill)
                    <li>{{ $skill['namaskill'] }},{{ $skill['level'] }}.</li>
                @endforeach
            </ul>
        </section>

        
       

        <!-- Add more sections for projects, certifications, etc. -->

    @endforeach

</body>

    </html>