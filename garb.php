<?php
/**
 * 
 * GARB - GERADOR DE ARQUIVOS DE REMESSA BRADESCO
 * 
 * @author Thiago Henrique
 * 
 * PATA TESTE
 * Para a realiza��o do teste, poder� ser transmitido quantos Arquivos Remessa lhes convier,
 * por�m, gravados com todos os dados fict�cios, exigidos no Lay-out, e dever� conter no
 * m�ximo 10 registros a vencer. Ap�s a oficializa��o, os Arquivos Remessa poder�o conter
 * quantos registros lhes convier. Os arquivos n�o devem em hip�tese alguma seres compactados
 * e sim zonados, bem como os registros devem ser de acordo com as especifica��es do Lay-out.
 * 
 * CBDDMM??.REM
 *	CB � Cobran�a Bradesco
 *	DD � O Dia gera��o do arquivo
 *	MM � O M�s da gera��o do Arquivo
 *	?? - vari�veis alfanum�rico-Num�ricas
 *	Ex.: 01, AB, A1 etc.
 * Nota: Quando se tratar de arquivo remessa para teste, a extens�o dever� ser TST.
 */

//REALIZANDO TESTES
include 'src/HeaderLabel.php';
include 'src/Trailler.php';

$cabecalho = new HeaderLabel();

//TESTANDO O HEADERLABEL
$cabecalho->setCodigo_empresa('105508');
$cabecalho->setNome_empresa('Agnetech Solu��es empresariais');
$cabecalho->setNumero_sequencial_remessa('0000219');
$cabecalho->setData_gravacao('280815'); 

echo "<pre>";
echo $cabecalho->montar_linha();
//FIM DO TESTE HEADERLABEL

//TESTANDO O TRAILLER
$trailler = new Trailler();

echo '<br>';
$trailler->setNumero_sequencial_regsitro('132');

echo $trailler->montar_linha();
echo '</pre>';
//FIM DO TESTE TRAILLER