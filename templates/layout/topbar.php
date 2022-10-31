<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bootstrap 5 Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
    

    <style>
        a:link {text-decoration:none}
        a:visited {text-decoration:none}
        a:hover {text-decoration:underline}
        a:active {text-decoration:none}

        table a {color:white}
        
        
        hr{border:0;border-top:0.1rem solid #f4f5f6;margin:3.0rem 0}
        input[type='email'],input[type='number'],input[type='password'],input[type='search'],input[type='tel'],input[type='text'],input[type='url'],input[type='color'],input[type='date'],input[type='month'],input[type='week'],input[type='datetime'],input[type='datetime-local'],input:not([type]),textarea,select{background-color:transparent;border:0.1rem solid #d1d1d1;border-radius:.4rem;box-shadow:none;box-sizing:inherit;height:3.0rem;padding:.6rem 1.0rem;width:100%}
        input[type='email']:focus,input[type='number']:focus,input[type='password']:focus,input[type='search']:focus,input[type='tel']:focus,input[type='text']:focus,input[type='url']:focus,input[type='color']:focus,input[type='date']:focus,input[type='month']:focus,input[type='week']:focus,input[type='datetime']:focus,input[type='datetime-local']:focus,input:not([type]):focus,textarea:focus,select:focus{border-color:#606c76;outline:0}
        select{padding-right:3.0rem}
        textarea{min-height:6.5rem}
        fieldset{border-width:0;padding:0}
        input[type='checkbox'],input[type='radio']{display:inline}
        
        
    </style>
</head>
<header>
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">

        
        
        <div class="container-fluid">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <?= $this->Html->link('Home', ['controller' => 'Dogs','action' => 'home'], ['class'=>'nav-link active']) ?>
                    <!--<a class="nav-link active" href="#">Razze</a>-->
                </li>
                <li class="nav-item">
                    <?= $this->Html->link('Cani', ['controller' => 'Dogs','action' => 'index'], ['class'=>'nav-link']) ?>
                    <!--<a class="nav-link active" href="#">Razze</a>-->
                </li>
                <li class="nav-item">
                    <?= $this->Html->link(__('Proprietari'), ['controller' => 'Owners', 'action' => 'index'], ['class'=>'nav-link']) ?>
                    <!--<a class="nav-link active" href="#">Razze</a>-->
                </li>
                <li class="nav-item">
                    <?= $this->Html->link(__('Cliniche veterinarie'), ['controller' => 'Clinics', 'action' => 'index'], ['class'=>'nav-link']) ?>
                    <!--<a class="nav-link active" href="#">Razze</a>-->
                </li>
                <li class="nav-item">
                    <?= $this->Html->link(__('Passaggi di proprietà'), ['controller' => 'Transfers', 'action' => 'index'], ['class'=>'nav-link']) ?>
                    <!--<a class="nav-link active" href="#">Razze</a>-->
                </li>
                <li class="nav-item">
                    <?= $this->Html->link(__('Visite'), ['controller' => 'Visits', 'action' => 'index'], ['class'=>'nav-link']) ?>
                    <!--<a class="nav-link active" href="#">Razze</a>-->
                </li>
                <li class="nav-item">
                    <?= $this->Html->link(__('Razze'), ['controller' => 'Breeds', 'action' => 'index'], ['class'=>'nav-link']) ?>
                    <!--<a class="nav-link active" href="#">Razze</a>-->
                </li>
            </ul>
        </div> 

    </nav>
</header>
<body >
    <?= $this->fetch('content');?>
</body>
