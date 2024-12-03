@extends('layouts.app')

@section('content')

@section('title','Terms and Condition')

<title>Terms of Service</title>

<style>
    body {
        background-color: #f4f6f8;
        /* Subtle gray background */
    }

    .tos-header {
        background-color: #3B71CA;
        /* Vibrant yellow */
        color: #fff;
        /* Dark text for contrast */
        padding: 40px 20px;
        text-align: center;
        border-bottom: 5px solid #0000FF;
        /* Slightly darker yellow border */
        font-family: 'Arial', sans-serif;
    }

    .tos-header h1 {
        font-size: 2.5rem;
        font-weight: bold;
        margin: 0;
    }

    .tos-header p {
        font-size: 1.2rem;
        margin: 5px 0 0;
        font-style: italic;
    }

    .tos-content {
        background-color: #fff;
        border-radius: 10px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        padding: 30px;
        margin-top: -30px;
        /* Overlap header slightly */
        font-family: 'Georgia', serif;
    }

    .tos-content p,
    .tos-content li {
        line-height: 1.6;
        /* Better readability */
    }

    .tos-content ol {
        padding-left: 20px;
        /* Indent for ordered list */
    }

    .container {
        max-width: 800px;
        /* Center and constrain width */
        margin: 0 auto;
        /* Center container */
    }

    [data-custom-class='body'],
    [data-custom-class='body'] * {
        background: transparent !important;
    }

    [data-custom-class='title'],
    [data-custom-class='title'] * {
        font-family: Arial !important;
        font-size: 26px !important;
        color: #000000 !important;
    }

    [data-custom-class='subtitle'],
    [data-custom-class='subtitle'] * {
        font-family: Arial !important;
        color: #595959 !important;
        font-size: 14px !important;
    }

    [data-custom-class='heading_1'],
    [data-custom-class='heading_1'] * {
        font-family: Arial !important;
        font-size: 19px !important;
        color: #000000 !important;
    }

    [data-custom-class='heading_2'],
    [data-custom-class='heading_2'] * {
        font-family: Arial !important;
        font-size: 17px !important;
        color: #000000 !important;
    }

    [data-custom-class='body_text'],
    [data-custom-class='body_text'] * {
        color: #595959 !important;
        font-size: 14px !important;
        font-family: Arial !important;
    }

    [data-custom-class='link'],
    [data-custom-class='link'] * {
        color: #3030F1 !important;
        font-size: 14px !important;
        font-family: Arial !important;
        word-break: break-word !important;
    }
</style>
</head>

<body>


    <!-- Header -->
    <div class="tos-header">
        <h1>TERMS OF SERVICE</h1>
        <p>Updated December 4, 2024</p>
    </div>

    <!-- Content -->
    <div class="tos-content container-lg">

        <span style="display: block;margin: 0 auto 3.125rem;width: 11.125rem;height: 2.375rem;background: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxNzgiIGhlaWdodD0iMzgiIHZpZXdCb3g9IjAgMCAxNzggMzgiPgogICAgPGcgZmlsbD0ibm9uZSIgZmlsbC1ydWxlPSJldmVub2RkIj4KICAgICAgICA8cGF0aCBmaWxsPSIjRDFEMUQxIiBkPSJNNC4yODMgMjQuMTA3Yy0uNzA1IDAtMS4yNTgtLjI1Ni0xLjY2LS43NjhoLS4wODVjLjA1Ny41MDIuMDg2Ljc5Mi4wODYuODd2Mi40MzRILjk4NXYtOC42NDhoMS4zMzJsLjIzMS43NzloLjA3NmMuMzgzLS41OTQuOTUtLjg5MiAxLjcwMi0uODkyLjcxIDAgMS4yNjQuMjc0IDEuNjY1LjgyMi40MDEuNTQ4LjYwMiAxLjMwOS42MDIgMi4yODMgMCAuNjQtLjA5NCAxLjE5OC0uMjgyIDEuNjctLjE4OC40NzMtLjQ1Ni44MzMtLjgwMyAxLjA4LS4zNDcuMjQ3LS43NTYuMzctMS4yMjUuMzd6TTMuOCAxOS4xOTNjLS40MDUgMC0uNy4xMjQtLjg4Ni4zNzMtLjE4Ny4yNDktLjI4My42Ni0uMjkgMS4yMzN2LjE3N2MwIC42NDUuMDk1IDEuMTA3LjI4NyAxLjM4Ni4xOTIuMjguNDk1LjQxOS45MS40MTkuNzM0IDAgMS4xMDEtLjYwNSAxLjEwMS0xLjgxNiAwLS41OS0uMDktMS4wMzQtLjI3LTEuMzI5LS4xODItLjI5NS0uNDY1LS40NDMtLjg1Mi0uNDQzem01LjU3IDEuNzk0YzAgLjU5NC4wOTggMS4wNDQuMjkzIDEuMzQ4LjE5Ni4zMDQuNTEzLjQ1Ny45NTQuNDU3LjQzNyAwIC43NS0uMTUyLjk0Mi0uNDU0LjE5Mi0uMzAzLjI4OC0uNzUzLjI4OC0xLjM1MSAwLS41OTUtLjA5Ny0xLjA0LS4yOS0xLjMzOC0uMTk0LS4yOTctLjUxLS40NDUtLjk1LS40NDUtLjQzOCAwLS43NTMuMTQ3LS45NDYuNDQzLS4xOTQuMjk1LS4yOS43NDItLjI5IDEuMzR6bTQuMTUzIDBjMCAuOTc3LS4yNTggMS43NDItLjc3NCAyLjI5My0uNTE1LjU1Mi0xLjIzMy44MjctMi4xNTQuODI3LS41NzYgMC0xLjA4NS0uMTI2LTEuNTI1LS4zNzhhMi41MiAyLjUyIDAgMCAxLTEuMDE1LTEuMDg4Yy0uMjM3LS40NzMtLjM1NS0xLjAyNC0uMzU1LTEuNjU0IDAtLjk4MS4yNTYtMS43NDQuNzY4LTIuMjg4LjUxMi0uNTQ1IDEuMjMyLS44MTcgMi4xNi0uODE3LjU3NiAwIDEuMDg1LjEyNiAxLjUyNS4zNzYuNDQuMjUxLjc3OS42MSAxLjAxNSAxLjA4LjIzNi40NjkuMzU1IDEuMDE5LjM1NSAxLjY0OXpNMTkuNzEgMjRsLS40NjItMi4xLS42MjMtMi42NTNoLS4wMzdMMTcuNDkzIDI0SDE1LjczbC0xLjcwOC02LjAwNWgxLjYzM2wuNjkzIDIuNjU5Yy4xMS40NzYuMjI0IDEuMTMzLjMzOCAxLjk3MWguMDMyYy4wMTUtLjI3Mi4wNzctLjcwNC4xODgtMS4yOTRsLjA4Ni0uNDU3Ljc0Mi0yLjg3OWgxLjgwNGwuNzA0IDIuODc5Yy4wMTQuMDc5LjAzNy4xOTUuMDY3LjM1YTIwLjk5OCAyMC45OTggMCAwIDEgLjE2NyAxLjAwMmMuMDIzLjE2NS4wMzYuMjk5LjA0LjM5OWguMDMyYy4wMzItLjI1OC4wOS0uNjExLjE3Mi0xLjA2LjA4Mi0uNDUuMTQxLS43NTQuMTc3LS45MTFsLjcyLTIuNjU5aDEuNjA2TDIxLjQ5NCAyNGgtMS43ODN6bTcuMDg2LTQuOTUyYy0uMzQ4IDAtLjYyLjExLS44MTcuMzMtLjE5Ny4yMi0uMzEuNTMzLS4zMzguOTM3aDIuMjk5Yy0uMDA4LS40MDQtLjExMy0uNzE3LS4zMTctLjkzNy0uMjA0LS4yMi0uNDgtLjMzLS44MjctLjMzem0uMjMgNS4wNmMtLjk2NiAwLTEuNzIyLS4yNjctMi4yNjYtLjgtLjU0NC0uNTM0LS44MTYtMS4yOS0uODE2LTIuMjY3IDAtMS4wMDcuMjUxLTEuNzg1Ljc1NC0yLjMzNC41MDMtLjU1IDEuMTk5LS44MjUgMi4wODctLjgyNS44NDggMCAxLjUxLjI0MiAxLjk4Mi43MjUuNDcyLjQ4NC43MDkgMS4xNTIuNzA5IDIuMDA0di43OTVoLTMuODczYy4wMTguNDY1LjE1Ni44MjkuNDE0IDEuMDkuMjU4LjI2MS42Mi4zOTIgMS4wODUuMzkyLjM2MSAwIC43MDMtLjAzNyAxLjAyNi0uMTEzYTUuMTMzIDUuMTMzIDAgMCAwIDEuMDEtLjM2djEuMjY4Yy0uMjg3LjE0My0uNTkzLjI1LS45Mi4zMmE1Ljc5IDUuNzkgMCAwIDEtMS4xOTEuMTA0em03LjI1My02LjIyNmMuMjIyIDAgLjQwNi4wMTYuNTUzLjA0OWwtLjEyNCAxLjUzNmExLjg3NyAxLjg3NyAwIDAgMC0uNDgzLS4wNTRjLS41MjMgMC0uOTMuMTM0LTEuMjIyLjQwMy0uMjkyLjI2OC0uNDM4LjY0NC0uNDM4IDEuMTI4VjI0aC0xLjYzOHYtNi4wMDVoMS4yNGwuMjQyIDEuMDFoLjA4Yy4xODctLjMzNy40MzktLjYwOC43NTYtLjgxNGExLjg2IDEuODYgMCAwIDEgMS4wMzQtLjMwOXptNC4wMjkgMS4xNjZjLS4zNDcgMC0uNjIuMTEtLjgxNy4zMy0uMTk3LjIyLS4zMS41MzMtLjMzOC45MzdoMi4yOTljLS4wMDctLjQwNC0uMTEzLS43MTctLjMxNy0uOTM3LS4yMDQtLjIyLS40OC0uMzMtLjgyNy0uMzN6bS4yMyA1LjA2Yy0uOTY2IDAtMS43MjItLjI2Ny0yLjI2Ni0uOC0uNTQ0LS41MzQtLjgxNi0xLjI5LS44MTYtMi4yNjcgMC0xLjAwNy4yNTEtMS43ODUuNzU0LTIuMzM0LjUwNC0uNTUgMS4yLS44MjUgMi4wODctLjgyNS44NDkgMCAxLjUxLjI0MiAxLjk4Mi43MjUuNDczLjQ4NC43MDkgMS4xNTIuNzA5IDIuMDA0di43OTVoLTMuODczYy4wMTguNDY1LjE1Ni44MjkuNDE0IDEuMDkuMjU4LjI2MS42Mi4zOTIgMS4wODUuMzkyLjM2MiAwIC43MDQtLjAzNyAxLjAyNi0uMTEzYTUuMTMzIDUuMTMzIDAgMCAwIDEuMDEtLjM2djEuMjY4Yy0uMjg3LjE0My0uNTkzLjI1LS45MTkuMzJhNS43OSA1Ljc5IDAgMCAxLTEuMTkyLjEwNHptNS44MDMgMGMtLjcwNiAwLTEuMjYtLjI3NS0xLjY2My0uODIyLS40MDMtLjU0OC0uNjA0LTEuMzA3LS42MDQtMi4yNzggMC0uOTg0LjIwNS0xLjc1Mi42MTUtMi4zMDEuNDEtLjU1Ljk3NS0uODI1IDEuNjk1LS44MjUuNzU1IDAgMS4zMzIuMjk0IDEuNzI5Ljg4MWguMDU0YTYuNjk3IDYuNjk3IDAgMCAxLS4xMjQtMS4xOTh2LTEuOTIyaDEuNjQ0VjI0SDQ2LjQzbC0uMzE3LS43NzloLS4wN2MtLjM3Mi41OTEtLjk0Ljg4Ni0xLjcwMi44ODZ6bS41NzQtMS4zMDZjLjQyIDAgLjcyNi0uMTIxLjkyMS0uMzY1LjE5Ni0uMjQzLjMwMi0uNjU3LjMyLTEuMjR2LS4xNzhjMC0uNjQ0LS4xLTEuMTA2LS4yOTgtMS4zODYtLjE5OS0uMjc5LS41MjItLjQxOS0uOTctLjQxOWEuOTYyLjk2MiAwIDAgMC0uODUuNDY1Yy0uMjAzLjMxLS4zMDQuNzYtLjMwNCAxLjM1IDAgLjU5Mi4xMDIgMS4wMzUuMzA2IDEuMzMuMjA0LjI5Ni40OTYuNDQzLjg3NS40NDN6bTEwLjkyMi00LjkyYy43MDkgMCAxLjI2NC4yNzcgMS42NjUuODMuNC41NTMuNjAxIDEuMzEyLjYwMSAyLjI3NSAwIC45OTItLjIwNiAxLjc2LS42MiAyLjMwNC0uNDE0LjU0NC0uOTc3LjgxNi0xLjY5LjgxNi0uNzA1IDAtMS4yNTgtLjI1Ni0xLjY1OS0uNzY4aC0uMTEzbC0uMjc0LjY2MWgtMS4yNTF2LTguMzU3aDEuNjM4djEuOTQ0YzAgLjI0Ny0uMDIxLjY0My0uMDY0IDEuMTg3aC4wNjRjLjM4My0uNTk0Ljk1LS44OTIgMS43MDMtLjg5MnptLS41MjcgMS4zMWMtLjQwNCAwLS43LjEyNS0uODg2LjM3NC0uMTg2LjI0OS0uMjgzLjY2LS4yOSAxLjIzM3YuMTc3YzAgLjY0NS4wOTYgMS4xMDcuMjg3IDEuMzg2LjE5Mi4yOC40OTUuNDE5LjkxLjQxOS4zMzcgMCAuNjA1LS4xNTUuODA0LS40NjUuMTk5LS4zMS4yOTgtLjc2LjI5OC0xLjM1IDAtLjU5MS0uMS0xLjAzNS0uMy0xLjMzYS45NDMuOTQzIDAgMCAwLS44MjMtLjQ0M3ptMy4xODYtMS4xOTdoMS43OTRsMS4xMzQgMy4zNzljLjA5Ni4yOTMuMTYzLjY0LjE5OCAxLjA0MmguMDMzYy4wMzktLjM3LjExNi0uNzE3LjIzLTEuMDQybDEuMTEyLTMuMzc5aDEuNzU3bC0yLjU0IDYuNzczYy0uMjM0LjYyNy0uNTY2IDEuMDk2LS45OTcgMS40MDctLjQzMi4zMTItLjkzNi40NjgtMS41MTIuNDY4LS4yODMgMC0uNTYtLjAzLS44MzMtLjA5MnYtMS4zYTIuOCAyLjggMCAwIDAgLjY0NS4wN2MuMjkgMCAuNTQzLS4wODguNzYtLjI2Ni4yMTctLjE3Ny4zODYtLjQ0NC41MDgtLjgwM2wuMDk2LS4yOTUtMi4zODUtNS45NjJ6Ii8+CiAgICAgICAgPGcgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoNzMpIj4KICAgICAgICAgICAgPGNpcmNsZSBjeD0iMTkiIGN5PSIxOSIgcj0iMTkiIGZpbGw9IiNFMEUwRTAiLz4KICAgICAgICAgICAgPHBhdGggZmlsbD0iI0ZGRiIgZD0iTTIyLjQ3NCAxNS40NDNoNS4xNjJMMTIuNDM2IDMwLjRWMTAuMzYzaDE1LjJsLTUuMTYyIDUuMDh6Ii8+CiAgICAgICAgPC9nPgogICAgICAgIDxwYXRoIGZpbGw9IiNEMkQyRDIiIGQ9Ik0xMjEuNTQ0IDE0LjU2di0xLjcyOGg4LjI3MnYxLjcyOGgtMy4wMjRWMjRoLTIuMjR2LTkuNDRoLTMuMDA4em0xMy43NDQgOS41NjhjLTEuMjkgMC0yLjM0MS0uNDE5LTMuMTUyLTEuMjU2LS44MS0uODM3LTEuMjE2LTEuOTQ0LTEuMjE2LTMuMzJzLjQwOC0yLjQ3NyAxLjIyNC0zLjMwNGMuODE2LS44MjcgMS44NzItMS4yNCAzLjE2OC0xLjI0czIuMzYuNDAzIDMuMTkyIDEuMjA4Yy44MzIuODA1IDEuMjQ4IDEuODggMS4yNDggMy4yMjQgMCAuMzEtLjAyMS41OTctLjA2NC44NjRoLTYuNDY0Yy4wNTMuNTc2LjI2NyAxLjA0LjY0IDEuMzkyLjM3My4zNTIuODQ4LjUyOCAxLjQyNC41MjguNzc5IDAgMS4zNTUtLjMyIDEuNzI4LS45NmgyLjQzMmEzLjg5MSAzLjg5MSAwIDAgMS0xLjQ4OCAyLjA2NGMtLjczNi41MzMtMS42MjcuOC0yLjY3Mi44em0xLjQ4LTYuNjg4Yy0uNC0uMzUyLS44ODMtLjUyOC0xLjQ0OC0uNTI4cy0xLjAzNy4xNzYtMS40MTYuNTI4Yy0uMzc5LjM1Mi0uNjA1LjgyMS0uNjggMS40MDhoNC4xOTJjLS4wMzItLjU4Ny0uMjQ4LTEuMDU2LS42NDgtMS40MDh6bTcuMDE2LTIuMzA0djEuNTY4Yy41OTctMS4xMyAxLjQ2MS0xLjY5NiAyLjU5Mi0xLjY5NnYyLjMwNGgtLjU2Yy0uNjcyIDAtMS4xNzkuMTY4LTEuNTIuNTA0LS4zNDEuMzM2LS41MTIuOTE1LS41MTIgMS43MzZWMjRoLTIuMjU2di04Ljg2NGgyLjI1NnptNi40NDggMHYxLjMyOGMuNTY1LS45NyAxLjQ4My0xLjQ1NiAyLjc1Mi0xLjQ1Ni42NzIgMCAxLjI3Mi4xNTUgMS44LjQ2NC41MjguMzEuOTM2Ljc1MiAxLjIyNCAxLjMyOC4zMS0uNTU1LjczMy0uOTkyIDEuMjcyLTEuMzEyYTMuNDg4IDMuNDg4IDAgMCAxIDEuODE2LS40OGMxLjA1NiAwIDEuOTA3LjMzIDIuNTUyLjk5Mi42NDUuNjYxLjk2OCAxLjU5Ljk2OCAyLjc4NFYyNGgtMi4yNHYtNC44OTZjMC0uNjkzLS4xNzYtMS4yMjQtLjUyOC0xLjU5Mi0uMzUyLS4zNjgtLjgzMi0uNTUyLTEuNDQtLjU1MnMtMS4wOS4xODQtMS40NDguNTUyYy0uMzU3LjM2OC0uNTM2Ljg5OS0uNTM2IDEuNTkyVjI0aC0yLjI0di00Ljg5NmMwLS42OTMtLjE3Ni0xLjIyNC0uNTI4LTEuNTkyLS4zNTItLjM2OC0uODMyLS41NTItMS40NC0uNTUycy0xLjA5LjE4NC0xLjQ0OC41NTJjLS4zNTcuMzY4LS41MzYuODk5LS41MzYgMS41OTJWMjRoLTIuMjU2di04Ljg2NGgyLjI1NnpNMTY0LjkzNiAyNFYxMi4xNmgyLjI1NlYyNGgtMi4yNTZ6bTcuMDQtLjE2bC0zLjQ3Mi04LjcwNGgyLjUyOGwyLjI1NiA2LjMwNCAyLjM4NC02LjMwNGgyLjM1MmwtNS41MzYgMTMuMDU2aC0yLjM1MmwxLjg0LTQuMzUyeiIvPgogICAgPC9nPgo8L3N2Zz4K) center no-repeat;"></span>

        <div data-custom-class="body">
            <div><strong><span style="font-size: 26px;"><span data-custom-class="title">
                            <bdt class="block-component"></bdt>
                            <bdt class="question">PRIVACY POLICY</bdt>
                            <bdt class="statement-end-if-in-editor"></bdt>
                        </span></span></strong></div>
            <div><br></div>
            <div><span style="color: rgb(127, 127, 127);"><strong><span style="font-size: 15px;"><span data-custom-class="subtitle">Last updated <bdt class="question">December 03, 2024</bdt></span></span></strong></span></div>
            <div><br></div>
            <div><br></div>
            <div><br></div>
            <div style="line-height: 1.5;"><span style="color: rgb(127, 127, 127);"><span style="color: rgb(89, 89, 89); font-size: 15px;"><span data-custom-class="body_text">This Privacy Notice for <bdt class="question">I-Bear True Solutions Inc.<bdt class="block-component"></bdt> (doing business as <bdt class="question">iBTS Inc</bdt>)<bdt class="statement-end-if-in-editor"></bdt>
                            </bdt> (<bdt class="block-component"></bdt>"<strong>we</strong>," "<strong>us</strong>," or "<strong>our</strong>"<bdt class="statement-end-if-in-editor"></bdt></span><span data-custom-class="body_text">), describes how and why we might access, collect, store, use, and/or share (<bdt class="block-component"></bdt>"<strong>process</strong>"<bdt class="statement-end-if-in-editor"></bdt>) your personal information when you use our services (<bdt class="block-component"></bdt>"<strong>Services</strong>"<bdt class="statement-end-if-in-editor"></bdt>), including when you:</span></span></span><span style="font-size: 15px;"><span style="color: rgb(127, 127, 127);"><span data-custom-class="body_text"><span style="color: rgb(89, 89, 89);"><span data-custom-class="body_text">
                                    <bdt class="block-component"></bdt>
                                </span></span></span></span></span></div>
            <ul>
                <li data-custom-class="body_text" style="line-height: 1.5;"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span data-custom-class="body_text">Visit our website<bdt class="block-component"></bdt> at <span style="color: rgb(0, 58, 250);">
                                    <bdt class="question"><a href="https://recruitmint-ibts-af4a82961ea9.herokuapp.com" target="_blank" data-custom-class="link">https://recruitmint-ibts-af4a82961ea9.herokuapp.com</a></bdt>
                                </span><span style="font-size: 15px;"><span style="color: rgb(89, 89, 89);"><span data-custom-class="body_text"><span style="font-size: 15px;"><span style="color: rgb(89, 89, 89);">
                                                    <bdt class="statement-end-if-in-editor">, or any website of ours that links to this Privacy Notice</bdt>
                                                </span></span></span></span></span></span></span></span></li>
            </ul>
            <div>
                <bdt class="block-component"><span style="font-size: 15px;"><span style="font-size: 15px;"><span style="color: rgb(127, 127, 127);"><span data-custom-class="body_text"><span style="color: rgb(89, 89, 89);"><span data-custom-class="body_text">
                                            <bdt class="block-component"></bdt>
                </bdt></span></span></span></span></span></span></span></span></li>
                </ul>
                <div style="line-height: 1.5;">
                    <bdt class="block-component"><span style="font-size: 15px;"></span></bdt>
                    </li>
                    </ul>
                    <div style="line-height: 1.5;"><span style="font-size: 15px;"><span style="color: rgb(127, 127, 127);"><span data-custom-class="body_text"><span style="color: rgb(89, 89, 89);"><span data-custom-class="body_text">
                                            <bdt class="block-component"></bdt>
                                        </span></span></span></span></span></div>
                    <ul>
                        <li data-custom-class="body_text" style="line-height: 1.5;"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span data-custom-class="body_text">Engage with us in other related ways, including any sales, marketing, or events<span style="font-size: 15px;"><span style="color: rgb(89, 89, 89);"><span data-custom-class="body_text"><span style="font-size: 15px;"><span style="color: rgb(89, 89, 89);">
                                                            <bdt class="statement-end-if-in-editor"></bdt>
                                                        </span></span></span></span></span></span></span></span></li>
                    </ul>
                    <div style="line-height: 1.5;"><span style="font-size: 15px;"><span style="color: rgb(127, 127, 127);"><span data-custom-class="body_text"><strong>Questions or concerns? </strong>Reading this Privacy Notice will help you understand your privacy rights and choices. We are responsible for making decisions about how your personal information is processed. If you do not agree with our policies and practices, please do not use our Services.<bdt class="block-component"></span></span></span></div>
                    <div style="line-height: 1.5;"><br></div>
                    <div style="line-height: 1.5;"><br></div>
                    <div style="line-height: 1.5;"><strong><span style="font-size: 15px;"><span data-custom-class="heading_1">SUMMARY OF KEY POINTS</span></span></strong></div>
                    <div style="line-height: 1.5;"><br></div>
                    <div style="line-height: 1.5;"><span style="font-size: 15px;"><span data-custom-class="body_text"><strong><em>This summary provides key points from our Privacy Notice, but you can find out more details about any of these topics by clicking the link following each key point or by using our </em></strong></span></span><a data-custom-class="link" href="#toc"><span style="color: rgb(0, 58, 250); font-size: 15px;"><span data-custom-class="body_text"><strong><em>table of contents</em></strong></span></span></a><span style="font-size: 15px;"><span data-custom-class="body_text"><strong><em> below to find the section you are looking for.</em></strong></span></span></div>
                    <div style="line-height: 1.5;"><br></div>
                    <div style="line-height: 1.5;"><span style="font-size: 15px;"><span data-custom-class="body_text"><strong>What personal information do we process?</strong> When you visit, use, or navigate our Services, we may process personal information depending on how you interact with us and the Services, the choices you make, and the products and features you use. Learn more about </span></span><a data-custom-class="link" href="#personalinfo"><span style="color: rgb(0, 58, 250); font-size: 15px;"><span data-custom-class="body_text">personal information you disclose to us</span></span></a><span data-custom-class="body_text">.</span></div>
                    <div style="line-height: 1.5;"><br></div>
                    <div style="line-height: 1.5;"><span style="font-size: 15px;"><span data-custom-class="body_text"><strong>Do we process any sensitive personal information? </strong>Some of the information may be considered <bdt class="block-component"></bdt>"special" or "sensitive"<bdt class="statement-end-if-in-editor"></bdt> in certain jurisdictions, for example your racial or ethnic origins, sexual orientation, and religious beliefs. <bdt class="block-component"></bdt>We do not process sensitive personal information.<bdt class="else-block"></bdt></span></span></div>
                    <div style="line-height: 1.5;"><br></div>
                    <div style="line-height: 1.5;"><span style="font-size: 15px;"><span data-custom-class="body_text"><strong>Do we collect any information from third parties?</strong>
                                <bdt class="block-component"></bdt>We do not collect any information from third parties.<bdt class="else-block"></bdt>
                            </span></span></div>
                    <div style="line-height: 1.5;"><br></div>
                    <div style="line-height: 1.5;"><span style="font-size: 15px;"><span data-custom-class="body_text"><strong>How do we process your information?</strong> We process your information to provide, improve, and administer our Services, communicate with you, for security and fraud prevention, and to comply with law. We may also process your information for other purposes with your consent. We process your information only when we have a valid legal reason to do so. Learn more about </span></span><a data-custom-class="link" href="#infouse"><span style="color: rgb(0, 58, 250); font-size: 15px;"><span data-custom-class="body_text">how we process your information</span></span></a><span data-custom-class="body_text">.</span></div>
                    <div style="line-height: 1.5;"><br></div>
                    <div style="line-height: 1.5;"><span style="font-size: 15px;"><span data-custom-class="body_text"><strong>In what situations and with which <bdt class="block-component"></bdt>parties do we share personal information?</strong> We may share information in specific situations and with specific <bdt class="block-component"></bdt>third parties. Learn more about </span></span><a data-custom-class="link" href="#whoshare"><span style="color: rgb(0, 58, 250); font-size: 15px;"><span data-custom-class="body_text">when and with whom we share your personal information</span></span></a><span style="font-size: 15px;"><span data-custom-class="body_text">.<bdt class="block-component"></bdt></span></span></div>
                    <div style="line-height: 1.5;"><br></div>
                    <div style="line-height: 1.5;"><span style="font-size: 15px;"><span data-custom-class="body_text"><strong>How do we keep your information safe?</strong> We have adequate <bdt class="block-component"></bdt>organizational<bdt class="statement-end-if-in-editor"></bdt> and technical processes and procedures in place to protect your personal information. However, no electronic transmission over the internet or information storage technology can be guaranteed to be 100% secure, so we cannot promise or guarantee that hackers, cybercriminals, or other <bdt class="block-component"></bdt>unauthorized<bdt class="statement-end-if-in-editor"></bdt> third parties will not be able to defeat our security and improperly collect, access, steal, or modify your information. Learn more about </span></span><a data-custom-class="link" href="#infosafe"><span style="color: rgb(0, 58, 250); font-size: 15px;"><span data-custom-class="body_text">how we keep your information safe</span></span></a><span data-custom-class="body_text">.</span><span style="font-size: 15px;"><span data-custom-class="body_text">
                                <bdt class="statement-end-if-in-editor"></bdt>
                            </span></span></div>
                    <div style="line-height: 1.5;"><br></div>
                    <div style="line-height: 1.5;"><span style="font-size: 15px;"><span data-custom-class="body_text"><strong>What are your rights?</strong> Depending on where you are located geographically, the applicable privacy law may mean you have certain rights regarding your personal information. Learn more about </span></span><a data-custom-class="link" href="#privacyrights"><span style="color: rgb(0, 58, 250); font-size: 15px;"><span data-custom-class="body_text">your privacy rights</span></span></a><span data-custom-class="body_text">.</span></div>
                    <div style="line-height: 1.5;"><br></div>
                    <div style="line-height: 1.5;"><span style="font-size: 15px;"><span data-custom-class="body_text"><strong>How do you exercise your rights?</strong> The easiest way to exercise your rights is by <bdt class="block-component"></bdt>visiting <span style="color: rgb(0, 58, 250);">
                                    <bdt class="question">__________</bdt>
                                </span>
                                <bdt class="else-block"></bdt>, or by contacting us. We will consider and act upon any request in accordance with applicable data protection laws.
                            </span></span></div>
                    <div style="line-height: 1.5;"><br></div>
                    <div style="line-height: 1.5;"><span style="font-size: 15px;"><span data-custom-class="body_text">Want to learn more about what we do with any information we collect? </span></span><a data-custom-class="link" href="#toc"><span style="color: rgb(0, 58, 250); font-size: 15px;"><span data-custom-class="body_text">Review the Privacy Notice in full</span></span></a><span style="font-size: 15px;"><span data-custom-class="body_text">.</span></span></div>
                    <div style="line-height: 1.5;"><br></div>
                    <div style="line-height: 1.5;"><br></div>
                    <div id="toc" style="line-height: 1.5;"><span style="font-size: 15px;"><span style="color: rgb(127, 127, 127);"><span style="color: rgb(0, 0, 0);"><strong><span data-custom-class="heading_1">TABLE OF CONTENTS</span></strong></span></span></span></div>
                    <div style="line-height: 1.5;"><br></div>
                    <div style="line-height: 1.5;"><span style="font-size: 15px;"><a data-custom-class="link" href="#infocollect"><span style="color: rgb(0, 58, 250);">1. WHAT INFORMATION DO WE COLLECT?</span></a></span></div>
                    <div style="line-height: 1.5;"><span style="font-size: 15px;"><a data-custom-class="link" href="#infouse"><span style="color: rgb(0, 58, 250);">2. HOW DO WE PROCESS YOUR INFORMATION?<bdt class="block-component"></bdt></span></a></span></div>
                    <div style="line-height: 1.5;"><span style="font-size: 15px;"><span style="color: rgb(0, 58, 250);"><a data-custom-class="link" href="#whoshare">3. WHEN AND WITH WHOM DO WE SHARE YOUR PERSONAL INFORMATION?</a></span><span data-custom-class="body_text">
                                <bdt class="block-component"></bdt></a><span style="color: rgb(127, 127, 127);"><span style="color: rgb(89, 89, 89);"><span data-custom-class="body_text"><span style="color: rgb(89, 89, 89);">
                                                <bdt class="block-component"></bdt>
                                            </span></span></span></span>
                                <bdt class="block-component"></bdt>
                            </span></div>
                    <div style="line-height: 1.5;"><a data-custom-class="link" href="#ai"><span style="color: rgb (0, 58, 250);">4. DO WE OFFER ARTIFICIAL INTELLIGENCE-BASED PRODUCTS?</span></a><span style="font-size: 15px;">
                            <bdt class="statement-end-if-in-editor"></bdt>
                        </span></div>
                    <div style="line-height: 1.5;"><span style="font-size: 15px;"><span style="color: rgb(127, 127, 127);"><span style="color: rgb(89, 89, 89);"><span data-custom-class="body_text"><span style="color: rgb(89, 89, 89);"><span style="color: rgb(89, 89, 89);"><span style="color: rgb(89, 89, 89);">
                                                    <bdt class="block-component"></bdt>
                                                </span></span>
                                            <bdt class="block-component"></bdt>
                                        </span></span></span></span></span></div>
                    <div style="line-height: 1.5;"><span style="font-size: 15px;"><a data-custom-class="link" href="#inforetain"><span style="color: rgb(0, 58, 250);">5. HOW LONG DO WE KEEP YOUR INFORMATION?</span></a><span style="color: rgb(127, 127, 127);"><span style="color: rgb(89, 89, 89);"><span data-custom-class="body_text"><span style="color: rgb(89, 89, 89);"><span style="color: rgb(89, 89, 89);">
                                                <bdt class="block-component"></bdt>
                                            </span></span></span></span></span></span></div>
                    <div style="line-height: 1.5;"><span style="font-size: 15px;"><a data-custom-class="link" href="#infosafe"><span style="color: rgb(0, 58, 250);">6. HOW DO WE KEEP YOUR INFORMATION SAFE?</span></a><span style="color: rgb(127, 127, 127);"><span style="color: rgb(89, 89, 89);"><span data-custom-class="body_text"><span style="color: rgb(89, 89, 89);">
                                            <bdt class="statement-end-if-in-editor"></bdt>
                                            <bdt class="block-component"></bdt>
                                        </span></span></span></span></span></div>
                    <div style="line-height: 1.5;"><span style="font-size: 15px;"><a data-custom-class="link" href="#infominors"><span style="color: rgb(0, 58, 250);">7. DO WE COLLECT INFORMATION FROM MINORS?</span></a><span style="color: rgb(127, 127, 127);"><span style="color: rgb(89, 89, 89);"><span data-custom-class="body_text"><span style="color: rgb(89, 89, 89);">
                                            <bdt class="statement-end-if-in-editor"></bdt>
                                        </span></span></span></span></span></div>
                    <div style="line-height: 1.5;"><span style="font-size: 15px;"><span style="color: rgb(0, 58, 250);"><a data-custom-class="link" href="#privacyrights">8. WHAT ARE YOUR PRIVACY RIGHTS?</a></span></span></div>
                    <div style="line-height: 1.5;"><span style="font-size: 15px;"><a data-custom-class="link" href="#DNT"><span style="color: rgb(0, 58, 250);">9. CONTROLS FOR DO-NOT-TRACK FEATURES<bdt class="block-component"></span>
                                <bdt class="block-component"><span style="font-size: 15px;"><span data-custom-class="body_text"></span></bdt></span></div>
                    <div style="line-height: 1.5;">
                        <bdt class="block-component"><span style="font-size: 15px;"></bdt>
                        <bdt class="block-component"></bdt>
                        <bdt class="block-component"></bdt>
                        <bdt class="block-component"></bdt>
                        <bdt class="block-component"></bdt>
                        <bdt class="block-component"></bdt>
                        <bdt class="block-component"></bdt>
                        <bdt class="block-component"></bdt>
                        <bdt class="block-component"></bdt>
                        <bdt class="block-component"></span></bdt>
                    </div>
                    <div style="line-height: 1.5;"><span style="font-size: 15px;"><a data-custom-class="link" href="#policyupdates"><span style="color: rgb(0, 58, 250);">10. DO WE MAKE UPDATES TO THIS NOTICE?</span></a></span></div>
                    <div style="line-height: 1.5;"><a data-custom-class="link" href="#contact"><span style="color: rgb(0, 58, 250); font-size: 15px;">11. HOW CAN YOU CONTACT US ABOUT THIS NOTICE?</span></a></div>
                    <div style="line-height: 1.5;"><a data-custom-class="link" href="#request"><span style="color: rgb(0, 58, 250);">12. HOW CAN YOU REVIEW, UPDATE, OR DELETE THE DATA WE COLLECT FROM YOU?</span></a></div>
                    <div style="line-height: 1.5;"><br></div>
                    <div style="line-height: 1.5;"><br></div>
                    <div id="infocollect" style="line-height: 1.5;"><span style="color: rgb(0, 0, 0);"><span style="color: rgb(0, 0, 0); font-size: 15px;"><span style="font-size: 15px; color: rgb(0, 0, 0);"><span style="font-size: 15px; color: rgb(0, 0, 0);"><span id="control" style="color: rgb(0, 0, 0);"><strong><span data-custom-class="heading_1">1. WHAT INFORMATION DO WE COLLECT?</span></strong></span></span></span></span></span></div>
                    <div style="line-height: 1.5;"><br></div>
                    <div id="personalinfo" style="line-height: 1.5;"><span data-custom-class="heading_2" style="color: rgb(0, 0, 0);"><span style="font-size: 15px;"><strong>Personal information you disclose to us</strong></span></span></div>
                    <div>
                        <div><br></div>
                        <div style="line-height: 1.5;"><span style="color: rgb(127, 127, 127);"><span style="color: rgb(89, 89, 89); font-size: 15px;"><span data-custom-class="body_text"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span data-custom-class="body_text"><strong><em>In Short:</em></strong></span></span></span></span><span data-custom-class="body_text"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span data-custom-class="body_text"><strong><em> </em></strong><em>We collect personal information that you provide to us.</em></span></span></span></span></span></span></div>
                    </div>
                    <div style="line-height: 1.5;"><br></div>
                    <div style="line-height: 1.5;"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span data-custom-class="body_text">We collect personal information that you voluntarily provide to us when you <span style="font-size: 15px;">
                                        <bdt class="block-component"></bdt>
                                    </span>register on the Services, </span><span style="font-size: 15px;"><span data-custom-class="body_text"><span style="font-size: 15px;">
                                            <bdt class="statement-end-if-in-editor"></bdt>
                                        </span></span><span data-custom-class="body_text">express an interest in obtaining information about us or our products and Services, when you participate in activities on the Services, or otherwise when you contact us.</span></span></span></span></div>
                    <div style="line-height: 1.5;"><br></div>
                    <div style="line-height: 1.5;"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span data-custom-class="body_text"><span style="font-size: 15px;">
                                        <bdt class="block-component"></bdt>
                                    </span></span></span></span></div>
                    <div style="line-height: 1.5;"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span data-custom-class="body_text"><strong>Personal Information Provided by You.</strong> The personal information that we collect depends on the context of your interactions with us and the Services, the choices you make, and the products and features you use. The personal information we collect may include the following:<span style="font-size: 15px;"><span data-custom-class="body_text">
                                            <bdt class="forloop-component"></bdt>
                                        </span></span></span></span></span></div>
                    <ul>
                        <li data-custom-class="body_text" style="line-height: 1.5;"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span data-custom-class="body_text"><span style="font-size: 15px;"><span data-custom-class="body_text">
                                                <bdt class="question">names</bdt>
                                            </span></span></span></span></span></li>
                    </ul>
                    <div style="line-height: 1.5;"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span data-custom-class="body_text"><span style="font-size: 15px;"><span data-custom-class="body_text">
                                            <bdt class="forloop-component"></bdt>
                                        </span></span></span></span></span></div>
                    <ul>
                        <li data-custom-class="body_text" style="line-height: 1.5;"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span data-custom-class="body_text"><span style="font-size: 15px;"><span data-custom-class="body_text">
                                                <bdt class="question">phone numbers</bdt>
                                            </span></span></span></span></span></li>
                    </ul>
                    <div style="line-height: 1.5;"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span data-custom-class="body_text"><span style="font-size: 15px;"><span data-custom-class="body_text">
                                            <bdt class="forloop-component"></bdt>
                                        </span></span></span></span></span></div>
                    <ul>
                        <li data-custom-class="body_text" style="line-height: 1.5;"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span data-custom-class="body_text"><span style="font-size: 15px;"><span data-custom-class="body_text">
                                                <bdt class="question">email addresses</bdt>
                                            </span></span></span></span></span></li>
                    </ul>
                    <div style="line-height: 1.5;"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span data-custom-class="body_text"><span style="font-size: 15px;"><span data-custom-class="body_text">
                                            <bdt class="forloop-component"></bdt>
                                        </span></span></span></span></span></div>
                    <ul>
                        <li data-custom-class="body_text" style="line-height: 1.5;"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span data-custom-class="body_text"><span style="font-size: 15px;"><span data-custom-class="body_text">
                                                <bdt class="question">usernames</bdt>
                                            </span></span></span></span></span></li>
                    </ul>
                    <div style="line-height: 1.5;"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span data-custom-class="body_text"><span style="font-size: 15px;"><span data-custom-class="body_text">
                                            <bdt class="forloop-component"></bdt>
                                        </span></span></span></span></span></div>
                    <ul>
                        <li data-custom-class="body_text" style="line-height: 1.5;"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span data-custom-class="body_text"><span style="font-size: 15px;"><span data-custom-class="body_text">
                                                <bdt class="question">passwords</bdt>
                                            </span></span></span></span></span></li>
                    </ul>
                    <div style="line-height: 1.5;"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span data-custom-class="body_text"><span style="font-size: 15px;"><span data-custom-class="body_text">
                                            <bdt class="forloop-component"></bdt>
                                        </span><span data-custom-class="body_text">
                                            <bdt class="statement-end-if-in-editor"></bdt>
                                        </span></span></span></span></span></div>
                    <div id="sensitiveinfo" style="line-height: 1.5;"><span style="font-size: 15px;"><span data-custom-class="body_text"><strong>Sensitive Information.</strong>
                                <bdt class="block-component"></bdt>We do not process sensitive information.
                            </span></span></div>
                    <div style="line-height: 1.5;"><br></div>
                    <div style="line-height: 1.5;"><span style="font-size: 15px;"><span data-custom-class="body_text">
                                <bdt class="else-block"></bdt>
                            </span></span><span style="font-size: 15px; color: rgb(89, 89, 89);"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span data-custom-class="body_text"><span style="font-size: 15px;"><span data-custom-class="body_text">
                                            <bdt class="block-component">
                                                <bdt class="block-component"></bdt>
                                            </bdt>
                                        </span></span></span></span>
                            <bdt class="block-component">
                        </span></span></bdt>
                    </div>
                    <div style="line-height: 1.5;"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span data-custom-class="body_text">All personal information that you provide to us must be true, complete, and accurate, and you must notify us of any changes to such personal information.</span></span></span></div>
                    <div style="line-height: 1.5;"><br></div>
                    <div style="line-height: 1.5;"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span data-custom-class="body_text">
                                    <bdt class="block-component"></bdt>
                                    </bdt>
                                </span></span></span>
                        <bdt class="block-component"><span style="font-size: 15px;"></span></bdt><span style="font-size: 15px; color: rgb(89, 89, 89);"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span data-custom-class="body_text"><span style="color: rgb(89, 89, 89); font-size: 15px;"><span data-custom-class="body_text"><span style="color: rgb(89, 89, 89); font-size: 15px;"><span data-custom-class="body_text">
                                                    <bdt class="statement-end-if-in-editor">
                                                        <bdt class="block-component"></bdt>
                                                    </bdt>
                                                </span></span></span></span></bdt></span></span></span></span></span></span></span></span><span style="font-size: 15px;"><span data-custom-class="body_text">
                                <bdt class="block-component"></bdt>
                            </span></span>
                    </div>
                    <div style="line-height: 1.5;"><br></div>
                    <div id="infouse" style="line-height: 1.5;"><span style="color: rgb(127, 127, 127);"><span style="color: rgb(89, 89, 89); font-size: 15px;"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span id="control" style="color: rgb(0, 0, 0);"><strong><span data-custom-class="heading_1">2. HOW DO WE PROCESS YOUR INFORMATION?</span></strong></span></span></span></span></span></div>
                    <div>
                        <div style="line-height: 1.5;"><br></div>
                        <div style="line-height: 1.5;"><span style="color: rgb(127, 127, 127);"><span style="color: rgb(89, 89, 89); font-size: 15px;"><span data-custom-class="body_text"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span data-custom-class="body_text"><strong><em>In Short: </em></strong><em>We process your information to provide, improve, and administer our Services, communicate with you, for security and fraud prevention, and to comply with law. We may also process your information for other purposes with your consent.</em></span></span></span></span></span></span></div>
                    </div>
                    <div style="line-height: 1.5;"><br></div>
                    <div style="line-height: 1.5;"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span data-custom-class="body_text"><strong>We process your personal information for a variety of reasons, depending on how you interact with our Services, including:</strong>
                                    <bdt class="block-component"></bdt>
                                </span></span></span></div>
                    <ul>
                        <li data-custom-class="body_text" style="line-height: 1.5;"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span data-custom-class="body_text"><strong>To facilitate account creation and authentication and otherwise manage user accounts. </strong>We may process your information so you can create and log in to your account, as well as keep your account in working order.<span style="font-size: 15px; color: rgb(89, 89, 89);"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span data-custom-class="body_text"><span style="font-size: 15px;"><span style="color: rgb(89, 89, 89);"><span data-custom-class="body_text"><span style="font-size: 15px;"><span style="color: rgb(89, 89, 89);"><span data-custom-class="body_text">
                                                                            <bdt class="statement-end-if-in-editor"></bdt>
                                                                        </span></span></span></span></span></span></span></span></span></span></span></span></li>
                    </ul>
                    <div style="line-height: 1.5;"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span data-custom-class="body_text">
                                    <bdt class="block-component"></bdt>
                                </span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></li>
                        </ul>
                        <div style="line-height: 1.5;"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span data-custom-class="body_text">
                                        <bdt class="block-component"></bdt>
                                    </span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></li>
                            </ul>
                            <div style="line-height: 1.5;"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span data-custom-class="body_text">
                                            <bdt class="block-component"></bdt>
                                        </span></span></span></span></span></span></span></span></span></span></span></span></li>
                                </ul>
                                <div style="line-height: 1.5;"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span data-custom-class="body_text">
                                                <bdt class="block-component"></bdt>
                                            </span></span></span></li>
                                    </ul>
                                    <div style="line-height: 1.5;">
                                        <bdt class="block-component"><span style="font-size: 15px;"></span></bdt>
                                    </div>
                                    <ul>
                                        <li data-custom-class="body_text" style="line-height: 1.5;"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span data-custom-class="body_text"><strong>To send administrative information to you. </strong>We may process your information to send you details about our products and services, changes to our terms and policies, and other similar information.<span style="font-size: 15px; color: rgb(89, 89, 89);"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span data-custom-class="body_text">
                                                                    <bdt class="statement-end-if-in-editor"></bdt>
                                                                </span></span></span></span></span></span></li>
                                    </ul>
                                    <div style="line-height: 1.5;">
                                        <bdt class="block-component"><span style="font-size: 15px;"></bdt></span></span></span></span></span></span></span></span></span></li>
                                        </ul>
                                        <div style="line-height: 1.5;">
                                            <bdt class="block-component"><span style="font-size: 15px;"></bdt></span></span></span></span></span></span></span></span></span></span></span></span></li>
                                            </ul>
                                            <div style="line-height: 1.5;">
                                                <bdt class="block-component"><span style="font-size: 15px;"><span data-custom-class="body_text"></span></span></bdt>
                                                </li>
                                                </ul>
                                                <p style="font-size: 15px; line-height: 1.5;">
                                                    <bdt class="block-component"><span style="font-size: 15px;"></span></bdt>
                                                </p>
                                                <ul>
                                                    <li data-custom-class="body_text" style="line-height: 1.5;"><span style="font-size: 15px;"><span style="color: rgb(89, 89, 89);"><span style="color: rgb(89, 89, 89);"><span data-custom-class="body_text"><strong>To enable user-to-user communications. </strong>We may process your information if you choose to use any of our offerings that allow for communication with another user.<span style="color: rgb(89, 89, 89);"><span style="color: rgb(89, 89, 89);"><span data-custom-class="body_text"><span style="color: rgb(89, 89, 89);"><span data-custom-class="body_text"><span style="color: rgb(89, 89, 89);"><span data-custom-class="body_text">
                                                                                                    <bdt class="statement-end-if-in-editor"></bdt>
                                                                                                </span></span></span></span></span></span></span></span></span></span></span></li>
                                                </ul>
                                                <p style="font-size: 15px; line-height: 1.5;">
                                                    <bdt class="block-component"><span style="font-size: 15px;"></bdt></span></span></span></span></span></span></span></span></span></span></span></li>
                                                    </ul>
                                                <p style="font-size: 15px; line-height: 1.5;">
                                                    <bdt class="block-component"></bdt>
                                                </p>
                                                <ul>
                                                    <li data-custom-class="body_text" style="line-height: 1.5;"><span style="font-size: 15px;"><span style="color: rgb(89, 89, 89);"><span style="color: rgb(89, 89, 89);"><span data-custom-class="body_text"><strong>To request feedback. </strong>We may process your information when necessary to request feedback and to contact you about your use of our Services.<span style="color: rgb(89, 89, 89);"><span style="color: rgb(89, 89, 89);"><span data-custom-class="body_text"><span style="color: rgb(89, 89, 89);"><span data-custom-class="body_text"><span style="color: rgb(89, 89, 89);"><span data-custom-class="body_text">
                                                                                                    <bdt class="statement-end-if-in-editor"></bdt>
                                                                                                </span></span></span></span></span></span></span></span></span></span></span></li>
                                                </ul>
                                                <p style="font-size: 15px; line-height: 1.5;">
                                                    <bdt class="block-component"></bdt></span></span></span></span></span></span></span></span></span></span></span></li>
                                                    </ul>
                                                <div style="line-height: 1.5;">
                                                    <bdt class="block-component"><span style="font-size: 15px;"><span data-custom-class="body_text"></span></bdt></span></li>
                                                    </ul>
                                                    <div style="line-height: 1.5;">
                                                        <bdt class="block-component"><span style="font-size: 15px;"></bdt></span></span></span></li>
                                                        </ul>
                                                        <div style="line-height: 1.5;">
                                                            <bdt class="block-component"><span style="font-size: 15px;"></bdt></span></span></span></li>
                                                            </ul>
                                                            <div style="line-height: 1.5;"><span style="font-size: 15px;">
                                                                    <bdt class="block-component"><span data-custom-class="body_text"></bdt>
                                                                </span></span></li>
                                                                </ul>
                                                                <div style="line-height: 1.5;">
                                                                    <bdt class="block-component"><span style="font-size: 15px;"><span data-custom-class="body_text"></bdt></span></span></li>
                                                                    </ul>
                                                                    <div style="line-height: 1.5;">
                                                                        <bdt class="block-component"><span style="font-size: 15px;"><span data-custom-class="body_text"></span></span></bdt>
                                                                    </div>
                                                                    <ul>
                                                                        <li data-custom-class="body_text" style="line-height: 1.5;"><span data-custom-class="body_text"><span style="font-size: 15px;"><strong>To protect our Services.</strong> We may process your information as part of our efforts to keep our Services safe and secure, including fraud monitoring and prevention.</span></span>
                                                                            <bdt class="statement-end-if-in-editor"><span style="font-size: 15px;"><span data-custom-class="body_text"></span></span></bdt>
                                                                        </li>
                                                                    </ul>
                                                                    <div style="line-height: 1.5;">
                                                                        <bdt class="block-component"><span style="font-size: 15px;"><span data-custom-class="body_text"></span></span></bdt>
                                                                        </li>
                                                                        </ul>
                                                                        <div style="line-height: 1.5;">
                                                                            <bdt class="block-component"><span style="font-size: 15px;"><span data-custom-class="body_text"></span></span></bdt>
                                                                            </li>
                                                                            </ul>
                                                                            <div style="line-height: 1.5;">
                                                                                <bdt class="block-component"><span style="font-size: 15px;"><span data-custom-class="body_text"></span></span></bdt>
                                                                            </div>
                                                                            <ul>
                                                                                <li data-custom-class="body_text" style="line-height: 1.5;"><span data-custom-class="body_text"><span style="font-size: 15px;"><strong>To evaluate and improve our Services, products, marketing, and your experience.</strong> We may process your information when we believe it is necessary to identify usage trends, determine the effectiveness of our promotional campaigns, and to evaluate and improve our Services, products, marketing, and your experience.</span></span>
                                                                                    <bdt class="statement-end-if-in-editor"><span style="font-size: 15px;"><span data-custom-class="body_text"></span></span></bdt>
                                                                                </li>
                                                                            </ul>
                                                                            <div style="line-height: 1.5;">
                                                                                <bdt class="block-component"><span style="font-size: 15px;"><span data-custom-class="body_text"></span></span></bdt>
                                                                            </div>
                                                                            <ul>
                                                                                <li data-custom-class="body_text" style="line-height: 1.5;"><span data-custom-class="body_text"><span style="font-size: 15px;"><strong>To identify usage trends.</strong> We may process information about how you use our Services to better understand how they are being used so we can improve them.</span></span>
                                                                                    <bdt class="statement-end-if-in-editor"><span style="font-size: 15px;"><span data-custom-class="body_text"></span></span></bdt>
                                                                                </li>
                                                                            </ul>
                                                                            <div style="line-height: 1.5;">
                                                                                <bdt class="block-component"><span style="font-size: 15px;"><span data-custom-class="body_text"></span></span></bdt>
                                                                                </li>
                                                                                </ul>
                                                                                <div style="line-height: 1.5;">
                                                                                    <bdt class="block-component"><span style="font-size: 15px;"><span data-custom-class="body_text"></bdt></span></span></li>
                                                                                    </ul>
                                                                                    <div style="line-height: 1.5;">
                                                                                        <bdt class="block-component"><span style="font-size: 15px;"><span data-custom-class="body_text"></bdt></span></span></li>
                                                                                        </ul>
                                                                                        <div style="line-height: 1.5;">
                                                                                            <bdt class="block-component"><span style="font-size: 15px;"><span data-custom-class="body_text"></bdt></span></span></li>
                                                                                            </ul>
                                                                                            <div style="line-height: 1.5;">
                                                                                                <bdt class="block-component"><span style="font-size: 15px;"><span data-custom-class="body_text"></span></span></bdt>
                                                                                                </li>
                                                                                                </ul>
                                                                                                <div style="line-height: 1.5;">
                                                                                                    <bdt class="block-component"><span style="font-size: 15px;"><span data-custom-class="body_text"></span></span></bdt><span data-custom-class="body_text"><span style="font-size: 15px;">
                                                                                                            <bdt class="forloop-component"></bdt>
                                                                                                        </span></span>
                                                                                                </div>
                                                                                                <ul>
                                                                                                    <li data-custom-class="body_text" style="line-height: 1.5;"><span data-custom-class="body_text"><span style="font-size: 15px;">
                                                                                                                <bdt class="question"><strong>Candidate Acquisition</strong></bdt><strong>.</strong>
                                                                                                                <bdt class="question">To gather the best candidates suitable for the job vacancy of the company</bdt>
                                                                                                            </span></span></li>
                                                                                                </ul>
                                                                                                <div style="line-height: 1.5;"><span data-custom-class="body_text"><span style="font-size: 15px;">
                                                                                                            <bdt class="forloop-component"></bdt>
                                                                                                        </span></span>
                                                                                                    <bdt class="statement-end-if-in-editor"><span style="font-size: 15px;"><span data-custom-class="body_text"></span></span></bdt>
                                                                                                    <bdt class="block-component"><span style="font-size: 15px;"><span data-custom-class="body_text"></bdt></span></span>
                                                                                                    <bdt class="block-component"><span style="font-size: 15px;"><span data-custom-class="body_text"></span></span></bdt>
                                                                                                    <bdt class="block-component"><span style="font-size: 15px;"><span data-custom-class="body_text"></span></span></bdt>
                                                                                                </div>
                                                                                                <div style="line-height: 1.5;"><br></div>
                                                                                                <div id="whoshare" style="line-height: 1.5;"><span style="color: rgb(127, 127, 127);"><span style="color: rgb(89, 89, 89); font-size: 15px;"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span id="control" style="color: rgb(0, 0, 0);"><strong><span data-custom-class="heading_1">3. WHEN AND WITH WHOM DO WE SHARE YOUR PERSONAL INFORMATION?</span></strong></span></span></span></span></span></div>
                                                                                                <div style="line-height: 1.5;"><br></div>
                                                                                                <div style="line-height: 1.5;"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span data-custom-class="body_text"><strong><em>In Short:</em></strong><em> We may share information in specific situations described in this section and/or with the following <bdt class="block-component"></bdt>third parties.</em></span></span></span></div>
                                                                                                <div style="line-height: 1.5;"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span data-custom-class="body_text">
                                                                                                                <bdt class="block-component">
                                                                                                            </span></div>
                                                                                                <div style="line-height: 1.5;"><br></div>
                                                                                                <div style="line-height: 1.5;"><span style="font-size: 15px;"><span data-custom-class="body_text">We <bdt class="block-component"></bdt>may need to share your personal information in the following situations:</span></span></div>
                                                                                                <ul>
                                                                                                    <li data-custom-class="body_text" style="line-height: 1.5;"><span style="font-size: 15px;"><span data-custom-class="body_text"><strong>Business Transfers.</strong> We may share or transfer your information in connection with, or during negotiations of, any merger, sale of company assets, financing, or acquisition of all or a portion of our business to another company.</span></span></li>
                                                                                                </ul>
                                                                                                <div style="line-height: 1.5;"><span style="font-size: 15px;"><span data-custom-class="body_text">
                                                                                                            <bdt class="block-component"></bdt>
                                                                                                        </span></span></li>
                                                                                                    </ul>
                                                                                                    <div style="line-height: 1.5;"><span style="font-size: 15px;">
                                                                                                            <bdt class="block-component"><span data-custom-class="body_text"></span></bdt>
                                                                                                        </span></li>
                                                                                                        </ul>
                                                                                                        <div style="line-height: 1.5;">
                                                                                                            <bdt class="block-component"><span style="font-size: 15px;"><span data-custom-class="body_text"></span></span></bdt>
                                                                                                        </div>
                                                                                                        <ul>
                                                                                                            <li data-custom-class="body_text" style="line-height: 1.5;"><span data-custom-class="body_text"><span style="font-size: 15px;"><strong>Business Partners.</strong> We may share your information with our business partners to offer you certain products, services, or promotions.</span></span>
                                                                                                                <bdt class="statement-end-if-in-editor"><span style="font-size: 15px;"><span data-custom-class="body_text"></span></span></bdt>
                                                                                                            </li>
                                                                                                        </ul>
                                                                                                        <div style="line-height: 1.5;">
                                                                                                            <bdt class="block-component"><span style="font-size: 15px;"><span data-custom-class="body_text"></bdt></span></span></li>
                                                                                                            </ul>
                                                                                                            <div style="line-height: 1.5;">
                                                                                                                <bdt class="block-component"><span style="font-size: 15px;"><span data-custom-class="body_text"></span></span></bdt>
                                                                                                                </li>
                                                                                                                </ul>
                                                                                                                <div style="line-height: 1.5;">
                                                                                                                    <bdt class="block-component"><span style="font-size: 15px;"><span data-custom-class="body_text"></span></span></bdt><span style="color: rgb(89, 89, 89); font-size: 15px;"><span style="font-size: 15px;"><span style="color: rgb(89, 89, 89);"><span style="font-size: 15px;"><span style="color: rgb(89, 89, 89);">
                                                                                                                                        <bdt class="block-component"><span data-custom-class="heading_1">
                                                                                                                                                <bdt class="block-component"></bdt>
                                                                                                                                            </span>
                                                                                                                                    </span></span></span></span></span></span></span></span></span><span style="font-size: 15px;">
                                                                                                                        <bdt class="block-component"></bdt>
                                                                                                                    </span>
                                                                                                                </div>
                                                                                                                <div style="line-height: 1.5;"><span style="font-size: 15px;"><br></span></div>
                                                                                                                <div id="ai" style="line-height: 1.5;"><span style="font-size: 15px;"><strong><span data-custom-class="heading_1">4. DO WE OFFER ARTIFICIAL INTELLIGENCE-BASED PRODUCTS?</span></strong></span></div>
                                                                                                                <div style="line-height: 1.5;"><span style="font-size: 15px;"><br></span></div>
                                                                                                                <div style="line-height: 1.5;"><span style="font-size: 15px;"><strong><em><span data-custom-class="body_text">In Short:</span></em></strong><em><span data-custom-class="body_text"> We offer products, features, or tools powered by artificial intelligence, machine learning, or similar technologies.</span></em></span></div>
                                                                                                                <div style="line-height: 1.5;"><br></div>
                                                                                                                <div style="line-height: 1.5;"><span style="font-size: 15px;"><span data-custom-class="body_text">As part of our Services, we offer products, features, or tools powered by artificial intelligence, machine learning, or similar technologies (collectively, <bdt class="block-component"></bdt>"<bdt class="statement-end-if-in-editor"></bdt>AI Products<bdt class="block-component"></bdt>"<bdt class="statement-end-if-in-editor"></bdt>). These tools are designed to enhance your experience and provide you with innovative solutions. The terms in this Privacy Notice govern your use of the AI Products within our Services.</span>
                                                                                                                        <bdt class="block-component"></bdt>
                                                                                                                    </span></div>
                                                                                                                <div style="line-height: 1.5;"><br></div>
                                                                                                                <div style="line-height: 1.5;"><span style="font-size: 15px;"><strong><span data-custom-class="body_text">Use of AI Technologies</span></strong></span></div>
                                                                                                                <div style="line-height: 1.5;"><br></div>
                                                                                                                <div style="line-height: 1.5;"><span style="font-size: 15px;"><span data-custom-class="body_text">We provide the AI Products through third-party service providers (<bdt class="block-component"></bdt>"<bdt class="statement-end-if-in-editor"></bdt>AI Service Providers<bdt class="block-component"></bdt>"<bdt class="statement-end-if-in-editor"></bdt>), including <bdt class="forloop-component"></bdt>
                                                                                                                            <bdt class="block-component"></bdt>
                                                                                                                            <bdt class="question">OpenAI</bdt>
                                                                                                                            <bdt class="block-component"></bdt>
                                                                                                                            <bdt class="forloop-component"></bdt>. As outlined in this Privacy Notice, your input, output, and personal information will be shared with and processed by these AI Service Providers to enable your use of our AI Products for purposes outlined in <bdt class="block-component"></bdt>"<bdt class="statement-end-if-in-editor"></bdt>
                                                                                                                            <bdt class="block-component"></bdt>
                                                                                                                        </span><a data-custom-class="link" href="#whoshare"><span style="color: rgb(0, 58, 250); font-size: 15px;">WHEN AND WITH WHOM DO WE SHARE YOUR PERSONAL INFORMATION?</span></a></span><span style="font-size: 15px;"><span data-custom-class="body_text">
                                                                                                                            <bdt class="statement-end-if-in-editor"></bdt>
                                                                                                                            <bdt class="block-component"></bdt>"<bdt class="statement-end-if-in-editor"></bdt> You must not use the AI Products in any way that violates the terms or policies of any AI Service Provider.
                                                                                                                        </span>
                                                                                                                        <bdt class="statement-end-if-in-editor"></bdt>
                                                                                                                    </span></div>
                                                                                                                <div style="line-height: 1.5;"><span style="font-size: 15px;"><br></span></div>
                                                                                                                <div style="line-height: 1.5;"><span style="font-size: 15px;"><strong><span data-custom-class="body_text">Our AI Products</span></strong></span></div>
                                                                                                                <div style="line-height: 1.5;"><span style="font-size: 15px;"><br></span></div>
                                                                                                                <div style="line-height: 1.5;"><span style="font-size: 15px;"><span data-custom-class="body_text">Our AI Products are designed for the following functions:</span>
                                                                                                                        <bdt class="forloop-component"></bdt>
                                                                                                                    </span></div>
                                                                                                                <ul>
                                                                                                                    <li data-custom-class="body_text" style="line-height: 1.5;"><span style="font-size: 15px;">
                                                                                                                            <bdt class="question"><span data-custom-class="body_text">AI automation</span></bdt>
                                                                                                                        </span></li>
                                                                                                                </ul>
                                                                                                                <div><span style="font-size: 15px;">
                                                                                                                        <bdt class="forloop-component"></bdt>
                                                                                                                    </span></div>
                                                                                                                <ul>
                                                                                                                    <li data-custom-class="body_text" style="line-height: 1.5;"><span style="font-size: 15px;">
                                                                                                                            <bdt class="question"><span data-custom-class="body_text">AI insights</span></bdt>
                                                                                                                        </span></li>
                                                                                                                </ul>
                                                                                                                <div><span style="font-size: 15px;">
                                                                                                                        <bdt class="forloop-component"></bdt><br>
                                                                                                                    </span></div>
                                                                                                                <div style="line-height: 1.5;"><span style="font-size: 15px;"><strong><span data-custom-class="body_text">How We Process Your Data Using AI</span></strong></span></div>
                                                                                                                <div style="line-height: 1.5;"><span style="font-size: 15px;"><br></span></div>
                                                                                                                <div style="line-height: 1.5;"><span style="font-size: 15px;"><span data-custom-class="body_text">All personal information processed using our AI Products is handled in line with our Privacy Notice and our agreement with third parties. This ensures high security and safeguards your personal information throughout the process, giving you peace of mind about your data's safety.</span>
                                                                                                                        <bdt class="block-component"></bdt>
                                                                                                                        <bdt class="statement-end-if-in-editor"></bdt>
                                                                                                                    </span><span style="font-size: 15px; color: rgb(89, 89, 89);"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span data-custom-class="body_text"><span style="color: rgb(89, 89, 89); font-size: 15px;"><span style="color: rgb(89, 89, 89); font-size: 15px;"><span style="color: rgb(89, 89, 89); font-size: 15px;"><span style="font-size: 15px;"><span style="color: rgb(89, 89, 89);"><span style="font-size: 15px;"><span style="color: rgb(89, 89, 89);"><span data-custom-class="body_text">
                                                                                                                                                                <bdt class="block-component"></bdt>
                                                                                                                                                            </span>
                                                                                                                                                            <bdt class="block-component"><span data-custom-class="body_text">
                                                                                                                                                                    <bdt class="block-component"></bdt>
                                                                                                                                                                </span>
                                                                                                                                                        </span></span></span></span></span></span></span></span></span></span></span></span></div>
                                                                                                                <div style="line-height: 1.5;"><br></div>
                                                                                                                <div id="inforetain" style="line-height: 1.5;"><span style="color: rgb(127, 127, 127);"><span style="color: rgb(89, 89, 89); font-size: 15px;"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span id="control" style="color: rgb(0, 0, 0);"><strong><span data-custom-class="heading_1">5. HOW LONG DO WE KEEP YOUR INFORMATION?</span></strong></span></span></span></span></span></div>
                                                                                                                <div style="line-height: 1.5;"><br></div>
                                                                                                                <div style="line-height: 1.5;"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span data-custom-class="body_text"><strong><em>In Short: </em></strong><em>We keep your information for as long as necessary to <bdt class="block-component"></bdt>fulfill<bdt class="statement-end-if-in-editor"></bdt> the purposes outlined in this Privacy Notice unless otherwise required by law.</em></span></span></span></div>
                                                                                                                <div style="line-height: 1.5;"><br></div>
                                                                                                                <div style="line-height: 1.5;"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span data-custom-class="body_text">We will only keep your personal information for as long as it is necessary for the purposes set out in this Privacy Notice, unless a longer retention period is required or permitted by law (such as tax, accounting, or other legal requirements).<bdt class="block-component"></bdt> No purpose in this notice will require us keeping your personal information for longer than <span style="font-size: 15px;"><span style="color: rgb(89, 89, 89);"><span data-custom-class="body_text">
                                                                                                                                            <bdt class="block-component"></bdt>
                                                                                                                                        </span></span></span>
                                                                                                                                <bdt class="block-component"></bdt>the period of time in which users have an account with us<bdt class="block-component"></bdt><span style="font-size: 15px;"><span style="color: rgb(89, 89, 89);"><span data-custom-class="body_text">
                                                                                                                                            <bdt class="else-block"></bdt>
                                                                                                                                        </span></span></span>.
                                                                                                                            </span></span></span></div>
                                                                                                                <div style="line-height: 1.5;"><br></div>
                                                                                                                <div style="line-height: 1.5;"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span data-custom-class="body_text">When we have no ongoing legitimate business need to process your personal information, we will either delete or <bdt class="block-component"></bdt>anonymize<bdt class="statement-end-if-in-editor"></bdt> such information, or, if this is not possible (for example, because your personal information has been stored in backup archives), then we will securely store your personal information and isolate it from any further processing until deletion is possible.<span style="color: rgb(89, 89, 89);">
                                                                                                                                    <bdt class="block-component"></bdt>
                                                                                                                                </span></span></span></span></div>
                                                                                                                <div style="line-height: 1.5;"><br></div>
                                                                                                                <div id="infosafe" style="line-height: 1.5;"><span style="color: rgb(127, 127, 127);"><span style="color: rgb(89, 89, 89); font-size: 15px;"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span id="control" style="color: rgb(0, 0, 0);"><strong><span data-custom-class="heading_1">6. HOW DO WE KEEP YOUR INFORMATION SAFE?</span></strong></span></span></span></span></span></div>
                                                                                                                <div style="line-height: 1.5;"><br></div>
                                                                                                                <div style="line-height: 1.5;"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span data-custom-class="body_text"><strong><em>In Short: </em></strong><em>We aim to protect your personal information through a system of <bdt class="block-component"></bdt>organizational<bdt class="statement-end-if-in-editor"></bdt> and technical security measures.</em></span></span></span></div>
                                                                                                                <div style="line-height: 1.5;"><br></div>
                                                                                                                <div style="line-height: 1.5;"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span data-custom-class="body_text">We have implemented appropriate and reasonable technical and <bdt class="block-component"></bdt>organizational<bdt class="statement-end-if-in-editor"></bdt> security measures designed to protect the security of any personal information we process. However, despite our safeguards and efforts to secure your information, no electronic transmission over the Internet or information storage technology can be guaranteed to be 100% secure, so we cannot promise or guarantee that hackers, cybercriminals, or other <bdt class="block-component"></bdt>unauthorized<bdt class="statement-end-if-in-editor"></bdt> third parties will not be able to defeat our security and improperly collect, access, steal, or modify your information. Although we will do our best to protect your personal information, transmission of personal information to and from our Services is at your own risk. You should only access the Services within a secure environment.<span style="color: rgb(89, 89, 89);">
                                                                                                                                    <bdt class="statement-end-if-in-editor"></bdt>
                                                                                                                                </span><span style="color: rgb(89, 89, 89); font-size: 15px;"><span data-custom-class="body_text">
                                                                                                                                        <bdt class="block-component"></bdt>
                                                                                                                                    </span></span></span></span></span></div>
                                                                                                                <div style="line-height: 1.5;"><br></div>
                                                                                                                <div id="infominors" style="line-height: 1.5;"><span style="color: rgb(127, 127, 127);"><span style="color: rgb(89, 89, 89); font-size: 15px;"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span id="control" style="color: rgb(0, 0, 0);"><strong><span data-custom-class="heading_1">7. DO WE COLLECT INFORMATION FROM MINORS?</span></strong></span></span></span></span></span></div>
                                                                                                                <div style="line-height: 1.5;"><br></div>
                                                                                                                <div style="line-height: 1.5;"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span data-custom-class="body_text"><strong><em>In Short:</em></strong><em> We do not knowingly collect data from or market to <bdt class="block-component"></bdt>children under 18 years of age<bdt class="else-block"></bdt>.</em>
                                                                                                                                <bdt class="block-component"></bdt>
                                                                                                                            </span></span></span></div>
                                                                                                                <div style="line-height: 1.5;"><br></div>
                                                                                                                <div style="line-height: 1.5;"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span data-custom-class="body_text">We do not knowingly collect, solicit data from, or market to children under 18 years of age, nor do we knowingly sell such personal information. By using the Services, you represent that you are at least 18 or that you are the parent or guardian of such a minor and consent to such minor dependent’s use of the Services. If we learn that personal information from users less than 18 years of age has been collected, we will deactivate the account and take reasonable measures to promptly delete such data from our records. If you become aware of any data we may have collected from children under age 18, please contact us at <span style="color: rgb(89, 89, 89); font-size: 15px;"><span data-custom-class="body_text">
                                                                                                                                        <bdt class="block-component"></bdt>
                                                                                                                                        <bdt class="question">__________</bdt>
                                                                                                                                        <bdt class="else-block"></bdt>
                                                                                                                                    </span></span>.</span><span data-custom-class="body_text">
                                                                                                                                <bdt class="else-block">
                                                                                                                                    <bdt class="block-component"></bdt>
                                                                                                                            </span></span></span></span></span></span></div>
                                                                                                                <div style="line-height: 1.5;"><br></div>
                                                                                                                <div id="privacyrights" style="line-height: 1.5;"><span style="color: rgb(127, 127, 127);"><span style="color: rgb(89, 89, 89); font-size: 15px;"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span id="control" style="color: rgb(0, 0, 0);"><strong><span data-custom-class="heading_1">8. WHAT ARE YOUR PRIVACY RIGHTS?</span></strong></span></span></span></span></span></div>
                                                                                                                <div style="line-height: 1.5;"><br></div>
                                                                                                                <div style="line-height: 1.5;"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span data-custom-class="body_text"><strong><em>In Short:</em></strong><em> <span style="color: rgb(89, 89, 89);"><span style="font-size: 15px;"><span data-custom-class="body_text"><em>
                                                                                                                                                    <bdt class="block-component"></bdt>
                                                                                                                                                </em></span></span> </span>You may review, change, or terminate your account at any time, depending on your country, province, or state of residence.</em><span style="color: rgb(89, 89, 89);"><span style="font-size: 15px;">
                                                                                                                                        <bdt class="block-component">
                                                                                                                                            <bdt class="block-component">
                                                                                                                                    </span></span></span></div>
                                                                                                                <div style="line-height: 1.5;"><br></div>
                                                                                                                <div id="withdrawconsent" style="line-height: 1.5;"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span data-custom-class="body_text"><strong><u>Withdrawing your consent:</u></strong> If we are relying on your consent to process your personal information,<bdt class="block-component"></bdt> which may be express and/or implied consent depending on the applicable law,<bdt class="statement-end-if-in-editor"></bdt> you have the right to withdraw your consent at any time. You can withdraw your consent at any time by contacting us by using the contact details provided in the section <bdt class="block-component"></bdt>"<bdt class="statement-end-if-in-editor"></bdt></span></span></span><a data-custom-class="link" href="#contact"><span style="font-size: 15px; color: rgb(0, 58, 250);"><span style="font-size: 15px; color: rgb(0, 58, 250);"><span data-custom-class="body_text">HOW CAN YOU CONTACT US ABOUT THIS NOTICE?</span></span></span></a><span style="font-size: 15px; color: rgb(89, 89, 89);"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span data-custom-class="body_text">
                                                                                                                                <bdt class="block-component"></bdt>"<bdt class="statement-end-if-in-editor"></bdt> below<bdt class="block-component"></bdt>.
                                                                                                                            </span></span></span></div>
                                                                                                                <div style="line-height: 1.5;"><br></div>
                                                                                                                <div style="line-height: 1.5;"><span style="font-size: 15px;"><span data-custom-class="body_text">However, please note that this will not affect the lawfulness of the processing before its withdrawal nor,<bdt class="block-component"></bdt> when applicable law allows,<bdt class="statement-end-if-in-editor"></bdt> will it affect the processing of your personal information conducted in reliance on lawful processing grounds other than consent.<bdt class="block-component"></bdt></span></span>
                                                                                                                    <bdt class="block-component"><span style="font-size: 15px;"><span data-custom-class="body_text"></span></span></bdt>
                                                                                                                </div>
                                                                                                                <div style="line-height: 1.5;"><br></div>
                                                                                                                <div style="line-height: 1.5;"><span style="font-size: 15px;"><span data-custom-class="heading_2"><strong>Account Information</strong></span></span></div>
                                                                                                                <div style="line-height: 1.5;"><br></div>
                                                                                                                <div style="line-height: 1.5;"><span data-custom-class="body_text"><span style="font-size: 15px;">If you would at any time like to review or change the information in your account or terminate your account, you can:<bdt class="forloop-component"></bdt></span></span></div>
                                                                                                                <ul>
                                                                                                                    <li data-custom-class="body_text" style="line-height: 1.5;"><span data-custom-class="body_text"><span style="font-size: 15px;">
                                                                                                                                <bdt class="question">Log in to your account settings and update your user account.</bdt>
                                                                                                                            </span></span></li>
                                                                                                                </ul>
                                                                                                                <div style="line-height: 1.5;"><span data-custom-class="body_text"><span style="font-size: 15px;">
                                                                                                                            <bdt class="forloop-component"></bdt>
                                                                                                                        </span></span></div>
                                                                                                                <ul>
                                                                                                                    <li data-custom-class="body_text" style="line-height: 1.5;"><span data-custom-class="body_text"><span style="font-size: 15px;">
                                                                                                                                <bdt class="question">Contact us using the contact information provided.</bdt>
                                                                                                                            </span></span></li>
                                                                                                                </ul>
                                                                                                                <div style="line-height: 1.5;"><span data-custom-class="body_text"><span style="font-size: 15px;">
                                                                                                                            <bdt class="forloop-component"></bdt>
                                                                                                                        </span></span></div>
                                                                                                                <div style="line-height: 1.5;"><span style="font-size: 15px;"><span data-custom-class="body_text">Upon your request to terminate your account, we will deactivate or delete your account and information from our active databases. However, we may retain some information in our files to prevent fraud, troubleshoot problems, assist with any investigations, enforce our legal terms and/or comply with applicable legal requirements.</span></span>
                                                                                                                    <bdt class="statement-end-if-in-editor"><span style="font-size: 15px;"><span data-custom-class="body_text"></span></span></bdt><span style="font-size: 15px; color: rgb(89, 89, 89);"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span data-custom-class="body_text"><span style="font-size: 15px;"><span style="color: rgb(89, 89, 89);"><span style="font-size: 15px;"><span style="color: rgb(89, 89, 89);"><span data-custom-class="body_text"><span style="font-size: 15px;"><span style="color: rgb(89, 89, 89);">
                                                                                                                                                            <bdt class="block-component"></bdt>
                                                                                                                                                        </span></span></span></span></span></span></span></span></span></span></span></span>
                                                                                                                    <bdt class="block-component"><span style="font-size: 15px;"><span data-custom-class="body_text"></span></span></bdt>
                                                                                                                </div>
                                                                                                                <div style="line-height: 1.5;"><br></div>
                                                                                                                <div id="DNT" style="line-height: 1.5;"><span style="color: rgb(127, 127, 127);"><span style="color: rgb(89, 89, 89); font-size: 15px;"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span id="control" style="color: rgb(0, 0, 0);"><strong><span data-custom-class="heading_1">9. CONTROLS FOR DO-NOT-TRACK FEATURES</span></strong></span></span></span></span></span></div>
                                                                                                                <div style="line-height: 1.5;"><br></div>
                                                                                                                <div style="line-height: 1.5;"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span data-custom-class="body_text">Most web browsers and some mobile operating systems and mobile applications include a Do-Not-Track (<bdt class="block-component"></bdt>"DNT"<bdt class="statement-end-if-in-editor"></bdt>) feature or setting you can activate to signal your privacy preference not to have data about your online browsing activities monitored and collected. At this stage, no uniform technology standard for <bdt class="block-component"></bdt>recognizing<bdt class="statement-end-if-in-editor"></bdt> and implementing DNT signals has been <bdt class="block-component"></bdt>finalized<bdt class="statement-end-if-in-editor"></bdt>. As such, we do not currently respond to DNT browser signals or any other mechanism that automatically communicates your choice not to be tracked online. If a standard for online tracking is adopted that we must follow in the future, we will inform you about that practice in a revised version of this Privacy Notice.</span></span></span>
                                                                                                                    <bdt class="block-component"><span style="font-size: 15px;"></span></bdt>
                                                                                                                </div>
                                                                                                                <div style="line-height: 1.5;"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span data-custom-class="body_text">
                                                                                                                                <bdt class="block-component"></bdt>
                                                                                                                                </bdt>
                                                                                                                            </span></span></span></span></span></span></span></span></span></span></span></bdt></span></span></span></span></span></span></span></span></span></span>
                                                                                                                    <bdt class="block-component"><span style="font-size: 15px;"></bdt></span>
                                                                                                                    <bdt class="block-component"><span style="font-size: 15px;"></span></bdt>
                                                                                                                </div>
                                                                                                                <div style="line-height: 1.5;"><br></div>
                                                                                                                <div id="policyupdates" style="line-height: 1.5;"><span style="color: rgb(127, 127, 127);"><span style="color: rgb(89, 89, 89); font-size: 15px;"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span id="control" style="color: rgb(0, 0, 0);"><strong><span data-custom-class="heading_1">10. DO WE MAKE UPDATES TO THIS NOTICE?</span></strong></span></span></span></span></span></div>
                                                                                                                <div style="line-height: 1.5;"><br></div>
                                                                                                                <div style="line-height: 1.5;"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span data-custom-class="body_text"><em><strong>In Short: </strong>Yes, we will update this notice as necessary to stay compliant with relevant laws.</em></span></span></span></div>
                                                                                                                <div style="line-height: 1.5;"><br></div>
                                                                                                                <div style="line-height: 1.5;"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span data-custom-class="body_text">We may update this Privacy Notice from time to time. The updated version will be indicated by an updated <bdt class="block-component"></bdt>"Revised"<bdt class="statement-end-if-in-editor"></bdt> date at the top of this Privacy Notice. If we make material changes to this Privacy Notice, we may notify you either by prominently posting a notice of such changes or by directly sending you a notification. We encourage you to review this Privacy Notice frequently to be informed of how we are protecting your information.</span></span></span></div>
                                                                                                                <div style="line-height: 1.5;"><br></div>
                                                                                                                <div id="contact" style="line-height: 1.5;"><span style="color: rgb(127, 127, 127);"><span style="color: rgb(89, 89, 89); font-size: 15px;"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span id="control" style="color: rgb(0, 0, 0);"><strong><span data-custom-class="heading_1">11. HOW CAN YOU CONTACT US ABOUT THIS NOTICE?</span></strong></span></span></span></span></span></div>
                                                                                                                <div style="line-height: 1.5;"><br></div>
                                                                                                                <div style="line-height: 1.5;"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span data-custom-class="body_text">If you have questions or comments about this notice, you may <span style="color: rgb(89, 89, 89); font-size: 15px;"><span data-custom-class="body_text">
                                                                                                                                        <bdt class="block-component">
                                                                                                                                            <bdt class="block-component">
                                                                                                                                                <bdt class="block-component"></bdt>
                                                                                                                                            </bdt>
                                                                                                                                    </span></span><span style="font-size: 15px; color: rgb(89, 89, 89);"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span data-custom-class="body_text">contact us by post at:</span></span></span></span></span></span></div>
                                                                                                                <div style="line-height: 1.5;"><br></div>
                                                                                                                <div style="line-height: 1.5;"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span data-custom-class="body_text"><span style="font-size: 15px;"><span style="color: rgb(89, 89, 89);"><span style="color: rgb(89, 89, 89);"><span data-custom-class="body_text">
                                                                                                                                                <bdt class="question">I-Bear True Solutions Inc.</bdt>
                                                                                                                                            </span></span></span></span></span><span data-custom-class="body_text"><span style="color: rgb(89, 89, 89);"><span data-custom-class="body_text">
                                                                                                                                        <bdt class="block-component"></bdt>
                                                                                                                                        </bdt>
                                                                                                                                    </span></span></span></span></div>
                                                                                                                <div style="line-height: 1.5;"><span style="font-size: 15px;"><span data-custom-class="body_text">
                                                                                                                            <bdt class="question">Mandaluyong City, Mandaluyong, Metro Manila, Philippines</bdt><span style="color: rgb(89, 89, 89);"><span style="font-size: 15px;">
                                                                                                                                    <bdt class="block-component"></bdt>
                                                                                                                                </span></span>
                                                                                                                        </span></bdt></span></div>
                                                                                                                <div style="line-height: 1.5;"><span style="font-size: 15px;"><span data-custom-class="body_text">
                                                                                                                            <bdt class="question">Mandaluyong</bdt><span style="color: rgb(89, 89, 89);"><span style="font-size: 15px;">
                                                                                                                                    <bdt class="block-component"></bdt>, <bdt class="question">Metro Manila</bdt>
                                                                                                                                    <bdt class="statement-end-if-in-editor"></bdt>
                                                                                                                                    <bdt class="block-component"></bdt>
                                                                                                                                    <bdt class="question">1550</bdt>
                                                                                                                                    <bdt class="statement-end-if-in-editor"></bdt>
                                                                                                                                    <bdt class="block-component"></bdt>
                                                                                                                                    <bdt class="block-component"></bdt>
                                                                                                                                </span></span>
                                                                                                                        </span></bdt></span></div>
                                                                                                                <div style="line-height: 1.5;"><span style="font-size: 15px;"><span data-custom-class="body_text"><span style="font-size: 15px;"><span data-custom-class="body_text"><span style="color: rgb(89, 89, 89);">
                                                                                                                                        <bdt class="block-component"></bdt>
                                                                                                                                    </span></span></span>
                                                                                                                            <bdt class="question">Philippines</bdt><span style="font-size: 15px;"><span data-custom-class="body_text"><span style="color: rgb(89, 89, 89);">
                                                                                                                                        <bdt class="statement-end-if-in-editor"><span style="font-size: 15px;"><span data-custom-class="body_text"><span style="color: rgb(89, 89, 89);">
                                                                                                                                                        <bdt class="statement-end-if-in-editor"><span style="font-size: 15px;"><span data-custom-class="body_text"><span style="color: rgb(89, 89, 89);">
                                                                                                                                                                        <bdt class="statement-end-if-in-editor"></bdt>
                                                                                                                                                                    </span></span></span></bdt>
                                                                                                                                                        <bdt class="statement-end-if-in-editor"></bdt>
                                                                                                                                                    </span></span></span><span data-custom-class="body_text"><span style="color: rgb(89, 89, 89);"><span style="font-size: 15px;">
                                                                                                                                                        <bdt class="statement-end-if-in-editor"></bdt>
                                                                                                                                                    </span></span></span></bdt>
                                                                                                                                    </span></span></span>
                                                                                                                        </span><span data-custom-class="body_text"><span style="font-size: 15px;"><span data-custom-class="body_text"><span style="color: rgb(89, 89, 89);">
                                                                                                                                        <bdt class="statement-end-if-in-editor"><span style="color: rgb(89, 89, 89);"><span style="font-size: 15px;"><span data-custom-class="body_text">
                                                                                                                                                        <bdt class="block-component">
                                                                                                                                                            <bdt class="block-component"></bdt>
                                                                                                                                                    </span></span></span>
                                                                                                                                    </span></span></span>
                                                                                                                            <bdt class="block-component"><span style="font-size: 15px;"></span></bdt><span style="font-size: 15px;"><span data-custom-class="body_text"><span style="color: rgb(89, 89, 89); font-size: 15px;"><span style="font-size: 15px;"><span data-custom-class="body_text">
                                                                                                                                                <bdt class="statement-end-if-in-editor">
                                                                                                                                                    <bdt class="block-component"></bdt>
                                                                                                                                            </span></span></div>
                                                                                                                <div style="line-height: 1.5;"><br></div>
                                                                                                                <div id="request" style="line-height: 1.5;"><span style="color: rgb(127, 127, 127);"><span style="color: rgb(89, 89, 89); font-size: 15px;"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span id="control" style="color: rgb(0, 0, 0);"><strong><span data-custom-class="heading_1">12. HOW CAN YOU REVIEW, UPDATE, OR DELETE THE DATA WE COLLECT FROM YOU?</span></strong></span></span></span></span></span></div>
                                                                                                                <div style="line-height: 1.5;"><br></div>
                                                                                                                <div style="line-height: 1.5;"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span data-custom-class="body_text">
                                                                                                                                <bdt class="block-component"></bdt>Based on the applicable laws of your country<bdt class="block-component"></bdt>, you may<bdt class="else-block">
                                                                                                                                    <bdt class="block-component"> have the right to request access to the personal information we collect from you, details about how we have processed it, correct inaccuracies, or delete your personal information. You may also have the right to <bdt class="block-component"></bdt>withdraw your consent to our processing of your personal information. These rights may be limited in some circumstances by applicable law.

                                                                                                                                        <bdt class="else-block"></bdt>
                                                                                                                            </span></span><span data-custom-class="body_text"></span></span></span></div>

                                                                                                            </div>

                                                                                                        </div>


                                                                                                        @endsection