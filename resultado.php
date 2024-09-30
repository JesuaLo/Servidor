<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>El resultado es...</title>
</head>
<body>
    <?php
    $errores = [];

        if (isset($_GET['op1'])) {
            $op1 = trim($_GET['op1']);
            if (empty($op1)) {
                $errores[] = 'El primer operando es obligatorio';
            } else {
                if (!is_numeric($op1)) {
                    $errores[] = 'El primer operando debe ser numérico';
                }
            }
        }

        if (isset($_GET['op2'])) {
            $op2 = trim($_GET['op2']);
            if (empty($op2)) {
                $errores[] = 'El segundo operando es obligatorio';
            } else {
                if (!is_numeric($op2)) {
                    $errores[] = 'El segundo operando debe ser numérico';
                }
            }
        }

        $OPER_VAL = ['+', '-', '*', '/'];

        if (empty($_GET['oper'])) {
            $errores[] = 'El operador es obligatorio';
        } else {
            $oper = trim($_GET['oper']);
            if (!in_array($oper, $OPER_VAL)){
                $errores[] = 'El operador no es válido';
            } else {
                $oper = trim($_GET['oper']);
            }
        }

        if (!empty($errores)){
            foreach ($errores as $error){ ?>
                <h3><?= $error ?><p><?php
            }
        } else {
            switch ($oper) {
                case '+':
                    $res = $op1 + $op2;
                    break;
                case '-':
                    $res = $op1 - $op2;
                    break;
                case '*':
                    $res = $op1 * $op2;
                    break;
                case '/':
                    $res = $op1 / $op2;
                    break;
            }?>
            <p>el resultado de <?= $op1 ?> <?= $oper ?> <?= $op2 ?> es <?= $res ?></p><?php
        }
    ?>

    <?= print_r($_GET) ?>
</body>
</html>