<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
                background-color: #1e1e1e; 
                min-height: 100vh;
                
            }
            .container{
                display:flex;

            }
            .sidebar{
                background-color: #000;
                height: 100vh;
                width:300px;
                padding:10px 5px;
                

            }
            .content{
                flex-grow:1;
                height:100vh;
                background-color:#1e1e1e;
                /* padding:30px 50px; */
            }
            .sidebar-card{
                padding:5px;
                background-color:#1e1e1e;
                height:50px;
                border-radius:5px;
                margin-bottom:5px;
            }
            .content-card{
                padding:5px;
                display:flex;
                align-items:center;
                justify-content:center;
                background-color:#5C54AD;
                width:250px;
                height:150px;
                border-radius:5px;
                margin-bottom:5px;
                gap:10px
            }
            .content-card-button{
                width:80px;
                height:80px;
                border:1px solid #fff;
                border-radius:50%;
                display:flex;
                justify-content:center;
                align-items:center;
                color:#fff;
                font-weight:bold;
                font-size:"16px"

            }
            .amount{
                font-size:36px;
                text-align:center;
            }
            .ticekt-card{
               display:flex ;
               align-items:center;
               background-color:#E2E3E3;
               width:300px;
               height:150px;
               border-radius:10px;
               padding:0px 15px;
               gap:10px;
            }
            .ticket-title{
                color:#000;
                font-size:24px;
                font-weight:normal;
            }
            .titcket-amount{
                color:#000;
                font-size:20px;
                font-weight:bold;
                margin-block-start: .1em;
                margin-block-end: .1em;
            }
            .flex-gap{
                gap:65px !important;
            }
            .pay-btn{
                background-color:#000;
                padding:5px 20px;
                border-radius:5px;
                color:#fff;
            }
            .details-btn{
                background-color:#fff;
                padding:5px 20px;
                border-radius:5px;
                border:1px solid #000;
                color:#000;

            }
            .calender-card{
                background-color:#5C54AD;
                width:100px;
                display:flex;
                flex-direction:column;
                justify-content:center;
                align-items:center;
                padding-top:20px;
                border-radius:10px;
                height:100px;
            }
            
            .date{
                font-size:46px;
                line-height:0px;
                margin-block-start: .5em;
                margin-block-end: 0em;
            }
            .month{
                font-size:36px; 
                line-height:0px ;
               
            }
            .content-actions{
                display:flex;
                gap:10px
            }
            h2{
            color:#fff;
            font-size:24px;
            line-height:0px;
            font-weight:bold
            }
            h3{
                color:#fff;
            font-size:16px;
            line-height:0px;
            font-weight:bold  
            }
            
            .navbar{
                background-color:#2b2b2b;
                height:50px;
                display:flex;
                align-items:center;
                padding:0px 15px;
                justify-content:end;
                gap :10px

            }
            .user-profile{
                height:40px;
                border:1px solid #fff;
                width:40px;
                border-radius:50%;
                background-color:#fff;
                background-repeat: no-repeat;
                background-position: center;
                background-size: cover;
                background-image: url("https://plus.unsplash.com/premium_photo-1683121366070-5ceb7e007a97?q=80&w=2940&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"); 
                
            }
            .notification {
  position: relative;
  display: block;
}
.notification-number {
  position: absolute;
  background-color: red;
  width: 16px;
  height: 16px;
  border-radius: 50%;
  font-size: 10px;
  display: flex;
  align-items: center;
  justify-content: center;
  color: #fff;
  right: -6px;
  top: 18px;
}
.notification + svg {
  margin-left: 22px;
}
            .modal-content{
                background-color:rgba(0, 0, 0, 0.72);;
                width:100vw;
                height:100vh;
                position:fixed;
                top:0;
                left:0;
                index:1;
                display:flex;
                justify-content:center;
                align-items:center;

            }
            .modal-container{
                background-color:#1e1e1e;
                width:30vw;
                height:70vh;
                padding:0px
                
            }
            .modal-title{
                background-color:#5C54AD;
                height: 200px;
                display:flex;
                flex-direction:column;
                border-radius:0px 0px 20px 20px;
                align-items:center;
                

            }
            .modal-title-text{
                color:#fff;
                margin-block-start: 0em;
                margin-block-end: 0em;
            }
            .payment-method{
                display: flex;
                flex-wrap: wrap;
                position: relative;
                justify-content: center;
            }
            .single-method{
                width:40%;
                display: flex;
                justify-content: center;
                margin:20px;
            }
            .modal-amount{
                font-size:32px;
                font-weight: bold;
            }
            .modal-pay-btn{
               display: flex;
               justify-content: center;

            }
            .btn{
                background-color:#5C54AD;
                width:15vw;
                height: 30px;
                color:#fff;
                font-size:18px;
                border-radius:10px;
            }
            
        </style>
    </head>
    <body class="antialiased">
    <livewire:dashboard/>
    <div class="modal-content">
        <div class="modal-container"> 
          <div class="modal-title">
         <h1 class="modal-title-text">Pay for ticket</h1>
         <h3 class="modal-amount"> 500</h3>
         <h3 class="modal-amount">FRW</h3>
            </div>
            <br/>
<h3 style="align-text:center;">Pay with:</h3>
            <div class="payment-method">
                <div class="single-method">
                   <img width="70vw" src="https://play-lh.googleusercontent.com/dhCF7DNax5n9y1Twn2fJi5w5e2hntmpy4savqt8IcjTv5TAQYHLobv_3N3wgKvmAon0" alt="">
                </div>
                <div class="single-method">
                <img width="70vw" src="https://upload.wikimedia.org/wikipedia/commons/thumb/d/da/Airtel_Africa_logo.svg/640px-Airtel_Africa_logo.svg.png" alt="">
                </div>
                <div class="single-method">
                   <img width="70vw" src="https://www.gsma.com/aboutus/wp-content/uploads/2018/09/Visa_Brandmark_Blue_RGB.png" alt="">
                </div>
                <div class="single-method">
                <img width="70vw" src="data:image/png;base64,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" alt="">
                </div>

            </div>
            <div class="modal-pay-btn"> <button type="button" class="btn">Pay</button> </div>
        </div>
    </div>
    </body>
</html>
