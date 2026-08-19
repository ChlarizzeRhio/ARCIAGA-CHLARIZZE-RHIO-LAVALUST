<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CYBER // STUDENT PORTAL</title>

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            min-height: 100vh;
            font-family: "Courier New", monospace;
            background:
                radial-gradient(circle at 50% 20%, #182848 0%, #080b16 45%, #03040a 100%);
            color: #00ffcc;
            overflow-x: hidden;
        }

        body::before {
            content: "";
            position: fixed;
            inset: 0;
            pointer-events: none;
            background:
                linear-gradient(rgba(0, 255, 204, 0.03) 1px, transparent 1px),
                linear-gradient(90deg, rgba(0, 255, 204, 0.03) 1px, transparent 1px);
            background-size: 40px 40px;
        }

        .container {
            position: relative;
            width: 90%;
            max-width: 850px;
            margin: 50px auto;
            padding: 35px;
            background: rgba(5, 10, 25, 0.92);
            border: 1px solid #00ffcc;
            box-shadow:
                0 0 15px rgba(0, 255, 204, 0.25),
                0 0 50px rgba(0, 255, 204, 0.08);
        }

        .top-line {
            color: #667085;
            font-size: 12px;
            margin-bottom: 25px;
        }

        .top-line span {
            color: #00ffcc;
        }

        nav {
            display: flex;
            gap: 12px;
            margin-bottom: 35px;
            border-bottom: 1px solid #163d3a;
            padding-bottom: 18px;
        }

        nav a {
            color: #00ffcc;
            text-decoration: none;
            border: 1px solid #00ffcc;
            padding: 9px 16px;
            font-size: 13px;
            transition: 0.25s;
        }

        nav a:hover {
            background: #00ffcc;
            color: #020609;
            box-shadow: 0 0 15px #00ffcc;
        }

        .header {
            margin-bottom: 35px;
        }

        .system {
            color: #ff00ff;
            font-size: 13px;
            margin-bottom: 10px;
        }

        h1 {
            margin: 0;
            font-size: 36px;
            color: #ffffff;
            text-shadow:
                0 0 5px #00ffcc,
                0 0 15px rgba(0, 255, 204, 0.7);
        }

        .subtitle {
            color: #667085;
            margin-top: 10px;
        }

        .status {
            display: inline-block;
            margin-top: 15px;
            padding: 6px 12px;
            border: 1px solid #00ff66;
            color: #00ff66;
            font-size: 12px;
        }

        .status::before {
            content: "● ";
        }

        .info {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 15px;
        }

        .info-item {
            padding: 18px;
            background: rgba(0, 255, 204, 0.035);
            border: 1px solid #164844;
            transition: 0.25s;
        }

        .info-item:hover {
            border-color: #00ffcc;
            box-shadow: 0 0 15px rgba(0, 255, 204, 0.18);
            transform: translateY(-2px);
        }

        .label {
            display: block;
            color: #667085;
            font-size: 11px;
            margin-bottom: 8px;
            text-transform: uppercase;
        }

        .value {
            color: #ffffff;
            font-size: 15px;
        }

        .value::before {
            content: "> ";
            color: #00ffcc;
        }

        .terminal {
            margin-top: 30px;
            padding: 18px;
            background: #020609;
            border: 1px solid #163d3a;
            color: #00ff66;
            font-size: 13px;
        }

        .terminal .pink {
            color: #ff00ff;
        }

        .footer {
            margin-top: 30px;
            text-align: center;
            color: #394554;
            font-size: 11px;
        }

        @media (max-width: 650px) {
            .info {
                grid-template-columns: 1fr;
            }

            h1 {
                font-size: 27px;
            }

            .container {
                padding: 22px;
            }
        }
    </style>
</head>

<body>

<div class="container">

    <div class="top-line">
        <span>CYBER://</span> STUDENT_PORTAL
        &nbsp;|&nbsp; SYSTEM_STATUS: ONLINE
    </div>

    <nav>
        <a href="<?= site_url('student'); ?>">[ HOME ]</a>
        <a href="<?= site_url('student/profile'); ?>">[ STUDENT_PROFILE ]</a>
    </nav>

    <div class="header">
        <div class="system">SYSTEM MESSAGE // ACCESS GRANTED</div>

        <h1>STUDENT INFORMATION</h1>

        <div class="subtitle">
            &gt; Secure Student Information Database
        </div>

        <div class="status">
            SYSTEM ONLINE
        </div>
    </div>

    <div class="info">

        <div class="info-item">
            <span class="label">Student ID</span>
            <span class="value"><?= $student_id; ?></span>
        </div>

        <div class="info-item">
            <span class="label">Name</span>
            <span class="value"><?= $name; ?></span>
        </div>

        <div class="info-item">
            <span class="label">Course</span>
            <span class="value"><?= $course; ?></span>
        </div>

        <div class="info-item">
            <span class="label">Year Level</span>
            <span class="value"><?= $year; ?></span>
        </div>

        <div class="info-item">
            <span class="label">Section</span>
            <span class="value"><?= $section; ?></span>
        </div>

        <div class="info-item">
            <span class="label">Email</span>
            <span class="value"><?= $email; ?></span>
        </div>

    </div>

    <div class="terminal">
        <span class="pink">root@student-portal:~$</span>
        access student_information<br>
        <span class="pink">[+]</span> Authentication successful<br>
        <span class="pink">[+]</span> Student record loaded<br>
        <span class="pink">[+]</span> Connection secure
    </div>

    <div class="footer">
        CYBER STUDENT PORTAL // LAVALUST MVC // SECURE CONNECTION
    </div>

</div>

</body>
</html>