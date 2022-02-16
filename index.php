<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <header>
        <div class="flex">
            <span class="left">
                <img src="data:image/png;base64,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" alt="">
                <a href="#" class="title">Privacy e termini</a>
            </span>
            <span class="right">
                <i class="fas fa-th"></i>
                <span class="icon">
                    D
                </span>
            </span>
        </div>
        <div class="border">
            <span class="subtitle">
                <a href="#">Introduzione</a>
            </span>
            <span class="subtitle">
                <a href="#">Norme sulla privacy</a>
            </span>
            <span class="subtitle">
                <a href="#">Termini di servizio</a>
            </span>
            <span class="subtitle">
                <a href="#">Teconologie</a>
            </span>
            <span class="active subtitle">
                <a href="#">Domande frequenti</a>
            </span>
        </div>
    </header>
    <main>
        ciao
    </main>
</body>
</html>