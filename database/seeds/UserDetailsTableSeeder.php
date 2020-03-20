<?php

use Illuminate\Database\Seeder;
use App\UserDetails;

class UserDetailsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        UserDetails::truncate();

        UserDetails::create(['niss'=>'100000803','firstname'=>'Abilio','lastname'=>'de Araujo','alias'=>'Billy','gender'=>'M','nationality'=>'Timor Leste']);
        UserDetails::create(['niss'=>'100001312','firstname'=>'Abilio Rolando','lastname'=>'Neto','alias'=>'Abilio','gender'=>'M','nationality'=>'Timor Leste']);
        UserDetails::create(['niss'=>'100001523','firstname'=>'Acacio','lastname'=>'da Costa','alias'=>'Acacio','gender'=>'M','nationality'=>'Timor Leste']);
        UserDetails::create(['niss'=>'100001116','firstname'=>'Adelino de Sousa','lastname'=>'dos Santos','alias'=>'Adelino','gender'=>'M','nationality'=>'Timor Leste']);
        UserDetails::create(['niss'=>'0','firstname'=>'Alessandra','lastname'=>'Ronchi','alias'=>'Ale','gender'=>'F','nationality'=>'Italy']);
        UserDetails::create(['niss'=>'100000983','firstname'=>'Alvaro','lastname'=>'Ribeiro','alias'=>'Alvaro','gender'=>'M','nationality'=>'Timor Leste']);
        UserDetails::create(['niss'=>'100000951','firstname'=>'Aniceto Carlos','lastname'=>'Pinto','alias'=>'Aniceto','gender'=>'M','nationality'=>'Timor Leste']);
        UserDetails::create(['niss'=>'100000928','firstname'=>'Aquelino','lastname'=>'Vidigal','alias'=>'Aquelino','gender'=>'M','nationality'=>'Timor Leste']);
        UserDetails::create(['niss'=>'100056505','firstname'=>'Arsenio','lastname'=>'dos Santos Maia','alias'=>'Arsenio','gender'=>'M','nationality'=>'Timor Leste']);
        UserDetails::create(['niss'=>'100000770','firstname'=>'Beltersa da Costa Lopes','lastname'=>'Rico','alias'=>'Betty','gender'=>'F','nationality'=>'Timor Leste']);
        UserDetails::create(['niss'=>'100001379','firstname'=>'Benjamin Guterres','lastname'=>'Corte Real de Silva','alias'=>'Benjamin','gender'=>'M','nationality'=>'Timor Leste']);
        UserDetails::create(['niss'=>'100000911','firstname'=>'Bernardus Rano','lastname'=>'Laksono','alias'=>'Rano','gender'=>'M','nationality'=>'Timor Leste']);
        UserDetails::create(['niss'=>'100101954','firstname'=>'Cancio Paulo','lastname'=>'Dias Quintas','alias'=>'Cancio','gender'=>'M','nationality'=>'Timor Leste']);
        UserDetails::create(['niss'=>'100001168','firstname'=>'Cansiu','lastname'=>'Correia','alias'=>'Cansiu','gender'=>'M','nationality'=>'Timor Leste']);
        UserDetails::create(['niss'=>'100001077','firstname'=>'Carlito','lastname'=>'Alves','alias'=>'Carlito','gender'=>'M','nationality'=>'Timor Leste']);
        UserDetails::create(['niss'=>'100056502','firstname'=>'Carlos','lastname'=>'Miguel','alias'=>'Carlos','gender'=>'M','nationality'=>'Timor Leste']);
        UserDetails::create(['niss'=>'100001159','firstname'=>'Celestino Moniz','lastname'=>'do Rosario','alias'=>'Celes','gender'=>'M','nationality'=>'Timor Leste']);
        UserDetails::create(['niss'=>'100001181','firstname'=>'Clarimundo Castelo','lastname'=>'Gusmao','alias'=>'Clary','gender'=>'M','nationality'=>'Timor Leste']);
        UserDetails::create(['niss'=>'100001200','firstname'=>'Clementino','lastname'=>'Amali','alias'=>'Amali','gender'=>'M','nationality'=>'Timor Leste']);
        UserDetails::create(['niss'=>'0','firstname'=>'Colin','lastname'=>'Kercz','alias'=>'Colin','gender'=>'M','nationality'=>'Australia']);
        UserDetails::create(['niss'=>'100056529','firstname'=>'Constantino','lastname'=>'Belo','alias'=>'Constan','gender'=>'M','nationality'=>'Timor Leste']);
        UserDetails::create(['niss'=>'100001362','firstname'=>'Cornelio','lastname'=>'Cesario Guterrres Freitas','alias'=>'Cornelio','gender'=>'M','nationality'=>'Timor Leste']);
        UserDetails::create(['niss'=>'100056640','firstname'=>'Cornelio','lastname'=>'Sonet Colo ','alias'=>'sonet ','gender'=>'M','nationality'=>'Timor Leste']);
        UserDetails::create(['niss'=>'100041788','firstname'=>'Dirce Correia ','lastname'=>'Martins do Rosario','alias'=>'Dirce','gender'=>'F','nationality'=>'Timor Leste']);
        UserDetails::create(['niss'=>'100000808','firstname'=>'Elvis Goncalo da Silva','lastname'=>'Ximenes','alias'=>'Elvis','gender'=>'M','nationality'=>'Timor Leste']);
        UserDetails::create(['niss'=>'100001319','firstname'=>'Ermino','lastname'=>'da Costa','alias'=>'Ermino','gender'=>'M','nationality'=>'Timor Leste']);
        UserDetails::create(['niss'=>'0','firstname'=>'Erna','lastname'=>'Suryani','alias'=>'Erna','gender'=>'F','nationality'=>'Indonesia']);
        UserDetails::create(['niss'=>'100001225','firstname'=>'Evelio Antonio','lastname'=>'de Sousa','alias'=>'Evelio','gender'=>'M','nationality'=>'Timor Leste']);
        UserDetails::create(['niss'=>'100001532','firstname'=>'Fernando','lastname'=>'Belo','alias'=>'Fernando','gender'=>'M','nationality'=>'Timor Leste']);
        UserDetails::create(['niss'=>'100001534','firstname'=>'Fernando','lastname'=>'da Costa','alias'=>'Nandito','gender'=>'M','nationality'=>'Timor Leste']);
        UserDetails::create(['niss'=>'0','firstname'=>'Fiona','lastname'=>'Hamilton','alias'=>'Fiona','gender'=>'F','nationality'=>'Australia']);
        UserDetails::create(['niss'=>'100001396','firstname'=>'Flamina Cepeda','lastname'=>'de Seixas','alias'=>'Mina','gender'=>'F','nationality'=>'Timor Leste']);
        UserDetails::create(['niss'=>'100000797','firstname'=>'Florentina','lastname'=>'Seixas','alias'=>'Tina','gender'=>'F','nationality'=>'Timor Leste']);
        UserDetails::create(['niss'=>'100056486','firstname'=>'Franklin Filipe','lastname'=>'Guedas Garcia','alias'=>'Franklin','gender'=>'M','nationality'=>'Timor Leste']);
        UserDetails::create(['niss'=>'100060594','firstname'=>'Ivana Rosario','lastname'=>'de Fatima Ley','alias'=>'Ivana','gender'=>'F','nationality'=>'Timor Leste']);
        UserDetails::create(['niss'=>'100001371','firstname'=>'Januario Cota','lastname'=>'Fernandes','alias'=>'Januario','gender'=>'M','nationality'=>'Timor Leste']);
        UserDetails::create(['niss'=>'100002742','firstname'=>'Jillian Evans Mendes','lastname'=>'Mota Braz de Carvalho','alias'=>'Jillian','gender'=>'F','nationality'=>'Timor Leste']);
        UserDetails::create(['niss'=>'100056493','firstname'=>'Joana Maria','lastname'=>'Vilanova Simoes','alias'=>'Joana','gender'=>'F','nationality'=>'Timor Leste']);
        UserDetails::create(['niss'=>'100001349','firstname'=>'Jonas','lastname'=>'Leandro Amaral de Araujo','alias'=>'Jonas','gender'=>'M','nationality'=>'Timor Leste']);
        UserDetails::create(['niss'=>'100001336','firstname'=>'Jose Antonio Brites','lastname'=>'Seixas','alias'=>'Ajitu','gender'=>'M','nationality'=>'Timor Leste']);
        UserDetails::create(['niss'=>'100001538','firstname'=>'Jose','lastname'=>'Asaca','alias'=>'Jose','gender'=>'M','nationality'=>'Timor Leste']);
        UserDetails::create(['niss'=>'100052289','firstname'=>'Jose Carlos Sarmento','lastname'=>'Alves','alias'=>'Jeca','gender'=>'M','nationality'=>'Timor Leste']);
        UserDetails::create(['niss'=>'100001385','firstname'=>'Jose Costa','lastname'=>'da Silva','alias'=>'Jonni','gender'=>'M','nationality'=>'Timor Leste']);
        UserDetails::create(['niss'=>'100002770','firstname'=>'Jose Domingos da Silva','lastname'=>'Freitas','alias'=>'Jose','gender'=>'M','nationality'=>'Timor Leste']);
        UserDetails::create(['niss'=>'100228084','firstname'=>'Jose  dos Santos','lastname'=>'Araujo da Silva ','alias'=>'Jeka','gender'=>'M','nationality'=>'Timor Leste']);
        UserDetails::create(['niss'=>'100056651','firstname'=>'Jose Maubere','lastname'=>'Henriques','alias'=>'Jose','gender'=>'M','nationality'=>'Timor Leste']);
        UserDetails::create(['niss'=>'100001330','firstname'=>'Jose','lastname'=>'Mendonca','alias'=>'Jose','gender'=>'M','nationality'=>'Timor Leste']);
        UserDetails::create(['niss'=>'0','firstname'=>'Jose','lastname'=>'Mousaco','alias'=>'Jose','gender'=>'M','nationality'=>'Australia']);
        UserDetails::create(['niss'=>'100001389','firstname'=>'Juvelio Alves','lastname'=>'da Costa','alias'=>'Juvelio','gender'=>'M','nationality'=>'Timor Leste']);
        UserDetails::create(['niss'=>'100001552','firstname'=>'Juvinal','lastname'=>'Xavier','alias'=>'Juvi','gender'=>'M','nationality'=>'Timor Leste']);
        UserDetails::create(['niss'=>'100001359','firstname'=>'Leila Marini M.F.','lastname'=>'da Silva','alias'=>'Rini','gender'=>'F','nationality'=>'Timor Leste']);
        UserDetails::create(['niss'=>'100060115','firstname'=>'Leopoldina Magno','lastname'=>'dos Santos','alias'=>'Aboto','gender'=>'M','nationality'=>'Timor Leste']);
        UserDetails::create(['niss'=>'100001356','firstname'=>'Lourenco Tavares','lastname'=>'Alves','alias'=>'Enso','gender'=>'M','nationality'=>'Timor Leste']);
        UserDetails::create(['niss'=>'0','firstname'=>'Luc','lastname'=>'Spyckerelle','alias'=>'Luc','gender'=>'M','nationality'=>'Belgium']);
        UserDetails::create(['niss'=>'100001323','firstname'=>'Lucas','lastname'=>'do Nascimento','alias'=>'Lucas','gender'=>'M','nationality'=>'Timor Leste']);
        UserDetails::create(['niss'=>'100001554','firstname'=>'Lucia Viana','lastname'=>'Branco ','alias'=>'Lucia','gender'=>'F','nationality'=>'Timor Leste']);
        UserDetails::create(['niss'=>'100001599','firstname'=>'Marciano Patricio','lastname'=>'da Luz','alias'=>'Toto','gender'=>'M','nationality'=>'Timor Leste']);
        UserDetails::create(['niss'=>'0','firstname'=>'Maria Filomena ','lastname'=>'de Canossa Henrique Duarte ','alias'=>'Maria ','gender'=>'F','nationality'=>'Portugal']);
        UserDetails::create(['niss'=>'100056512','firstname'=>'Maria Luisa ','lastname'=>'Belo Magno','alias'=>'Milu','gender'=>'F','nationality'=>'Timor Leste']);
        UserDetails::create(['niss'=>'100000697','firstname'=>'Maria Teresa','lastname'=>'da Costa','alias'=>'Eza','gender'=>'F','nationality'=>'Timor Leste']);
        UserDetails::create(['niss'=>'100100823','firstname'=>'Mario Ramos','lastname'=>'de Carvalho Miguel','alias'=>'Mario','gender'=>'M','nationality'=>'Timor Leste']);
        UserDetails::create(['niss'=>'100055433','firstname'=>'Mariquita','lastname'=>'Soares','alias'=>'Mariquita','gender'=>'F','nationality'=>'Timor Leste']);
        UserDetails::create(['niss'=>'100001399','firstname'=>'Mateus Albertino do Rego','lastname'=>'Borges','alias'=>'King','gender'=>'M','nationality'=>'Timor Leste']);
        UserDetails::create(['niss'=>'100001602','firstname'=>'Nelia Albertina X.','lastname'=>'Magno','alias'=>'Nelia','gender'=>'F','nationality'=>'Timor Leste']);
        UserDetails::create(['niss'=>'100001352','firstname'=>'Norbertina','lastname'=>'Lopes','alias'=>'Zora','gender'=>'F','nationality'=>'Timor Leste']);
        UserDetails::create(['niss'=>'100001376','firstname'=>'Nuno Ribeiro de Fatima','lastname'=>'e Silva','alias'=>'Nuno','gender'=>'M','nationality'=>'Timor Leste']);
        UserDetails::create(['niss'=>'100001607','firstname'=>'Odete da Costa','lastname'=>'Barreto ','alias'=>'Odete','gender'=>'F','nationality'=>'Timor Leste']);
        UserDetails::create(['niss'=>'100001333','firstname'=>'Oscar da Costa Beram ','lastname'=>'Araujo','alias'=>'Oscar','gender'=>'M','nationality'=>'Timor Leste']);
        UserDetails::create(['niss'=>'100000781','firstname'=>'Romana Pereira','lastname'=>'Barreto','alias'=>'Roper','gender'=>'F','nationality'=>'Timor Leste']);
        UserDetails::create(['niss'=>'100001367','firstname'=>'Ruben Mestre','lastname'=>'Boavida','alias'=>'Ruben','gender'=>'M','nationality'=>'Timor Leste']);
        UserDetails::create(['niss'=>'100001315','firstname'=>'Rui Manuel','lastname'=>'Gusmao','alias'=>'Rui','gender'=>'M','nationality'=>'Timor Leste']);
        UserDetails::create(['niss'=>'100001611','firstname'=>'Satornino','lastname'=>'Amaral','alias'=>'Satu','gender'=>'M','nationality'=>'Timor Leste']);
        UserDetails::create(['niss'=>'100001618','firstname'=>'Sisto','lastname'=>'dos Santos','alias'=>'Sisto','gender'=>'M','nationality'=>'Timor Leste']);
        UserDetails::create(['niss'=>'100001621','firstname'=>'Sofia','lastname'=>'Oliveira Fernandes','alias'=>'Sofia','gender'=>'F','nationality'=>'Timor Leste']);
        UserDetails::create(['niss'=>'0','firstname'=>'Teuku','lastname'=>'Mizansyah','alias'=>'Mizan','gender'=>'M','nationality'=>'Indonesia']);
        UserDetails::create(['niss'=>'100001623','firstname'=>'Vitorino Freitas','lastname'=>'da Costa','alias'=>'Vitorino','gender'=>'M','nationality'=>'Timor Leste']);
        UserDetails::create(['niss'=>'100003770','firstname'=>'Vitorino','lastname'=>'Gomes Manuel','alias'=>'Vitor','gender'=>'M','nationality'=>'Timor Leste']);

    }
}
