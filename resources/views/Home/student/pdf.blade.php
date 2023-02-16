<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        pdf
    </title>

    <style>
        p {
            text-align: justify;
        }

        .main {
            width: 100%;
            text-align: center;
            margin: auto;
            padding: 1px;
        }

        .basic_info {
            display: flex;
            justify-content: space-between;
            gap: 20px;
        }
        .img,.info1,.info2
        {
            width: 33%;
            height:250px;
        }
        .image{
            width: 100%;
            height: 100%;
        }

        /* img,.info1, .info2
    {
      padding: 10px;
    } */


        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        td,
        th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #dddddd;
        }

        .tr_head {
            background-color: rgb(120, 121, 120);
        }
    </style>
</head>

<body onload="window.print()">

    <div class="main">

        <h1>ABC's Profile</h1>
        <div class="basic_info">
            <div class="img">
                <img class="image" src="{{ asset('upload/student/'.$student->image)}}" alt="" srcset="">
            </div>
            <div class="info1">
                <p><strong>Name : </strong> ABC Lorem, ipsum dolor.</p>
                <p><strong>Name : </strong> ABC Lorem, ipsum dolor.</p>
                <p><strong>Name : </strong> ABC Lorem, ipsum dolor.</p>
                <p><strong>Name : </strong> ABC Lorem, ipsum dolor.</p>
                <p><strong>Name : </strong> ABC Lorem, ipsum dolor.</p>
                <p><strong>Name : </strong> ABC Lorem, ipsum dolor.</p>
                <p><strong>Name : </strong> ABC Lorem, ipsum dolor.</p>

            </div>
            <div class="info2">
                <p><strong>Name : </strong> ABC Lorem, ipsum dolor.</p>
                <p><strong>Name : </strong> ABC Lorem, ipsum dolor.</p>
                <p><strong>Name : </strong> ABC Lorem, ipsum dolor.</p>
                <p><strong>Name : </strong> ABC Lorem, ipsum dolor.</p>
                <p><strong>Name : </strong> ABC Lorem, ipsum dolor.</p>
                <p><strong>Name : </strong> ABC Lorem, ipsum dolor.</p>
                <p><strong>Name : </strong> ABC Lorem, ipsum dolor.</p>
            </div>
        </div>

        <div class="table">
            <h1>Address and Contact</h1>
            <table>
                <tr class="tr_head">
                    <th>Company</th>
                    <th>Contact</th>
                    <th>Country</th>
                    <th>Contact</th>
                    <th>Country</th>
                    <th>Country</th>
                    <th>Contact</th>
                    <th>Country</th>
                    <th>Contact</th>
                    <th>Country</th>
                </tr>
                <tr>
                    <td>Alfreds Futterkiste</td>
                    <td>Maria Anders</td>
                    <td>Germany</td>
                    <td>Alfreds Futterkiste</td>
                    <td>Maria Anders</td>
                    <td>Germany</td>
                    <td>Alfreds Futterkiste</td>
                    <td>Maria Anders</td>
                    <td>Alfreds Futterkiste</td>
                    <td>Maria Anders</td>

                </tr>

            </table>

        </div>


        <div class="table">
            <h1>Nominee Information</h1>
            <table>
                <tr class="tr_head">
                    <th>Company</th>
                    <th>Contact</th>
                    <th>Country</th>
                    <th>Contact</th>
                    <th>Country</th>
                    <th>Country</th>
                    <th>Contact</th>
                    <th>Country</th>
                    <th>Contact</th>
                    <th>Country</th>
                </tr>
                <tr>
                    <td>Alfreds Futterkiste</td>
                    <td>Maria Anders</td>
                    <td>Germany</td>
                    <td>Alfreds Futterkiste</td>
                    <td>Maria Anders</td>
                    <td>Germany</td>
                    <td>Alfreds Futterkiste</td>
                    <td>Maria Anders</td>
                    <td>Alfreds Futterkiste</td>
                    <td>Maria Anders</td>

                </tr>

            </table>


            <div class="table">
                <h1>Family Information</h1>
                <table>
                    <tr class="tr_head">
                        <th>Company</th>
                        <th>Contact</th>
                        <th>Country</th>
                        <th>Contact</th>
                        <th>Country</th>
                        <th>Country</th>

                    </tr>
                    <tr>
                        <td>Alfreds Futterkiste</td>
                        <td>Maria Anders</td>
                        <td>Germany</td>
                        <td>Alfreds Futterkiste</td>
                        <td>Maria Anders</td>
                        <td>Germany</td>
                    </tr>

                </table>

            </div>


        </div>

    </div>

</body>

</html>
