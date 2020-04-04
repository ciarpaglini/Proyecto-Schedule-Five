<?php

require_once 'models/schedule.php';

class scheduleController
{

    public function index()
    {
        if (Utils::isAdmin()) {
            require_once 'views/schedule/index.php';
        }
    }

    public function save_send_email()
    {

        if (isset($_POST)) {
            /*validacion de campos*/
            $message = isset($_POST['message']) ? $_POST['message'] : false;
            $worker = isset($_POST['worker']) ? $_POST['worker'] : false;
            $surname = isset($_POST['surname']) ? $_POST['surname'] : false;
            $active = isset($_POST['active']) ? $_POST['active'] : false;
            $code = isset($_POST['code']) ? $_POST['code'] : false;

            $result = $_POST['worker'];
            $result_explode = explode('|', $result);
            $worker = $result_explode[0];
            $name = trim($result_explode[1]);
            $surname = trim($result_explode[2]);
            $email = $result_explode[3];


            if ($message && $worker && $active) {

                $identity = $_SESSION['identity'];
                $schedule = new Schedule();
                $schedule->setSchedule($message);
                $schedule->setWorker_id($worker);
                $schedule->setActive($active);
                $schedule->setCode($code);
                $schedule->setName($name);
                $schedule->setSurname($surname);
                $schedule->setUser_id($identity->id);

                $save = $schedule->save();


                if ($save) {
                    $_SESSION['register'] = "complete";
                } else {
                    $_SESSION['register'] = "failed";
                }
            } else {
                $_SESSION['register'] = "failed";
            }
        } else {
            $_SESSION['register'] = "failed";
        }


        $email_to = $email;



        $email_subject = "Hola" . "\n" . ($name) . "\n" . ($surname) . "\n" . "nuevo horario para confirmar";

        $message = $_POST['message']; // requerido

        $error_message = ""; //Linea numero 52;


        if (strlen($message) < 2) {

            $error_message .= 'El formato del texto no es válido.<br />';
        }

        if (strlen($error_message) > 0) {

            die($error_message);
        }

        //Este es el cuerpo del mensaje tal y como llegará al correo
        $active = 'verdadero';

        $link = base_url . "schedule/confirmation&code=" . ($code) . "&active=" . ($active) . "&workerid=" . ($worker);

        $email_message = "Contenido del Mensaje.\n\n";

        $email_message .= "Por favor confirme recibido haciendo click" . "\n" . ($link) . "\r\n" . ($message) . "\n" . "No responda a este mensaje";


        //Se crean los encabezados del correo
        $email_from = 'contacto@schedulefive.com';

        $headers = 'From: ' . $email_from . "\r\n" .

            'Reply-To: ' . $email_from . "\r\n" .

            'X-Mailer: PHP/' . phpversion();

        @mail($email_to, $email_subject, $email_message, $headers);


        //workerController.php Mensaje de que fue enviado
        header("Location:" . base_url . 'schedule/index');
    }



    public function save_send_sms()
    {

        if (isset($_POST)) {
            /*validacion de campos*/
            $message = isset($_POST['message']) ? $_POST['message'] : false;
            $worker = isset($_POST['worker']) ? $_POST['worker'] : false;
            $surname = isset($_POST['surname']) ? $_POST['surname'] : false;
            $active = isset($_POST['active']) ? $_POST['active'] : false;
            $code = isset($_POST['code']) ? $_POST['code'] : false;

            $result = $_POST['worker'];
            $result_explode = explode('|', $result);
            $worker = $result_explode[0];
            $name = trim($result_explode[1]);
            $surname = trim($result_explode[2]);
            $phone = trim($result_explode[3]);


            if ($message && $worker && $active) {

                $identity = $_SESSION['identity'];
                $schedule = new Schedule();
                $schedule->setSchedule($message);
                $schedule->setWorker_id($worker);
                $schedule->setActive($active);
                $schedule->setCode($code);
                $schedule->setName($name);
                $schedule->setSurname($surname);
                $schedule->setUser_id($identity->id);

                $save = $schedule->save();


                if ($save) {
                    $_SESSION['register'] = "complete";
                } else {
                    $_SESSION['register'] = "failed";
                }
            } else {
                $_SESSION['register'] = "failed";
            }
        } else {
            $_SESSION['register'] = "failed";
        }
    }

    


    public function confirmation()
    {

        if (isset($_GET['code']) && isset($_GET['active']) && isset($_GET['workerid'])) {
            $code = $_GET['code'];
            $active = $_GET['active'];
            $worker_id = $_GET['workerid'];

            $schedule = new Schedule();
            $schedule->setCode($code);
            $schedule->setActive($active);
            $schedule->setWorker_id($worker_id);

            $codifi = $schedule->confirCode();

            if ($codifi == null || $codifi == false) {
                header("Location:" . base_url_dos . 'views/schedule/error.php');
            }

            if ($codifi->code == $code) {

                $schedule = new Schedule();
                $schedule->setCode($code);
                $schedule->setActive($active);
                $schedule->setWorker_id($worker_id);

                $schedule->edit();


                header("Location:" . base_url . 'views/schedule/confirmation.php');
            } else {
                header("Location:" . base_url . 'views/schedule/error.php');
            }
        } else {
            header("Location:" . base_url . 'views/schedule/error.php');
        }
    }

    public function gestion()
    {
        Utils::isAdmin();

        $schedule = new Schedule();
        $schedules = $schedule->getAll();

        require_once 'views/schedule/gestion.php';
    }

    public function eliminar()
    {
        Utils::isAdmin();

        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $schedule = new Schedule();
            $schedule->setId($id);

            $delete = $schedule->delete();
            if ($delete) {
                $_SESSION['delete'] = 'complete';
            } else {
                $_SESSION['delete'] = 'failed';
            }
        } else {
            $_SESSION['delete'] = 'failed';
        }

        header('Location:' . base_url . 'schedule/gestion');
    }
}
