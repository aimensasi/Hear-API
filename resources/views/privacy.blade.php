<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }
						.content{
							padding-bottom: 5rem;
						}
						.content-section{
							margin-top: 4rem;
						}
            .content-section .title {
                font-size: 30px;
            }
						.content-section .lead {
                font-size: 1.2rem;
								/* max-width: 800px; */
            }

            .title {
							font-size: 40px;
							font-weight: 500;
							margin-left: 3rem;
							margin-top: 2rem;
            }

						.lead{
							font-size: 1.3rem;
							margin-left: 3rem;
						}

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
			<div class="content">
				<div class="title m-b-md">
						Hear Privacy Policy
				</div>
				<p class="lead">
					This Policy describes the information we process to support Hear Core Features.
				</p>

				<div class="content-section">
					<h4 class="title">What kinds of information do we collect?</h4>
					<p class="lead">
						To be able to provide Text-To-Speech and Speech-To-Text translation<br/>
						we need to have access to use your device microphone and/or audio play.<br/>
						The recorded audio will not be saved or used for any other purposes.<br/>
						Only the trascripts that is created from the speech will be saved.<br/>
						These transcripts is only visible to you.<br/>
					</p>
				</div>
				<div class="content-section">
					<h4 class="title">Will I be able to delete saved conversation?</h4>
					<p class="lead">
						Yes, the conversations you have will be saved into separate groups.<br/>
						You will be able to delete these conversation permanently at any time.<br/>
					</p>
				</div>
    </body>
</html>
