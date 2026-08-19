<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>CYBER // STUDENT PROFILE</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html,
        body {
            min-height: 100%;
        }

        body {
            font-family: "Courier New", monospace;
            background: #02030a;
            color: #00ffcc;
            overflow-x: hidden;
        }

        /* =========================
           CYBERPUNK BACKGROUND
        ========================= */

        body::before {
            content: "";
            position: fixed;
            inset: 0;
            z-index: -3;

            background:
                linear-gradient(
                    rgba(0, 255, 204, 0.035) 1px,
                    transparent 1px
                ),
                linear-gradient(
                    90deg,
                    rgba(0, 255, 204, 0.035) 1px,
                    transparent 1px
                );

            background-size: 45px 45px;
        }

        body::after {
            content: "";
            position: fixed;
            inset: 0;
            z-index: -2;
            pointer-events: none;

            background:
                radial-gradient(
                    circle at 20% 20%,
                    rgba(0, 255, 204, 0.12),
                    transparent 30%
                ),
                radial-gradient(
                    circle at 80% 70%,
                    rgba(255, 0, 255, 0.10),
                    transparent 30%
                );
        }

        /* Scanlines */

        .scanlines {
            position: fixed;
            inset: 0;
            z-index: 100;
            pointer-events: none;

            background: repeating-linear-gradient(
                to bottom,
                transparent 0px,
                transparent 3px,
                rgba(0, 255, 204, 0.025) 4px
            );
        }

        /* =========================
           MAIN TERMINAL
        ========================= */

        .terminal {
            width: 92%;
            max-width: 1100px;
            margin: 45px auto;

            background: rgba(2, 6, 15, 0.94);

            border: 1px solid #00ffcc;

            box-shadow:
                0 0 10px rgba(0, 255, 204, 0.8),
                0 0 30px rgba(0, 255, 204, 0.3),
                inset 0 0 40px rgba(0, 255, 204, 0.04);
        }

        /* =========================
           TOP BAR
        ========================= */

        .topbar {
            height: 42px;

            display: flex;
            align-items: center;
            justify-content: space-between;

            padding: 0 18px;

            background: #050812;

            border-bottom: 1px solid #164844;

            font-size: 12px;
        }

        .topbar-left {
            color: #00ffcc;
        }

        .topbar-right {
            color: #00ff66;
        }

        .dot {
            display: inline-block;

            width: 8px;
            height: 8px;

            margin-right: 7px;

            border-radius: 50%;

            background: #00ff66;

            box-shadow: 0 0 10px #00ff66;
        }

        /* =========================
           NAVIGATION
        ========================= */

        nav {
            display: flex;
            justify-content: space-between;
            align-items: center;

            padding: 22px 28px;

            border-bottom: 1px solid #123b38;
        }

        .logo {
            font-size: 18px;
            font-weight: bold;

            color: #ffffff;

            text-shadow:
                0 0 5px #00ffcc,
                0 0 15px #00ffcc;
        }

        .logo span {
            color: #ff00ff;
        }

        .nav-links {
            display: flex;
            gap: 12px;
        }

        .nav-links a {
            color: #00ffcc;
            text-decoration: none;

            padding: 10px 16px;

            border: 1px solid #164844;

            background: rgba(0, 255, 204, 0.03);

            transition: 0.25s;
        }

        .nav-links a:hover {
            color: #050812;
            background: #00ffcc;

            border-color: #00ffcc;

            box-shadow:
                0 0 10px #00ffcc,
                0 0 25px rgba(0, 255, 204, 0.5);
        }

        /* =========================
           CONTENT
        ========================= */

        .content {
            padding: 45px;
        }

        .system-message {
            color: #ff00ff;

            font-size: 12px;

            letter-spacing: 2px;

            margin-bottom: 12px;
        }

        .title {
            position: relative;

            font-size: clamp(32px, 6vw, 65px);

            color: #ffffff;

            letter-spacing: 5px;

            text-transform: uppercase;

            text-shadow:
                0 0 5px #ffffff,
                0 0 15px #00ffcc,
                0 0 35px #00ffcc;
        }

        .title::before {
            content: "MY STUDENT PROFILE";

            position: absolute;

            left: 2px;
            top: 0;

            color: #ff00ff;

            opacity: 0.45;

            z-index: -1;
        }

        .subtitle {
            margin-top: 10px;

            color: #64748b;

            font-size: 13px;

            letter-spacing: 2px;
        }

        /* =========================
           PROFILE IDENTITY PANEL
        ========================= */

        .identity {
            margin-top: 35px;

            display: grid;

            grid-template-columns: 130px 1fr;

            gap: 25px;

            padding: 25px;

            background:
                linear-gradient(
                    135deg,
                    rgba(0, 255, 204, 0.07),
                    rgba(255, 0, 255, 0.03)
                );

            border: 1px solid #164844;

            position: relative;
        }

        .identity::before {
            content: "IDENTITY_NODE";

            position: absolute;

            top: -9px;
            left: 18px;

            padding: 0 8px;

            background: #02060f;

            color: #00ffcc;

            font-size: 10px;
        }

        /* Avatar */

        .avatar {
            width: 110px;
            height: 110px;

            display: flex;
            align-items: center;
            justify-content: center;

            border: 2px solid #00ffcc;

            color: #00ffcc;

            font-size: 42px;
            font-weight: bold;

            background: #02060f;

            box-shadow:
                0 0 10px #00ffcc,
                inset 0 0 20px rgba(0, 255, 204, 0.15);

            clip-path: polygon(
                15% 0,
                85% 0,
                100% 15%,
                100% 85%,
                85% 100%,
                15% 100%,
                0 85%,
                0 15%
            );
        }

        .identity h2 {
            color: #ffffff;

            font-size: 25px;

            margin-bottom: 12px;

            text-shadow: 0 0 10px #00ffcc;
        }

        .access {
            color: #00ff66;

            font-size: 12px;

            letter-spacing: 2px;
        }

        .access::before {
            content: "● ";

            text-shadow: 0 0 8px #00ff66;
        }

        /* =========================
           DATA GRID
        ========================= */

        .section-title {
            margin-top: 40px;
            margin-bottom: 18px;

            color: #ff00ff;

            font-size: 12px;

            letter-spacing: 3px;
        }

        .info-grid {
            display: grid;

            grid-template-columns: repeat(2, 1fr);

            gap: 15px;
        }

        .info-card {
            position: relative;

            padding: 22px;

            background: #050a14;

            border: 1px solid #163d3a;

            transition: 0.25s;

            overflow: hidden;
        }

        .info-card::before {
            content: "";

            position: absolute;

            top: 0;
            left: 0;

            width: 4px;
            height: 100%;

            background: #00ffcc;

            box-shadow: 0 0 15px #00ffcc;
        }

        .info-card:hover {
            transform: translateY(-4px);

            border-color: #00ffcc;

            box-shadow:
                0 0 10px rgba(0, 255, 204, 0.4),
                inset 0 0 20px rgba(0, 255, 204, 0.04);
        }

        .label {
            display: block;

            color: #64748b;

            font-size: 10px;

            letter-spacing: 2px;

            margin-bottom: 9px;
        }

        .value {
            color: #ffffff;

            font-size: 15px;

            word-break: break-word;
        }

        .value::before {
            content: "> ";

            color: #00ffcc;
        }

        /* =========================
           DESCRIPTION
        ========================= */

        .description {
            margin-top: 25px;

            padding: 25px;

            background:
                linear-gradient(
                    135deg,
                    rgba(255, 0, 255, 0.06),
                    rgba(0, 255, 204, 0.03)
                );

            border: 1px solid #ff00ff;

            box-shadow:
                0 0 15px rgba(255, 0, 255, 0.12),
                inset 0 0 25px rgba(255, 0, 255, 0.03);
        }

        .description-title {
            color: #ff00ff;

            font-size: 12px;

            letter-spacing: 3px;

            margin-bottom: 15px;
        }

        .description-title::before {
            content: "[+] ";
        }

        .description p {
            color: #cbd5e1;

            line-height: 1.8;

            font-size: 14px;
        }

        /* =========================
           TERMINAL OUTPUT
        ========================= */

        .console {
            margin-top: 30px;

            padding: 20px;

            background: #010309;

            border: 1px solid #163d3a;

            color: #00ff66;

            font-size: 12px;

            line-height: 1.8;
        }

        .console .pink {
            color: #ff00ff;
        }

        .console .cyan {
            color: #00ffcc;
        }

        /* =========================
           FOOTER
        ========================= */

        footer {
            padding: 20px;

            text-align: center;

            border-top: 1px solid #123b38;

            color: #334155;

            font-size: 10px;

            letter-spacing: 2px;
        }

        /* =========================
           MOBILE
        ========================= */

        @media (max-width: 700px) {

            .terminal {
                width: 95%;
                margin: 20px auto;
            }

            .content {
                padding: 25px;
            }

            nav {
                flex-direction: column;
                align-items: flex-start;
                gap: 18px;
            }

            .nav-links {
                flex-wrap: wrap;
            }

            .identity {
                grid-template-columns: 1fr;
                text-align: center;
            }

            .avatar {
                margin: auto;
            }

            .info-grid {
                grid-template-columns: 1fr;
            }

            .title {
                font-size: 32px;
            }
        }
    </style>
</head>

<body>

<div class="scanlines"></div>

<div class="terminal">

    <!-- TOP SYSTEM BAR -->

    <div class="topbar">

        <div class="topbar-left">
            CYBER:// STUDENT_NETWORK
        </div>

        <div class="topbar-right">
            <span class="dot"></span>
            SYSTEM ONLINE
        </div>

    </div>


    <!-- NAVIGATION -->

    <nav>

        <div class="logo">
            STUDENT<span>_SYS</span>
        </div>

        <div class="nav-links">

            <a href="<?= site_url('student'); ?>">
                [ HOME ]
            </a>

            <a href="<?= site_url('student/profile'); ?>">
                [ PROFILE ]
            </a>

        </div>

    </nav>


    <!-- MAIN CONTENT -->

    <main class="content">

        <div class="system-message">
            // SECURE DATABASE CONNECTION ESTABLISHED
        </div>

        <h1 class="title">
            MY STUDENT PROFILE
        </h1>

        <p class="subtitle">
            &gt; ACCESSING SECURE STUDENT IDENTITY DATABASE...
        </p>


        <!-- IDENTITY -->

        <div class="identity">

            <div class="avatar">
                S
            </div>

            <div>

                <h2>
                    <?= $name; ?>
                </h2>

                <div class="access">
                    PROFILE STATUS: ACTIVE
                </div>

                <br>

                <div class="access">
                    ACCESS LEVEL: AUTHORIZED
                </div>

            </div>

        </div>


        <!-- INFORMATION -->

        <div class="section-title">
            // STUDENT_DATABASE_RECORD
        </div>

        <div class="info-grid">

            <div class="info-card">

                <span class="label">
                    STUDENT_ID
                </span>

                <span class="value">
                    <?= $student_id; ?>
                </span>

            </div>


            <div class="info-card">

                <span class="label">
                    FULL_NAME
                </span>

                <span class="value">
                    <?= $name; ?>
                </span>

            </div>


            <div class="info-card">

                <span class="label">
                    COURSE
                </span>

                <span class="value">
                    <?= $course; ?>
                </span>

            </div>


            <div class="info-card">

                <span class="label">
                    YEAR_LEVEL
                </span>

                <span class="value">
                    <?= $year; ?>
                </span>

            </div>


            <div class="info-card">

                <span class="label">
                    SECTION
                </span>

                <span class="value">
                    <?= $section; ?>
                </span>

            </div>


            <div class="info-card">

                <span class="label">
                    EMAIL_ADDRESS
                </span>

                <span class="value">
                    <?= $email; ?>
                </span>

            </div>

        </div>


        <!-- PROFILE DESCRIPTION -->

        <div class="description">

            <div class="description-title">
                PROFILE_DESCRIPTION
            </div>

            <p>
                I am a BS Information Technology student interested
                in web development and software development.
            </p>

        </div>


        <!-- TERMINAL -->

        <div class="console">

            <span class="pink">
                root@student-profile:~$
            </span>

            authenticate --profile

            <br>

            <span class="cyan">
                [+]
            </span>

            Identity verification successful

            <br>

            <span class="cyan">
                [+]
            </span>

            Student database record loaded

            <br>

            <span class="cyan">
                [+]
            </span>

            Secure connection established

            <br>

            <span class="cyan">
                [+]
            </span>

            Profile access granted

        </div>

    </main>


    <!-- FOOTER -->

    <footer>
        CYBER STUDENT PORTAL // LAVALUST MVC // ENCRYPTED CONNECTION
    </footer>

</div>

</body>
</html>