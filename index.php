<!doctype html>
<html lang="es">
<?php 

    $Elemento= array();
    $Elemento [1]= "H";
    $Elemento [2]= "He";
    $Elemento [3]= "Li";
    $Elemento [4]= "Be";
    $Elemento [5]= "B";
    $Elemento [6]= "C";
    $Elemento [7]= "N";
    $Elemento [8]= "O";
    $Elemento [9]= "F";
    $Elemento [10]= "Ne";
    $Elemento [11]= "Na";
    $Elemento [12]= "Mg";
    $Elemento [13]= "Al";
    $Elemento [14]= "Si";
    $Elemento [15]= "P";
    $Elemento [16]= "S";
    $Elemento [17]= "Ci";
    $Elemento [18]= "Ar";
    $Elemento [19]= "K";
    $Elemento [20]= "Ca";
    $Elemento [21]= "Sc";
    $Elemento [22]= "Ti";
    $Elemento [23]= "V";
    $Elemento [24]= "Cr";
    $Elemento [25]= "Mn";
    $Elemento [26]= "Fe";
    $Elemento [27]= "Co";
    $Elemento [28]= "Ni";
    $Elemento [29]= "Cu";
    $Elemento [30]= "Zn";
    $Elemento [31]= "Ga";
    $Elemento [32]= "Ge";
    $Elemento [33]= "As";
    $Elemento [34]= "Se";
    $Elemento [35]= "Br";
    $Elemento [36]= "Kr";
    $Elemento [37]= "Rb";
    $Elemento [38]= "Sr";
    $Elemento [39]= "Y";
    $Elemento [40]= "Zr";
    $Elemento [41]= "Nb";
    $Elemento [42]= "Mo";
    $Elemento [43]= "Tc";
    $Elemento [44]= "Ru";
    $Elemento [45]= "Rh";
    $Elemento [46]= "Pd";
    $Elemento [47]= "Ag";
    $Elemento [48]= "Cd";
    $Elemento [49]= "In";
    $Elemento [50]= "Sn";
    $Elemento [51]= "Sb";
    $Elemento [52]= "Te";
    $Elemento [53]= "I";
    $Elemento [54]= "Xe";
    $Elemento [55]= "Cs";
    $Elemento [56]= "Ba";
    $Elemento [57]= "La";
    $Elemento [58]= "Ce";
    $Elemento [59]= "Pr";
    $Elemento [60]= "Nd";
    $Elemento [61]= "Pm";
    $Elemento [62]= "Sm";
    $Elemento [63]= "Eu";
    $Elemento [64]= "Gd";
    $Elemento [65]= "Tb";
    $Elemento [66]= "Dy";
    $Elemento [67]= "Ho";
    $Elemento [68]= "Er";
    $Elemento [69]= "Tm";
    $Elemento [70]= "Yb";
    $Elemento [71]= "Lu";
    $Elemento [72]= "Hf";
    $Elemento [73]= "Ta";
    $Elemento [74]= "W";
    $Elemento [75]= "Re";
    $Elemento [76]= "Os";
    $Elemento [77]= "Ir";
    $Elemento [78]= "Pt";
    $Elemento [79]= "Au";
    $Elemento [80]= "Hg";
    $Elemento [81]= "Ti";
    $Elemento [82]= "Pb";
    $Elemento [83]= "Bi";
    $Elemento [84]= "Po";
    $Elemento [85]= "At";
    $Elemento [86]= "Rn";
    $Elemento [87]= "Fr";
    $Elemento [88]= "Ra";
    $Elemento [89]= "Ac";
    $Elemento [90]= "Th";
    $Elemento [91]= "Pa";
    $Elemento [92]= "U";
    $Elemento [93]= "Np";
    $Elemento [94]= "Pu";
    $Elemento [95]= "Am";
    $Elemento [96]= "Cm";
    $Elemento [97]= "Bk";
    $Elemento [98]= "Cf";
    $Elemento [99]= "Es";
    $Elemento [100]= "Fm";
    $Elemento [101]= "Md";
    $Elemento [102]= "No";
    $Elemento [103]= "Lr";
    $Elemento [104]= "Rf";
    $Elemento [105]= "Db";
    $Elemento [106]= "Sg";
    $Elemento [107]= "Bh";
    $Elemento [108]= "Hs";
    $Elemento [109]= "Mt";
    $Elemento [110]= "Ds";
    $Elemento [111]= "Rg";
    $Elemento [112]= "Cn";
    $Elemento [113]= "Nh";
    $Elemento [114]= "Fl";
    $Elemento [115]= "Mc";
    $Elemento [116]= "Lv";
    $Elemento [117]= "Ts";
    $Elemento [118]= "Og";
    
    for ($i=1; $i<= 1; $i ++){

    }

    
    ?>

    <head>
        <meta charset="UTF-8">
        <title>Tabla Periodica</title>
        <style>

            body {
                background-color: #B3B6B7  ;
            }

            h1{
                Text-align: center;
            }

            table{
                margin-right: auto;
                margin-left: auto; 
            }
            
            table tr {
                text-align: center;
            }

            .otros_metales{
                background-color: #F1C40F;
            }

            .alcalinos {
                background-color: #AF7AC5;
            }

            .alcalinoterreos {
                background-color: #D2B4DE;
            }

            .materiales_de_transicion{
                background-color: #F7DC6F;
            }

            .Lantacidos {
                background-color: #E59866;
            }

            .actinidos{
                background-color: #EC7063;
            }

            .otros_no_metales{
                background-color: #7DCEA0;
            }

            .metaloides{
                background-color: #A9DFBF;
            }

            .alogenos{
                background-color: #A9CCE3;
            }

            .gases_nobles{
                background-color: #5DADE2;
            }

        </style>
    </head>

    <body>

        <h1>Tabla Periodica de los elementos.</h1>
        
        <?php for ($i=1; $i<= 1; $i ++){ ?>
        <table>
            
            <tr> 
                <td class= "otros_no_metales"><?php echo $Elemento [1]; ?></td>
                <td colspan= "16"></td>
                <td class= "gases_nobles"><?php echo $Elemento [2]; ?></td>
            </tr>
            
            <tr> 
                <td class="alcalinos"><?php echo $Elemento [3]; ?></td>
                <td class="alcalinoterreos"><?php echo $Elemento [4]; ?></td>
                <td colspan= "10"></td>
                <td class="metaloides"><?php echo $Elemento [5]; ?></td>
                <td class="otros_no_metales"><?php echo $Elemento [6]; ?></td>
                <td class="otros_no_metales"><?php echo $Elemento [7]; ?></td>
                <td class="otros_no_metales"><?php echo $Elemento [8]; ?></td>
                <td class="alogenos"><?php echo $Elemento [9]; ?></td>
                <td class="gases_nobles"><?php echo $Elemento [10]; ?></td>
            </tr>

            <tr> 
                <td class="alcalinos"><?php echo $Elemento [11]; ?></td>
                <td class="alcalinoterreos"><?php echo $Elemento [12]; ?></td>
                <td colspan= "10"></td>
                <td class="otros_metales"><?php echo $Elemento [13]; ?></td>
                <td class="metaloides"><?php echo $Elemento [14]; ?></td>
                <td class="otros_no_metales"><?php echo $Elemento [15]; ?></td>
                <td class="otros_no_metales"><?php echo $Elemento [16]; ?></td>
                <td class="alogenos"><?php echo $Elemento [17]; ?></td>
                <td class="gases_nobles"><?php echo $Elemento [18]; ?></td>
            </tr>

            <tr> 
                <td class="alcalinos"><?php echo $Elemento [19]; ?></td>
                <td class="alcalinoterreos"><?php echo $Elemento [20]; ?></td>
                <td class="materiales_de_transicion"><?php echo $Elemento [21]; ?></td>
                <td class="materiales_de_transicion"><?php echo $Elemento [22]; ?></td>
                <td class="materiales_de_transicion"><?php echo $Elemento [23]; ?></td>
                <td class="materiales_de_transicion"><?php echo $Elemento [24]; ?></td>
                <td class="materiales_de_transicion"><?php echo $Elemento [25]; ?></td>
                <td class="materiales_de_transicion"><?php echo $Elemento [26]; ?></td>
                <td class="materiales_de_transicion"><?php echo $Elemento [27]; ?></td>
                <td class="materiales_de_transicion"><?php echo $Elemento [28]; ?></td>
                <td class="materiales_de_transicion"><?php echo $Elemento [29]; ?></td>
                <td class="materiales_de_transicion"><?php echo $Elemento [30]; ?></td>
                <td class="otros_metales"><?php echo $Elemento [31]; ?> </td>
                <td class="metaloides"><?php echo $Elemento [32]; ?></td>
                <td class="metaloides"><?php echo $Elemento [33]; ?></td>
                <td class="otros_no_metales"><?php echo $Elemento [34]; ?></td>
                <td class="alogenos"><?php echo $Elemento [35]; ?></td>
                <td class="gases_nobles"><?php echo $Elemento [36]; ?></td>
            </tr>

            <tr> 
                <td class="alcalinos"><?php echo $Elemento [37]; ?></td>
                <td class="alcalinoterreos"><?php echo $Elemento [38]; ?></td>
                <td class="materiales_de_transicion"><?php echo $Elemento [39]; ?></td>
                <td class="materiales_de_transicion"><?php echo $Elemento [40]; ?></td>
                <td class="materiales_de_transicion"><?php echo $Elemento [41]; ?></td>
                <td class="materiales_de_transicion"><?php echo $Elemento [42]; ?></td>
                <td class="materiales_de_transicion"><?php echo $Elemento [43]; ?></td>
                <td class="materiales_de_transicion"><?php echo $Elemento [44]; ?></td>
                <td class="materiales_de_transicion"><?php echo $Elemento [45]; ?></td>
                <td class="materiales_de_transicion"><?php echo $Elemento [46]; ?></td>
                <td class="materiales_de_transicion"><?php echo $Elemento [47]; ?></td>
                <td class="materiales_de_transicion"><?php echo $Elemento [48]; ?></td>
                <td class="otros_metales"><?php echo $Elemento [49]; ?></td>
                <td class="otros_metales"><?php echo $Elemento [50]; ?></td>
                <td class="metaloides"><?php echo $Elemento [51]; ?></td>
                <td class="metaloides"><?php echo $Elemento [52]; ?></td>
                <td class="alogenos"><?php echo $Elemento [53]; ?></td>
                <td class="gases_nobles"><?php echo $Elemento [54]; ?></td>
            </tr>

            <tr> 
                <td class="alcalinos"><?php echo $Elemento [55]; ?></td>
                <td class="alcalinoterreos"><?php echo $Elemento [56]; ?></td>
                <td class="Lantacidos"><?php echo $Elemento [71]; ?></td>
                <td class="materiales_de_transicion"><?php echo $Elemento [72]; ?></td>
                <td class="materiales_de_transicion"><?php echo $Elemento [73]; ?></td>
                <td class="materiales_de_transicion"><?php echo $Elemento [74]; ?></td>
                <td class="materiales_de_transicion"><?php echo $Elemento [75]; ?></td>
                <td class="materiales_de_transicion"><?php echo $Elemento [76]; ?></td>
                <td class="materiales_de_transicion"><?php echo $Elemento [77]; ?></td>
                <td class="materiales_de_transicion"><?php echo $Elemento [78]; ?></td>
                <td class="materiales_de_transicion"><?php echo $Elemento [79]; ?></td>
                <td class="materiales_de_transicion"><?php echo $Elemento [80]; ?></td>
                <td class="otros_metales"><?php echo $Elemento [81]; ?></td>
                <td class="otros_metales"><?php echo $Elemento [82]; ?></td>
                <td class="otros_metales"><?php echo $Elemento [83]; ?></td>
                <td class="metaloides"><?php echo $Elemento [84]; ?></td>
                <td class="alogenos"><?php echo $Elemento [85]; ?></td>
                <td class="gases_nobles"><?php echo $Elemento [86]; ?></td>
            </tr>

            <tr> 
                <td class="alcalinos"><?php echo $Elemento [87]; ?></td>
                <td class="alcalinoterreos"><?php echo $Elemento [88]; ?></td>
                <td class="actinidos"><?php echo $Elemento [103]; ?></td>
                <td class="materiales_de_transicion"><?php echo $Elemento [104]; ?></td>
                <td class="materiales_de_transicion"><?php echo $Elemento [105]; ?></td>
                <td class="materiales_de_transicion"><?php echo $Elemento [106]; ?></td>
                <td class="materiales_de_transicion"><?php echo $Elemento [107]; ?></td>
                <td class="materiales_de_transicion"><?php echo $Elemento [108]; ?></td>
                <td class="materiales_de_transicion"><?php echo $Elemento [109]; ?></td>
                <td class="materiales_de_transicion"><?php echo $Elemento [110]; ?></td>
                <td class="materiales_de_transicion"><?php echo $Elemento [111]; ?></td>
                <td class="materiales_de_transicion"><?php echo $Elemento [112]; ?></td>
                <td class="otros_metales"><?php echo $Elemento [113]; ?></td>
                <td class="otros_metales"><?php echo $Elemento [114]; ?></td>
                <td class="otros_metales"><?php echo $Elemento [115]; ?></td>
                <td class="otros_metales"><?php echo $Elemento [116]; ?></td>
                <td class="alogenos"><?php echo $Elemento [117]; ?></td>
                <td class="gases_nobles"><?php echo $Elemento [118]; ?></td>
            </tr>

        </table>   
            
        <table>
        <br><br>
            <tr>
                <td class="Lantacidos"><?php echo $Elemento [57]; ?></td>
                <td class="Lantacidos"><?php echo $Elemento [58]; ?></td>
                <td class="Lantacidos"><?php echo $Elemento [59]; ?></td>
                <td class="Lantacidos"><?php echo $Elemento [60]; ?></td>
                <td class="Lantacidos"><?php echo $Elemento [61]; ?></td>
                <td class="Lantacidos"><?php echo $Elemento [62]; ?></td>
                <td class="Lantacidos"><?php echo $Elemento [63]; ?></td>
                <td class="Lantacidos"><?php echo $Elemento [64]; ?></td>
                <td class="Lantacidos"><?php echo $Elemento [65]; ?></td>
                <td class="Lantacidos"><?php echo $Elemento [66]; ?></td>
                <td class="Lantacidos"><?php echo $Elemento [67]; ?></td>
                <td class="Lantacidos"><?php echo $Elemento [68]; ?></td>
                <td class="Lantacidos"><?php echo $Elemento [69]; ?></td>
                <td class="Lantacidos"><?php echo $Elemento [70]; ?></td>
                <td class="Lantacidos"><?php echo $Elemento [71]; ?></td>
            </tr>

            <tr>
                <td class="actinidos"><?php echo $Elemento [89]; ?></td>
                <td class="actinidos"><?php echo $Elemento [90]; ?></td>
                <td class="actinidos"><?php echo $Elemento [91]; ?></td>
                <td class="actinidos"><?php echo $Elemento [92]; ?></td>
                <td class="actinidos"><?php echo $Elemento [93]; ?></td>
                <td class="actinidos"><?php echo $Elemento [94]; ?></td>
                <td class="actinidos"><?php echo $Elemento [95]; ?></td>
                <td class="actinidos"><?php echo $Elemento [96]; ?></td>
                <td class="actinidos"><?php echo $Elemento [97]; ?></td>
                <td class="actinidos"><?php echo $Elemento [98]; ?></td>
                <td class="actinidos"><?php echo $Elemento [99]; ?></td>
                <td class="actinidos"><?php echo $Elemento [100]; ?></td>
                <td class="actinidos"><?php echo $Elemento [101]; ?></td>
                <td class="actinidos"><?php echo $Elemento [102]; ?></td>
                <td class="actinidos"><?php echo $Elemento [103]; ?></td>
            </tr>
        </table>
            
            <?php } ?> 

    </body>

</html>