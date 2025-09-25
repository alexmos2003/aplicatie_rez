-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 08, 2024 at 06:45 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gym_genius`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_equipments`
--

CREATE TABLE `admin_equipments` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `image_url` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_equipments`
--

INSERT INTO `admin_equipments` (`id`, `name`, `description`, `image_url`) VALUES
(3, 'Incline Bench Press⠀⠀⠀⠀⠀⠀⠀', 'The incline bench is exactly the same as the bench press; the only difference is it allows you to press at an incline.', 'images/olympic-incline-bench-300x300.jpg'),
(4, 'Shoulder Press⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀', 'Out of all the various shoulder machines, the shoulder press is the most popular one. It involves you sitting in an upright position using your shoulders by lifting a weighted press.', 'images/buge-shoulder-press.jpg'),
(5, 'Biceps Preacher Curl', 'If you want to specifically focus on pumping up those biceps, then you can perform isolated movements with a preacher curl bench.', 'images/buge-biceps-curl.jpg'),
(6, 'Arm Extension Machine', 'This machine allows you to specifically focus on your triceps, working them out using resistance weights. It allows your triceps to extend and return back to their normal position.', 'images/cybex-vr2-arm-extension-600x600.jpg'),
(7, 'Seated dip machine⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀', 'Fancy a tricep burner? The seated dip machine allows you to enjoy all the benefits of normal bench dips but using a machine that will prevent you from losing your form and balance.', 'images/hammer-strength-plate-loaded-seated-dip-600x600.jpg'),
(8, 'Olimpic Flat Bench⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀', 'The bench press is a popular type of gym equipment, especially for those just starting to get into weight lifting. Basically, you lay flat on a padded bench, use a barbell and do push ups.', 'images/olympic-flat-bench-600x600.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `admin_products`
--

CREATE TABLE `admin_products` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `image_url` varchar(255) NOT NULL,
  `price` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_products`
--

INSERT INTO `admin_products` (`id`, `name`, `description`, `image_url`, `price`) VALUES
(3, 'Granite Protein Bar⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀', 'Protein bars are a convenience food that contains a high proportion of protein relative to carbohydrates and fats.', 'images/ProteinBar_PeanutButter-300x300.png', '$3.33'),
(4, 'Granite 12x Protein Muffin', 'The Granite Protein Muffin Pack gives you plenty protein for your whole week', 'images/gs-protein-bars-ics-Current-View-300x300.png', '$40'),
(5, 'Grenade Oreo Protein⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀', 'The nation’s favourite high protein, low sugar Protein bar, now with the unmistakable great taste of OREO, the #1 cookie brand in the world! ', 'images/Grenade-Oreo-Protein-Bar-Per-Pcs-300x300.jpg', '$4.50'),
(6, 'Prime Tropical Punch', 'Prime Hydration by KSI X Logan Paul 500ml bottle. Refuel, refresh & replenish with our thirst quenching flavours. 10% coconut water, 250mg BCAA’s, 835mg electrolytes, B Vitamins & rich in antioxidants', 'images/prime-hydration-sports-drink-variety-pack-energy-d-1-600x600.jpg', '$2'),
(7, 'Prime Ice Pop⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀', 'Prime Hydration by KSI X Logan Paul 500ml bottle. Refuel, refresh & replenish with our thirst quenching flavours. 10% coconut water, 250mg BCAA’s, 835mg electrolytes, B Vitamins & rich in antioxidants', 'images/41AakXNlhjL._AC_SS300_.jpg', '$2'),
(8, 'Prime Meta Moon⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀', 'Prime Hydration by KSI X Logan Paul 500ml bottle. Refuel, refresh & replenish with our thirst quenching flavours. 10% coconut water, 250mg BCAA’s, 835mg electrolytes, B Vitamins & rich in antioxidants', 'images/Prime-Meta-Mooon-Hydration-Drink-500ml-300x300.jpg', '$2'),
(13, 'Impact Whey Protein Powder', 'Impact Whey Protein Powder is a high-quality protein supplement designed to support muscle growth and recovery. ', 'images/10852500-2095122154908545.jpg', '$30'),
(14, '5% Core Creatine⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀', '5% Core Creatine is a premium creatine monohydrate supplement formulated to enhance strength, power, and muscle endurance.', 'images/5-Nutrition-Creatine-Expand-Supplements-300x300.webp', '$20'),
(15, '5-Hour Energy Shot⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀', 'The 5-Hour Energy Shot is a compact and convenient energy supplement designed to provide a quick and lasting energy boost without the crash.', 'images/9239799_A.eps_High.jpg', '$3');

-- --------------------------------------------------------

--
-- Table structure for table `admin_recipes`
--

CREATE TABLE `admin_recipes` (
  `entry_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `purpose` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `image_url` varchar(255) DEFAULT NULL,
  `details` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_recipes`
--

INSERT INTO `admin_recipes` (`entry_id`, `title`, `type`, `purpose`, `description`, `image_url`, `details`) VALUES
(20, 'Quinoa and Black Bean Salad', 'vegan', 'weightloss', 'A refreshing and nutritious salad packed with protein and fiber, perfect for weight loss.', 'images/Quinoa.png', '<br>Ingredients:\r\n\r\n1 cup quinoa\r\n2 cups water\r\n1 can black beans, drained and rinsed\r\n1 red bell pepper, diced\r\n1 small red onion, diced\r\n1 cup corn kernels\r\n1 avocado, diced\r\n1/4 cup fresh cilantro, chopped\r\nJuice of 2 limes\r\nSalt and pepper to taste<br>\r\n\r\n<br>Instructions:<br>\r\n1.Rinse the quinoa under cold water.<br>\r\n2.In a medium saucepan, bring water to a boil and add quinoa. Reduce heat, cover, and simmer for 15 minutes or until water is absorbed.<br>\r\n3.In a large bowl, combine cooked quinoa, black beans, red bell pepper, red onion, corn, and avocado.<br>\r\n4.Add lime juice, cilantro, salt, and pepper. Toss well to combine.<br>\r\n5.Serve chilled or at room temperature.<br>\r\n\r\n'),
(21, 'Vegan Chickpea Curry', 'vegan', 'weightloss', 'A hearty and flavorful chickpea curry, rich in protein and low in calories.', 'images/lvepyi961xiippgjklwj.jpg', '<br>Ingredients:1 can chickpeas, drained and rinsed\r\n1 can diced tomatoes\r\n1 onion, diced\r\n2 cloves garlic, minced\r\n1 tablespoon curry powder\r\n1 teaspoon ground cumin\r\n1 teaspoon ground turmeric\r\n1 cup coconut milk\r\n1 tablespoon olive oil\r\nSalt and pepper to taste\r\nFresh cilantro for garnish<br>\r\nInstructions:<br>\r\n1.Heat olive oil in a large pan over medium heat. Add onions and garlic, and sauté until softened.<br>\r\n2.Stir in curry powder, cumin, and turmeric, and cook for 1 minute.<br>\r\n3.Add chickpeas and diced tomatoes, and cook for 5 minutes.<br>\r\n4.Pour in coconut milk and bring to a simmer. Cook for 10-15 minutes until the sauce thickens.<br>\r\n5.Season with salt and pepper. Garnish with fresh cilantro before serving.<br>'),
(22, 'Zucchini Noodles with Pesto', 'vegan', 'weightloss', 'A light and fresh zucchini noodle dish with a creamy vegan pesto sauce.', 'images/IMG_E6399-1280x720.jpg', '<br>Ingredients:4 large zucchinis, spiralized\r\n1 cup fresh basil leaves\r\n1/4 cup pine nuts\r\n2 cloves garlic\r\n1/4 cup nutritional yeast\r\n1/4 cup olive oil\r\nJuice of 1 lemon\r\nSalt and pepper to taste<br>\r\nInstructions:<br>\r\n1.Place the basil, pine nuts, garlic, nutritional yeast, lemon juice, salt, and pepper in a food processor. Pulse until combined.<br>\r\n2.With the processor running, slowly add olive oil until smooth.<br>\r\n3.In a large bowl, toss the zucchini noodles with the pesto until evenly coated.<br>\r\n4.Serve immediately or chill for a refreshing salad.<br>'),
(24, 'Beef Stroganoff⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀', 'nonvegan', 'weightgain', 'A rich and creamy beef stroganoff to help pack on muscle mass.', 'images/Beef-Stroganoff-2-1200x720.jpg', '<br>Ingredients:\r\n\r\n1 lb beef sirloin, thinly sliced\r\n1 onion, diced\r\n2 cloves garlic, minced\r\n1 cup mushrooms, sliced\r\n1 cup beef broth\r\n1 cup sour cream\r\n2 tablespoons flour\r\n2 tablespoons butter\r\nSalt and pepper to taste\r\nCooked egg noodles<br>\r\n\r\n<br>Instructions:<br>\r\n1.Heat butter in a large pan over medium heat. Add onions and garlic, and sauté until softened.<br>\r\n2.Add mushrooms and cook until browned.<br>\r\n3.Add beef slices and cook until browned.<br>\r\n4.Stir in flour and cook for 1 minute.<br>\r\n5.Pour in beef broth and bring to a simmer.<br>\r\n6.Stir in sour cream and cook until thickened.<br>\r\n7.Season with salt and pepper. Serve over cooked egg noodles.<br>\r\n\r\n'),
(25, 'Chicken Alfredo Pasta⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀', 'nonvegan', 'weightgain', 'A creamy and caloric chicken Alfredo pasta for muscle gain.', 'images/ChickenFettucciniAlfredo_HERO.jpg', '<br>Ingredients:\r\n\r\n2 chicken breasts, cooked and sliced\r\n1 lb fettuccine pasta\r\n1 cup heavy cream\r\n1 cup grated Parmesan cheese\r\n2 cloves garlic, minced\r\n2 tablespoons butter\r\nSalt and pepper to taste<br>\r\n\r\n<br>Instructions:<br>\r\n1.Cook fettuccine pasta according to package instructions.<br>\r\n2.In a large pan, melt butter over medium heat. Add garlic and sauté until fragrant.<br>\r\n3.Pour in heavy cream and bring to a simmer.<br>\r\n4.Stir in Parmesan cheese until melted and smooth.<br>\r\n5.Add cooked chicken slices and cooked pasta, and toss to coat.<br>\r\n6.Season with salt and pepper before serving.<br>'),
(26, 'Loaded Sweet Potato with Ground Beef', 'nonvegan', 'weightgain', 'A hearty sweet potato loaded with ground beef and toppings.', 'images/buffalo-chicken-stuffed-sweet-potatoes.jpg', '<br>Ingredients:\r\n\r\n2 chicken breasts, cooked and sliced\r\n1 lb fettuccine pasta\r\n4 large sweet potatoes\r\n1 lb ground beef\r\n1 onion, diced\r\n1 cup shredded cheddar cheese\r\n1/2 cup sour cream\r\n1/2 cup chopped green onions\r\n1 tablespoon olive oil\r\nSalt and pepper to taste<br>\r\n\r\n<br>Instructions:<br>\r\n1.Preheat oven to 400°F (200°C). Bake sweet potatoes for 45-60 minutes until tender.<br>\r\n2.In a large pan, heat olive oil over medium heat. Add onions and sauté until softened.<br>\r\n3.Add ground beef and cook until browned. Season with salt and pepper.<br>\r\n4.Slice open baked sweet potatoes and fill with ground beef mixture.<br>\r\n5.Top with shredded cheddar cheese, sour cream, and chopped green onions.<br>');

-- --------------------------------------------------------

--
-- Table structure for table `admin_workouts`
--

CREATE TABLE `admin_workouts` (
  `entry_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `difficulty` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `image_url` varchar(255) DEFAULT NULL,
  `details` text DEFAULT NULL,
  `duration` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_workouts`
--

INSERT INTO `admin_workouts` (`entry_id`, `title`, `difficulty`, `description`, `image_url`, `details`, `duration`) VALUES
(49, 'Triceps For Beginners', 'beginner', 'A basic triceps workout focusing on foundational exercises to build strength.', 'images/triceps_incepatorjpg.jpg', '<br>1. Tricep Dips: Perform on a bench or chair. 3 sets of 10 reps.<br>\r\n2. Overhead Tricep Extension: Use a light dumbbell. 3 sets of 12 reps.<br>\r\n3. Tricep Kickbacks: With a light dumbbell. 3 sets of 15 reps each arm.<br>\r\n4. Push-Ups: Focus on narrow hand placement. 3 sets of 10 reps.\r\n', NULL),
(50, 'Triceps Intermediate⠀⠀⠀⠀⠀⠀', 'intermediate', 'An intermediate triceps workout to increase strength and definition.', 'images/triceps_intermediari.jpg', '<br>1.Skull Crushers: Use a moderate weight. 3 sets of 10 reps.<br>\r\n2.Tricep Dips: Use parallel bars or a bench with added weight if possible. 3 sets of 12 reps.<br>\r\n3.Overhead Dumbbell Tricep Extension: With a heavier dumbbell. 3 sets of 12 reps.<br>\r\n4.Cable Tricep Pushdowns: Use a moderate weight. 3 sets of 15 reps.', NULL),
(51, 'Triceps Advanced⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀', 'advanced', 'An advanced triceps workout designed to maximize strength and hypertrophy.', 'images/triceps_avansati.jpg', '<br>1.Weighted Tricep Dips: Use a dipping belt with added weight. 4 sets of 8 reps.<br>\r\n2.Close-Grip Bench Press: Use a heavy weight. 4 sets of 10 reps.<br>\r\n3.Overhead Cable Tricep Extension: Use a heavy weight. 4 sets of 12 reps.<br>\r\n4.Tricep Pushdowns with Rope: Use a heavy weight. 4 sets of 15 reps.', NULL),
(52, 'Abbs Workout 1⠀⠀⠀⠀⠀⠀', 'beginner', 'A beginner-friendly abdominal workout to build core strength.', 'images/abdomen1.jpg', '<br>1.Crunches: 3 sets of 15 reps.<br>\r\n2.Leg Raises: 3 sets of 12 reps.<br>\r\n3.Plank: Hold for 30 seconds, 3 sets.<br>\r\n4.Bicycle Crunches: 3 sets of 15 reps each side.<br>', NULL),
(53, 'Abbs Workout 2⠀⠀⠀⠀⠀', 'intermediate', 'An intermediate abdominal workout to define and strengthen core muscles.', 'images/abdomen2.jpg', '<br>1.Hanging Leg Raises: 3 sets of 10 reps.<br>\r\n2.Russian Twists: Use a moderate weight. 3 sets of 20 reps.<br>\r\n3.Plank: Hold for 1 minute, 3 sets.<br>\r\n4.Mountain Climbers: 3 sets of 20 reps each side.', NULL),
(54, 'Bodyweight For Beginners', 'beginner', 'A full-body bodyweight workout for beginners to build strength and endurance.', 'images/beginner_bw.jpg', '<br>1.Squats: 3 sets of 15 reps.<br>\r\n2.Push-Ups: 3 sets of 10 reps.<br>\r\n3.Lunges: 3 sets of 12 reps each leg.<br>\r\n4.Plank: Hold for 30 seconds, 3 sets.<br>', NULL),
(55, 'Bodyweight Intermediate', 'intermediate', 'An intermediate full-body bodyweight workout for increased strength and endurance.', 'images/int_bw.jpg', '<br>1.Pistol Squats: 3 sets of 10 reps each leg.<br>\r\n2.Diamond Push-Ups: 3 sets of 12 reps.<br>\r\n3.Bulgarian Split Squats: 3 sets of 12 reps each leg.<br>\r\n4.Side Plank: Hold for 45 seconds each side, 3 sets.', NULL),
(56, 'Bodyweight Advanced', 'advanced', 'An advanced bodyweight workout for maximum strength and conditioning.', 'images/adv_bw.jpg', '<br>1.One-Arm Push-Ups: 3 sets of 6 reps each arm.<br>\r\n2.Muscle-Ups: 3 sets of 5 reps.<br>\r\n3.Single-Leg Box Jumps: 3 sets of 10 reps each leg.<br>\r\n4.L-Sit: Hold for 30 seconds, 3 sets.<br>', NULL),
(57, 'Band For Beginners', 'beginner', 'A beginner resistance band workout to build overall strength.', 'images/band_beg.jpg', '<br>1.Band Squats: 3 sets of 15 reps.<br>\r\n2.Band Rows: 3 sets of 12 reps.<br>\r\n3.Band Chest Press: 3 sets of 12 reps.<br>\r\n4.Band Bicep Curls: 3 sets of 15 reps.', NULL),
(58, 'Band Intermediate', 'intermediate', 'An intermediate resistance band workout for increased strength and muscle tone.', 'images/int_band.jpg', '<br>1.Band Deadlifts: 3 sets of 12 reps.<br>\r\n2.Band Overhead Press: 3 sets of 12 reps.<br>\r\n3.Band Pull-Aparts: 3 sets of 15 reps.<br>\r\n4.Band Tricep Extensions: 3 sets of 15 reps.', NULL),
(59, 'Band Advanced⠀⠀⠀⠀⠀⠀', 'advanced', 'An advanced resistance band workout to maximize muscle strength and endurance.', 'images/adv_band.jpg', '<br>1.Band Thrusters: 4 sets of 15 reps.<br>\r\n2.Band Face Pulls: 4 sets of 15 reps.<br>\r\n3.Band Chest Flyes: 4 sets of 12 reps.<br>\r\n4.Band Squat Jumps: 4 sets of 15 reps.<br>', NULL),
(60, 'Dumbbell For Beginners', 'beginner', 'A beginner dumbbell workout to build basic strength and muscle.', 'images/gantera_incepator.jpg', '<br>1.Dumbbell Squats: 3 sets of 15 reps.<br>\r\n2.Dumbbell Bench Press: 3 sets of 12 reps.<br>\r\n3.Dumbbell Rows: 3 sets of 12 reps each arm.<br>\r\n4.Dumbbell Shoulder Press: 3 sets of 12 reps.', NULL),
(61, 'Dumbbell Intermediate', 'intermediate', 'An intermediate dumbbell workout for enhanced muscle growth and strength.', 'images/gantera_intermediari.jpg', '<br>1.Dumbbell Deadlifts: 3 sets of 12 reps.<br>\r\n2.Dumbbell Incline Press: 3 sets of 12 reps.<br>\r\n3.Dumbbell Bulgarian Split Squats: 3 sets of 12 reps each leg.<br>\r\n4.Dumbbell Arnold Press: 3 sets of 12 reps.', NULL),
(62, 'Dumbbell Advanced', 'advanced', 'An advanced dumbbell workout for maximum strength and muscle definition.', 'images/gantera_avansati.jpg', '<br>1.Dumbbell Snatches: 4 sets of 10 reps each arm.<br>\r\n2.Dumbbell Floor Press: 4 sets of 12 reps.<br>\r\n3.Dumbbell Single-Leg RDLs: 4 sets of 12 reps each leg.<br>\r\n4.Dumbbell Push Press: 4 sets of 12 reps.', NULL),
(63, '1 Dumbbell Workout', 'intermediate', 'A versatile workout using a single dumbbell to target the entire body.', 'images/ogantera.jpg', '<br>1.Goblet Squats: 3 sets of 15 reps.<br>\r\n2.Single-Arm Dumbbell Rows: 3 sets of 12 reps each arm.<br>\r\n3.Single-Arm Dumbbell Press: 3 sets of 12 reps each arm.<br>\r\n4.Single-Arm Dumbbell Clean and Press: 3 sets of 10 reps each arm.', NULL),
(64, 'Barbell For Beginners', 'beginner', 'A beginner barbell workout focusing on foundational strength exercises.', 'images/barbel_incepatori.jpg', '<br>1.Barbell Squats: 3 sets of 12 reps.<br>\r\n2.Barbell Bench Press: 3 sets of 10 reps.<br>\r\n3.Barbell Rows: 3 sets of 12 reps.<br>\r\n4.Barbell Overhead Press: 3 sets of 10 reps.', NULL),
(65, 'Barbell Intermediate', 'intermediate', 'An intermediate barbell workout to increase strength and muscle mass.', 'images/barbel_intermediate.jpg', '<br>1.Barbell Deadlifts: 3 sets of 10 reps.<br>\r\n2.Barbell Incline Bench Press: 3 sets of 10 reps.<br>\r\n3.Barbell Front Squats: 3 sets of 12 reps.<br>\r\n4.Barbell Push Press: 3 sets of 10 reps.', NULL),
(66, 'Barbell Advanced⠀⠀⠀⠀⠀⠀', 'advanced', 'An advanced barbell workout for maximum strength and hypertrophy.', 'images/barbel_avansati.jpg', '<br>1.Barbell Clean and Jerk: 4 sets of 6 reps.<br>\r\n2.Barbell Snatch: 4 sets of 6 reps.<br>\r\n3.Barbell Back Squats: 4 sets of 10 reps.<br>\r\n4.Barbell Deadlifts: 4 sets of 8 reps.', NULL),
(67, 'Legs For Beginners', 'beginner', 'A beginner leg workout to build foundational strength and endurance.', 'images/picioare_incepator.jpg', '<br>1.Bodyweight Squats: 3 sets of 15 reps.<br>\r\n2.Walking Lunges: 3 sets of 12 reps each leg.<br>\r\n3.Leg Press: 3 sets of 12 reps.<br>\r\n4.Calf Raises: 3 sets of 20 reps.<br>', NULL),
(68, 'Cable For Beginners', 'beginner', 'A beginner cable machine workout for overall muscle development.', 'images/beg_cab.jpg', '<br>1.Cable Rows: 3 sets of 12 reps.<br>\r\n2.Cable Chest Press: 3 sets of 12 reps.<br>\r\n3.Cable Lat Pulldowns: 3 sets of 12 reps.<br>\r\n4.Cable Bicep Curls: 3 sets of 15 reps.', NULL),
(69, 'Cable Intermediate', 'intermediate', 'An intermediate cable workout for increased muscle strength and definition.', 'images/int_cab.jpg', '<br>1.Cable Face Pulls: 3 sets of 15 reps.<br>\r\n2.Cable Tricep Pushdowns: 3 sets of 12 reps.<br>\r\n3.Cable Lateral Raises: 3 sets of 15 reps.<br>\r\n4.Cable Squats: 3 sets of 15 reps.', NULL),
(70, 'Arms For Beginners', 'beginner', 'A beginner arm workout focusing on building basic strength and muscle.', 'images/brate_incepator.jpg', '<br>1.Bicep Curls: Use dumbbells. 3 sets of 15 reps.<br>\r\n2.Tricep Kickbacks: Use light dumbbells. 3 sets of 15 reps.<br>\r\n3.Hammer Curls: Use dumbbells. 3 sets of 12 reps.<br>\r\n4.Overhead Tricep Extension: Use a light dumbbell. 3 sets of 12 reps.', NULL),
(71, 'Upper Body For Women', 'beginner', 'A tailored upper body workout for women to build strength and tone muscles.', 'images/antrenament_femei.jpg', '<br>1.Push-Ups: 3 sets of 12 reps.<br>\r\n2.Dumbbell Rows: 3 sets of 15 reps each arm.<br>\r\n3.Dumbbell Shoulder Press: 3 sets of 12 reps.<br>\r\n4.Tricep Dips: 3 sets of 10 reps.\r\n\r\n\r\n\r\n\r\n', NULL),
(73, 'test', 'beginner', 'test', 'images/creatine.webp', 'test', NULL),
(74, 'testare', 'beginner', 'testare', 'images/5656-550x366.jpg', 'test', '1111'),
(75, 'fdfdf', 'intermediate', 'fdfdf', 'images/Quinoa.png', 'fdff', '30');

-- --------------------------------------------------------

--
-- Table structure for table `dash_text`
--

CREATE TABLE `dash_text` (
  `Id` int(11) NOT NULL,
  `user_type_id` varchar(255) DEFAULT NULL,
  `content_text` varchar(255) DEFAULT NULL,
  `titlu` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `dash_text`
--

INSERT INTO `dash_text` (`Id`, `user_type_id`, `content_text`, `titlu`) VALUES
(1, '1', 'BIfsadfasfasfads!', 'Dash admin'),
(2, '2', 'BIne ai venit, utilizator de tip utilizator!', 'Dash utilzator');

-- --------------------------------------------------------

--
-- Table structure for table `drepturi`
--

CREATE TABLE `drepturi` (
  `Id` int(11) NOT NULL,
  `IdPage` varchar(255) DEFAULT NULL,
  `IdUser` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `drepturi`
--

INSERT INTO `drepturi` (`Id`, `IdPage`, `IdUser`) VALUES
(1, '1', '1'),
(2, '2', '2'),
(3, '3', '1'),
(4, '4', '1'),
(5, '5', '1'),
(6, '46', '1'),
(7, '9', '2'),
(9, '8', '2'),
(10, '35', '2'),
(11, '56', '2'),
(12, '11', '1'),
(13, '12', '1'),
(14, '13', '1'),
(15, '14', '1'),
(16, '15', '1'),
(17, '16', '1'),
(18, '17', '1'),
(19, '18', '1'),
(20, '19', '1'),
(21, '20', '1'),
(22, '21', '1'),
(23, '22', '1'),
(24, '23', '1'),
(25, '24', '1'),
(26, '25', '1'),
(27, '26', '1'),
(28, '27', '1'),
(29, '28', '1'),
(30, '29', '1'),
(31, '30', '1'),
(32, '31', '1'),
(33, '32', '1'),
(34, '33', '1'),
(35, '34', '1'),
(36, '58', '2'),
(37, '36', '2'),
(38, '57', '2'),
(39, '38', '1'),
(40, '39', '1'),
(41, '40', '1'),
(42, '41', '1'),
(43, '42', '1'),
(44, '43', '1'),
(45, '44', '1'),
(46, '45', '1'),
(47, '47', '1'),
(49, '48', '1'),
(50, '49', '1'),
(51, '50', '1'),
(52, '51', '1'),
(53, '52', '1'),
(54, '53', '1'),
(55, '54', '1'),
(56, '55', '1'),
(57, '37', '2'),
(58, '69', '2'),
(59, '70', '2'),
(60, '59', '2'),
(61, '60', '1'),
(62, '71', '1'),
(63, '61', '1'),
(64, '62', '1'),
(65, '63', '1'),
(66, '64', '1'),
(67, '65', '1'),
(68, '66', '1'),
(69, '67', '1'),
(70, '68', '1'),
(71, '80', '2'),
(72, '10', '2'),
(73, '6', '1'),
(74, '72', '1'),
(75, '73', '1'),
(76, '74', '1'),
(77, '75', '1'),
(78, '76', '1'),
(79, '77', '1'),
(80, '78', '1'),
(81, '79', '1'),
(82, '6', '2');

-- --------------------------------------------------------

--
-- Table structure for table `gym_news`
--

CREATE TABLE `gym_news` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `image_url` varchar(255) DEFAULT NULL,
  `published_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `description` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `gym_news`
--

INSERT INTO `gym_news` (`id`, `title`, `content`, `image_url`, `published_date`, `description`) VALUES
(5, 'Significant Benefits of Whey Protein Powder⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀', '<br>In a comprehensive study published in the Journal of Applied Physiology, researchers from the University of Health Sciences have provided compelling evidence supporting the use of whey protein powder for improving muscle recovery and promoting muscle hypertrophy.<br>\r\n\r\n<br>The study involved a randomized, double-blind, placebo-controlled trial with 120 participants, both male and female, aged between 18 and 45 years. The participants were divided into two groups: one receiving 25 grams of whey protein powder and the other receiving a placebo, both administered post-exercise. The study duration was 12 weeks, with participants engaging in a structured resistance training program.<br>\r\n\r\n<br>Key Findings:<br>\r\n<br>1.Enhanced Muscle Protein Synthesis: Participants who consumed whey protein powder exhibited a 30% increase in muscle protein synthesis compared to the placebo group. This enhanced synthesis was attributed to the high levels of essential amino acids, particularly leucine, present in whey protein.<br>\r\n<br>2.Improved Muscle Recovery: The whey protein group reported significantly reduced muscle soreness and fatigue post-exercise. Blood markers of muscle damage, such as creatine kinase and myoglobin, were notably lower in this group, indicating faster muscle recovery.<br>\r\n<br>3.Increased Muscle Mass and Strength: After 12 weeks, the whey protein group showed a substantial increase in lean muscle mass (average gain of 1.5 kg) and muscle strength (average increase of 15% in bench press and squat performance) compared to the placebo group.\r\n\r\n', 'images/protein-powders-thumb.jpg', '2024-06-06 14:57:02', 'A recent study conducted by researchers at the University of Health Sciences has highlighted the substantial benefits of whey protein powder'),
(6, 'Creatine Supplementation Boosts Muscle', '<br>Researchers from the Institute of Sports Science have recently published an enlightening study in the Journal of Sports Nutrition and Exercise Metabolism, revealing the multifaceted benefits of creatine supplementation. The study underscores not only the well-known effects of creatine on muscle strength but also its positive impact on cognitive function.<br>\r\n<br>This double-blind, placebo-controlled trial involved 150 participants, both male and female, aged between 20 and 40 years. Participants were randomly assigned to either a creatine supplementation group or a placebo group. The creatine group received 5 grams of creatine monohydrate daily for 12 weeks, while both groups followed a standardized resistance training and cognitive training program.<br>\r\n<br>Key Findings:<br>\r\n<br>1.Increased Muscle Strength: The creatine group exhibited a significant increase in muscle strength compared to the placebo group. Notably, the participants demonstrated a 20% greater improvement in bench press and leg press strength.<br>\r\n<br>2.Enhanced Muscle Mass: Creatine supplementation led to a considerable gain in lean muscle mass, with the creatine group averaging an increase of 2 kg in muscle mass over the 12-week period.<br>\r\n<br>3.Improved Cognitive Function: Participants in the creatine group showed marked improvement in cognitive tests measuring memory, attention, and problem-solving skills. On average, the creatine group performed 15% better on cognitive tests than the placebo group.<br>', 'images/creatine.webp', '2024-06-06 15:00:45', 'A recent study by researchers at the Institute of Sports Science demonstrates the dual benefits of creatine supplementation'),
(7, 'Benefits of Physical Activity for Older Adults', '<br>A groundbreaking study conducted by researchers at the National Institute on Aging has shed light on the substantial benefits of regular physical activity for older adults. Published in the Journal of Gerontology: Medical Sciences, the study emphasizes how maintaining an active lifestyle can dramatically enhance health and extend lifespan among the elderly population.<br>\r\n\r\n<br>The longitudinal study tracked 2,500 participants aged 65 and older over a period of 10 years. Participants were divided into two groups based on their activity levels: those who engaged in regular physical activity (at least 150 minutes of moderate-intensity exercise per week) and those who were mostly sedentary.<br>\r\n\r\n<br>Key Findings<br>\r\n1.Improved Cardiovascular Health: The active group showed a 30% reduction in the risk of cardiovascular diseases, including heart attack and stroke, compared to the sedentary group. Regular physical activity helped maintain healthier blood pressure and cholesterol levels.<br>\r\n2.Enhanced Cognitive Function: Participants who maintained regular physical activity exhibited slower cognitive decline and a 20% lower risk of developing dementia and Alzheimers disease. Physical exercise was found to enhance memory, attention, and processing speed.<br>\r\n3.Increased Muscle Strength and Mobility: Older adults who exercised regularly experienced better muscle strength and greater mobility. This group had a 25% lower incidence of falls and related injuries, indicating improved balance and coordination.<br>', 'images/5656-550x366.jpg', '2024-06-06 15:16:11', 'A recent study from the National Institute on Aging demonstrates that regular physical activity significantly improves health');

-- --------------------------------------------------------

--
-- Table structure for table `membership_plans`
--

CREATE TABLE `membership_plans` (
  `id` int(11) NOT NULL,
  `plan_name` varchar(255) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `duration` int(11) NOT NULL,
  `benefits` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `membership_plans`
--

INSERT INTO `membership_plans` (`id`, `plan_name`, `price`, `duration`, `benefits`) VALUES
(1, 'Standard', 30.00, 30, 'Standard Gym Plan'),
(5, 'Student', 20.00, 30, 'A special plan for students with a greater price!'),
(6, 'Familly', 90.00, 30, 'A pack for a familly of 4'),
(7, '6 months plan', 150.00, 180, 'Buy a 6 months plan if you want to secure yourself!'),
(8, '1 year plan', 300.00, 365, 'A one year plan for the dedicated lifers!');

-- --------------------------------------------------------

--
-- Table structure for table `pagini`
--

CREATE TABLE `pagini` (
  `Id` int(11) NOT NULL,
  `nume_meniu` varchar(255) DEFAULT NULL,
  `pagina` varchar(255) DEFAULT NULL,
  `Meniu` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `pagini`
--

INSERT INTO `pagini` (`Id`, `nume_meniu`, `pagina`, `Meniu`) VALUES
(1, 'Home', 'dashboard.php', '1'),
(2, 'Home', 'dashboardu.php', '1'),
(3, 'Users', 'admin_users.php', '1'),
(4, 'Workouts', 'admin_workouts.php', '1'),
(5, 'Recipes', 'admin_recipes.php', '1'),
(6, 'Settings', 'settings.php', '1'),
(7, 'Logout', 'logout.php', '1'),
(8, 'Home', 'user_page.php', '0'),
(9, 'Workouts', 'antrenamente.php', '1'),
(10, 'About', 'about.php', '1'),
(11, 'Vizualizare', 'vizualizare.php', '0'),
(12, 'Modificare', 'modificare.php', '0'),
(13, 'Sterge', 'sterge1.php', '0'),
(14, 'Sterge', 'sterge.php', '0'),
(15, 'Adauga', 'adauga1.php', '0'),
(16, 'Adauga', 'adauga.php', '0'),
(17, 'Cauta', 'cauta1.php', '0'),
(18, 'Cauta', 'cauta.php', '0'),
(19, 'Vizualizare', 'view_recipes.php', '0'),
(20, 'Adaugare', 'add_recipe1.php', '0'),
(21, 'Adaugare', 'add_recipe.php', '0'),
(22, 'Sterge', 'delete_recipe1.php', '0'),
(23, 'Sterge', 'delete_recipe.php', '0'),
(24, 'Cauta', 'search_recipe1.php', '0'),
(25, 'Cauta', 'search_recipe.php', '0'),
(26, 'Edit', 'edit_recipe.php', '0'),
(27, 'Adauga', 'add_user1.php', '0'),
(28, 'Adauga', 'add_user.php', '0'),
(29, 'Sterge', 'delete_user1.php', '0'),
(30, 'Sterge', 'delete_user.php', '0'),
(31, 'Cauta', 'search_user1.php', '0'),
(32, 'Cauta', 'search_user.php', '0'),
(33, 'Edit', 'edit_user.php', '0'),
(34, 'Vizualizare', 'view_users.php', '0'),
(35, 'Recipes', 'recipes.php', '1'),
(36, 'Afisare', 'view_workout.php', '0'),
(37, 'Viz', 'viz_recipe.php', '0'),
(38, 'Equipments', 'admin_equipments.php', '1'),
(39, 'Vizualizare', 'view_equipments.php', '0'),
(40, 'Add', 'add_equipment1.php', '0'),
(41, 'Add', 'add_equipment.php', '0'),
(42, 'Delete', 'delete_equipment1.php', '0'),
(43, 'Delete', 'delete_equipment.php', '0'),
(44, 'Search', 'search_equipment1.php', '0'),
(45, 'Search', 'search_equipment.php', '0'),
(46, 'Edit', 'edit_equipment.php', '0'),
(47, 'Products', 'admin_products.php', '1'),
(48, 'Vizualizare', 'view_products.php', '0'),
(49, 'Adauga', 'add_product1.php', '0'),
(50, 'Adauga', 'add_product.php', '0'),
(51, 'Sterge', 'delete_product1.php', '0'),
(52, 'Sterge', 'delete_product.php', '0'),
(53, 'Cauta', 'search_product1.php', '0'),
(54, 'Cauta', 'search_product.php', '0'),
(55, 'Edit', 'edit_product.php', '0'),
(56, 'Equipments', 'equipments.php', '1'),
(57, 'Viz Equipments', 'viz_equipment.php', '0'),
(58, 'Products', 'products.php', '1'),
(59, 'Viz Product', 'viz_product.php', '0'),
(60, 'News', 'admin_news.php', '1'),
(61, 'Viz', 'view_news.php', '0'),
(62, 'Add', 'add_news1.php', '0'),
(63, 'Add', 'add_news.php', '0'),
(64, 'Delete', 'delete_news1.php', '0'),
(65, 'Delete', 'delete_news.php', '0'),
(66, 'Search', 'search_news1.php', '0'),
(67, 'Search', 'search_news.php', '0'),
(68, 'Edit', 'edit_news.php', '0'),
(69, 'News', 'gym_news.php', '1'),
(70, 'Viz', 'viz_news.php', '0'),
(71, 'Memberships', 'admin_memberships.php', '1'),
(72, 'Viz Memberships', 'view_memberships.php', '0'),
(73, 'Add', 'add_membership1.php', '0'),
(74, 'Add', 'add_membership.php', '0'),
(75, 'Delete', 'delete_membership1.php', '0'),
(76, 'Delete', 'delete_membership.php', '0'),
(77, 'Search', 'search_membership1.php', '0'),
(78, 'Search', 'search_membership.php', '0'),
(79, 'Edit', 'edit_membership.php', '0'),
(80, 'Memberships', 'memberships.php', '1');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `Id` int(11) NOT NULL,
  `nume` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `type` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`Id`, `nume`, `username`, `password`, `type`) VALUES
(1, 'admin', 'admin', '1234', '1'),
(2, 'user', 'user', '1234', '2');

-- --------------------------------------------------------

--
-- Table structure for table `user_types`
--

CREATE TABLE `user_types` (
  `Id` int(11) NOT NULL,
  `desc` varchar(255) DEFAULT NULL,
  `redirect` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `user_types`
--

INSERT INTO `user_types` (`Id`, `desc`, `redirect`) VALUES
(1, 'admin', 'dashboard.php'),
(2, 'user', 'dashboardu.php');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_equipments`
--
ALTER TABLE `admin_equipments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin_products`
--
ALTER TABLE `admin_products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin_recipes`
--
ALTER TABLE `admin_recipes`
  ADD PRIMARY KEY (`entry_id`);

--
-- Indexes for table `admin_workouts`
--
ALTER TABLE `admin_workouts`
  ADD PRIMARY KEY (`entry_id`);

--
-- Indexes for table `dash_text`
--
ALTER TABLE `dash_text`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `drepturi`
--
ALTER TABLE `drepturi`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `gym_news`
--
ALTER TABLE `gym_news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `membership_plans`
--
ALTER TABLE `membership_plans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pagini`
--
ALTER TABLE `pagini`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `user_types`
--
ALTER TABLE `user_types`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_equipments`
--
ALTER TABLE `admin_equipments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `admin_products`
--
ALTER TABLE `admin_products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `admin_recipes`
--
ALTER TABLE `admin_recipes`
  MODIFY `entry_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `admin_workouts`
--
ALTER TABLE `admin_workouts`
  MODIFY `entry_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- AUTO_INCREMENT for table `dash_text`
--
ALTER TABLE `dash_text`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `drepturi`
--
ALTER TABLE `drepturi`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=113;

--
-- AUTO_INCREMENT for table `gym_news`
--
ALTER TABLE `gym_news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `membership_plans`
--
ALTER TABLE `membership_plans`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `pagini`
--
ALTER TABLE `pagini`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user_types`
--
ALTER TABLE `user_types`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
