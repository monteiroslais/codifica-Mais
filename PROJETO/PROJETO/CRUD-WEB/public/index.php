<?php
    // Inicia a sessão
    session_start();

    // Define o array de categorias, unidades de medida e produtos
    $_SESSION['categorias'] = [
        '1' => 'Chanel',
        '2' => 'Hermès',
        '3' => 'Gucci',
        '4' => 'Louis Vuitton',
        '5' => 'Yves Saint Laurent',
        '6' => 'Dior',
        '7' => 'Prada',
    ];

    $_SESSION['unidades_medidas'] = [
        '1' => 'Un',
        '2' => 'Kg',
        '3' => 'g',
        '4' => 'L',
        '5' => 'mm',
        '6' => 'cm',
        '7' => 'm',
        '8' => 'm²',
    ];

    $_SESSION['produtos'] = [[
            'id' => 1,
            'nome' => 'Bolsa Tote Caviar Preto - Chanel',
            'sku' => '101',
            'unidade_medida_id' => '1',
            'valor' => 32000.00,
            'quantidade' => 3,
            'categoria_id' => '1',
        ],[
            'id' => 2,
            'nome' => 'Bolsa In-The-Loop 18 - Hermès',
            'sku' => '102',
            'unidade_medida_id' => '1',
            'valor' => 30300.00,
            'quantidade' => 5,
            'categoria_id' => '2',
        ],[
            'id' => 3,
            'nome' => 'Bolsa Tote Ophidia Média - Gucci',
            'sku' => '103',
            'unidade_medida_id' => '1',
            'valor' => 9540.00,
            'quantidade' => 8,
            'categoria_id' => '3',
        ],[
            'id' => 4,
            'nome' => 'Bolsa Nano Diane - Louis Vuitton',
            'sku' => '104',
            'unidade_medida_id' => '1',
            'valor' => 12200.00,
            'quantidade' => 5,
            'categoria_id' => '4',
        ],[
            'id' => 5,
            'nome' => 'Bolsa Niki Large in Grained Lambskin - Yves Saint Laurent',
            'sku' => '105',
            'unidade_medida_id' => '1',
            'valor' => 18500.00,
            'quantidade' => 4,
            'categoria_id' => '5',
        ],[
            'id' => 6,
            'nome' => 'Bolsa Tote Lady Preta - Dior',
            'sku' => '106',
            'unidade_medida_id' => '1',
            'valor' => 56000.00,
            'quantidade' => 2,
            'categoria_id' => '6',
        ],[
            'id' => 7,
            'nome' => 'Bolsa de ombro Cleo em couro escovado - Prada',
            'sku' => '107',
            'unidade_medida_id' => '1',
            'valor' => 18500.00,
            'quantidade' => 4,
            'categoria_id' => '7',
        ],        
    ];

    // Redireciona para a página de listagem
    header('Location: listagem.php');

?>