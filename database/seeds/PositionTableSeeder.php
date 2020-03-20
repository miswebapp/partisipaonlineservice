<?php

use Illuminate\Database\Seeder;
use App\Position;

class PositionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Position::truncate();
        Position::create(['code'=>'ELT01','name'=>'M&E Manager ']);
        Position::create(['code'=>'ELT02','name'=>'Senior ICT Adviser']);
        Position::create(['code'=>'ELT05','name'=>'ITC Adviser']);
        Position::create(['code'=>'ELT08','name'=>'Training Evaluation Officer']);
        Position::create(['code'=>'OPS02','name'=>'Corporate Services Manager']);
        Position::create(['code'=>'OPS03','name'=>'Logistics Manager']);
        Position::create(['code'=>'OPS04','name'=>'Finance Associate']);
        Position::create(['code'=>'OPS05','name'=>'HR Associate']);
        Position::create(['code'=>'OPS06','name'=>'HR Associate ']);
        Position::create(['code'=>'OPS07','name'=>'People  Learning & Events  Coordinator']);
        Position::create(['code'=>'OPS08','name'=>'Finance Officer ']);
        Position::create(['code'=>'OPS09','name'=>'Logistics Coordinator']);
        Position::create(['code'=>'OPS10','name'=>'Field Support Team Coordinator']);
        Position::create(['code'=>'OPS11','name'=>'Administration & Procurement Coordinator']);
        Position::create(['code'=>'OPS12','name'=>'ITC Support  Officer ']);
        Position::create(['code'=>'OPS14','name'=>'Senior Driver']);
        Position::create(['code'=>'OPS15','name'=>'Senior Driver']);
        Position::create(['code'=>'OPS16','name'=>'Logistics Officer']);
        Position::create(['code'=>'OPS17','name'=>'Driver']);
        Position::create(['code'=>'OPS18','name'=>'Driver']);
        Position::create(['code'=>'OPS19','name'=>'Driver']);
        Position::create(['code'=>'OPS20','name'=>'Driver']);
        Position::create(['code'=>'OPS21','name'=>'Driver']);
        Position::create(['code'=>'OPS22','name'=>'Driver']);
        Position::create(['code'=>'OPS23','name'=>'Driver']);
        Position::create(['code'=>'OPS24','name'=>'Driver']);
        Position::create(['code'=>'OPS25','name'=>'Driver ']);
        Position::create(['code'=>'OPS27','name'=>'Assets & Facilities Officer ']);
        Position::create(['code'=>'OPS28','name'=>'Office Attendant']);
        Position::create(['code'=>'OPS29','name'=>'Office Attendant']);
        Position::create(['code'=>'OPS30','name'=>'Senior Procurement Officer']);
        Position::create(['code'=>'OPS31','name'=>'Operations Officer']);
        Position::create(['code'=>'PC30','name'=>'Capacity Development Adviser']);
        Position::create(['code'=>'PC69','name'=>'Program Implementation Adviser']);
        Position::create(['code'=>'SET01','name'=>'Team leader']);
        Position::create(['code'=>'SET02','name'=>'Senior Strategic Engagement Adviser']);
        Position::create(['code'=>'SNT02','name'=>'Senior Engineering Adviser - Field Support Team']);
        Position::create(['code'=>'SNT03','name'=>'Financial Adviser - FST']);
        Position::create(['code'=>'SNT04','name'=>'Senior Social Development Adviser']);
        Position::create(['code'=>'SNT05','name'=>'Development Coordinator']);
        Position::create(['code'=>'SNT07','name'=>'Engineer Adviser - Field Support Team']);
        Position::create(['code'=>'SNT08','name'=>'FST Engineer Coordinator']);
        Position::create(['code'=>'SNT09','name'=>'FST Engineer Coordinator']);
        Position::create(['code'=>'SNT10','name'=>'Engineer Support Officer ']);
        Position::create(['code'=>'SNT11','name'=>'Engineering Support Officer']);
        Position::create(['code'=>'SNT12','name'=>'Engineering Support Officer']);
        Position::create(['code'=>'SNT13','name'=>'Engineer Support Officer ']);
        Position::create(['code'=>'SNT14','name'=>'Engineering Support Officer']);
        Position::create(['code'=>'SNT15','name'=>'Engineering Support Officer']);
        Position::create(['code'=>'SNT16','name'=>'Engineering Support Officer']);
        Position::create(['code'=>'SNT17','name'=>'Engineering Support Officer']);
        Position::create(['code'=>'SNT19','name'=>'Finance Support Officer']);
        Position::create(['code'=>'SNT21','name'=>'Finance Support Officer']);
        Position::create(['code'=>'SNT23','name'=>'Finance Support Officer']);
        Position::create(['code'=>'SNT24','name'=>'Finance Support Officer']);
        Position::create(['code'=>'SNT25','name'=>'Finance Support Officer']);
        Position::create(['code'=>'SNT26','name'=>'Finance Support Officer Ermera']);
        Position::create(['code'=>'SNT27','name'=>'Finance Support Officer Bobonaro']);
        Position::create(['code'=>'SNT28','name'=>'Field Coordinator Social Development ']);
        Position::create(['code'=>'SNT29','name'=>'Field Coordinator - Social Development ']);
        Position::create(['code'=>'SNT30','name'=>'Social Facilitation Officer ']);
        Position::create(['code'=>'SNT31','name'=>'Field Coordinator  - Social Development ']);
        Position::create(['code'=>'SNT32','name'=>'Field Coordinator  - Social Development ']);
        Position::create(['code'=>'SNT33','name'=>'Field Coordinator  - Social Development ']);
        Position::create(['code'=>'SNT34','name'=>'Field Coordinator Social Development ']);
        Position::create(['code'=>'SNT35 ','name'=>'Social Facilitation Officer ']);
        Position::create(['code'=>'SNT36','name'=>'Social Facilitation Officer ']);
        Position::create(['code'=>'SNT38','name'=>'O&M Coordinator']);
        Position::create(['code'=>'SNT39','name'=>'Water Officer Baucau ']);
        Position::create(['code'=>'SNT40','name'=>'Water Officer Ermera']);
        Position::create(['code'=>'SNT41','name'=>'Water Officer Bobonaro']);
        Position::create(['code'=>'SNT42','name'=>'Field Coordinator Finance ']);
        Position::create(['code'=>'SNT43','name'=>'Field Coordinator Finance ']);
        Position::create(['code'=>'SNT44','name'=>'Field Coordinator Engineer']);
        Position::create(['code'=>'SPT06','name'=>'Legal Adviser ']);
        Position::create(['code'=>'SPT08','name'=>'Municipal Development Adviser Baucau']);
        Position::create(['code'=>'SPT09','name'=>'Municipal Development Adviser Bobonaro']);
    }
}
