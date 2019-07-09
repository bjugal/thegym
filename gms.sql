-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 02, 2018 at 09:01 AM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gms`
--

-- --------------------------------------------------------

--
-- Table structure for table `activities`
--

CREATE TABLE `activities` (
  `a_id` varchar(10) NOT NULL,
  `name` varchar(20) NOT NULL,
  `content` varchar(400) NOT NULL,
  `path` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `activities`
--

INSERT INTO `activities` (`a_id`, `name`, `content`, `path`) VALUES
('1', 'PERSONAL TRAINING', 'Muscle your way towards confidence. Let us help you achieve results through our Private Trainersâ€™ resilient commitment and tireless effort. Our private trainers specialize in teaching practices that will improve your overall health and lead you towards a more sustainable life. They are with you step for step and rep for rep.', 'images/pt.png'),
('10', 'FULL LOCKER ROOM SER', 'Relax. Refresh. Reset. Our full locker room services are available to provide ultimate convenience and comfort. Amenities include fresh plush towels, hydrating shampoo and conditioner, salon-style hairdryers and all the essentials needed to refresh after your energizing workout.', ''),
('11', 'CLASS SCHEDULES', 'Fitness is better with friends. Develop strength, tone up, become more flexible, elevate your cardio, or just have a blast with your friends. With over 120 classes every week, visit THE GYM today to kick box with the masters, tone-up in Barre classes, breathe with our yogis, or sculpt your body on the Pilates mat.', ''),
('12', 'PHYSICAL THERAPY', 'Examine, Evaluate, Diagnose, Treat.', ''),
('13', 'MEMBERSHIP', 'THE GYM is no ordinary experience. It is a lifestyle program designed to achieve every individual members respective health and fitness goals. Whether you are a beginner or an enthusiast, every program, product and experience we offer begins and ends with creating a premiere and comfortable atmosphere tailored for your individual and overall success and safety.', ''),
('2', 'GROUP FITNESS CLASS', 'Cardio. Crunches. Camaraderie. Experience our wide variety of innovative classes designed to fit every schedule and need, we offer everything from strength, sculpting and conditioning to martial arts, dance and a number of styles unique to THE GYM. Our class schedules are designed to include both the latest fitness trends and methods for getting results in a fun, energizing atmosphere.', ''),
('3', 'YOGA CLASSES', 'Get cut from the same cloth. Explore your own inspiration through Yoga. Let our team of dedicated instructors guide you to newfound discovery in strength, flexibility and overall well-being. All mats, blocks and towels are provided, and equipment is cleaned daily.', 'images/y.png'),
('4', 'PILATES', 'We feel your burn. Build your core and lengthen your body with Pilates, a complete full body workout that builds strength without bulk, improves flexibility and agility, and helps to prevent injury. Sessions are available in our spacious, fully equipped Pilates studio.', 'images/p.png'),
('5', 'SPINNING CLASSES', 'Swap your laundry cycle for a Spin cycle. Our spin studios are equipped with Stadium seating and the latest in STAGES Indoor Cycling technology, ensuring a challenging and invigorating ride from beginning to end.', 'images/sc.png'),
('6', 'WEIGHT MANAGEMENT', 'Build the body you want. Our weight management system will provide you with a custom-designed fitness and nutrition program based on the results of your individual metabolic profile. Generate noticeable results. Our weight management team will assess your current fitness level and nutritional habits and will help you achieve weight loss and sustain your lifestyle transformation.', ''),
('7', 'KINESIS STATION', 'Revolutionize your body. Kinesis is a technological advancement in resistance training, utilizing a revolutionary system. Our complete 30-minute, full body workout is customized for the beginner to the most advanced client. Forget about counting reps and sets, and experience the principle of \"time under tension\". Thirty minutes is all you need to stimulate your entire body.', 'images/ks.png'),
('8', 'NUTRITION COUNSELING', 'An apple a day. Our Nutrition experts collaborate with you in your overall fitness and health by working to build a customized nutritional program around your own personal goals. We will help you to reach nutritional success for a healthier, happier you.', 'images/nc.png'),
('9', 'CHILDCARE/DAYCARE', 'Lift. Spin. Daycare. Repeat. We offer complimentary childcare services to our members in a playful, educational setting. Your child will enjoy activities ranging from free play to Do-It-Yourself crafts in a safe and nurturing environment. Please check location for additional details.', '');

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE `attendance` (
  `username` varchar(20) NOT NULL,
  `date` date NOT NULL,
  `timeslot` varchar(10) NOT NULL,
  `attendance` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`username`, `date`, `timeslot`, `attendance`) VALUES
('iambatman', '2018-10-18', '10:30:00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `chat`
--

CREATE TABLE `chat` (
  `id` int(11) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `username` varchar(32) NOT NULL,
  `text` varchar(128) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chat`
--

INSERT INTO `chat` (`id`, `time`, `username`, `text`) VALUES
(33, '2018-11-01 16:27:00', 'dasmonish', 'general kenobi'),
(32, '2018-11-01 16:25:52', 'iambatman', 'hello there'),
(34, '2018-11-02 05:40:49', 'dasmonish', 'tip:eat 2 bananas before starting workout');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `username` varchar(20) NOT NULL,
  `contact` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `equipment`
--

CREATE TABLE `equipment` (
  `eq_id` varchar(10) NOT NULL,
  `name` varchar(40) NOT NULL,
  `description` varchar(400) NOT NULL,
  `manual` varchar(600) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `equipment`
--

INSERT INTO `equipment` (`eq_id`, `name`, `description`, `manual`) VALUES
('1', 'SQUAT RACK', 'Where serious squatting takes place. In fitness and strength training, the squat exercise trains your fully body.  All serious strength training regiments should incorporate the squat station gym equipment.', 'Be sure to squat down until your thighs are pretty much parallel with the floor. Going this low is essential in doing squats the right way and obtaining a strong core, legs, and back eventually.  Try to keep your knees from extending past your toes, your butt should be out and back straight when doing squats. Do not arch your back, keep your head up and your abs tight to help you with this.  Your feet positioning should be just slightly wider than hip-width, and both of your feet should be pointing slightly outward.'),
('10', 'LEG EXTENSION MACHINE', 'Lifting the weights up with your quads, holding steady for a second or two once you fully extend at the top. Leg extension machines are the perfect gym equipment to use when you are rehabilitating from an injury or just trying to strength train your quads.', 'Avoid twisting hips and knees as you move the weight, especially when lowering the weight to the machines limit. Avoid fast movements just to gain momentum, remember that form is superior to everything else in bodybuilding.  Flexing and/or extending the foot does not change the work done by the quadriceps'),
('11', 'LEG CURL MACHINE', 'Laying on your stomach and facing the floor, lifting with your legs upwards towards your lower back. Sqeeuzing at the top and holding for a second or two, feel it in your hamstrings. A good tool to use for either toning down or bulking up your legs.', 'In addition to the lying leg curl, some of the more popular exercise types include: toes in, toes out, single leg, standing single leg, and seated as well.  Extending you knees too far as you lower the weight, lifting the weight too fast to gain momentum, and also not placing the knees in line with the axis of the machine are all some of the most common mistakes made by people in the gym using this exercise machine.  Interestingly, the leg curl machine, both lying and/or standing, is more specific and safer but just as effective as the deadlift when it comes working the hamstrings.'),
('12', 'HYPER EXTENSION BENCH', 'Standing on the gym machine in an angled position, facing downwards, move your upper body up and down. It not uncommon to hold a weight at your chest to increase the intensity, but be careful to not rush this Adding weights too quickly can and often does lead to injury during this type of exercise.', 'When performing the back extension exercise, especially if you are using free-weights for additional resistance, make sure not to raise your torso beyond the line of your body. Also, do not bounce as you gain momentum, take your time and learn good form.  It is considered dangerous to twist as you are coming up and raising your torso, as well as resting your entire hip on the hyper extension bench cushion without proper room to bend.'),
('13', 'DIPPING BARS', 'Holding onto the handles, one with each hand, lower your body and lift yourself up. Itâ€™s important to adhere to good form as to avoid any potential shoulder injuries when dabbling with this gym equipment type.', 'This is an excellent alternative to the decline press, but it does require a little more strength. So though typically not suggested for beginners, easing into it however is also not discouraged.  When doing dips you will notice that it feels as if your triceps are doing all the hard work and all the pressure is on them; it is very important however to focus on the pectoral muscle above all.'),
('14', 'SMITH MACHINE', 'A squat assisting workout machine. Think of it as the squat rack that helps you when you donâ€™t have anyone to spot you. Very good machine to use for practicing your squatting form. A go to machine for back strengthening after an injury of sort.', 'There are many exercises to do on the smith machine that may look the same to you as the other machines; but keep in mind, with the smith machine you can start the exercise from above.  The machine assists you by keeping the weight steady for you to pick up from whichever position you choose to put your body in.  A major advantage of the smith machine is for working out in the gym by yourself, when there is no one to spot you, but you still want to be safe; by simply turning and locking the bar. This is ideal for training squats on your own, and because of the balance it provides.'),
('15', ' PREACHER BENCH', 'While seated, the preacher curl bench helps you isolate and train your biceps. A perfect place for beginners to start biceps training by utilizing a lighter barbell and lifting up and down; slowly bringing the weight down.', 'Sit with your underarms at the top of the edge and your triceps resting on the preacher bench pad. Whether you are doing one handed dumbbell exercises, such as hammer grips or one arm twists, or whether you are using a barbell, follow the above technique.  Contrary to popular belief, this workout is not superior in building that biceps â€œpeak.â€ But it does prevent you from cheating when working out biceps, and provides them with a precise contraction; separating the elbow movement from the rest of your body.'),
('16', 'ABDOMINAL BENCH', 'Designed with your abs in mind. Itâ€™s similar to the hyper extension machine, but for your abs. Important to practice and adhere to proper form when performing this exercise. Especially if you decide to hold onto weights as youâ€™re lifting yourself up.', 'Doing this exercise also causes your hips to flex, which brings in the muscles that work that area, the psoas and the front of the quadriceps in particular.  Thus, it is not as specific as just the crunch, so be sure to feel the muscles as you are working out, because more than one group should be involved, and you want to make sure your torso not as rigid, in order to focus more on the abdominal muscles.'),
('17', 'LEG PRESS MACHINE', 'Ultimate leg training machine. Laying down with you back against a makeshift wall, push the platform/weights upwards; do not lock your joints. Perfect machine to train legs with.', 'This machine is just as good as the squat machine as far as building strength and developing the muscle, however, it is good for protecting the back, due to the machine (with your help) holding it in position.  Common mistakes fitness enthusiasts make when performing the leg press exercise are: lifting of the hips as the weight is lowered. Also, it is advised against ever locking your knees at the top of the movement, while your legs are fully extended.'),
('18', 'HACK SQUAT MACHINE', 'This machine combines the leg press machine and the squat machine for a super quad core combo. Another great piece of gym equipment to use on leg day.', 'Common mistakes people make when using the hack squat machine is going too far down with a heavy load, and entering what is known as the deep squat.  Another mistake is the locking of the knees when reaching the top of the movement. The reason this is dangerous is because you are resting the weight on the ligaments instead of the powerful leg muscles. In addition to this, not pushing with both legs equally also results in improper form.'),
('19', 'CALF MACHINE', 'Lifting the weights at the end by pushing upward with your feet by going on your toes. There are various types of these machines for working out, but the one pictured is by far the most common calf machine in the gym.', 'Proper execution entails sitting with your knees bent at a right angle, with the balls of your feet on the foot rest. Your heels should be free when working out using the calf machine.  Raise your heels as high as possible, pushing the pads on your knees as high as you can; once you reach the peak of how high you can push, hold it there for a moment and then slowly lower your heels. Making sure to breathe in a natural manner throughout the process.'),
('2', 'BARBELLS', 'A complementary piece to the squat rack. A barbell is essential to strength training, it holds the freeweights, or sometimes the weights are attached to the ends.', 'A barbell is perhaps the most versatile out of all the gym equipment out there. You can literally do hundreds of different exercises with these iron bars.  A common technique to use when utilizing a barbell is good posture and keeping your body from swaying; in order to make sure that your body stays stabilized, as when doing exercises on a gym machine for example.  Because it is easy to cheat and swing your body whichever way to make the exercise easier, using a barbell comes with a word of caution: injuries.'),
('20', 'LEG ADDUCTION / ABDUCTION MACHINE', 'Opening and closing your legs, pushing the weight resistance outwards. A most popular gym machine among ladies, perfect for toning legs and butt.', 'This is a very specific exercise for the leg adductors, the long adductor in particular. This workout machine works well for both beginners and advanced athletes.  To stay injury free, make sure you warm up adequately before jumping on the machine.  Never be in a hurry and perform the exercise rather slowly, as it is possible to injury the muscles by doing it abruptly.'),
('21', 'PECK DECK MACHINE', 'This type of gym equipment was designed to isolate and work the chest. A favorite for beginner bodybuilders as it has a unique motion that feels good when performing.', 'To properly use the peck deck machine, sit back with your elbows at about 90 degrees, on the mid-chest level. Push to bring the arms together in front of your face,  Breathe in as you are opening your arms, going as far back as flexibility will allow (but be careful if youâ€™re using heavy weights); breathe out at you bring the arms together again.'),
('22', 'KETTLEBELLS', 'Kettle bells have become very popular in the fitness world, there are a ton of different exercises you can do with kettle bells. Fitness enthusiasts are using them for strength training and cardio. Take a look at the video for different ways to use kettle bells.', 'A lot of different muscle groups. Depends on which exercise you choose to do.'),
('3', 'BENCH PRESS', 'Used for upper body strength training exercises, where you are pushing weight upwards as youâ€™re laying on your back. You want the perfect chest? This is one of the tools you use to train for that chest.', 'When doing a bench press, do not arch your back, this means that your feet are placed too low. Try not to bounce the bar off your chest either, even though you may think it makes you look super macho.  Also, do not lower the bar towards your neck or abdomen as it could seriously injure you is you have excessive weight and lose control, even momentarily.  Finally, try not to lock your elbows at the apex of the movement, keep your feet, back, and head still!'),
('4', 'INCLINE BENCH PRESS', 'Essentially an elevated bench press, but the elevation affects the muscle being targeted.', 'Common mistakes people tend to make when exercising with an incline bench press are: setting the bench at a high incline (over 50 degrees), arching their backs, bouncing the bar off their chest, and locking of elbows.  Try to avoid making the above errors by keeping good form and keeping the incline of the bench at below 50 degrees.  Finally, the position of your thumb is important. Grip the bar with your thumbs in opposition to your fingers, this is a more natural grip and safer for lifting.'),
('5', 'HAMMER STRENGTH MACHINE', 'A favorite among athletes, this mechanic focuses on explosiveness.', 'Do not put too much demand on your triceps when exercising with the hammer strength machine. Also avoid locking your elbows at the top of the lift, and try your best to maintain equal force in both arms as youâ€™re lifting.'),
('6', 'CABLES AND PULLEYS', 'Very diverse workout machine in the amount and types of exercises that can be performed by attaching grips to the end of the cables.', 'When doing cable and pulley machine exercises, it is important to use the right amount of weight. Too little weight, and you will not be working out effectively, too much and you will put strain on your muscles, perhaps even lead to injury.  There are many different types of exercises this machine is capable of providing you with. Such as the press, effecting your pecs, shoulders, and triceps; then there is the one handed crossover which also effects the pecs and shoulders, but also biceps.'),
('7', 'DUMBBELLS', 'Pretty much the go-to gym equipment most people first think of when they think of bodybuilding. Varying in weight, but the same concept, a handle bar with weights on opposite ends. A must have free weight for any fitness regiment. There are even adjustable dumbbells with differing weights all in one piece.', 'Dumbbells have a lot going for them, mainly, they are inexpensive when compared to other equipment. But if used right, they can offer just as much, if not more, than some of their more lucrative gym mates.  When working out with dumbbells, try not to lock your elbows at the movements end, and do not force the last few repetitions if you do not have a friend or gym buddy to spot you.'),
('8', 'PULLUP BAR', 'The best tool for upper body exercise and strengthening. You can pull yourself up with any grip, though palms facing froward is the most popular one seen in demonstrations. Different grips and hand positions can affect different muscles. You pull yourself up, until your chin is over the bar.', 'Pullups are VERY demanding, especially for beginners. It is because of this that you must learn to master them. They are truly an excellent, and yes very demanding, upper body workout.  Keep your movements vertical, aligned, and complete when doing pullups. After a while, if you become an expert at it, you can hand a weight from your waist for additional resistance.  If you are a beginner, you should probably start with a lat pull-down machine, which will build your muscles and get them ready for pullups.'),
('9', 'LAT PULLDOWN MACHINE', 'Used for strengthening your latissimus dorsi muscle, or lats as they are known. Pull downwards toward you, keeping your elbows and back straight. Google a picture of Bruce Lee and youâ€™ll see the lats youâ€™re capable of attaining with this machine.', 'As counter intuitive as it may sound to some people, do not lower the bar to the belly; if you are doing this, it means you are not using enough weight.  Avoid bending your torso to get help from your chest and ab muscles, and complete all movements when exercising with a lat pull-down machine. Your grip shouldnâ€™t be too wide and it should be even.');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `username` varchar(20) NOT NULL,
  `content` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`username`, `content`) VALUES
('iambatman', '');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `mname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `gender` varchar(1) NOT NULL,
  `dobday` int(2) NOT NULL,
  `dobmonth` varchar(10) NOT NULL,
  `dobyear` int(4) NOT NULL,
  `contact` int(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `bgroup` varchar(3) NOT NULL,
  `height` int(3) NOT NULL,
  `weight` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`username`, `password`, `fname`, `mname`, `lname`, `gender`, `dobday`, `dobmonth`, `dobyear`, `contact`, `email`, `bgroup`, `height`, `weight`) VALUES
('123', '123', 'bruce', 'thomas', 'wayne', 'f', 16, 'August', 2005, 1234567890, '123@gmail.com', 'AB-', 90, 90),
('123sw', '1234', 'Bhavin', 'Jagdish', 'Chauhan', 'm', 18, 'January', 2005, 2147483647, 'abc@gmail.com', 'A+', 175, 75),
('890', '123', 'bruce', 'thomas', 'wayne', 'm', 18, 'November', 2007, 1234567890, '123@gmail.com', 'AB-', 123, 118),
('iambatman', '12321', 'bruce', 'thomas', 'wayne', 'm', 12, 'August', 2000, 1234567890, 'batman@gmail.com', 'A-', 156, 56),
('JinitM', '123', 'Jinit', 'Hitesh', 'Mehta', 'm', 15, 'February', 2004, 2147483647, 'jinit.mehta@somaiya.edu', 'AB-', 170, 50),
('mansijc', '12345', 'Mansi', 'Jagdish', 'Chauhan', 'f', 18, 'November', 2000, 2147483647, 'mansi.j.c20@gmail.com', 'A+', 160, 65),
('mayurgudi', 'pass', 'mayur', 'manoj', 'gudi', 'm', 12, 'September', 1998, 2147483647, 'mayur.gudi@somaiya.edu', 'AB-', 179, 82),
('swa123', '', 's', '1', 'w', 'm', 0, 'Month', 2006, 0, 'abc@gmail.com', 'AB+', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `member_pack`
--

CREATE TABLE `member_pack` (
  `username` varchar(20) NOT NULL,
  `p_id` varchar(20) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `member_pack`
--

INSERT INTO `member_pack` (`username`, `p_id`, `start_date`, `end_date`, `price`) VALUES
('mayurgudi', '2', '2018-10-19', '1970-04-01', 0),
('890', '2', '2018-11-01', '1970-04-01', 0),
('JinitM', '3', '2018-11-02', '1970-06-30', 0),
('swa123', '2', '2018-11-02', '1970-04-01', 0),
('123sw', '2', '2018-11-02', '1970-04-01', 0);

-- --------------------------------------------------------

--
-- Table structure for table `offer`
--

CREATE TABLE `offer` (
  `o_id` varchar(20) NOT NULL,
  `name` varchar(40) NOT NULL,
  `description` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `offer`
--

INSERT INTO `offer` (`o_id`, `name`, `description`) VALUES
('1', 'Flat50', 'Get a discount of flat 50% this diwali.');

-- --------------------------------------------------------

--
-- Table structure for table `packages`
--

CREATE TABLE `packages` (
  `p_id` varchar(10) NOT NULL,
  `pname` varchar(10) NOT NULL,
  `duration` int(10) NOT NULL,
  `amount` float NOT NULL,
  `description` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `packages`
--

INSERT INTO `packages` (`p_id`, `pname`, `duration`, `amount`, `description`) VALUES
('1', 'combo1', 3, 3000, 'This includes Cardio as well as deit plan.General Trainer will help you in your workout.'),
('2', 'combo2', 3, 1500, 'This includes diet plan and General Trainer will guide your workout.'),
('3', 'combo3', 6, 6000, 'This includes Cardio as well as deit plan.General Trainer will help you in your workout.'),
('4', 'combo4', 6, 3000, 'This includes diet plan and General Trainer will guide your workout.'),
('5', 'combo5', 12, 12000, 'This includes Cardio as well as deit plan.General Trainer will help you in your workout.'),
('6', 'combo6', 12, 6000, 'This includes diet plan and General Trainer will guide your workout.');

-- --------------------------------------------------------

--
-- Table structure for table `schedule`
--

CREATE TABLE `schedule` (
  `s_id` int(11) NOT NULL,
  `m_username` varchar(20) NOT NULL,
  `td_username` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `schedule`
--

INSERT INTO `schedule` (`s_id`, `m_username`, `td_username`) VALUES
(1, 'iambatman', 'dasmonish'),
(2, '123', 'dasmonish'),
(3, 'mansijc', 'dasmonish'),
(20, '111', ''),
(21, 'mayurgudi', 'dasmonish'),
(22, '890', 'mr.jerry'),
(23, 'JinitM', ''),
(24, 'swa123', ''),
(25, '123sw', 'dasmonish');

-- --------------------------------------------------------

--
-- Table structure for table `td`
--

CREATE TABLE `td` (
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `mname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `gender` varchar(1) NOT NULL,
  `dobday` int(2) NOT NULL,
  `dobmonth` varchar(10) NOT NULL,
  `dobyear` int(4) NOT NULL,
  `contact` int(10) NOT NULL,
  `email` varchar(40) NOT NULL,
  `salary` int(10) NOT NULL,
  `experience` int(2) NOT NULL,
  `admin` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `td`
--

INSERT INTO `td` (`username`, `password`, `fname`, `mname`, `lname`, `gender`, `dobday`, `dobmonth`, `dobyear`, `contact`, `email`, `salary`, `experience`, `admin`) VALUES
('dasmonish', 'lol', 'Monish', 'Dinesh', 'Chauhan', 'm', 3, 'March', 2003, 2147483647, 'monishchauhanjsn@gmail.com', 25000, 8, 1),
('mr.jerry', 'bhavin1998', 'Bhavin', 'Jagdish', 'Chauhan', 'm', 2, 'September', 1998, 2147483647, 'bhavinc892@gmail.com', 12000, 4, 1);

-- --------------------------------------------------------

--
-- Table structure for table `timetable`
--

CREATE TABLE `timetable` (
  `s_id` int(11) NOT NULL,
  `day` varchar(10) NOT NULL,
  `start_time` time NOT NULL,
  `hrs` int(10) NOT NULL,
  `a_id` varchar(10) NOT NULL,
  `note` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `timetable`
--

INSERT INTO `timetable` (`s_id`, `day`, `start_time`, `hrs`, `a_id`, `note`) VALUES
(1, 'monday', '12:30:00', 2, '9', '2 sets dumbells'),
(1, 'thursday', '12:00:00', 1, '8', ''),
(1, 'thursday', '12:30:00', 2, '9', ''),
(1, 'tuesday', '02:30:00', 1, '9', 'aasd'),
(1, 'tuesday', '12:30:00', 1, '10', ''),
(21, 'monday', '11:30:00', 1, '9', ''),
(22, 'monday', '12:30:00', 2, '9', '3 sets bench press');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activities`
--
ALTER TABLE `activities`
  ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `attendance`
--
ALTER TABLE `attendance`
  ADD PRIMARY KEY (`username`,`date`,`timeslot`),
  ADD KEY `username` (`username`);

--
-- Indexes for table `chat`
--
ALTER TABLE `chat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`username`),
  ADD KEY `username` (`username`);

--
-- Indexes for table `equipment`
--
ALTER TABLE `equipment`
  ADD PRIMARY KEY (`eq_id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD KEY `username` (`username`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`username`,`password`);

--
-- Indexes for table `member_pack`
--
ALTER TABLE `member_pack`
  ADD KEY `f25` (`username`),
  ADD KEY `f26` (`p_id`);

--
-- Indexes for table `packages`
--
ALTER TABLE `packages`
  ADD PRIMARY KEY (`p_id`),
  ADD KEY `pname` (`pname`);

--
-- Indexes for table `schedule`
--
ALTER TABLE `schedule`
  ADD PRIMARY KEY (`s_id`),
  ADD KEY `m_username` (`m_username`),
  ADD KEY `td_username` (`td_username`);

--
-- Indexes for table `td`
--
ALTER TABLE `td`
  ADD PRIMARY KEY (`username`,`password`);

--
-- Indexes for table `timetable`
--
ALTER TABLE `timetable`
  ADD PRIMARY KEY (`s_id`,`day`,`start_time`),
  ADD KEY `s_id` (`s_id`),
  ADD KEY `a_id` (`a_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chat`
--
ALTER TABLE `chat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `schedule`
--
ALTER TABLE `schedule`
  MODIFY `s_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `member_pack`
--
ALTER TABLE `member_pack`
  ADD CONSTRAINT `f25` FOREIGN KEY (`username`) REFERENCES `member` (`username`) ON UPDATE CASCADE,
  ADD CONSTRAINT `f26` FOREIGN KEY (`p_id`) REFERENCES `packages` (`p_id`) ON UPDATE CASCADE;

--
-- Constraints for table `timetable`
--
ALTER TABLE `timetable`
  ADD CONSTRAINT `f11` FOREIGN KEY (`s_id`) REFERENCES `schedule` (`s_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `f13` FOREIGN KEY (`a_id`) REFERENCES `activities` (`a_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
