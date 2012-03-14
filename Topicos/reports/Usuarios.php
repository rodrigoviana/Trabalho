<?php

require_once 'bin/fpdf.php';

class PDF extends FPDF {

    function Header() {
        // Inserimos uma imagem
        $this->Image('http://ajudadinamica.net76.net/administrator/reports/imagens/logotipo.jpg', 4, 0.4, 15);
        $this->SetFont('Arial', 'B', 16);
        $this->Ln(3);
    }

    function Footer() {
        $this->SetY(-1);
        $this->SetFont('Arial', 'I', 8);
        $this->Cell(0, 0, 'Página ' . $this->PageNo() . ' de {total}', 0, 0, 'R');
        $this->SetY(-1);
        $this->SetFont('Arial', 'I', 8);
        $this->Cell(0, 0, 'Data: ' . date('d/m/Y'), 0, 0, 'C');
    }

}

session_start();

include "../bd/conecta_banco.php";
$nome_usuario = $_SESSION['nome_usuario'];
$login = $_SESSION['login_usuario'];

if ($login == NULL) {
    echo 'Voc&ecirc; n&atilde;o tem permiss&atilde;o para acessar essa &aacute;rea do sistema.';
} else {


    $PDF = new PDF('P', 'cm', 'A4');
    $PDF->AliasNbPages('{total}');
    $PDF->setMargins(3, 2, 2);
    $PDF->SetAuthor('Eliel Siqueira Rodrigues');
    $PDF->SetTitle('Turmas');

    $PDF->AddPage();
    $PDF->SetFont('Arial', 'B', 18);
    $PDF->Cell(0, 0.9, 'Relatório de usuários', 0, 1, 'C');
    $PDF->SetFont('Arial', 'B', 14);

    $usuario = mysql_query("SELECT login, email, cpf, nome, case ativo
	                                When 1 then 'ativo'
	                                when 0 then 'excluido'
                                end as ativo from usuario order by nome");
    $qtdusuarios = mysql_num_rows($usuario);
        if ($qtdusuarios == 0) {
            $PDF->SetFont('Arial', '', 8);
            $PDF->Cell(1, 0.5, 'Nenhum Usuario foi cadastrado', 0, 1, 'L', 0);
        } else {
           
                $PDF->SetFont('Arial', 'B', 12);
                $PDF->Ln(0.2);
              
                $consulta = "SELECT login, email, cpf, nome, case ativo
	                                When 1 then 'ativo'
	                                when 0 then 'excluido'
                                end as ativo from usuario order by nome";
                $aluno = mysql_query($consulta);
                $qtdAlunos = mysql_num_rows($aluno);
                $PDF->SetFont('Arial', 'B', 10);
                $PDF->SetFillColor(90, 90, 90);
                $PDF->SetTextColor(255, 255, 255);
                $PDF->Cell(2, 0.5, 'Login', 1, 0, 'L', 1);
                $PDF->Cell(5, 0.5, 'Nome', 1, 0, 'L', 1);
                $PDF->Cell(5, 0.5, 'Email', 1, 0, 'L', 1);
                $PDF->Cell(3, 0.5, 'CPF', 1, 0, 'L', 1);
                $PDF->Cell(2, 0.5, 'Ativo', 1, 1, 'L', 1);
                $PDF->SetFont('Arial', '', 8);
                $PDF->SetTextColor(0, 0, 0);
                $PDF->SetFillColor(255, 255, 255);
                for ($k = 0; $k < $qtdAlunos; $k++) {
                    $PDF->Cell(2, 0.5, mysql_result($aluno, $k, "login"), 1, 0, 'L', 1);
                    $PDF->Cell(5, 0.5, mysql_result($aluno, $k, "nome"), 1, 0, 'L', 1);
                    $PDF->Cell(5, 0.5, mysql_result($aluno, $k, "email"), 1, 0, 'L', 1);
                    $PDF->Cell(3, 0.5, mysql_result($aluno, $k, "cpf"), 1, 0, 'L', 1);
                    $PDF->Cell(2, 0.5, mysql_result($aluno, $k, "ativo"), 1, 1, 'L', 1);
                }
            
        }

    }
    $PDF -> SetFillColor(90, 90, 90);
    $PDF -> SetTextColor(255, 255, 255);
    $PDF -> Cell(15,0.5,'Total', 1,0, 'L',1);
    $resultado2 = mysql_query("SELECT count(login) as qtd FROM usuario");
    $PDF -> Cell(2,0.5,mysql_result($resultado2, 0, "qtd"), 1,1, 'R',1);
    $PDF->Output('Usuario.pdf', 'I');

?>
