<?php

	class DatabaseSeeder extends Seeder {
		public function run() {

			// Clear our database
			DB::table('questions')->delete();

			// Questions 1-7:  Personal Information
			DB::table('questions')->truncate();
				$question1 = Question::create(array(
					'type_id' 		=> 1,
					'question_text' => 'What is your gender?'
					));

				$question2 = Question::create(array(
					'type_id' 		=> 2,
					'question_text' => 'What is your date of birth?'
					));

				$question3 = Question::create(array(
					'type_id' 		=> 3,
					'question_text' => 'What is your ethnicity?'
					));

				$question4 = Question::create(array(
					'type_id' 		=> 4,
					'question_text' => 'What is your anticipated graduation date?'
					));

				$question5 = Question::create(array(
					'type_id' 		=> 5,
					'question_text' => 'What is your zip code?'
					));

				$question6 = Question::create(array(
					'type_id' 		=> 6,
					'question_text' => 'Do you have the capabilities of meeting online?'
					));

				$question7 = Question::create(array(
					'type_id' 		=> 7,
					'question_text' => 'What is the maximum distance you would travel?'
					));

				$question8 = Question::create(array(
					'type_id' 		=> 8,
					'question_text' => 'I seek knowledge on topics of interest without the help of others.'
					));

				$question9 = Question::create(array(
					'type_id' 		=> 9,
					'question_text' => 'New interests spark new hobbies.'
					));

				$question10 = Question::create(array(
					'type_id' 		=> 10,
					'question_text' => 'I learn best without outside pressure.'
					));

				$question11 = Question::create(array(
					'type_id' 		=> 11,
					'question_text' => 'I enjoy discussing interesting topics outside of class.'
					));

				$question12 = Question::create(array(
					'type_id' 		=> 12,
					'question_text' => 'The main goal of a class should be understanding course content'
					));

				$question13 = Question::create(array(
					'type_id' 		=> 13,
					'question_text' => 'Beating records is important to me.'
					));

				$question14 = Question::create(array(
					'type_id' 		=> 14,
					'question_text' => 'I strive to impress my classmates with my test scores.'
					));

				$question15 = Question::create(array(
					'type_id' 		=> 15,
					'question_text' => 'I compete to win.'
					));

				$question16 = Question::create(array(
					'type_id' 		=> 16,
					'question_text' => 'Outperforming my classmates is important to me.'
					));

				$question17 = Question::create(array(
					'type_id' 		=> 17,
					'question_text' => 'I want to be the best.'
					));

				$question18 = Question::create(array(
					'type_id' 		=> 18,
					'question_text' => 'I worry about my classmates thinking I\'m dumb.'
					));

				$question19 = Question::create(array(
					'type_id' 		=> 19,
					'question_text' => 'I don\'t want to be left behind.'
					));

				$question20 = Question::create(array(
					'type_id' 		=> 20,
					'question_text' => 'Bad grades scare me.'
					));

				$question21 = Question::create(array(
					'type_id' 		=> 21,
					'question_text' => 'Fear of failure makes me work harder'
					));

				$question22 = Question::create(array(
					'type_id' 		=> 22,
					'question_text' => 'I am afraid of asking dumb questions.'
					));

				$question23 = Question::create(array(
					'type_id' 		=> 23,
					'question_text' => 'I learn something better when I'
					));

				$question24 = Question::create(array(
					'type_id' 		=> 24,
					'question_text' => 'It\'s easier for me to remember things when I'
					));

				$question25 = Question::create(array(
					'type_id' 		=> 25,
					'question_text' => 'I learn better when I'
					));

				$question26 = Question::create(array(
					'type_id' 		=> 26,
					'question_text' => 'I tend to'
					));

				$question27 = Question::create(array(
					'type_id' 		=> 27,
					'question_text' => 'When working on a problem I'
					));

				$question28 = Question::create(array(
					'type_id' 		=> 28,
					'question_text' => 'I tend to be more of a'
					));

				$question29 = Question::create(array(
					'type_id' 		=> 29,
					'question_text' => 'I would much rather learn things that'
					));

				$question30 = Question::create(array(
					'type_id' 		=> 30,
					'question_text' => 'I consider myself'
					));

				$question31 = Question::create(array(
					'type_id' 		=> 31,
					'question_text' => 'I find it'
					));

				$question32 = Question::create(array(
					'type_id' 		=> 32,
					'question_text' => 'I find it easier to learn'
					));

				$question33 = Question::create(array(
					'type_id' 		=> 33,
					'question_text' => 'I find it more difficult to remember things when'
					));

				$question34 = Question::create(array(
					'type_id' 		=> 34,
					'question_text' => 'I tend to remember information better by'
					));

				$question35 = Question::create(array(
					'type_id' 		=> 35,
					'question_text' => 'I like teachers who spend a lot of time'
					));

				$question36 = Question::create(array(
					'type_id' 		=> 36,
					'question_text' => 'I prefer to get new information in'
					));

				$question37 = Question::create(array(
					'type_id' 		=> 37,
					'question_text' => 'When I meet someone new, I tend to remember what'
					));

				$question38 = Question::create(array(
					'type_id' 		=> 38,
					'question_text' => 'It\'s very _________ for me to explain how I arrived at the answer'
					));

				$question39 = Question::create(array(
					'type_id' 		=> 39,
					'question_text' => 'I tend to work out a problem'
					));

				$question40 = Question::create(array(
					'type_id' 		=> 40,
					'question_text' => 'When learning new material, I tend to'
					));

				$question41 = Question::create(array(
					'type_id' 		=> 41,
					'question_text' => 'When writing a paper,'
					));

				$question42 = Question::create(array(
					'type_id' 		=> 42,
					'question_text' => 'I prefer teachers who'
					));

				$question43 = Question::create(array(
					'type_id' 		=> 43,
					'question_text' => 'What is your name?'
					));

			$this->command->info('Seeded properly');

			DB::table('tutors')->delete();

			// Questions 1-7:  Personal Information
			DB::table('tutors')->truncate();
				$tutor1 = Tutor::create(array(
					'name' 	 => 'Alice',
					'mapp' 	 => 3,
					'papp' 	 => 5,
					'pav'  	 => 2,
					'actref' => 5,
					'senint' => 3,
					'vervis' => 1,
					'seqglo' => -3
					));

				$tutor2 = Tutor::create(array(
					'name' 	 => 'Bob',
					'mapp' 	 => 5,
					'papp' 	 => 2,
					'pav'  	 => 1,
					'actref' => -1,
					'senint' => -3,
					'vervis' => -3,
					'seqglo' => -5
					));

				$tutor3 = Tutor::create(array(
					'name' 	 => 'Trudy',
					'mapp' 	 => 1,
					'papp' 	 => 1,
					'pav'  	 => 5,
					'actref' => -1,
					'senint' => 1,
					'vervis' => 3,
					'seqglo' => 1
					));

			$this->command->info('Seeded properly');

		}
	}