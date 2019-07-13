<?php
include 'ServerTokPed.php';
$init = new Bom();
echo "
";
echo "\033[31;1m
mmmmmmm  mmmm  m    m  mmmm  mmmmm  mmmmmm mmmm   mmmmm    mm
   #    m    m #  m   m    m #    # #      #    m   #      ##
   #    #    # #m#    #    # #mmm#  #mmmmm #    #   #     #  #
   #    #    # #  #m  #    # #      #      #    #   #     #mm#
   #     #mm#  #    m  #mm#  #      #mmmmm #mmmn  mm#mm  #    #
";
echo "
";
echo "\033[32;1m
       ______________
        ║▒▒▒▒▒▒▒▒▒▒║
        ║▒▒▒▒▒▒▒▒▒▒║
        ║▒▒▒▒▒▒▒▒▒▒║
       ╔════════════╗
       ╚════════════╝
        ║██████████╚╗		 # Tools Spam TokPed
        ║██╔══╗█╔═╗█║
        ║██║╬╔╝█╚╗║█║	         # Coded : AnyMax
        ║██╚═╝█║█╚╝█║
        ╚╗█████████═╝            # InstG : rizkylicious17
         ╚╗║╠╩╩╩╩╩╝
          ║║┈┈┈█▐█████▒.｡oO
          ║██╠╦╦╦╗
          ╚╗██████
           ╚════╝
";
echo "
";
echo "
";
echo "\033[31;1m╭─ Input Target Number [628x]\n╰─> ";
$a = trim(fgets(STDIN));
echo "
";
echo "\033[31;1m╭─ No 1 For SMS - No 2 For Call\n╰─> ";
$b = trim(fgets(STDIN));
$init->type = "$b";
$init->no = "$a";
if ($init->type == 1) {
	for ($i=0; $i < 1; $i++) { 
	    $init->Verif($init->no,$init->type);
	}
}elseif ($init->type == 2) {
	 $init->Verif($init->no,$init->type);
}
