
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <script type="text/javascript" src="jquery.min.js"></script>
    <script type="text/javascript" src="jquery.cycle.all.js"></script>
    <script type="text/javascript">
     	$(document).ready(function() {
			    $('#divbn').cycle({
					fx: 'scrollLeft',
					timeout:500    
                });
            });
                
    </script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>

<body bgcolor="lightgrey">

    <header class="body_full">
        <div id="div1">
            <img src="./img/logo.png" alt="" style="max-width: 200px;" height="133px">
            <!-- <h1>
                VueJs
            </h1> -->
        </div>
        <!-- <div id="divBusca">
            <img src="./img/lupa.png" alt="Buscar..." height="30px">
            <form action="www.google.com" method="post">
                <input type="text" id="txtBusca" placeholder="Buscar..." />

                <input type="submit" id="btnBusca" value="Buscar">
            </form> -->
        </div>
        <nav>
            <ul class="link_link">
                
                <li>
                    <div style="text-align: center;">
                        <img src="./img/user.png" alt="" style="max-width: 30px;">
                    </div>
                    <a style="color:red ;" href="cadastro.php">Cadastro
                    
                </li>
                <li>
                    
                <div style="text-align: center;">
                        <img src="./img/user.png" alt="" style="max-width: 30px;">
                    </div>
                    <a style="color:red ;" href="login.php">
                    Login</a>
                </li>
                <li>
                    <div style="text-align: center;">
                        <img src="./img/iconint.png" alt="" style="max-width: 28px;">
                    </div>
                    <div style=" text-align: center;">
                        <a style="color:red ;" href="sobre.php">About</a>

                    </div>
                </li>
                <li>
                    <div style="text-align: center;">
                        <img src="./img/tel.png" alt="" style="max-width: 26px;">
                    </div>
                    <a style="color:red ;" href="#div_full">Contact</a>
                </li>
            </ul>

        </nav>
    </header>
    

    <div id="divbn">
        
            <img src="./img/banner.jpg" alt="" height="600px" width="2000px">
            <img src="./img/banner2.jpg" alt="" height="600px" width="2000px">
        
    </div>
    <img src="./img/fundoop.png" alt="" width="100%">
    <div style="background-color: black;" id="divl">
       
        
        <img class="imganun" src="./img/cps.png">
    

    
    
        <img class="imganun" src="./img/cxb.png" alt="">
    
       
    <img id="imgdivl" src="./img/cnin.png" alt="">
    
    </div>
    
    
    <div class="grid-view"> 
        <div class="styleBox" style="border: 1px solid #000; display: block;" >
            <div>
                <img style="align-self: flex-start " src="./img/ghost.webp" alt="" height="270px" width="100%">
            </div>
            <div class="box_game" style="display: block;">
                <div class="title_game">Ghostwire: Tokyo Deluxe Edition - PS4</div>
                <div class="valor"> R$ 120,00</div>
                <div><span class="parcela"> até 4x de R$400 sem juros</span></div>
                <div><span class="fpag"> ou <span class="valor_fpag"> R$ 284,90 </span> via pix</span></div>
                <a href="ghost.php"> <button class="btn">Comprar</button></a>
            </div>
        </div>
        <div class="styleBox" style="border: 1px solid #000; display: block;">
            <div>
                <img style="align-self: flex-start " src="./img/Gow.jpg" alt="" height="270px" width="100%">
            </div>
            <div class="box_game" style="display: block;">
                <div class="title_game">God Of War - PS4</div>
                <div class="valor"> R$ 120,00</div>
                <div><span class="parcela"> até 4x de R$400 sem juros</span></div>
                <div><span class="fpag"> ou <span class="valor_fpag"> R$ 284,90 </span> via pix</span></div>
                <a href="gow.php"> <button class="btn">Comprar</button></a>
            </div>
        </div>
        <div class="styleBox" style="border: 1px solid #000; display: block;">
            <div>
                <img style="align-self: flex-start " src="./img/elden.jpg" alt="" height="270px" width="100%">
            </div>
            <div class="box_game" style="display: block;">
                <div class="title_game">Game Elden Ring - PS4</div>
                <div class="valor"> R$ 800,00</div>
                <div><span class="parcela"> até 4x de R$200 sem juros</span></div>
                <div><span class="fpag"> ou <span class="valor_fpag"> R$ 369,90 </span> via pix</span></div>
                 <a href="elden.php"><button class="btn">Comprar</button></a>
            </div>
        </div>

        <div class="styleBox" style="border: 1px solid #000; display: block;">
            <div>
                <img style="align-self: flex-start " src="./img/forza.jpg" alt="" height="270px" width="100%">
            </div>
            <div class="box_game" style="display: block;">
                <div class="title_game">Forza Horizon - Xbox</div>
                <div class="valor"> R$ 200,00</div>
                <div><span class="parcela"> até 4x de R$400 sem juros</span></div>
                <div><span class="fpag"> ou <span class="valor_fpag"> R$ 284,90 </span> via pix</span></div>
                <a href="forza.php"> <button class="btn">Comprar</button></a>
            </div>
        </div>
    </div>
        <div class="grid-view">
        <div class="styleBox" style="border: 1px solid #000; display: block;">
            <div>
                <img style="align-self: flex-start " src="./img/pes22.jpg" alt="" height="270px" width="100%">
            </div>
            <div class="box_game" style="display: block;">
                <div class="title_game">PES 2022 - PS4</div>
                <div class="valor"> R$ 200,00</div>
                <div><span class="parcela"> até 4x de R$400 sem juros</span></div>
                <div><span class="fpag"> ou <span class="valor_fpag"> R$ 284,90 </span> via pix</span></div>
                <a href="pes.php"> <button class="btn">Comprar</button></a>
            </div>
        </div> 
        <div class="styleBox" style="border: 1px solid #000; display: block;">
            <div>
                <img style="align-self: flex-start " src="./img/tlou.webp" alt="" height="270px" width="100%">
            </div>
            <div class="box_game" style="display: block;">
                <div class="title_game">The Last Of Us 2 - PS4</div>
                <div class="valor"> R$ 200,00</div>
                <div><span class="parcela"> até 4x de R$400 sem juros</span></div>
                <div><span class="fpag"> ou <span class="valor_fpag"> R$ 284,90 </span> via pix</span></div>
                <a href="tlou.php"> <button class="btn">Comprar</button></a>
            </div>
            <a class="btntop" href="#">
       
                <img style="width: 100px; background-color: red;" src="./img/icon.png" alt="">
            
                
                        
            </a>
        </div>
         <div class="styleBox" style="border: 1px solid #000; display: block;">
            <div>
                <img style="align-self: flex-start " src="./img/acval.jpg" alt="" height="270px" width="100%">
            </div>
            <div class="box_game" style="display: block;">
                <div class="title_game">Assassin's Creed Valhalla - Xbox</div>
                <div class="valor"> R$ 600,00</div>
                <div><span class="parcela"> até 3x de R$200 sem juros</span></div>
                <div><span class="fpag"> ou <span class="valor_fpag"> R$ 284,90 </span> via pix</span></div>
                <a href="assassins.php"> <button class="btn">Comprar</button></a>
            </div>
        </div> 
     
        
        
        
        
        
         <div class="styleBox" style="border: 1px solid #000; display: block;">
            <div>
                <img style="align-self: flex-start " src="./img/gowr.jpg" alt="" height="270px" width="100%">
            </div>
            <div class="box_game" style="display: block;">
                <div class="title_game">God Of War - Ragnarok</div>
                <div class="valor"> R$ 300,00</div>
                <div><span class="parcela"> até 4x de R$400 sem juros</span></div>
                <div><span class="fpag"> ou <span class="valor_fpag"> R$ 284,90 </span> via pix</span></div>
               <a href="gowrag.php"> <button class="btn">Comprar</button></a>
            </div>
            

        </div> 
    </div>
    <div id="ppag">
        
    
</div>
    
     <footer id="div_full" class="div_full">
        <div class="div_rdp">
           <img src="./img/logo.png" alt="" style="max-width: 150px;" height="133px">
           Blaze Store
        </div>
        <div class="div_rdp1">
            Atendimento: (21) 968809708
            blazestoresupport@gmail.com
<br> <br>
            Horário de atendimento <br>
Seg a Sex de 08h às 00hs <br>
Sáb a Dom de 10h às 23hs
        </div>
        <div class="div_rdp2">
            GUILHERME DE OLIVEIRA 43408816867 | <br> CNPJ: 29.135.352/0001-36 |  <br> RUA MARCOS CALHEIRO, 543 AP- CIDADE BANGU - RJ CEP 08583-360
        </div>
        <div class="div_rdp3">
            <!-- <div style="background-color: red; align-self: center;">
            <a href="www.google.com">
            <img src="./img/logo.png" alt="" style="max-width: 150px;" height="133px">
            </a> -->
        
    </div>
   
</div>

</footer>
    

    <!-- <div id="divlat">
        <fieldset>
        <h2 style="font-family: Verdana, Geneva, Tahoma, sans-serif; padding-left: 10px; color: rgb(0, 0, 0) ; padding-bottom: 10px;">Plataformas</h2>
        
            <a class="linkp" href="Google.com">Ps4</a>
            <br>
            
            <a class="linkp" href="Gsde.com">Xbox One</a>
            <br>
            
            <a class="linkp" href="you.com">Nintendo Wii</a> 
            <br>
        </fieldset>
            <h2 style="font-family: Verdana, Geneva, Tahoma, sans-serif; padding-left: 10px; color: rgb(19, 18, 18) ; padding-bottom: 10px;">Categoria</h2>
        
        </form>
    </div> -->

</body>

</html>