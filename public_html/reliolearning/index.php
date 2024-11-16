<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Relio Learning</title>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.16/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(function() {
            $("#theme-toggle").on("change", function() {
                $("body").toggleClass("dark");
            });
        });
    </script>
    <style>
        body {
            background-color: #f5f5f5;
            font-family: "Montserrat", sans-serif;
            line-height: 1.5;
            color: #374151;
        }

        h1 {
            font-size: 2em;
            font-weight: bold;
            margin: 0.67em 0;
        }

        a {
            color: inherit;
            text-decoration: inherit;
        }

        img {
            max-width: 100%;
            height: auto;
        }

        main {
            padding: 20px;
        }

        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 1rem 2rem;
            background-color: #f5f5f5;
            box-shadow: 0 0.125rem 0.25rem rgba(0, 0, 0, 0.075);
        }

        .header.dark {
            background-color: #1F2937;
        }

        .header h1 {
            font-size: 2.5rem;
            margin: 0;
        }

        .navimg {
            height: 3rem;
            margin-right: 1rem;
        }

        .theme-toggle {
            display: flex;
            align-items: center;
            font-size: 1.2rem;
        }

        .theme-toggle label {
            margin-right: 0.5rem;
        }

        .theme-toggle input[type="checkbox"] {
            appearance: none;
            width: 3rem;
            height: 1.5rem;
            border-radius: 0.75rem;
            background-color: #fff;
            position: relative;
        }

        .theme-toggle input[type="checkbox"]::before {
            content: "";
            width: 1.5rem;
            height: 1.5rem;
            border-radius: 50%;
            background-color: #1F2937;
            position: absolute;
            left: 0;
            top: 0;
            transition: transform 0.3s ease;
        }

        .theme-toggle input[type="checkbox"]:checked::before {
            transform: translateX(1.5rem);
        }

        .sidebar {
            background-color: #f5f5f5;
            padding: 1rem;
            margin-bottom: 1rem;
        }

        .sidebar a {
            display: block;
            padding: 0.5rem;
            margin-bottom: 1rem;
            background-color: #fff;
            border-radius: 0.25rem;
            margin-bottom: 0.5rem;
            text-decoration: none;
            color: #333;
            }
            .sidebar a:hover {
        background-color: #eaeaea;
        color: #000;
    }

    .sidebar h3 {
        font-size: 1.5rem;
        font-weight: bold;
        margin-bottom: 1rem;
    }

    /* Apply styling to the main content */
    .main-content {
        padding: 1rem;
    }

    .main-content h1 {
        font-size: 2.5rem;
        font-weight: bold;
        margin-bottom: 1rem;
    }

    .main-content p {
        font-size: 1.125rem;
        line-height: 1.6;
        color: #333;
        margin-bottom: 1rem;
    }

    /* Responsive design for smaller screens */
    @media (max-width: 768px) {
        .container {
            display: block;
        }

        .sidebar {
            width: 100%;
            margin-bottom: 2rem;
        }

        .main-content {
            width: 100%;
        }
    }
</style>

