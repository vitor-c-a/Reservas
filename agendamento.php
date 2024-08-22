<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agendamento</title>
    <link rel="stylesheet" href="modelo_navegacao.css">
    <link rel="stylesheet" href="CSS/style_agendamento.css">
</head>

<body>
    <?php
    include_once "modelo_navegacao.php";
    ?>
    

    <main>
        <h1 class="titulo">
            <img class="linha_esquerda" src="./img/icone_linha.png" alt="linha"> Faça sua reserva <img
                class="linha_direira" src="./img/icone_linha.png" alt="linha">
        </h1>

        <div id="calendario">
            <div id="data_ano"> 
                <img id="anoSeguinte" class="icone_seta" src="img/seta_1.png" alt="Icone de seta">
                <div id="ano"></div>
                <img id="anoAnterior" class="icone_seta" src=" img/seta_2.png" alt="">
            </div>

            <table>
                <tr class="meses">
                    <td>Jan</td>
                    <td>Fev</td>
                    <td>Mar</td>
                    <td>Abr</td>
                    <td>Mai</td>
                    <td>Jun</td>
                    <td>Jul</td>
                    <td>Ago</td>
                    <td>Set</td>
                    <td>Out</td>
                    <td>Nov</td>
                    <td>Dez</td>
                </tr>

                <tr class="dias">
                    <th>Dom</th>
                    <th>Seg</th>
                    <th>Ter</th>
                    <th>Qua</th>
                    <th>Qui</th>
                    <th>Sex</th>
                    <th>Sáb</th>
                </tr>
                <tr class="dias">
                    <td>28</td>
                    <td>29</td>
                    <td>30</td>
                    <td>31</td>
                    <td>01</td>
                    <td>02</td>
                    <td>03</td>
                </tr>
                <tr class="dias">
                    <td>04</td>
                    <td>05</td>
                    <td>06</td>
                    <td>07</td>
                    <td>08</td>
                    <td>09</td>
                    <td>10</td>
                </tr>
                <tr class="dias">
                    <td>11</td>
                    <td>12</td>
                    <td>13</td>
                    <td>14</td>
                    <td>15</td>
                    <td>16</td>
                    <td>17</td>
                </tr>
                <tr class="dias">
                    <td>18</td>
                    <td>19</td>
                    <td>20</td>
                    <td>21</td>
                    <td>22</td>
                    <td>23</td>
                    <td>24</td>
                </tr>
                <tr class="dias">
                    <td>25</td>
                    <td>26</td>
                    <td>27</td>
                    <td>28</td>
                    <td>29</td>
                    <td>30</td>
                    <td>31</td>
                </tr>
            </table>

        </div>
    </main>




    <script src="JS/agendamento.js"></script>
</body>

</html