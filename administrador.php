<style type="text/css">
.textos{ 
     background: #56CF31 url( images/azul.png ) repeat-x scroll 0 50%; 
  border-color: #B2F38A #125B0A #125B0A #B2F38A; 
  border-style: none; 
  border-width: 1px; 
  font-size:20px; 
  color:#006;     
  overflow: visible; 
  padding: 0.1em 1px; 
  text-align: center; 
} 
.textos2{ 
     background: #56CF31 url( images/azul.png ) repeat-x scroll 0 50%; 
  border-color: #B2F38A #125B0A #125B0A #B2F38A; 
  border-style: none; 
  border-width: 1px; 
  font-size:40px; 
  color:#006;  
  overflow: visible; 
  padding: 0.1em 1px; 
  text-align: center; 
} 

ul.menu { 
    list-style-type: none; 
    margin: 0; 
    padding: 0; 
    overflow: hidden; 
    background-color: #051376; 
} 

ul.menu li { 
    float: left; 
} 

ul.menu li a, .dropbtn { 
    display: inline-block; 
    color: white; 
    text-align: center; 
    padding: 14px 16px; 
    text-decoration: none; 
} 

ul.menu li a:hover, .dropdown:hover .dropbtn { 
    background-color: steelblue; 
} 

ul.menu li.dropdown { 
    display: inline-block; 
} 

ul.menu .dropdown-content { 
    display: none; 
    position: absolute; 
    background-color: #f9f9f9; 
    min-width: 160px; 
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2); 
    z-index: 1; 
} 

ul.menu .dropdown-content a { 
    color: black; 
    padding: 12px 16px; 
    text-decoration: none; 
    display: block; 
    text-align: left; 
} 

ul.menu .dropdown-content a:hover {background-color: #f1f1f1} 

ul.menu .dropdown:hover .dropdown-content { 
    display: block; 
} 


.parraforic{ 
     
     
    font-family:"Lucida Console", Monaco, monospace; 
/*    font-family:"Palatino Linotype", "Book Antiqua", Palatino, serif; 
     
    font-family:"MS Serif", "New York", serif; 
    */ 
    font-size:15px; 
} 
strong { 
    font-family:"Comic Sans MS", cursive; 
} 

table.blue-form { 
    border:3px solid #3E83C9; 
    margin-top: 0px; 
    margin-bottom: 10px; 
    font-size:90%; 
    font-weight: bold; 
    box-shadow:0px 5px 10px #666; 
} 
table.blue-form th{ 
    border-bottom:3px solid #999; 
    padding: 3px; 
    background-color:#E2D0F9 
} 
table.blue-form td{ 
    border-bottom:1px solid #999; 
    padding: 3px; 
} 

.boton12{ 
    background:#06C; 
    border: 1px double #6699FF; 
    color: #FFF; 
    font-weight: bold; 
    cursor: pointer; 
     
    margin: 0 0px 0 0px; 
    padding: 2px 10px 2px 10px; 
    border-radius:5px; 
    box-shadow: inset 0px 3px 5px #FFF; 
} 
.boton13{ 
    background:#06C; 
    border: 1px double #6699FF; 
    color: #FFF; 
    font-weight: bold; 
    /*cursor: pointer;*/ 
   
    margin: 0 0px 0 0px; 
    padding: 2px 10px 2px 10px; 
    border-radius:5px; 
    box-shadow: inset 0px 3px 5px #FFF; 
}
</style>
<ul class=menu> 
              
 <li class="dropdown">

  <a href="inicio.php">Inicio<span class="menu-icon fa fa-clock-o"></span></a>   
<a href="agregarpacientes.php">Agregar Paciente<span class="menu-icon fa fa-clock-o"></span></a>
  <a href="agregardoctores.php">Agregar Doctor<span class="menu-icon fa fa-clock-o"></span></a>
   <a href="agregarcitas.php">Realizar una Cita<span class="menu-icon fa fa-clock-o"></span></a>
    <a href="buscarcitas.php">Consultar una Cita<span class="menu-icon fa fa-clock-o"></span></a>
    <a href="buscarpaciente.php">Consulta de pacientes<span class="menu-icon fa fa-clock-o"></span></a>
  <a href="buscardoctores.php">Consulta de doctores<span class="menu-icon fa fa-clock-o"></span></a>
   <a href="servicios.php">Servicios de pacientes<span class="menu-icon fa fa-clock-o"></span></a>
   </div>
 </li>


  <li>          
   <a href="./logout.php"><img src=iconos/salir.jpg width=20> Salir </a>
 </li>
 </ul>
