<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ExercisesSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            'serie_id'  => '',
            'name'      => '',
            'status'    => 'A',
        ];

        DB::table('exercises')->insert($data);
    }

    public function datos()
    {

        $trapecio = [
            'Encogimiento de hombros con Barra de Pésas',
            'Encogimiento de Hombros con Barra de Pesas detras de la Espalda',
            'Encogimiento de Hombros con Mancuernas (de pie)',
            'Encogimiento de Hombros con Maquina (sentado)',
            'Encogimiento de Hombros detras de la espalda con maquina smith (de pie)',
            'Encogimiento de hombros en la maquina smith (de pie)',
            'Remo vertical con barra de pesas (de pie)',
            'Remo vertical con cable-polea (de pie)',
            'Remo vertical con mancuerna (de pie)',
            'Remo vertical con maquina smith (de pie)',
        ];
        $hombro = [
            'Apertura con maquina invertida (acostado)',
            'Apertura con maquina invertida (sentado)',
            'Aperturas en Banco plano con mancuernas invertidas (prono)',
            'Flexiones de pecho parado sobre la cabeza',
            'Levantamiento frontal con barra de pesas (de pie)',
            'Levantamiento frontal con cuerda y cable-polea (de pie)',
            'Levantamiento Frontal con disco (de pie)',
            'Levantamiento Frontal con mancuerna (de pie)',
            'Levantamiento Frontal con un brazo en cable-polea (de pie)',
            'Levantamiento Frontal con Cable-Polea en un solo brazo (inclinado)',
            'Levantamiento lataral con mancuernas (de pie)',
            'Levantamiento lataral con mancuernas (inclinado)',
            'Levantamiento lateral con maquina (sentado)',
            'Press de cuello con barra de pesas (de pie)',
            'Press de hombros con barra de pesas (de pie)',
            'Press de hombros con mancuernas (sentado)',
            'Press de hombros con maquina (sentado)',
            'Press de hombros con maquina smith (sentado)',
            'Press de pecho con barra de pesas (inclinado)',
            'Remo vertical con barra de pesas (de pie)',
            'Remo vertical con cable-polea (de pie)',
            'Remo vertical con mancuernas (de pie)',
            'Remo vertical con maquina de smith (de pie)',
        ];
        $pecho = [
            'Apertura con maquina (sentado)',
            'Apertura con mancuernas (declinado)',
            'Apertura con mancuernas (inclinado)',
            'Apertura con mancuernas en plano',
            'Apertura de banco plano con cable-polea',
            'Apertura de banco plano con mancuernas girando',
            'Apertura de banco plano con cable-polea (declinado)',
            'Apertura de banco plano con cable-polea (inclinado)',
            'Apertura en banco con mancuernas girando (declinado)',
            'Apertura en banco con mancuernas girando (inclinado)',
            'Barra paralela en maquina sostenidas',
            'Barra paralelas, inclinado, agarre amplio',
            'barra paralelas, inclinados',
            'Cruzada con Cable-Polea (de pie)',
            'Flexiones de pecho con mancuernas (declinado)',
            'Flexiones de pecho con mancuernas (inclinado)',
            'Flexiones de pecho en plano con mancuernas',
            'Flexiones de pecho, agarre amplio',
            'Flexiones de pecho, agarre amplio (dinclinado)',
            'Hala con cable-polea y brazo recto (de pie)',
            'Mariposa con maquinas (sentado)',
            'Press de pecho frontal con maquina (sentado)',
            'Press de pecho plano con barra de pesas',
            'Press de pecho plano con barra de pesas, agarre amplio',
            'Press de pecho plano con barra de pesas, agarre amplio (declinado)',
            'Press de pecho plano con barra de pesas, agarre amplio (inclinado)',
            'Press de pecho plano con maquina',
            'Press de pecho plano con maquina smith',
            'Press de pecho plano con maquina smith, agarre amplio',
            'Press de pecho con barra de pesas (declinado)',
            'Press de pecho con barra de pesas (inclinado)',
            'Press de pecho con maquina smith (declinado)',
            'Press de pecho con maquina smith (inclinado)',
            'Press de pecho con maquina smith, agarre amplio (declinado)',
            'Press de pecho con maquina smith, agarre amplio (inclinado)',
            'Press en banco plano con mancuernas en agarre de martillo',
            'Press en banco con mancuernas en agarre de martillo (declinado)',
            'Press en banco con mancuernas en agarre de martillo (inclinado)',
            'Press en banco con maquina (declinado)',
            'Press en banco con maquina (inclinado)',
            'Pullover en banco plano con barra de pesas',
            'Pullover en banco plano con Cable-Polea',
            'Pullover en Banco plano con Maquinas',
            'Pullover en plano con Barra EZ'
        ];
        $triceps = [
            'Arrastre de concentracion de triceps con Cable-Polea (arrodillado)',
            'Arrastre de triceps con Cable-Polea Agarre por Debajo (sentado)',
            'Barra, Agarre Ancho',
            'Flexiones de Pecho con Mancuernas (declinado)',
            'Flexiones de Pecho con Mancuernas (inclinado)',
            'Flexiones de Pecho en Plano con Mancuernas',
            'Flexiones de Pecho, Agarre Cerrado',
            'Maquina de triceps con Cable-Polea (acostado)',
            'Maquina de triceps con Cable-Polea (inclinado)',
            'Paralelas con Maquina Sostenida',
            'Paralelas, Piernas Levantadas',
            'Patada de triceps con Cable-Polea (inclinado)',
            'Patada de triceps con Mancuernas (inclinado)',
            'Press tate de triceps con Mancuernas (acostado)',
            'Press con Barra de pesas en maquina smith, agarre cerrado',
            'Press con Barra de pesas en maquina smith, agarre cerrado (declinado)',
            'Press con Barra de pesas en maquina smith, agarre cerrado (inclinado)',
            'Press de Pecho Frontal con Maquina (sentado)',
            'Press de Pecho Plano con Barra de Pesas',
            'Press de Pecho Plano con Maquina Smith',
            'Press de Pecho con Barra de Pesas (declinado)',
            'Press de Pecho con Barra de Pesas (inclinado)',
            'Press de Pecho con Maquina Smith (declinado)',
            'Press de Pecho con Maquina Smith (inclinado)',
            'Press de Triceps Frances con Barra EZ (acostado)',
            'Press de Triceps Frances con Barra EZ (declinado)',
            'Press de Triceps Frances con Barra EZ (inclinado)',
            'Press de Triceps Frances con Barra EZ, Agarre por Abajo (acostado)',
            'Press de Triceps con Barra EZ por Arriba (sentado)',
            'Press de Triceps con Cable-Polea por Arriba (arrodillado)',
            'Press de Triceps con Cuerda y Cable-Polea (de pie)',
            'Press de Triceps con Cuerda y Cable-Polea por Arriba (de pie)',
            'Press de Triceps con Cuerda y Cable-Polea por Arriba (inclinado)',
            'Press de Triceps con Mancuernas Ambas con Brazos Arriba (sentado)',
            'Press de Triceps con Mancuernas por Arriba (inclinado)',
            'Press de Tricpes con Maquina (sentado)',
            'Press de Triceps con una Mancuerna con el Brazo Arriba (sentado)',
            'Press de Tricpes en Cable-Polea (de pie)',
            'Press en Banco Plano con Barra de Pesas, Agarre Cerrado',
            'Press en Banco con Barra de Pesas, Agarre Cerrado (declinado)',
            'Press en Banco con Barra de Pesas, Agarre Cerrado (inclinado)',
            'Traccion en Barra Paralelas'
        ];
        $biceps = [
            'Dominadas en Maquina Sostenida, Agarre Medio por Debajo',
            'Dominadas en Maquina Sostenida, Agarre Medio por Encima',
            'Dominadas, Agarre Cerrado por Debajo',
            'Dominadas, Agarre Estrecho por Encima',
            'Dominadas, Agarre Medio Por Debajo',
            'Dominadas, Agarre Medio Por Encima',
            'Espalda a Torax con Cable-Polea, Agarre Cerrado de Mantillo (sentado)',
            'Espalda a Torax con Cable-Polea, Agarre Cerrado de Debajo (de pie)',
            'Flexiones de Biceps Alternando las Mancuernas (de pie)',
            'Flexiones de Biceps Alternando las Mancuernas (sentadon)',
            'Flexiones de Biceps Alternando las Mancuernas en Martillo (de pie)',
            'Flexiones de Biceps Alternando las Mancuernas en Martillo (sentado)',
            'Flexiones de Biceps Alternando Concentradas con Cable-Polea (sentado)',
            'Flexiones de Biceps Alternando Concentradas con Mancuernas (sentado)',
            'Flexiones de Biceps Alternando Cruzadas con Mancuernas (de pie)',
            'Flexiones de Biceps Alternando Cruzadas con Mancuernas con Martillo (de pie)',
            'Flexoness de Biceps con Barra EZ (de pie)',
            'Flexoness de Biceps con Barra EZ en Maquina Scott (sentado)',
            'Flexiones de Biceps con Barra EZ, Agarre Amplio (de pie)',
            'Flexiones de Biceps con Barra EZ, Agarre Cerrado (de pie)',
            'Flexiones de Biceps con Barra de Pesas (inclinado)',
            'Flexiones de Biceps con Barra de Pesas, Agarre Amplio (de pie)',
            'Flexiones de Biceps con Barra de Pesas, Agarre Cerrado (de pie)',
            'Flexiones de Biceps con Barra (de pie)',
            'Flexiones de Biceps con Cable abajo en la Maquina de Scott',
            'Flexiones de Biceps con Cable-Polea (de pie)',
            'Flexiones de Biceps con Cable-Polea por Arriba (de pie)',
            'Flexiones de Biceps con Cuerda en Cable-Polea (de pie)',
            'Flexiones de Biceps con Mancuernas (de pie)',
            'Flexiones de Biceps con Mancuernas (inclinado)',
            'Flexiones de Biceps con Mancuernas (sentado)',
            'Flexiones de Biceps con Mancuernas en Martillo (de pie)',
            'Flexiones de Biceps con Mancuernas en Martillo (sentado)',
            'Flexiones de Biceps con Mancuernas en Martillo en Maquina Scott',
            'Flexiones de Biceps con Mancuernas en Maquina Scott',
            'Flexiones de Biceps de Zottman en Mancuernas (de pie)',
            'Flexiones de Biceps en Cable-Polea (acostado)',
            'Flexiones de Biceps en Maquina (sentado)',
            'Flexiones de Biceps en Maquina Scott (sentado)',
            'Flexiones de Biceps en un Banco Alto con Barra de Pesas (prono)',
            'Flexiones de Biceps en un Banco Alto con Mancuernas (prono)',
            'Flexiones de Biceps en un Banco en la Cable-Polea (acostado)',
            'Flexiones de Biceps en un Banco en la Cable-Polea (inclinado)',
            'Flexiones de Biceps y Antebrazo con uno solo Mancuerna',
            'Remo Vertical con Barra de Pesas (de pie)',
            'Remo Vertical con Cable-Polea (de pie)',
            'Remo Vertical con Mancuernas (de pie)',
            'Remo Vertical con Maquina de Smith (de pie)',
        ];
        $antebrazo = [
            'Contraccion de Mano y Antebrazo con Disco (de pie)',
            'Dominadas, Agarre Estrecho por Encima',
            'Flexiones Laterales de Antebrazo con Cabel-Polea (sentado)',
            'Flexiones con Barra EX en Maquina Scott Agarre Cerrado',
            'Flexiones de Antebrazo con Barra de Pesas Inversa (de pie)',
            'Flexiones de Antebrazo con Cable-Polea (de pie)',
            'Flexiones de Antebrazo con Disco Invertido (de pie)',
            'Flexiones de Antebrazo con Cable-Polea Inversa (inclinado)',
            'Flexiones de Muñeca y Antebrazo con Barra de Pesas Detras de la Espalda (de pie)',
            'Flexiones de Muñeca y Antebrazo con Cable-Polea (de pie)',
            'Flexiones de Muñeca y Antebrazo con Barra EZ (sentado)',
            'Flexiones de Muñeca y Antebrazo con Barra EZ (de pie)',
            'Flexiones de Muñeca y Antebrazo con Barra de pesas (sentado)',
            'Flextiones de Muñeca y Antebrazo con Mancuernas (sentado)'
        ];
        $abdominales = [
            'Abdominal intenso',
            'Abdominales (declinado)',
            'Abdominales Parciales (declinado)',
            'Abdominales Parcial laterales (acostado)',
            'Abdominales Parciales Laterales con Hiperextension',
            'Abdominales Parciales Sostenidos (acostado)',
            'Abdominales Parciales Sostenidos Laterales (acostado)',
            'Abdominales Parciales con Cable-Polea (de pie)',
            'Abdominales Parciales con Cable-Polea (sentado)',
            'Abdominales Parciales de Bicicleta',
            'Abdominales Parciales de Bicicleta Alternando',
            'Abdominales Parciales de Reversa, Piernas Elevadas',
            'Abdominales Parciales, Piernas Elevadas',
            'Abdominales Parciales, Piernas Flexionadas',
            'Abdominales de Giro, Piernas Elevadas',
            'Abdominales de Giro Piernas Flexionadas',
            'Abdominales de peliegue (acostado)',
            'Abdominales, Piernas Elevadas',
            'Abdominales, Piernas Flexionadas',
            'Alternar Tocando el Talon (acostado)',
            'Ejercicio de Piernas (acostado)',
            'Elevacion de Rodilla (suspendido)',
            'Elevacion de Rodilla, Apoyo en los Brazos',
            'Flexión Lateral del Torso con Barra de Pesas (de pie)',
            'Flexion Lateral del Torso con Cable-Polea (de pie)',
            'Flexion Lateral del Torso con Mancuernas (de pie)',
            'Giro de Torso con Barra de Pesas (de pie)',
            'Halar con Cable-Polea y Brazo Recto (de pie)',
            'Levantamiento de Cadera Lateral (acostado)',
            'Levantamiento de Pelvis, Piernas Elevadas (acostado)',
            'Levantamiento de Pelvis, Piernas Flexionadas (acostado)',
            'Levantamiento de Piernas (acostado)',
            'Levantamiento de Piernas (suspendido)',
            'Levantamiento de Piernas, Apoyo en los Brazos',
            'Maquina de Abdominales Parciales (sentado)',
            'Maquina de Abdominales Parciales Laterales (sentado)',
            'Pataleo (acostado)',
            'Planks',
            'Rodamiento de pesas (arrodillado)',
            'Tocar los Dedos de los Pies (acostado)',
        ];
        $espalda = [
            'Dominadas con Maquina Sostenida, Agarre Amplio por Debajo',
            'Dominadas en Maquina Sostenida, Agarre Amplio por Encima',
            'Dominadas en Maquina Sostenida, Agarre Medio por Debajo',
            'Dominadas en Maquina Sostenida, Agarre Medio por Encima',
            'Dominadas, Agarre Amplio por Debajo',
            'Dominadas, Agarre Amplio por Encima',
            'Dominadas, Agarre Medio Por Debajo',
            'Dominadas, Agarre Medio Por Encima',
            'Espalda a Torax con Cable-Polea, Agarre Cerrado de Mantillo (sentado)',
            'Espalda a Torax con Cable-Polea, Agarre Cerrado de Debajo (sentado)',

            'Espalda con Cable-Polea Detras del Cuello, Agarre Amplio (sentado)',
            'Espalda con Cable-Polea al Torax, Agarre Amplio (sentado)',
            'Espalda con Maquina de Palanca (sentado)',
            'Remo con Barra de Pesas, Inclinado (de pie)',

            'Remo con Barra de Pesas, Inclinado, Agarre por Abajo (de pie)',
            'Remo con Cable-Polea (sentado)',
            'Remo con Cable-Polea, Inclinado (de pie)',
            'Remo con Mancuernas, Inclinado (de pie)',
            'Remo con Máquina de Palanca (sentado)',
            'Remo con Máquina de Smith, Inclinado (de pie)',
            'Remo en Banco Plano Alto con Barra de Pesas (prono)',
            'Remo en Banco Plano Alto con Mancuernas (prono)',
            //todo: Repetido en espalda y cuadriceps
            'Step-up con Barra de Pesas, Inclinado (De pie)',
        ];
        $espaldaBaja = [
            'Arrastre Mediante con Cuerda y Polea (de pie)',
            'Barra de Peso Muerto',
            'Estiramiento de Gato en Tapete (arrodillado)',
            'Flexiones de Espalda con Barra de Pesas (sentado)',
            'Flexiones de Espalda con Barra de Pesas (de pie)',
            'Flexiones de Espalda con Maquina Smith (de pie)',
            'Flexiones de Espalda con Tapete (prono)',
            'Hiperextensiones en Banco Plano (prono)',
            'Maquina de Hiperextensiones',
            'Maquina de Hiperextenciones (sentado)',
            'Peso Muerto Sumo con Barra de Pesas, Pies Separadps',
            //todo: Repetido en espalda baja, gluteos, cuadriceps
            'Peso Muerto con Cable-Polea',
            'Peso Muerto con Mancuernas',
            'Sentadilla con Barra de Pesas (arrodillado)',
            'Sentadillas con Barra de Pesas (de pie)',

            'Sentadillas con Barra dee Pesas Frontal (de pie)',
            'Sentadilla en Maquina de Palanca (de pie)'
        ];
        $gluteos = [
            'Arrastre Mediante con Cuerda y Polea (de pie)',
            'Barra de Peso Muerto',
            'Estocadas en Barra de Pesas',
            'Estocadas en Mancuernas',
            'Extensión de Cadera en Cable-Polea (de pie)',
            'Extensión de Pierna hacia atrás (arrodillado)',
            'Extension de la Cadera (arrodillado)',
            'Extension de la Cadera con maquina',
            'Flexion de Espalda con Barra de Pesas (de pie)',
            'Flexión de Espalda con Maquina Smith (de pie)',
            'Levantamiento de Pelvis, Piernas Flexionadas (acostado)',

            //todo: Estos estan repetidos en la lista de abdominales
            'Maquina de Abduccion (sentado)',
            'Maquinas de Aduccion (sentado)',
            'Maquina de Prensa de Piernas (inclinado)',
            'Maquina de Prensa de Piernas, pies Sentado (inclinado)',

            'Pataleo (acostado)',
            'Peso Muerto Sumo con Barra de Pesas, Pies Separados',
            //todo: Repetido en espalda gluteos, baja, cuadriceps
            'Peso Muerto con Cable-Polea',
            'Peso Muerto con Mancuernas',
            //todo: Repetido en espalda gluteos, cuadriceps
            'Sentadillas Frontal con Maquina de Smith (de pie)',
            'Sentadillas Hack con Barra de Pesas (de pie)',
            'Sentadillas Hack con Maquina de Smith (de pie)',
            'Sentadillas con Barra de Pesas (arrodillado)',
            'Sentadillas con Barra de Pesas (de pie)',
            'Sentadillas con Barra de Pesas Frontal (de pie)',
            'Sentadillas con Maquina (inclinado)',
            'Sentadillas con Maquina de Palanca (de pie)',
            'Skipping Rapido (de pie)',
        ];
        $cuadriceps = [
            'Abductor con Cable-Polea (de pie)',
            'Aductor con Cable-Polea (de pie)',
            'Barra de peso Muerto',
            'Elevacion Lateral de Piernas (acostado)',
            'Estocadas con Barra de Pesas',
            'Estocadas con Mancuernas',
            'Extensión de Piernas con Maquina (sentado)',

            //Todo: Estos estan repetido en la lista de gluteos
            'Maquina de Abduccion (sentado)',
            'Maquina de Aduccion (sentado)',
            'Maquina de Prensa de Piernas (inclinado)',
            'Maquina de Prensa de Piernas, pies Sentado (inclinado)',

            //todo: Repetido en espalda baja, gluteos, cuadriceps
            'Peso Muerto con Cable-Polea',
            'Peso Muerto con Mancuernas',

            //todo: Repetido en espalda gluteos, cuadriceps
            'Sentadillas Frontal con Maquina de Smith (de pie)',
            'Sentadillas Hack con Barra de Pesas (de pie)',
            'Sentadillas Hack con Maquina de Smith (de pie)',

            //todo: Repetido en espalda baja, gluteos, cuadriceps
            'Sentadillas con Barra de Pesas (de pie)',
            'Sentadillas con Barra de Pesas Frontal (de pie)',
            'Sentadillas con Maquina (inclinado)',
            'Sentadillas con Maquina de Palanca (de pie)',
            'Skipping Rapido (de pie)',

            //todo: Repetido en espalda y cuadriceps
            'Step-up con Barra de Pesas (de pie)',
            'Step-up con Mancuernas (de pie)',
        ];
        $femorales = [
            'Flexiones de Pierna con Maquina (de pie)',
            'Flexiones de Pierna con Maquina (prono)',
            'Flexiones de Pierna con Maquina (sentado)',
            'Flexiones de Pierna con Cable-Polea (de pie)',
        ];
        $pantorrilla = [
            'Balanceo de Pierna con Barra de Pesas (de pie)',
            'Balanceo de Pierna con Barra de Pesas (sentado)',
            'Balanceo de Pantorrilla con Maquina (de pie)',
            'Balanceo de Pantorrillas con Maquina Smith (sentado)',
            'Balanceo de Pantorrillas con Maquina Smith (de pie)',
        ];
    }
}
