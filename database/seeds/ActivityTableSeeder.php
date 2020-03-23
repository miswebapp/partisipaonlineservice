<?php

use Illuminate\Database\Seeder;
use App\Models\Frs\Activity;
class ActivityTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Activity::truncate();
        Activity::create(['name'=>'	Enkontru Kordenasaun Setoral - Postu Administrativu (GSI)	','type'=>'	M	','location_level'=>'	PA	','require_capacity'=>'	0	','require_monitoring'=>'	0	','require_cycle'=>'	1	','require_phase'=>'	1	']);
        Activity::create(['name'=>'	Enkontru Kordenasaun Setoral - Municipiu (GSI)	','type'=>'	M	','location_level'=>'	M	','require_capacity'=>'	1	','require_monitoring'=>'	0	','require_cycle'=>'	1	','require_phase'=>'	1	']);
        Activity::create(['name'=>'	Enkontru Mensal - Municipiu (GSI)	','type'=>'	M	','location_level'=>'	M	','require_capacity'=>'	1	','require_monitoring'=>'	0	','require_cycle'=>'	1	','require_phase'=>'	1	']);
        Activity::create(['name'=>'	Monitorizasaun ba O&M Projetu (depois de konstrusaun)	','type'=>'	M	','location_level'=>'	S	','require_capacity'=>'	0	','require_monitoring'=>'	0	','require_cycle'=>'	0	','require_phase'=>'	0	']);
        Activity::create(['name'=>'	Monitorizasaun Finansas	','type'=>'	M	','location_level'=>'	S	','require_capacity'=>'	1	','require_monitoring'=>'	0	','require_cycle'=>'	0	','require_phase'=>'	0	']);
        Activity::create(['name'=>'	Monitorizasaun Social	','type'=>'	M	','location_level'=>'	S	','require_capacity'=>'	0	','require_monitoring'=>'	0	','require_cycle'=>'	0	','require_phase'=>'	0	']);
        Activity::create(['name'=>'	Enkontru Akontabilidade - Dahuluk (A8. Mini Matadalan, GSI)	','type'=>'	M	','location_level'=>'	S	','require_capacity'=>'	1	','require_monitoring'=>'	1	','require_cycle'=>'	0	','require_phase'=>'	0	']);
        Activity::create(['name'=>'	Enkontru Akontabilidade - FINAL (A8. Mini Matadalan, GSI)	','type'=>'	M	','location_level'=>'	S	','require_capacity'=>'	1	','require_monitoring'=>'	1	','require_cycle'=>'	0	','require_phase'=>'	0	']);
        Activity::create(['name'=>'	Monitorizasaun Finansas Uma OPS	','type'=>'	M	','location_level'=>'	S	','require_capacity'=>'	0	','require_monitoring'=>'	0	','require_cycle'=>'	1	','require_phase'=>'	1	']);
        Activity::create(['name'=>'	Monitorizasaun Social Uma OPS	','type'=>'	M	','location_level'=>'	S	','require_capacity'=>'	0	','require_monitoring'=>'	0	','require_cycle'=>'	1	','require_phase'=>'	1	']);
        Activity::create(['name'=>'	Monitorizasaun Finansas Fatin Halimar	','type'=>'	M	','location_level'=>'	S	','require_capacity'=>'	0	','require_monitoring'=>'	0	','require_cycle'=>'	1	','require_phase'=>'	1	']);
        Activity::create(['name'=>'	Monitorizasaun Social Fatin Halimar	','type'=>'	M	','location_level'=>'	S	','require_capacity'=>'	0	','require_monitoring'=>'	0	','require_cycle'=>'	1	','require_phase'=>'	1	']);
        Activity::create(['name'=>'	Monitorizasaun Finansas KIE	','type'=>'	M	','location_level'=>'	S	','require_capacity'=>'	0	','require_monitoring'=>'	0	','require_cycle'=>'	1	','require_phase'=>'	1	']);
        Activity::create(['name'=>'	Monitorizasaun Social KIE	','type'=>'	M	','location_level'=>'	S	','require_capacity'=>'	0	','require_monitoring'=>'	0	','require_cycle'=>'	1	','require_phase'=>'	1	']);
        Activity::create(['name'=>'	Monitorizasaun Tekniku KIE	','type'=>'	M	','location_level'=>'	S	','require_capacity'=>'	0	','require_monitoring'=>'	0	','require_cycle'=>'	1	','require_phase'=>'	1	']);
        Activity::create(['name'=>'	Monitorizasaun Sistema Bee Mos	','type'=>'	M	','location_level'=>'	S	','require_capacity'=>'	0	','require_monitoring'=>'	1	','require_cycle'=>'	1	','require_phase'=>'	1	']);
        Activity::create(['name'=>'	Projetu - Inspesaun Final ba Projetu (GSI, TF 11.2.2)	','type'=>'	P	','location_level'=>'	S	','require_capacity'=>'	0	','require_monitoring'=>'	0	','require_cycle'=>'	0	','require_phase'=>'	0	']);
        Activity::create(['name'=>'	Projetu - Monitorizasaun Kualidade Konstrusaun Projetu	','type'=>'	P	','location_level'=>'	S	','require_capacity'=>'	1	','require_monitoring'=>'	0	','require_cycle'=>'	0	','require_phase'=>'	0	']);
        Activity::create(['name'=>'	Projetu - Re-Sertifikasaun Projetu / Finansas	','type'=>'	P	','location_level'=>'	S	','require_capacity'=>'	0	','require_monitoring'=>'	0	','require_cycle'=>'	0	','require_phase'=>'	0	']);
        Activity::create(['name'=>'	Projetu - Sertifikasaun Projetu / Finansas	','type'=>'	P	','location_level'=>'	S	','require_capacity'=>'	0	','require_monitoring'=>'	0	','require_cycle'=>'	0	','require_phase'=>'	0	']);
        Activity::create(['name'=>'	Projetu - Survei no  Dezenhu (A6. Mini Matadalan, GSI)	','type'=>'	P	','location_level'=>'	S	','require_capacity'=>'	0	','require_monitoring'=>'	0	','require_cycle'=>'	0	','require_phase'=>'	0	']);
        Activity::create(['name'=>'	Projetu - Verifikasaun Projetu (A5. Mini Matadalan, GSI)	','type'=>'	P	','location_level'=>'	S	','require_capacity'=>'	0	','require_monitoring'=>'	0	','require_cycle'=>'	0	','require_phase'=>'	0	']);
        Activity::create(['name'=>'	Projetu - Monitorizasaun Kualidade Konstrusaun Uma OPS	','type'=>'	P	','location_level'=>'	S	','require_capacity'=>'	0	','require_monitoring'=>'	1	','require_cycle'=>'	1	','require_phase'=>'	1	']);
        Activity::create(['name'=>'	Projetu - Monitorizasaun Konstrusaun Fatin Halimar	','type'=>'	P	','location_level'=>'	S	','require_capacity'=>'	0	','require_monitoring'=>'	0	','require_cycle'=>'	1	','require_phase'=>'	1	']);
        Activity::create(['name'=>'	BoQ - Preparasaun	','type'=>'	R	','location_level'=>'	S	','require_capacity'=>'	0	','require_monitoring'=>'	0	','require_cycle'=>'	0	','require_phase'=>'	0	']);
        Activity::create(['name'=>'	BoQ - Revizaun	','type'=>'	R	','location_level'=>'	S	','require_capacity'=>'	0	','require_monitoring'=>'	0	','require_cycle'=>'	0	','require_phase'=>'	0	']);
        Activity::create(['name'=>'	Eleisaun EJS (A2. Mini Matadalan, GSI)	','type'=>'	R	','location_level'=>'	S	','require_capacity'=>'	0	','require_monitoring'=>'	0	','require_cycle'=>'	0	','require_phase'=>'	0	']);
        Activity::create(['name'=>'	Eleisaun > Re-eleisaun EJS (A2. Mini Matadalan, GSI)	','type'=>'	R	','location_level'=>'	S	','require_capacity'=>'	0	','require_monitoring'=>'	0	','require_cycle'=>'	0	','require_phase'=>'	0	']);
        Activity::create(['name'=>'	Enkontru Aprendizazen Komunidade (A10. Mini Matadalan, GSI)	','type'=>'	R	','location_level'=>'	S	','require_capacity'=>'	0	','require_monitoring'=>'	0	','require_cycle'=>'	0	','require_phase'=>'	0	']);
        Activity::create(['name'=>'	Enkontru Aprovizionamentu (A9. Mini Matadalan, GSI)	','type'=>'	R	','location_level'=>'	S	','require_capacity'=>'	1	','require_monitoring'=>'	0	','require_cycle'=>'	0	','require_phase'=>'	0	']);
        Activity::create(['name'=>'	Enkontru Desidi Prioridade -  Nivel Aldeia (feto mane)  (A4. Mini Matadalan)	','type'=>'	R	','location_level'=>'	S	','require_capacity'=>'	0	','require_monitoring'=>'	0	','require_cycle'=>'	0	','require_phase'=>'	0	']);
        Activity::create(['name'=>'	Enkontru Desidi Prioridade - Nivel Aldeia (feto deit) (A4. Mini Matadalan)	','type'=>'	R	','location_level'=>'	S	','require_capacity'=>'	0	','require_monitoring'=>'	0	','require_cycle'=>'	0	','require_phase'=>'	0	']);
        Activity::create(['name'=>'	Enkontru Desidi Prioridade - Nivel Suku (A4. Mini Matadalan, GSI)	','type'=>'	R	','location_level'=>'	S	','require_capacity'=>'	0	','require_monitoring'=>'	0	','require_cycle'=>'	0	','require_phase'=>'	0	']);
        Activity::create(['name'=>'	Enkontru Konkluzaun Semanal -  Postu Administrativu (Wrap Up	','type'=>'	R	','location_level'=>'	PA	','require_capacity'=>'	0	','require_monitoring'=>'	0	','require_cycle'=>'	1	','require_phase'=>'	1	']);
        Activity::create(['name'=>'	Enkontru Konkluzaun Semanal - Municipiu (Wrap Up Mtg)	','type'=>'	R	','location_level'=>'	M	','require_capacity'=>'	0	','require_monitoring'=>'	0	','require_cycle'=>'	1	','require_phase'=>'	1	']);
        Activity::create(['name'=>'	Enkontru Kordenasaun Setoral (preparasaun, GSI) - Postu Administrativu	','type'=>'	R	','location_level'=>'	PA	','require_capacity'=>'	0	','require_monitoring'=>'	0	','require_cycle'=>'	1	','require_phase'=>'	1	']);
        Activity::create(['name'=>'	Enkontru Mensal - Postu Administrativu (GSI)	','type'=>'	R	','location_level'=>'	PA	','require_capacity'=>'	0	','require_monitoring'=>'	0	','require_cycle'=>'	1	','require_phase'=>'	1	']);
        Activity::create(['name'=>'	Enkontru Kordenasaun Setoral (preparasaun, GSI) - Municipiu	','type'=>'	R	','location_level'=>'	M	','require_capacity'=>'	1	','require_monitoring'=>'	0	','require_cycle'=>'	1	','require_phase'=>'	1	']);
        Activity::create(['name'=>'	Enkontru Mensal (preparasaun) - Municipiu (GSI)	','type'=>'	R	','location_level'=>'	M	','require_capacity'=>'	1	','require_monitoring'=>'	0	','require_cycle'=>'	1	','require_phase'=>'	1	']);
        Activity::create(['name'=>'	Enkontru Mensal (preparasaun) - Postu Administrativu (GSI)	','type'=>'	R	','location_level'=>'	PA	','require_capacity'=>'	0	','require_monitoring'=>'	0	','require_cycle'=>'	1	','require_phase'=>'	1	']);
        Activity::create(['name'=>'	Keixa - Jestaun Keixa (inklui  frauda, resolusaun konflitu)	','type'=>'	R	','location_level'=>'	S	','require_capacity'=>'	0	','require_monitoring'=>'	0	','require_cycle'=>'	0	','require_phase'=>'	0	']);
        Activity::create(['name'=>'	Konta Bankaria - re-ativasaun	','type'=>'	R	','location_level'=>'	S	','require_capacity'=>'	0	','require_monitoring'=>'	0	','require_cycle'=>'	0	','require_phase'=>'	0	']);
        Activity::create(['name'=>'	Konta Bankaria - Taka	','type'=>'	R	','location_level'=>'	S	','require_capacity'=>'	0	','require_monitoring'=>'	0	','require_cycle'=>'	0	','require_phase'=>'	0	']);
        Activity::create(['name'=>'	Mobilizasaun Trabalhador (A7. Mini Matadalan, GSI, Protesaun ba Labarik)	','type'=>'	R	','location_level'=>'	S	','require_capacity'=>'	1	','require_monitoring'=>'	0	','require_cycle'=>'	0	','require_phase'=>'	0	']);
        Activity::create(['name'=>'	Planu Servisu (preparasaun) - Municipiu	','type'=>'	R	','location_level'=>'	M	','require_capacity'=>'	0	','require_monitoring'=>'	0	','require_cycle'=>'	1	','require_phase'=>'	1	']);
        Activity::create(['name'=>'	Planu Servisu (preparasaun) - Postu Administrativu	','type'=>'	R	','location_level'=>'	PA	','require_capacity'=>'	0	','require_monitoring'=>'	0	','require_cycle'=>'	1	','require_phase'=>'	1	']);
        Activity::create(['name'=>'	Relatoriu - Preparasaun (inklui data MIS) - Municipiu	','type'=>'	R	','location_level'=>'	M	','require_capacity'=>'	0	','require_monitoring'=>'	0	','require_cycle'=>'	1	','require_phase'=>'	1	']);
        Activity::create(['name'=>'	Relatoriu - Preparasaun (inklui Diario) - Postu Administrati	','type'=>'	R	','location_level'=>'	PA	','require_capacity'=>'	0	','require_monitoring'=>'	0	','require_cycle'=>'	1	','require_phase'=>'	1	']);
        Activity::create(['name'=>'	Sosializasaun - Nivel Aldeia (A1. Mini Matadalan, GSI)	','type'=>'	R	','location_level'=>'	S	','require_capacity'=>'	0	','require_monitoring'=>'	0	','require_cycle'=>'	0	','require_phase'=>'	0	']);
        Activity::create(['name'=>'	Sosializasaun - Nivel Postu Administrative  (A1. Mini Matadalan, GSI)	','type'=>'	R	','location_level'=>'	PA	','require_capacity'=>'	0	','require_monitoring'=>'	0	','require_cycle'=>'	0	','require_phase'=>'	0	']);
        Activity::create(['name'=>'	Sosializasaun - Nivel Suku (A1. Mini Matadalan, GSI)	','type'=>'	R	','location_level'=>'	S	','require_capacity'=>'	0	','require_monitoring'=>'	0	','require_cycle'=>'	0	','require_phase'=>'	0	']);
        Activity::create(['name'=>'	Sosializasaun - Nivel Municipiu	','type'=>'	R	','location_level'=>'	M	','require_capacity'=>'	0	','require_monitoring'=>'	0	','require_cycle'=>'	0	','require_phase'=>'	0	']);
        Activity::create(['name'=>'	Subsidiu - Levantamentu	','type'=>'	R	','location_level'=>'	S	','require_capacity'=>'	0	','require_monitoring'=>'	0	','require_cycle'=>'	0	','require_phase'=>'	0	']);
        Activity::create(['name'=>'	Subsidiu - Preparasaun baTransferensia	','type'=>'	R	','location_level'=>'	S	','require_capacity'=>'	0	','require_monitoring'=>'	0	','require_cycle'=>'	0	','require_phase'=>'	0	']);
        Activity::create(['name'=>'	Treinamentu - Treinamentu Nivel Municipiu (MLF, GSI, etc)	','type'=>'	R	','location_level'=>'	M	','require_capacity'=>'	0	','require_monitoring'=>'	0	','require_cycle'=>'	1	','require_phase'=>'	1	']);
        Activity::create(['name'=>'	Treinamentu EJS - Module A (A3. Mini Matadalan)	','type'=>'	R	','location_level'=>'	S	','require_capacity'=>'	0	','require_monitoring'=>'	0	','require_cycle'=>'	0	','require_phase'=>'	0	']);
        Activity::create(['name'=>'	Treinamentu EJS - Module B (A3. Mini Matadalan)	','type'=>'	R	','location_level'=>'	S	','require_capacity'=>'	0	','require_monitoring'=>'	0	','require_cycle'=>'	0	','require_phase'=>'	0	']);
        Activity::create(['name'=>'	Treinamentu EJS - Module C (A3. Mini Matadalan)	','type'=>'	R	','location_level'=>'	S	','require_capacity'=>'	0	','require_monitoring'=>'	0	','require_cycle'=>'	0	','require_phase'=>'	0	']);
        Activity::create(['name'=>'	Treinamentu EJS - Module D (A3. Mini Matadalan)	','type'=>'	R	','location_level'=>'	S	','require_capacity'=>'	0	','require_monitoring'=>'	0	','require_cycle'=>'	0	','require_phase'=>'	0	']);
        Activity::create(['name'=>'	Treinamentu EJS - Module E (A3. Mini Matadalan)	','type'=>'	R	','location_level'=>'	S	','require_capacity'=>'	0	','require_monitoring'=>'	0	','require_cycle'=>'	0	','require_phase'=>'	0	']);
        Activity::create(['name'=>'	Treinamentu EJS - Module F (A3. Mini Matadalan)	','type'=>'	R	','location_level'=>'	S	','require_capacity'=>'	0	','require_monitoring'=>'	0	','require_cycle'=>'	0	','require_phase'=>'	0	']);
        Activity::create(['name'=>'	Treinamentu EJS - Module G (A3. Mini Matadalan)	','type'=>'	R	','location_level'=>'	S	','require_capacity'=>'	0	','require_monitoring'=>'	0	','require_cycle'=>'	0	','require_phase'=>'	0	']);
        Activity::create(['name'=>'	Treinamentu EJS - Module H (A3. Mini Matadalan)	','type'=>'	R	','location_level'=>'	S	','require_capacity'=>'	0	','require_monitoring'=>'	0	','require_cycle'=>'	0	','require_phase'=>'	0	']);
        Activity::create(['name'=>'	Treinamentu EJS - Module I (A3. Mini Matadalan)	','type'=>'	R	','location_level'=>'	S	','require_capacity'=>'	0	','require_monitoring'=>'	0	','require_cycle'=>'	0	','require_phase'=>'	0	']);
        Activity::create(['name'=>'	Treinamentu EJS - Module J (A3. Mini Matadalan)	','type'=>'	R	','location_level'=>'	S	','require_capacity'=>'	0	','require_monitoring'=>'	0	','require_cycle'=>'	0	','require_phase'=>'	0	']);
        Activity::create(['name'=>'	Treinamentu EJS - Module K (A3. Mini Matadalan)	','type'=>'	R	','location_level'=>'	S	','require_capacity'=>'	0	','require_monitoring'=>'	0	','require_cycle'=>'	0	','require_phase'=>'	0	']);
        Activity::create(['name'=>'	Treinamentu EJS - Module L (A3. Mini Matadalan)	','type'=>'	R	','location_level'=>'	S	','require_capacity'=>'	0	','require_monitoring'=>'	0	','require_cycle'=>'	0	','require_phase'=>'	0	']);
        Activity::create(['name'=>'	Apoio Verifikasaun Dadus MIS	','type'=>'	R	','location_level'=>'	M	','require_capacity'=>'	0	','require_monitoring'=>'	0	','require_cycle'=>'	1	','require_phase'=>'	1	']);
        Activity::create(['name'=>'	Apoio Sistema Responde Keixa	','type'=>'	R	','location_level'=>'	M	','require_capacity'=>'	0	','require_monitoring'=>'	0	','require_cycle'=>'	1	','require_phase'=>'	1	']);
        Activity::create(['name'=>'	Apoio Utilizasaun Monitoring Tool	','type'=>'	R	','location_level'=>'	M	','require_capacity'=>'	0	','require_monitoring'=>'	0	','require_cycle'=>'	1	','require_phase'=>'	1	']);
        Activity::create(['name'=>'	Treinamentu EJS Nivel Postu	','type'=>'	R	','location_level'=>'	PA	','require_capacity'=>'	0	','require_monitoring'=>'	0	','require_cycle'=>'	0	','require_phase'=>'	0	']);
        Activity::create(['name'=>'	Treinamentu EJS Nivel Suku	','type'=>'	R	','location_level'=>'	S	','require_capacity'=>'	0	','require_monitoring'=>'	0	','require_cycle'=>'	0	','require_phase'=>'	0	']);
        Activity::create(['name'=>'	Enkontru Mensal SMASA - Nivel Municipiu	','type'=>'	R	','location_level'=>'	M	','require_capacity'=>'	0	','require_monitoring'=>'	0	','require_cycle'=>'	1	','require_phase'=>'	1	']);
        Activity::create(['name'=>'	Enkontru Mensal SMASA - Nivel Suco	','type'=>'	R	','location_level'=>'	M	','require_capacity'=>'	0	','require_monitoring'=>'	0	','require_cycle'=>'	1	','require_phase'=>'	1	']);
        Activity::create(['name'=>'	Treinamentu Tekniku TCS - Nivel Municipiu	','type'=>'	R	','location_level'=>'	M	','require_capacity'=>'	0	','require_monitoring'=>'	0	','require_cycle'=>'	1	','require_phase'=>'	1	']);
        Activity::create(['name'=>'	Treinamentu Sosial CAP - Nivel Municipiu	','type'=>'	R	','location_level'=>'	M	','require_capacity'=>'	0	','require_monitoring'=>'	0	','require_cycle'=>'	1	','require_phase'=>'	1	']);
        Activity::create(['name'=>'	Treinamentu Finansas GMF - Nivel Municipiu	','type'=>'	R	','location_level'=>'	M	','require_capacity'=>'	0	','require_monitoring'=>'	0	','require_cycle'=>'	1	','require_phase'=>'	1	']);
        Activity::create(['name'=>'	Apoio Koordenasaun SMASA - Nivel Municipiu	','type'=>'	R	','location_level'=>'	M	','require_capacity'=>'	0	','require_monitoring'=>'	0	','require_cycle'=>'	1	','require_phase'=>'	1	']);

    }
}
