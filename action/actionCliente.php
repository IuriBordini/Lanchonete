<?php
require_once './model/Cliente.php';
require_once './view/Mensagem.php';

//Atributos Globais
$cliente = new Cliente();
$action = (isset($_POST['action'])) ? $_POST['action'] : '';
$id = (isset($_POST['id'])) ? $_POST['id'] : '';

//Cadastro
if ($action == "cad" || $action == "alt"): 
    $cliente->setNome(trim($_POST["nome"]));
    $cliente->setEmail(trim($_POST["email"]));
    $cliente->setNumero(trim($_POST["numero"]));
    $cliente->setComplemento(trim($_POST["complemento"]));

//Endereco
    $endereco = new Endereco();
    $endereco->setCep(trim($_POST["cep"]));
    $endereco->setLogradouro(trim($_POST["logradouro"]));
    $endereco->setBairro(trim($_POST["bairro"]));
    $endereco->setCidade(trim($_POST["cidade"]));
    $endereco->setUf(trim($_POST["uf"]));
    $cliente->setEndereco($endereco);


//Validação
    require_once './controller/CtrlCliente.php';
    try {
        $ctrlCliente = new CtrlOperdador();
        if ($action == "cad") {
            $cliente->setPws(trim($_POST["pws1"]));
            $cliente->validar(trim($_POST['pws2']));
            $ctrlCliente->salvar($cliente);
            Mensagem::avisos("Cadastrado");
        } else {
            $cliente->validarDados();
            $ctrlCliente->atualizar($cliente);
            Mensagem::avisos("Atualizado");
        }
    } catch (PDOException $exc) {
        Mensagem::alerta("Erro ao conectar a dase de dados!");
    } catch (Exception $exc) {
        Mensagem::alerta("Erro ao cadastrar o cliente!" + $exc );
    }
endif;


if ($action == "log"):
    $pagina = 'Location: index.php';
    try {
        require_once './controller/CtrlCliente.php';
        $ctrlCliente = new CtrlOperdador();
        $cliente = $ctrlCliente->login(trim($_POST["email"]), trim($_POST["pws"]));
        var_dump($cliente);
        if (!isset($_SESSION)) {
            session_start();
        }
        $_SESSION["user"] = $cliente;
        if ($cliente->admin == true) {
            $pagina = 'Location: view/admin.php';
        }
    } catch (PDOException $exc) {
        Mensagem::alerta("Erro ao cadastrar na dase de dados!");
    } catch (Exception $exc) {
        Mensagem::alerta("Erro ao cadastrar na dase de dados!");
    } finally {
        header($pagina);
    }
endif;


if ($action == "off"):
    $pagina = 'Location: index.php';
    session_start();
    session_destroy();
    header($pagina);
endif;

