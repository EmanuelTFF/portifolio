<<<<<<< HEAD
<?php
$statusMessage = '';
if (isset($_GET['status'])) {
    if ($_GET['status'] == 'success') {
        $statusMessage = 'Mensagem enviada com sucesso!';
    } elseif ($_GET['status'] == 'error') {
        $statusMessage = 'Erro ao enviar a mensagem.';
    }
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <style>
        .status-message {
            margin: 20px 0;
            padding: 10px;
            border-radius: 5px;
            text-align: center;
        }
        .status-success {
            background-color: #d4edda;
            color: #155724;
        }
        .status-error {
            background-color: #f8d7da;
            color: #721c24;
        }
    </style>
</head>
<body>
    <?php if (!empty($statusMessage)): ?>
        <div class="status-message <?php echo $_GET['status'] == 'success' ? 'status-success' : 'status-error'; ?>">
            <?php echo $statusMessage; ?>
        </div>
    <?php endif; ?>
</body>
</html>
=======
<?php
$statusMessage = '';
if (isset($_GET['status'])) {
    if ($_GET['status'] == 'success') {
        $statusMessage = 'Mensagem enviada com sucesso!';
    } elseif ($_GET['status'] == 'error') {
        $statusMessage = 'Erro ao enviar a mensagem.';
    }
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <style>
        .status-message {
            margin: 20px 0;
            padding: 10px;
            border-radius: 5px;
            text-align: center;
        }
        .status-success {
            background-color: #d4edda;
            color: #155724;
        }
        .status-error {
            background-color: #f8d7da;
            color: #721c24;
        }
    </style>
</head>
<body>
    <?php if (!empty($statusMessage)): ?>
        <div class="status-message <?php echo $_GET['status'] == 'success' ? 'status-success' : 'status-error'; ?>">
            <?php echo $statusMessage; ?>
        </div>
    <?php endif; ?>
</body>
</html>
>>>>>>> 3b969d6d5d5b9609cf6442d798097a3260c476a4
