<?php
/**
 * Created by PhpStorm.
 * User: bryan
 * Date: 3/28/2018
 * Time: 12:30
 */

class Tests extends Controller {

    /**
     * @param string $classname
     *
     * @throws ReflectionException
     */
    public function index( $classname = "Tests" ) {
        $getinfo       = listmethods( $classname );
        $classfilepath = $getinfo['reflector']->getFileName();
        $methods       = $getinfo['methods'];
        echo "<h1>$classfilepath</h1><ul>";
        foreach ( $methods as $method ) {
            echo "<li><a target='_blank' href='" . URLROOT . "/$classname/$method'>$method</a></li>";
        }
        echo "</ul>";

    }

    public function methodVsSql() {
        /*
         * simply demonstrating the listAll() method that is built in
         * to the tableDataObject class...
         */

        if ( count( Institution::listAll() ) == 0 ) {
            // need to create some fake data!
            echo $this->fakeInstitutions();
        }

        // now that we have data, let's use the TDO to list all records
        $allInstitutions = Institution::listAll();
        echo "<h1>All institutions, listed with built-in TDO listAll method</h1>";
        var_dump($allInstitutions);

        // let's now use the method Shadrach and Prince wrote into the Institution model:
        $instsFromModelMethod = Institution::getInstitutions();
        echo "<h1>The same thing again, but using the unneeded method in the model</h1>";
        var_dump($instsFromModelMethod);
    }


    /**
     * @return string
     * @throws frameworkError
     */
    public function fakeInstitutions(){
        /*
         * Use the Faker class to populate some records for demonstration
         *
         * IMPORTANT: This method also demonstrates inserting into the
         * database using the tableDataObject class.
         *
         */
        $faker = Faker\Factory::create('de_DE');

        for($i = 1; $i <= 100; $i++) {
            $newInstitution = new Institution();

            /*
             * The next line assigns a variable BY REFERENCE.
             *
             * This means that any change to $instRecord actually modifies
             * $newInstitution->recordObject.
             *
             * So, if you set: $instRecord->postcode = 33719;
             * That's exactly doing: $newInstitution->recordObject->postcode = 33719;
             */
            $instRecord                    =& $newInstitution->recordObject;
            $instRecord->nameofinstitution = implode( " ", $faker->words( 3 ) );
            $instRecord->typeofinstitution = $faker->word;
            $instRecord->typeofschool      = $faker->word;
            $instRecord->address           = $faker->address;
            $instRecord->postcode          = $faker->postcode;
            $instRecord->city              = $faker->city;
            $instRecord->homepage          = $faker->url;

            /*
             * Now, we have properties set for the recordObject of our Institution.
             * We can simply store() it. The tableDataObject knows to INSERT,
             * because the primary key is not already set. If the object already
             * had a primary key value, tableDataObject would do UPDATE.
             */
            $newInstitution->store();
        }
        return ("Inserted " . $i-1 . "fake records for demonstration");
    }


    /**
     * @return string
     * @throws frameworkError
     */
    public function fakeUsers(){

        $faker = Faker\Factory::create('de_DE');

        for($i = 1; $i <= 100; $i++) {
            $newInstitution = new User();
            $instRecord=& $newInstitution->recordObject;
            $instRecord->email     = $faker->email;
            $instRecord->password     = $faker->password;
            $instRecord->firstname    = $faker->firstname;
            $instRecord->lastname     = $faker->lastname;
            $instRecord->title        = $faker->title;
            $instRecord->street       = $faker->streetaddress;
            $instRecord->place        = $faker->city;
            $instRecord->postcode     = $faker->postcode;
            $newInstitution->store();

            // username_UNIQUE,uid,email,password,firstname,lastname,title,
            // street,postcode,place,reachability,subjects,otherinformation
        }
        return ("Inserted " . $i-1 . "fake records for demonstration");
    }


    public function info(){
        echo phpinfo();
    }

    public function fakeSchoolTypes(){
        $faker = Faker\Factory::create('de_DE');
        for ($i = 1; $i<=10; $i++){
            $newST = new Schooltype();
            $stro =& $newST->recordObject;
            $stro->schooltype = implode(" ",array_map('ucwords',$faker->words(2)));
            $stro->description = implode(" ",$faker->words(5));
            $newST->store();
        }
        exit("Inserted some fake school types");
    }

    public function popschooltypes(){
        $schools = Institution::listAll();
        foreach ($schools as $school){
            $s = new Institution($school->institutionid);
            $r = rand(1,10);
            $s->setSchoolTypes([$r]);
            echo "set type $r for $school->institutionid <br>";
        }

    }


    public function dborder(){

     $order = ['orderby'=> 'firstname asc', 'offset'=>'100, 100'];
     $userdata = User::ListAll(false, $order);

      foreach ($userdata as $get){
        echo $get->firstname . ' --------------------'.$get->lastname.'<br/>';
      }
    }

    public function tdb(){

     $insid = Institution::getInstitutionIdTrainingandUserId(414,12861);
     $ins = new  Institution($insid);
     echo $nameofinstitution = $ins->recordObject->nameofinstitution;

    }

    public function testJoinColumns(){
        global $lehrerdb;
        echo '<pre/>';
        print_r($lehrerdb->getColumns("users inner join menteeinformation on users.uid = menteeinformation.uid"));
    }

    public function mmusers(){
        echo '<pre/>';
        //$n = MMUser::ListAll();

        $mm  = new MMUser(29189);
        $ss =& $mm->recordObject;
        $ss->email = 'test@test.com';
        $ss->firstname = 'testPrince';
        $ss->lastname = 'testOduro';
        $ss->nationality = 'Nigeria';
        $st = $mm->store();

    }

}
