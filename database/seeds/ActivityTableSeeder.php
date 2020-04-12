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
        Activity::create(['name'=>'Enkontru Kordenasaun Setoral - Postu Administrativu (GSI)','category_id'=>1,'location_id'=>2,'require_capacity'=>0,'require_monitoring'=>0,'require_cycle'=>1,'require_phase'=>1]);
        Activity::create(['name'=>'Enkontru Kordenasaun Setoral - Municipiu (GSI)','category_id'=>1,'location_id'=>1,'require_capacity'=>1,'require_monitoring'=>0,'require_cycle'=>1,'require_phase'=>1]);
        Activity::create(['name'=>'Enkontru Mensal - Municipiu (GSI)','category_id'=>1,'location_id'=>1,'require_capacity'=>1,'require_monitoring'=>0,'require_cycle'=>1,'require_phase'=>1]);
        Activity::create(['name'=>'Monitorizasaun ba O&M Projetu (depois de konstrusaun)','category_id'=>1,'location_id'=>3,'require_capacity'=>0,'require_monitoring'=>0,'require_cycle'=>0,'require_phase'=>0]);
        Activity::create(['name'=>'Monitorizasaun Finansas','category_id'=>1,'location_id'=>3,'require_capacity'=>1,'require_monitoring'=>0,'require_cycle'=>0,'require_phase'=>0]);
        Activity::create(['name'=>'Monitorizasaun Social','category_id'=>1,'location_id'=>3,'require_capacity'=>0,'require_monitoring'=>0,'require_cycle'=>0,'require_phase'=>0]);
        Activity::create(['name'=>'Enkontru Akontabilidade - Dahuluk (A8. Mini Matadalan, GSI)','category_id'=>1,'location_id'=>3,'require_capacity'=>1,'require_monitoring'=>1,'require_cycle'=>0,'require_phase'=>0]);
        Activity::create(['name'=>'Enkontru Akontabilidade - FINAL (A8. Mini Matadalan, GSI)','category_id'=>1,'location_id'=>3,'require_capacity'=>1,'require_monitoring'=>1,'require_cycle'=>0,'require_phase'=>0]);
        Activity::create(['name'=>'Monitorizasaun Finansas Uma OPS','category_id'=>1,'location_id'=>3,'require_capacity'=>0,'require_monitoring'=>0,'require_cycle'=>1,'require_phase'=>1]);
        Activity::create(['name'=>'Monitorizasaun Social Uma OPS','category_id'=>1,'location_id'=>3,'require_capacity'=>0,'require_monitoring'=>0,'require_cycle'=>1,'require_phase'=>1]);
        Activity::create(['name'=>'Monitorizasaun Finansas Fatin Halimar','category_id'=>1,'location_id'=>3,'require_capacity'=>0,'require_monitoring'=>0,'require_cycle'=>1,'require_phase'=>1]);
        Activity::create(['name'=>'Monitorizasaun Social Fatin Halimar','category_id'=>1,'location_id'=>3,'require_capacity'=>0,'require_monitoring'=>0,'require_cycle'=>1,'require_phase'=>1]);
        Activity::create(['name'=>'Monitorizasaun Finansas KIE','category_id'=>1,'location_id'=>3,'require_capacity'=>0,'require_monitoring'=>0,'require_cycle'=>1,'require_phase'=>1]);
        Activity::create(['name'=>'Monitorizasaun Social KIE','category_id'=>1,'location_id'=>3,'require_capacity'=>0,'require_monitoring'=>0,'require_cycle'=>1,'require_phase'=>1]);
        Activity::create(['name'=>'Monitorizasaun Tekniku KIE','category_id'=>1,'location_id'=>3,'require_capacity'=>0,'require_monitoring'=>0,'require_cycle'=>1,'require_phase'=>1]);
        Activity::create(['name'=>'Monitorizasaun Sistema Bee Mos','category_id'=>1,'location_id'=>3,'require_capacity'=>0,'require_monitoring'=>1,'require_cycle'=>1,'require_phase'=>1]);
        Activity::create(['name'=>'Projetu - Inspesaun Final ba Projetu (GSI, TF 11.2.2)','category_id'=>2,'location_id'=>3,'require_capacity'=>0,'require_monitoring'=>0,'require_cycle'=>0,'require_phase'=>0]);
        Activity::create(['name'=>'Projetu - Monitorizasaun Kualidade Konstrusaun Projetu','category_id'=>2,'location_id'=>3,'require_capacity'=>1,'require_monitoring'=>0,'require_cycle'=>0,'require_phase'=>0]);
        Activity::create(['name'=>'Projetu - Re-Sertifikasaun Projetu / Finansas','category_id'=>2,'location_id'=>3,'require_capacity'=>0,'require_monitoring'=>0,'require_cycle'=>0,'require_phase'=>0]);
        Activity::create(['name'=>'Projetu - Sertifikasaun Projetu / Finansas','category_id'=>2,'location_id'=>3,'require_capacity'=>0,'require_monitoring'=>0,'require_cycle'=>0,'require_phase'=>0]);
        Activity::create(['name'=>'Projetu - Survei no  Dezenhu (A6. Mini Matadalan, GSI)','category_id'=>2,'location_id'=>3,'require_capacity'=>0,'require_monitoring'=>0,'require_cycle'=>0,'require_phase'=>0]);
        Activity::create(['name'=>'Projetu - Verifikasaun Projetu (A5. Mini Matadalan, GSI)','category_id'=>2,'location_id'=>3,'require_capacity'=>0,'require_monitoring'=>0,'require_cycle'=>0,'require_phase'=>0]);
        Activity::create(['name'=>'Projetu - Monitorizasaun Kualidade Konstrusaun Uma OPS','category_id'=>2,'location_id'=>3,'require_capacity'=>0,'require_monitoring'=>1,'require_cycle'=>1,'require_phase'=>1]);
        Activity::create(['name'=>'Projetu - Monitorizasaun Konstrusaun Fatin Halimar','category_id'=>2,'location_id'=>3,'require_capacity'=>0,'require_monitoring'=>0,'require_cycle'=>1,'require_phase'=>1]);
        Activity::create(['name'=>'BoQ - Preparasaun','category_id'=>3,'location_id'=>3,'require_capacity'=>0,'require_monitoring'=>0,'require_cycle'=>0,'require_phase'=>0]);
        Activity::create(['name'=>'BoQ - Revizaun','category_id'=>3,'location_id'=>3,'require_capacity'=>0,'require_monitoring'=>0,'require_cycle'=>0,'require_phase'=>0]);
        Activity::create(['name'=>'Eleisaun EJS (A2. Mini Matadalan, GSI)','category_id'=>3,'location_id'=>3,'require_capacity'=>0,'require_monitoring'=>0,'require_cycle'=>0,'require_phase'=>0]);
        Activity::create(['name'=>'Eleisaun > Re-eleisaun EJS (A2. Mini Matadalan, GSI)','category_id'=>3,'location_id'=>3,'require_capacity'=>0,'require_monitoring'=>0,'require_cycle'=>0,'require_phase'=>0]);
        Activity::create(['name'=>'Enkontru Aprendizazen Komunidade (A10. Mini Matadalan, GSI)','category_id'=>3,'location_id'=>3,'require_capacity'=>0,'require_monitoring'=>0,'require_cycle'=>0,'require_phase'=>0]);
        Activity::create(['name'=>'Enkontru Aprovizionamentu (A9. Mini Matadalan, GSI)','category_id'=>3,'location_id'=>3,'require_capacity'=>1,'require_monitoring'=>0,'require_cycle'=>0,'require_phase'=>0]);
        Activity::create(['name'=>'Enkontru Desidi Prioridade -  Nivel Aldeia (feto mane)  (A4. Mini Matadalan)','category_id'=>3,'location_id'=>3,'require_capacity'=>0,'require_monitoring'=>0,'require_cycle'=>0,'require_phase'=>0]);
        Activity::create(['name'=>'Enkontru Desidi Prioridade - Nivel Aldeia (feto deit) (A4. Mini Matadalan)','category_id'=>3,'location_id'=>3,'require_capacity'=>0,'require_monitoring'=>0,'require_cycle'=>0,'require_phase'=>0]);
        Activity::create(['name'=>'Enkontru Desidi Prioridade - Nivel Suku (A4. Mini Matadalan, GSI)','category_id'=>3,'location_id'=>3,'require_capacity'=>0,'require_monitoring'=>0,'require_cycle'=>0,'require_phase'=>0]);
        Activity::create(['name'=>'Enkontru Konkluzaun Semanal -  Postu Administrativu (Wrap Up','category_id'=>3,'location_id'=>2,'require_capacity'=>0,'require_monitoring'=>0,'require_cycle'=>1,'require_phase'=>1]);
        Activity::create(['name'=>'Enkontru Konkluzaun Semanal - Municipiu (Wrap Up Mtg)','category_id'=>3,'location_id'=>1,'require_capacity'=>0,'require_monitoring'=>0,'require_cycle'=>1,'require_phase'=>1]);
        Activity::create(['name'=>'Enkontru Kordenasaun Setoral (preparasaun, GSI) - Postu Administrativu','category_id'=>3,'location_id'=>2,'require_capacity'=>0,'require_monitoring'=>0,'require_cycle'=>1,'require_phase'=>1]);
        Activity::create(['name'=>'Enkontru Mensal - Postu Administrativu (GSI)','category_id'=>3,'location_id'=>2,'require_capacity'=>0,'require_monitoring'=>0,'require_cycle'=>1,'require_phase'=>1]);
        Activity::create(['name'=>'Enkontru Kordenasaun Setoral (preparasaun, GSI) - Municipiu','category_id'=>3,'location_id'=>1,'require_capacity'=>1,'require_monitoring'=>0,'require_cycle'=>1,'require_phase'=>1]);
        Activity::create(['name'=>'Enkontru Mensal (preparasaun) - Municipiu (GSI)','category_id'=>3,'location_id'=>1,'require_capacity'=>1,'require_monitoring'=>0,'require_cycle'=>1,'require_phase'=>1]);
        Activity::create(['name'=>'Enkontru Mensal (preparasaun) - Postu Administrativu (GSI)','category_id'=>3,'location_id'=>2,'require_capacity'=>0,'require_monitoring'=>0,'require_cycle'=>1,'require_phase'=>1]);
        Activity::create(['name'=>'Keixa - Jestaun Keixa (inklui  frauda, resolusaun konflitu)','category_id'=>3,'location_id'=>3,'require_capacity'=>0,'require_monitoring'=>0,'require_cycle'=>0,'require_phase'=>0]);
        Activity::create(['name'=>'Konta Bankaria - re-ativasaun','category_id'=>3,'location_id'=>3,'require_capacity'=>0,'require_monitoring'=>0,'require_cycle'=>0,'require_phase'=>0]);
        Activity::create(['name'=>'Konta Bankaria - Taka','category_id'=>3,'location_id'=>3,'require_capacity'=>0,'require_monitoring'=>0,'require_cycle'=>0,'require_phase'=>0]);
        Activity::create(['name'=>'Mobilizasaun Trabalhador (A7. Mini Matadalan, GSI, Protesaun ba Labarik)','category_id'=>3,'location_id'=>3,'require_capacity'=>1,'require_monitoring'=>0,'require_cycle'=>0,'require_phase'=>0]);
        Activity::create(['name'=>'Planu Servisu (preparasaun) - Municipiu','category_id'=>3,'location_id'=>1,'require_capacity'=>0,'require_monitoring'=>0,'require_cycle'=>1,'require_phase'=>1]);
        Activity::create(['name'=>'Planu Servisu (preparasaun) - Postu Administrativu','category_id'=>3,'location_id'=>2,'require_capacity'=>0,'require_monitoring'=>0,'require_cycle'=>1,'require_phase'=>1]);
        Activity::create(['name'=>'Relatoriu - Preparasaun (inklui data MIS) - Municipiu','category_id'=>3,'location_id'=>1,'require_capacity'=>0,'require_monitoring'=>0,'require_cycle'=>1,'require_phase'=>1]);
        Activity::create(['name'=>'Relatoriu - Preparasaun (inklui Diario) - Postu Administrati','category_id'=>3,'location_id'=>2,'require_capacity'=>0,'require_monitoring'=>0,'require_cycle'=>1,'require_phase'=>1]);
        Activity::create(['name'=>'Sosializasaun - Nivel Aldeia (A1. Mini Matadalan, GSI)','category_id'=>3,'location_id'=>3,'require_capacity'=>0,'require_monitoring'=>0,'require_cycle'=>0,'require_phase'=>0]);
        Activity::create(['name'=>'Sosializasaun - Nivel Postu Administrative  (A1. Mini Matadalan, GSI)','category_id'=>3,'location_id'=>2,'require_capacity'=>0,'require_monitoring'=>0,'require_cycle'=>0,'require_phase'=>0]);
        Activity::create(['name'=>'Sosializasaun - Nivel Suku (A1. Mini Matadalan, GSI)','category_id'=>3,'location_id'=>3,'require_capacity'=>0,'require_monitoring'=>0,'require_cycle'=>0,'require_phase'=>0]);
        Activity::create(['name'=>'Sosializasaun - Nivel Municipiu','category_id'=>3,'location_id'=>1,'require_capacity'=>0,'require_monitoring'=>0,'require_cycle'=>0,'require_phase'=>0]);
        Activity::create(['name'=>'Subsidiu - Levantamentu','category_id'=>3,'location_id'=>3,'require_capacity'=>0,'require_monitoring'=>0,'require_cycle'=>0,'require_phase'=>0]);
        Activity::create(['name'=>'Subsidiu - Preparasaun baTransferensia','category_id'=>3,'location_id'=>3,'require_capacity'=>0,'require_monitoring'=>0,'require_cycle'=>0,'require_phase'=>0]);
        Activity::create(['name'=>'Treinamentu - Treinamentu Nivel Municipiu (MLF, GSI, etc)','category_id'=>3,'location_id'=>1,'require_capacity'=>0,'require_monitoring'=>0,'require_cycle'=>1,'require_phase'=>1]);
        Activity::create(['name'=>'Treinamentu EJS - Module A (A3. Mini Matadalan)','category_id'=>3,'location_id'=>3,'require_capacity'=>0,'require_monitoring'=>0,'require_cycle'=>0,'require_phase'=>0]);
        Activity::create(['name'=>'Treinamentu EJS - Module B (A3. Mini Matadalan)','category_id'=>3,'location_id'=>3,'require_capacity'=>0,'require_monitoring'=>0,'require_cycle'=>0,'require_phase'=>0]);
        Activity::create(['name'=>'Treinamentu EJS - Module C (A3. Mini Matadalan)','category_id'=>3,'location_id'=>3,'require_capacity'=>0,'require_monitoring'=>0,'require_cycle'=>0,'require_phase'=>0]);
        Activity::create(['name'=>'Treinamentu EJS - Module D (A3. Mini Matadalan)','category_id'=>3,'location_id'=>3,'require_capacity'=>0,'require_monitoring'=>0,'require_cycle'=>0,'require_phase'=>0]);
        Activity::create(['name'=>'Treinamentu EJS - Module E (A3. Mini Matadalan)','category_id'=>3,'location_id'=>3,'require_capacity'=>0,'require_monitoring'=>0,'require_cycle'=>0,'require_phase'=>0]);
        Activity::create(['name'=>'Treinamentu EJS - Module F (A3. Mini Matadalan)','category_id'=>3,'location_id'=>3,'require_capacity'=>0,'require_monitoring'=>0,'require_cycle'=>0,'require_phase'=>0]);
        Activity::create(['name'=>'Treinamentu EJS - Module G (A3. Mini Matadalan)','category_id'=>3,'location_id'=>3,'require_capacity'=>0,'require_monitoring'=>0,'require_cycle'=>0,'require_phase'=>0]);
        Activity::create(['name'=>'Treinamentu EJS - Module H (A3. Mini Matadalan)','category_id'=>3,'location_id'=>3,'require_capacity'=>0,'require_monitoring'=>0,'require_cycle'=>0,'require_phase'=>0]);
        Activity::create(['name'=>'Treinamentu EJS - Module I (A3. Mini Matadalan)','category_id'=>3,'location_id'=>3,'require_capacity'=>0,'require_monitoring'=>0,'require_cycle'=>0,'require_phase'=>0]);
        Activity::create(['name'=>'Treinamentu EJS - Module J (A3. Mini Matadalan)','category_id'=>3,'location_id'=>3,'require_capacity'=>0,'require_monitoring'=>0,'require_cycle'=>0,'require_phase'=>0]);
        Activity::create(['name'=>'Treinamentu EJS - Module K (A3. Mini Matadalan)','category_id'=>3,'location_id'=>3,'require_capacity'=>0,'require_monitoring'=>0,'require_cycle'=>0,'require_phase'=>0]);
        Activity::create(['name'=>'Treinamentu EJS - Module L (A3. Mini Matadalan)','category_id'=>3,'location_id'=>3,'require_capacity'=>0,'require_monitoring'=>0,'require_cycle'=>0,'require_phase'=>0]);
        Activity::create(['name'=>'Apoio Verifikasaun Dadus MIS','category_id'=>3,'location_id'=>1,'require_capacity'=>0,'require_monitoring'=>0,'require_cycle'=>1,'require_phase'=>1]);
        Activity::create(['name'=>'Apoio Sistema Responde Keixa','category_id'=>3,'location_id'=>1,'require_capacity'=>0,'require_monitoring'=>0,'require_cycle'=>1,'require_phase'=>1]);
        Activity::create(['name'=>'Apoio Utilizasaun Monitoring Tool','category_id'=>3,'location_id'=>1,'require_capacity'=>0,'require_monitoring'=>0,'require_cycle'=>1,'require_phase'=>1]);
        Activity::create(['name'=>'Treinamentu EJS Nivel Postu','category_id'=>3,'location_id'=>2,'require_capacity'=>0,'require_monitoring'=>0,'require_cycle'=>0,'require_phase'=>0]);
        Activity::create(['name'=>'Treinamentu EJS Nivel Suku','category_id'=>3,'location_id'=>3,'require_capacity'=>0,'require_monitoring'=>0,'require_cycle'=>0,'require_phase'=>0]);
        Activity::create(['name'=>'Enkontru Mensal SMASA - Nivel Municipiu','category_id'=>3,'location_id'=>1,'require_capacity'=>0,'require_monitoring'=>0,'require_cycle'=>1,'require_phase'=>1]);
        Activity::create(['name'=>'Enkontru Mensal SMASA - Nivel Suco','category_id'=>3,'location_id'=>1,'require_capacity'=>0,'require_monitoring'=>0,'require_cycle'=>1,'require_phase'=>1]);
        Activity::create(['name'=>'Treinamentu Tekniku TCS - Nivel Municipiu','category_id'=>3,'location_id'=>1,'require_capacity'=>0,'require_monitoring'=>0,'require_cycle'=>1,'require_phase'=>1]);
        Activity::create(['name'=>'Treinamentu Sosial CAP - Nivel Municipiu','category_id'=>3,'location_id'=>1,'require_capacity'=>0,'require_monitoring'=>0,'require_cycle'=>1,'require_phase'=>1]);
        Activity::create(['name'=>'Treinamentu Finansas GMF - Nivel Municipiu','category_id'=>3,'location_id'=>1,'require_capacity'=>0,'require_monitoring'=>0,'require_cycle'=>1,'require_phase'=>1]);
        Activity::create(['name'=>'Apoio Koordenasaun SMASA - Nivel Municipiu','category_id'=>3,'location_id'=>1,'require_capacity'=>0,'require_monitoring'=>0,'require_cycle'=>1,'require_phase'=>1]);

    }
}
