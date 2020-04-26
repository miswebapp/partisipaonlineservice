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
        Activity::create(['name'=>'Enkontru Kordenasaun Setoral - Postu Administrativu (GSI)','program_id'=>'1','category_id'=>'1','location_id'=>'2','require_capacity'=>'0','require_monitoring'=>'0','require_cycle'=>'1','require_phase'=>'1']);
        Activity::create(['name'=>'Enkontru Kordenasaun Setoral - Municipiu (GSI)','program_id'=>'1','category_id'=>'1','location_id'=>'1','require_capacity'=>'1','require_monitoring'=>'0','require_cycle'=>'1','require_phase'=>'1']);
        Activity::create(['name'=>'Enkontru Mensal - Municipiu (GSI)','program_id'=>'1','category_id'=>'1','location_id'=>'1','require_capacity'=>'1','require_monitoring'=>'0','require_cycle'=>'1','require_phase'=>'1']);
        Activity::create(['name'=>'Monitorizasaun ba O&M Projetu (depois de konstrusaun)','program_id'=>'1','category_id'=>'1','location_id'=>'3','require_capacity'=>'0','require_monitoring'=>'0','require_cycle'=>'0','require_phase'=>'0']);
        Activity::create(['name'=>'Monitorizasaun Finansas','program_id'=>'1','category_id'=>'1','location_id'=>'3','require_capacity'=>'1','require_monitoring'=>'0','require_cycle'=>'0','require_phase'=>'0']);
        Activity::create(['name'=>'Monitorizasaun Social','program_id'=>'1','category_id'=>'1','location_id'=>'3','require_capacity'=>'0','require_monitoring'=>'0','require_cycle'=>'0','require_phase'=>'0']);
        Activity::create(['name'=>'Enkontru Akontabilidade - Dahuluk (A8. Mini Matadalan, GSI)','program_id'=>'1','category_id'=>'1','location_id'=>'3','require_capacity'=>'1','require_monitoring'=>'1','require_cycle'=>'0','require_phase'=>'0']);
        Activity::create(['name'=>'Enkontru Akontabilidade - FINAL (A8. Mini Matadalan, GSI)','program_id'=>'1','category_id'=>'1','location_id'=>'3','require_capacity'=>'1','require_monitoring'=>'1','require_cycle'=>'0','require_phase'=>'0']);
        Activity::create(['name'=>'Monitorizasaun Finansas Uma OPS','program_id'=>'4','category_id'=>'1','location_id'=>'3','require_capacity'=>'0','require_monitoring'=>'0','require_cycle'=>'1','require_phase'=>'1']);
        Activity::create(['name'=>'Monitorizasaun Social Uma OPS','program_id'=>'4','category_id'=>'1','location_id'=>'3','require_capacity'=>'0','require_monitoring'=>'0','require_cycle'=>'1','require_phase'=>'1']);
        Activity::create(['name'=>'Monitorizasaun Finansas Fatin Halimar','program_id'=>'5','category_id'=>'1','location_id'=>'3','require_capacity'=>'0','require_monitoring'=>'0','require_cycle'=>'1','require_phase'=>'1']);
        Activity::create(['name'=>'Monitorizasaun Social Fatin Halimar','program_id'=>'5','category_id'=>'1','location_id'=>'3','require_capacity'=>'0','require_monitoring'=>'0','require_cycle'=>'1','require_phase'=>'1']);
        Activity::create(['name'=>'Monitorizasaun Finansas KIE','program_id'=>'3','category_id'=>'1','location_id'=>'3','require_capacity'=>'0','require_monitoring'=>'0','require_cycle'=>'1','require_phase'=>'1']);
        Activity::create(['name'=>'Monitorizasaun Social KIE','program_id'=>'3','category_id'=>'1','location_id'=>'3','require_capacity'=>'0','require_monitoring'=>'0','require_cycle'=>'1','require_phase'=>'1']);
        Activity::create(['name'=>'Monitorizasaun Tekniku KIE','program_id'=>'3','category_id'=>'1','location_id'=>'3','require_capacity'=>'0','require_monitoring'=>'0','require_cycle'=>'1','require_phase'=>'1']);
        Activity::create(['name'=>'Monitorizasaun Sistema Bee Mos','program_id'=>'1','category_id'=>'1','location_id'=>'3','require_capacity'=>'0','require_monitoring'=>'1','require_cycle'=>'1','require_phase'=>'1']);
        Activity::create(['name'=>'Projetu - Inspesaun Final ba Projetu (GSI, TF 11.2.2)','program_id'=>'1','category_id'=>'2','location_id'=>'3','require_capacity'=>'0','require_monitoring'=>'0','require_cycle'=>'0','require_phase'=>'0']);
        Activity::create(['name'=>'Projetu - Monitorizasaun Kualidade Konstrusaun Projetu','program_id'=>'1','category_id'=>'2','location_id'=>'3','require_capacity'=>'1','require_monitoring'=>'0','require_cycle'=>'0','require_phase'=>'0']);
        Activity::create(['name'=>'Projetu - Re-Sertifikasaun Projetu / Finansas','program_id'=>'1','category_id'=>'2','location_id'=>'3','require_capacity'=>'0','require_monitoring'=>'0','require_cycle'=>'0','require_phase'=>'0']);
        Activity::create(['name'=>'Projetu - Sertifikasaun Projetu / Finansas','program_id'=>'1','category_id'=>'2','location_id'=>'3','require_capacity'=>'0','require_monitoring'=>'0','require_cycle'=>'0','require_phase'=>'0']);
        Activity::create(['name'=>'Projetu - Survei no  Dezenhu (A6. Mini Matadalan, GSI)','program_id'=>'1','category_id'=>'2','location_id'=>'3','require_capacity'=>'0','require_monitoring'=>'0','require_cycle'=>'0','require_phase'=>'0']);
        Activity::create(['name'=>'Projetu - Verifikasaun Projetu (A5. Mini Matadalan, GSI)','program_id'=>'1','category_id'=>'2','location_id'=>'3','require_capacity'=>'0','require_monitoring'=>'0','require_cycle'=>'0','require_phase'=>'0']);
        Activity::create(['name'=>'Projetu - Monitorizasaun Kualidade Konstrusaun Uma OPS','program_id'=>'4','category_id'=>'2','location_id'=>'3','require_capacity'=>'0','require_monitoring'=>'1','require_cycle'=>'1','require_phase'=>'1']);
        Activity::create(['name'=>'Projetu - Monitorizasaun Konstrusaun Fatin Halimar','program_id'=>'5','category_id'=>'2','location_id'=>'3','require_capacity'=>'0','require_monitoring'=>'0','require_cycle'=>'1','require_phase'=>'1']);
        Activity::create(['name'=>'BoQ - Preparasaun','program_id'=>'1','category_id'=>'3','location_id'=>'3','require_capacity'=>'0','require_monitoring'=>'0','require_cycle'=>'0','require_phase'=>'0']);
        Activity::create(['name'=>'BoQ - Revizaun','program_id'=>'1','category_id'=>'3','location_id'=>'3','require_capacity'=>'0','require_monitoring'=>'0','require_cycle'=>'0','require_phase'=>'0']);
        Activity::create(['name'=>'Eleisaun EJS (A2. Mini Matadalan, GSI)','program_id'=>'1','category_id'=>'3','location_id'=>'3','require_capacity'=>'0','require_monitoring'=>'0','require_cycle'=>'0','require_phase'=>'0']);
        Activity::create(['name'=>'Eleisaun > Re-eleisaun EJS (A2. Mini Matadalan, GSI)','program_id'=>'1','category_id'=>'3','location_id'=>'3','require_capacity'=>'0','require_monitoring'=>'0','require_cycle'=>'0','require_phase'=>'0']);
        Activity::create(['name'=>'Enkontru Aprendizazen Komunidade (A10. Mini Matadalan, GSI)','program_id'=>'1','category_id'=>'3','location_id'=>'3','require_capacity'=>'0','require_monitoring'=>'0','require_cycle'=>'0','require_phase'=>'0']);
        Activity::create(['name'=>'Enkontru Aprovizionamentu (A9. Mini Matadalan, GSI)','program_id'=>'1','category_id'=>'3','location_id'=>'3','require_capacity'=>'1','require_monitoring'=>'0','require_cycle'=>'0','require_phase'=>'0']);
        Activity::create(['name'=>'Enkontru Desidi Prioridade -  Nivel Aldeia (feto mane)  (A4. Mini Matadalan)','program_id'=>'1','category_id'=>'3','location_id'=>'3','require_capacity'=>'0','require_monitoring'=>'0','require_cycle'=>'0','require_phase'=>'0']);
        Activity::create(['name'=>'Enkontru Desidi Prioridade - Nivel Aldeia (feto deit) (A4. Mini Matadalan)','program_id'=>'1','category_id'=>'3','location_id'=>'3','require_capacity'=>'0','require_monitoring'=>'0','require_cycle'=>'0','require_phase'=>'0']);
        Activity::create(['name'=>'Enkontru Desidi Prioridade - Nivel Suku (A4. Mini Matadalan, GSI)','program_id'=>'1','category_id'=>'3','location_id'=>'3','require_capacity'=>'0','require_monitoring'=>'0','require_cycle'=>'0','require_phase'=>'0']);
        Activity::create(['name'=>'Enkontru Konkluzaun Semanal -  Postu Administrativu (Wrap Up','program_id'=>'1','category_id'=>'3','location_id'=>'2','require_capacity'=>'0','require_monitoring'=>'0','require_cycle'=>'1','require_phase'=>'1']);
        Activity::create(['name'=>'Enkontru Konkluzaun Semanal - Municipiu (Wrap Up Mtg)','program_id'=>'1','category_id'=>'3','location_id'=>'1','require_capacity'=>'0','require_monitoring'=>'0','require_cycle'=>'1','require_phase'=>'1']);
        Activity::create(['name'=>'Enkontru Kordenasaun Setoral (preparasaun, GSI) - Postu Administrativu','program_id'=>'1','category_id'=>'3','location_id'=>'2','require_capacity'=>'0','require_monitoring'=>'0','require_cycle'=>'1','require_phase'=>'1']);
        Activity::create(['name'=>'Enkontru Mensal - Postu Administrativu (GSI)','program_id'=>'1','category_id'=>'3','location_id'=>'2','require_capacity'=>'0','require_monitoring'=>'0','require_cycle'=>'1','require_phase'=>'1']);
        Activity::create(['name'=>'Enkontru Kordenasaun Setoral (preparasaun, GSI) - Municipiu','program_id'=>'1','category_id'=>'3','location_id'=>'1','require_capacity'=>'1','require_monitoring'=>'0','require_cycle'=>'1','require_phase'=>'1']);
        Activity::create(['name'=>'Enkontru Mensal (preparasaun) - Municipiu (GSI)','program_id'=>'1','category_id'=>'3','location_id'=>'1','require_capacity'=>'1','require_monitoring'=>'0','require_cycle'=>'1','require_phase'=>'1']);
        Activity::create(['name'=>'Enkontru Mensal (preparasaun) - Postu Administrativu (GSI)','program_id'=>'1','category_id'=>'3','location_id'=>'2','require_capacity'=>'0','require_monitoring'=>'0','require_cycle'=>'1','require_phase'=>'1']);
        Activity::create(['name'=>'Keixa - Jestaun Keixa (inklui  frauda, resolusaun konflitu)','program_id'=>'1','category_id'=>'3','location_id'=>'3','require_capacity'=>'0','require_monitoring'=>'0','require_cycle'=>'0','require_phase'=>'0']);
        Activity::create(['name'=>'Konta Bankaria - re-ativasaun','program_id'=>'1','category_id'=>'3','location_id'=>'3','require_capacity'=>'0','require_monitoring'=>'0','require_cycle'=>'0','require_phase'=>'0']);
        Activity::create(['name'=>'Konta Bankaria - Taka','program_id'=>'1','category_id'=>'3','location_id'=>'3','require_capacity'=>'0','require_monitoring'=>'0','require_cycle'=>'0','require_phase'=>'0']);
        Activity::create(['name'=>'Mobilizasaun Trabalhador (A7. Mini Matadalan, GSI, Protesaun ba Labarik)','program_id'=>'1','category_id'=>'3','location_id'=>'3','require_capacity'=>'1','require_monitoring'=>'0','require_cycle'=>'0','require_phase'=>'0']);
        Activity::create(['name'=>'Planu Servisu (preparasaun) - Municipiu','program_id'=>'1','category_id'=>'3','location_id'=>'1','require_capacity'=>'0','require_monitoring'=>'0','require_cycle'=>'1','require_phase'=>'1']);
        Activity::create(['name'=>'Planu Servisu (preparasaun) - Postu Administrativu','program_id'=>'1','category_id'=>'3','location_id'=>'2','require_capacity'=>'0','require_monitoring'=>'0','require_cycle'=>'1','require_phase'=>'1']);
        Activity::create(['name'=>'Relatoriu - Preparasaun (inklui data MIS) - Municipiu','program_id'=>'1','category_id'=>'3','location_id'=>'1','require_capacity'=>'0','require_monitoring'=>'0','require_cycle'=>'1','require_phase'=>'1']);
        Activity::create(['name'=>'Relatoriu - Preparasaun (inklui Diario) - Postu Administrati','program_id'=>'1','category_id'=>'3','location_id'=>'2','require_capacity'=>'0','require_monitoring'=>'0','require_cycle'=>'1','require_phase'=>'1']);
        Activity::create(['name'=>'Sosializasaun - Nivel Aldeia (A1. Mini Matadalan, GSI)','program_id'=>'1','category_id'=>'3','location_id'=>'3','require_capacity'=>'0','require_monitoring'=>'0','require_cycle'=>'0','require_phase'=>'0']);
        Activity::create(['name'=>'Sosializasaun - Nivel Postu Administrative  (A1. Mini Matadalan, GSI)','program_id'=>'1','category_id'=>'3','location_id'=>'2','require_capacity'=>'0','require_monitoring'=>'0','require_cycle'=>'0','require_phase'=>'0']);
        Activity::create(['name'=>'Sosializasaun - Nivel Suku (A1. Mini Matadalan, GSI)','program_id'=>'1','category_id'=>'3','location_id'=>'3','require_capacity'=>'0','require_monitoring'=>'0','require_cycle'=>'0','require_phase'=>'0']);
        Activity::create(['name'=>'Sosializasaun - Nivel Municipiu','program_id'=>'1','category_id'=>'3','location_id'=>'1','require_capacity'=>'0','require_monitoring'=>'0','require_cycle'=>'0','require_phase'=>'0']);
        Activity::create(['name'=>'Subsidiu - Levantamentu','program_id'=>'1','category_id'=>'3','location_id'=>'3','require_capacity'=>'0','require_monitoring'=>'0','require_cycle'=>'0','require_phase'=>'0']);
        Activity::create(['name'=>'Subsidiu - Preparasaun baTransferensia','program_id'=>'1','category_id'=>'3','location_id'=>'3','require_capacity'=>'0','require_monitoring'=>'0','require_cycle'=>'0','require_phase'=>'0']);
        Activity::create(['name'=>'Treinamentu - Treinamentu Nivel Municipiu (MLF, GSI, etc)','program_id'=>'1','category_id'=>'3','location_id'=>'1','require_capacity'=>'0','require_monitoring'=>'0','require_cycle'=>'1','require_phase'=>'1']);
        Activity::create(['name'=>'Treinamentu EJS - Module A (A3. Mini Matadalan)','program_id'=>'1','category_id'=>'3','location_id'=>'3','require_capacity'=>'0','require_monitoring'=>'0','require_cycle'=>'0','require_phase'=>'0']);
        Activity::create(['name'=>'Treinamentu EJS - Module B (A3. Mini Matadalan)','program_id'=>'1','category_id'=>'3','location_id'=>'3','require_capacity'=>'0','require_monitoring'=>'0','require_cycle'=>'0','require_phase'=>'0']);
        Activity::create(['name'=>'Treinamentu EJS - Module C (A3. Mini Matadalan)','program_id'=>'1','category_id'=>'3','location_id'=>'3','require_capacity'=>'0','require_monitoring'=>'0','require_cycle'=>'0','require_phase'=>'0']);
        Activity::create(['name'=>'Treinamentu EJS - Module D (A3. Mini Matadalan)','program_id'=>'1','category_id'=>'3','location_id'=>'3','require_capacity'=>'0','require_monitoring'=>'0','require_cycle'=>'0','require_phase'=>'0']);
        Activity::create(['name'=>'Treinamentu EJS - Module E (A3. Mini Matadalan)','program_id'=>'1','category_id'=>'3','location_id'=>'3','require_capacity'=>'0','require_monitoring'=>'0','require_cycle'=>'0','require_phase'=>'0']);
        Activity::create(['name'=>'Treinamentu EJS - Module F (A3. Mini Matadalan)','program_id'=>'1','category_id'=>'3','location_id'=>'3','require_capacity'=>'0','require_monitoring'=>'0','require_cycle'=>'0','require_phase'=>'0']);
        Activity::create(['name'=>'Treinamentu EJS - Module G (A3. Mini Matadalan)','program_id'=>'1','category_id'=>'3','location_id'=>'3','require_capacity'=>'0','require_monitoring'=>'0','require_cycle'=>'0','require_phase'=>'0']);
        Activity::create(['name'=>'Treinamentu EJS - Module H (A3. Mini Matadalan)','program_id'=>'1','category_id'=>'3','location_id'=>'3','require_capacity'=>'0','require_monitoring'=>'0','require_cycle'=>'0','require_phase'=>'0']);
        Activity::create(['name'=>'Treinamentu EJS - Module I (A3. Mini Matadalan)','program_id'=>'1','category_id'=>'3','location_id'=>'3','require_capacity'=>'0','require_monitoring'=>'0','require_cycle'=>'0','require_phase'=>'0']);
        Activity::create(['name'=>'Treinamentu EJS - Module J (A3. Mini Matadalan)','program_id'=>'1','category_id'=>'3','location_id'=>'3','require_capacity'=>'0','require_monitoring'=>'0','require_cycle'=>'0','require_phase'=>'0']);
        Activity::create(['name'=>'Treinamentu EJS - Module K (A3. Mini Matadalan)','program_id'=>'1','category_id'=>'3','location_id'=>'3','require_capacity'=>'0','require_monitoring'=>'0','require_cycle'=>'0','require_phase'=>'0']);
        Activity::create(['name'=>'Treinamentu EJS - Module L (A3. Mini Matadalan)','program_id'=>'1','category_id'=>'3','location_id'=>'3','require_capacity'=>'0','require_monitoring'=>'0','require_cycle'=>'0','require_phase'=>'0']);
        Activity::create(['name'=>'Apoio Verifikasaun Dadus MIS','program_id'=>'1','category_id'=>'3','location_id'=>'1','require_capacity'=>'0','require_monitoring'=>'0','require_cycle'=>'1','require_phase'=>'1']);
        Activity::create(['name'=>'Apoio Sistema Responde Keixa','program_id'=>'1','category_id'=>'3','location_id'=>'1','require_capacity'=>'0','require_monitoring'=>'0','require_cycle'=>'1','require_phase'=>'1']);
        Activity::create(['name'=>'Apoio Utilizasaun Monitoring Tool','program_id'=>'1','category_id'=>'3','location_id'=>'1','require_capacity'=>'0','require_monitoring'=>'0','require_cycle'=>'1','require_phase'=>'1']);
        Activity::create(['name'=>'Treinamentu EJS Nivel Postu','program_id'=>'1','category_id'=>'3','location_id'=>'2','require_capacity'=>'0','require_monitoring'=>'0','require_cycle'=>'0','require_phase'=>'0']);
        Activity::create(['name'=>'Treinamentu EJS Nivel Suku','program_id'=>'1','category_id'=>'3','location_id'=>'3','require_capacity'=>'0','require_monitoring'=>'0','require_cycle'=>'0','require_phase'=>'0']);
        Activity::create(['name'=>'Enkontru Mensal SMASA - Nivel Municipiu','program_id'=>'2','category_id'=>'3','location_id'=>'1','require_capacity'=>'0','require_monitoring'=>'0','require_cycle'=>'1','require_phase'=>'1']);
        Activity::create(['name'=>'Enkontru Mensal SMASA - Nivel Suco','program_id'=>'2','category_id'=>'3','location_id'=>'1','require_capacity'=>'0','require_monitoring'=>'0','require_cycle'=>'1','require_phase'=>'1']);
        Activity::create(['name'=>'Treinamentu Tekniku TCS - Nivel Municipiu','program_id'=>'1','category_id'=>'3','location_id'=>'1','require_capacity'=>'0','require_monitoring'=>'0','require_cycle'=>'1','require_phase'=>'1']);
        Activity::create(['name'=>'Treinamentu Sosial CAP - Nivel Municipiu','program_id'=>'1','category_id'=>'3','location_id'=>'1','require_capacity'=>'0','require_monitoring'=>'0','require_cycle'=>'1','require_phase'=>'1']);
        Activity::create(['name'=>'Treinamentu Finansas GMF - Nivel Municipiu','program_id'=>'1','category_id'=>'3','location_id'=>'1','require_capacity'=>'0','require_monitoring'=>'0','require_cycle'=>'1','require_phase'=>'1']);
        Activity::create(['name'=>'Apoio Koordenasaun SMASA - Nivel Municipiu','program_id'=>'2','category_id'=>'3','location_id'=>'1','require_capacity'=>'0','require_monitoring'=>'0','require_cycle'=>'1','require_phase'=>'1']);
    }
}
