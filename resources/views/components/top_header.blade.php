<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="{{url('favicon.ico')}}">
    <link href="{{url('style.css')}}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" rel="stylesheet">
    <title>個人収蔵.com</title>
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-3894162880149762"
           crossorigin="anonymous"></script>
    <script type="text/javascript">
            i = 0;
            img = new Array("images/spider.jpg","images/ike.jpg","images/tonbo.jpg");
            pos = new Array("center center","center center","left top");
            function change(){
                i++;
                if(i >= img.length) {
                    i = 0;
                }
                var element = document.getElementById("slide");
                element.style.backgroundImage = "url(" + img[i] + ")";
                element.style.backgroundPosition = pos[i];
            }
            function slide(){
                var element = document.getElementById("slide");
                element.style.backgroundImage = "url(" + img[i] + ")";
                element.style.backgroundPosition = pos[i];
                slide = setInterval("change()",5000);
            }
            </script>
</head>
