-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3307
-- Tiempo de generación: 09-12-2024 a las 00:22:19
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `univeristymatch`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `billinginformation`
--

CREATE TABLE `billinginformation` (
  `ID` int(11) NOT NULL,
  `CartID` int(11) NOT NULL,
  `Name` varchar(70) NOT NULL,
  `LastName` varchar(70) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `PhoneNumber` varchar(30) NOT NULL,
  `Address` text NOT NULL,
  `CountryID` int(11) NOT NULL,
  `City` varchar(50) NOT NULL,
  `State` varchar(80) NOT NULL,
  `PostalCode` varchar(20) NOT NULL,
  `DateSubmitted` datetime NOT NULL,
  `UserID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `brand`
--

CREATE TABLE `brand` (
  `ID` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `career`
--

CREATE TABLE `career` (
  `ID` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `AdmissionProfile` text NOT NULL,
  `GraduationProfile` text NOT NULL,
  `UniversityID` int(11) NOT NULL,
  `Mission` text NOT NULL,
  `Vision` text NOT NULL,
  `CareerValues` text NOT NULL,
  `Objectives` text NOT NULL,
  `Image` text NOT NULL,
  `StudyAreaID` int(11) NOT NULL,
  `DurationRangeID` int(11) NOT NULL,
  `CostRangeID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `careercostrange`
--

CREATE TABLE `careercostrange` (
  `ID` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `careerdurationrange`
--

CREATE TABLE `careerdurationrange` (
  `ID` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `careerstudyarea`
--

CREATE TABLE `careerstudyarea` (
  `ID` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cart`
--

CREATE TABLE `cart` (
  `ID` int(11) NOT NULL,
  `UserID` int(11) NOT NULL,
  `DateCreated` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cartitem`
--

CREATE TABLE `cartitem` (
  `ID` int(11) NOT NULL,
  `CartID` int(11) NOT NULL,
  `ProductID` int(11) NOT NULL,
  `Quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `category`
--

CREATE TABLE `category` (
  `ID` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `condition1`
--

CREATE TABLE `condition1` (
  `ID` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `country`
--

CREATE TABLE `country` (
  `ID` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `course`
--

CREATE TABLE `course` (
  `ID` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `CategoryID` int(11) NOT NULL,
  `Description` text NOT NULL,
  `PhoneNumber` varchar(30) NOT NULL,
  `CourseTypeID` int(11) NOT NULL,
  `School` varchar(255) NOT NULL,
  `Logo` text NOT NULL,
  `DurationHours` int(11) NOT NULL,
  `Cost` decimal(10,2) NOT NULL,
  `LevelID` int(11) NOT NULL,
  `ModalityID` int(11) NOT NULL,
  `DateAdded` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `courselevel`
--

CREATE TABLE `courselevel` (
  `ID` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `coursemodality`
--

CREATE TABLE `coursemodality` (
  `ID` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `coursetype`
--

CREATE TABLE `coursetype` (
  `ID` int(11) NOT NULL,
  `Type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `curriculumdetails`
--

CREATE TABLE `curriculumdetails` (
  `ID` int(11) NOT NULL,
  `SubjectName` varchar(255) NOT NULL,
  `Credits` int(11) NOT NULL,
  `Semester` tinyint(4) NOT NULL,
  `StuduyPlanID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `desiredcareer`
--

CREATE TABLE `desiredcareer` (
  `ID` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `donationassignment`
--

CREATE TABLE `donationassignment` (
  `ID` int(11) NOT NULL,
  `ProductID` int(11) NOT NULL,
  `UserID` int(11) NOT NULL,
  `DateAssigned` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `favorite`
--

CREATE TABLE `favorite` (
  `ID` int(11) NOT NULL,
  `UserID` int(11) NOT NULL,
  `ProductID` int(11) NOT NULL,
  `DateAdded` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `imagegallery`
--

CREATE TABLE `imagegallery` (
  `ID` int(11) NOT NULL,
  `UniversityID` int(11) NOT NULL,
  `ImageURL` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `interests`
--

CREATE TABLE `interests` (
  `ID` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `notificationregistration`
--

CREATE TABLE `notificationregistration` (
  `ID` int(11) NOT NULL,
  `Username` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `ConfirmEmail` varchar(255) NOT NULL,
  `TermsAndCondictionsAgreement` tinyint(1) NOT NULL,
  `UserID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `order1`
--

CREATE TABLE `order1` (
  `ID` int(11) NOT NULL,
  `UserID` int(11) NOT NULL,
  `Date` datetime NOT NULL,
  `StatusID` int(11) NOT NULL,
  `TotalPrice` decimal(10,2) NOT NULL,
  `CreatedAt` datetime NOT NULL,
  `UpdatedAt` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `orderdetail`
--

CREATE TABLE `orderdetail` (
  `ID` int(11) NOT NULL,
  `OrderID` int(11) NOT NULL,
  `ProductDonarionID` int(11) NOT NULL,
  `Quantity` int(11) NOT NULL,
  `Price` decimal(10,2) NOT NULL,
  `CreatedAt` datetime NOT NULL,
  `UpdatedAt` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productcategory`
--

CREATE TABLE `productcategory` (
  `ID` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productdonation`
--

CREATE TABLE `productdonation` (
  `ID` int(11) NOT NULL,
  `UserID` int(11) NOT NULL,
  `ProductName` varchar(255) NOT NULL,
  `BrandID` int(11) NOT NULL,
  `CondirionID` int(11) NOT NULL,
  `Description` text NOT NULL,
  `OtherTypeDetail` varchar(255) NOT NULL,
  `PhotoURL` text NOT NULL,
  `Stock` int(11) NOT NULL,
  `ProductCategoryID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `review`
--

CREATE TABLE `review` (
  `ID` int(11) NOT NULL,
  `UserID` int(11) NOT NULL,
  `Rating` tinyint(4) NOT NULL,
  `Comment` text NOT NULL,
  `DateAdded` datetime NOT NULL,
  `Email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `status`
--

CREATE TABLE `status` (
  `ID` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `studyplan`
--

CREATE TABLE `studyplan` (
  `ID` int(11) NOT NULL,
  `CareerID` int(11) NOT NULL,
  `PlanDescription` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tuition`
--

CREATE TABLE `tuition` (
  `ID` int(11) NOT NULL,
  `CarrerID` int(11) NOT NULL,
  `SemesterPrice` decimal(10,2) NOT NULL,
  `AnnualPrice` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `university`
--

CREATE TABLE `university` (
  `ID` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Vision` text NOT NULL,
  `Mission` text NOT NULL,
  `Address` text NOT NULL,
  `Description` text NOT NULL,
  `Location` varchar(255) NOT NULL,
  `GeneralInformation` text NOT NULL,
  `SchoolValues` text NOT NULL,
  `TuitionCosts` text NOT NULL,
  `Images` text NOT NULL,
  `Logos` text NOT NULL,
  `Scholarships` text NOT NULL,
  `Calls` text NOT NULL,
  `ReviewID` int(11) NOT NULL,
  `TypeID` int(11) NOT NULL,
  `ModalityID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `universitycategory`
--

CREATE TABLE `universitycategory` (
  `ID` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `universitycategoryassignment`
--

CREATE TABLE `universitycategoryassignment` (
  `ID` int(11) NOT NULL,
  `UniversityID` int(11) NOT NULL,
  `UniCategoryID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `universitytype`
--

CREATE TABLE `universitytype` (
  `ID` int(11) NOT NULL,
  `Name` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user`
--

CREATE TABLE `user` (
  `ID` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `LastName` varchar(255) NOT NULL,
  `DateOfBirth` date NOT NULL,
  `PhoneNumber` varchar(30) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Password` varchar(25) NOT NULL,
  `PrivacyAgreement` tinyint(1) NOT NULL,
  `About` text NOT NULL,
  `Shcool` varchar(255) NOT NULL,
  `Job` varchar(255) NOT NULL,
  `CountryID` int(11) NOT NULL,
  `Address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usercourse`
--

CREATE TABLE `usercourse` (
  `UserID` int(11) NOT NULL,
  `CourseID` int(11) NOT NULL,
  `DateAdded` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `userdesiredcareer`
--

CREATE TABLE `userdesiredcareer` (
  `UserID` int(11) NOT NULL,
  `DesiredCareerID` int(11) NOT NULL,
  `DateAdded` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `userinterest`
--

CREATE TABLE `userinterest` (
  `UserID` int(11) NOT NULL,
  `InterestID` int(11) NOT NULL,
  `DateAdded` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vocationaltestresult`
--

CREATE TABLE `vocationaltestresult` (
  `ID` int(11) NOT NULL,
  `UserID` int(11) NOT NULL,
  `UniversityID` int(11) NOT NULL,
  `CareerID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `billinginformation`
--
ALTER TABLE `billinginformation`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `CartID` (`CartID`),
  ADD UNIQUE KEY `CountryID` (`CountryID`),
  ADD UNIQUE KEY `UserID` (`UserID`);

--
-- Indices de la tabla `brand`
--
ALTER TABLE `brand`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `career`
--
ALTER TABLE `career`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `UniversityID` (`UniversityID`),
  ADD UNIQUE KEY `StudyAreaID` (`StudyAreaID`),
  ADD UNIQUE KEY `DurationRangeID` (`DurationRangeID`),
  ADD UNIQUE KEY `CostRangeID` (`CostRangeID`);

--
-- Indices de la tabla `careercostrange`
--
ALTER TABLE `careercostrange`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `careerdurationrange`
--
ALTER TABLE `careerdurationrange`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `careerstudyarea`
--
ALTER TABLE `careerstudyarea`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `UserID` (`UserID`);

--
-- Indices de la tabla `cartitem`
--
ALTER TABLE `cartitem`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `CartID` (`CartID`),
  ADD UNIQUE KEY `ProductID` (`ProductID`);

--
-- Indices de la tabla `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `condition1`
--
ALTER TABLE `condition1`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `country`
--
ALTER TABLE `country`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `CategoryID` (`CategoryID`),
  ADD UNIQUE KEY `CourseTypeID` (`CourseTypeID`),
  ADD UNIQUE KEY `LevelID` (`LevelID`),
  ADD UNIQUE KEY `ModalityID` (`ModalityID`);

--
-- Indices de la tabla `courselevel`
--
ALTER TABLE `courselevel`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `coursemodality`
--
ALTER TABLE `coursemodality`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `coursetype`
--
ALTER TABLE `coursetype`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `curriculumdetails`
--
ALTER TABLE `curriculumdetails`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `StuduyPlanID` (`StuduyPlanID`);

--
-- Indices de la tabla `desiredcareer`
--
ALTER TABLE `desiredcareer`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `donationassignment`
--
ALTER TABLE `donationassignment`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `ProductID` (`ProductID`),
  ADD UNIQUE KEY `UserID` (`UserID`);

--
-- Indices de la tabla `favorite`
--
ALTER TABLE `favorite`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `UserID` (`UserID`),
  ADD UNIQUE KEY `ProductID` (`ProductID`);

--
-- Indices de la tabla `imagegallery`
--
ALTER TABLE `imagegallery`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `UniversityID` (`UniversityID`);

--
-- Indices de la tabla `interests`
--
ALTER TABLE `interests`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `notificationregistration`
--
ALTER TABLE `notificationregistration`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `UserID` (`UserID`);

--
-- Indices de la tabla `order1`
--
ALTER TABLE `order1`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `UserID` (`UserID`),
  ADD UNIQUE KEY `StatusID` (`StatusID`);

--
-- Indices de la tabla `orderdetail`
--
ALTER TABLE `orderdetail`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `OrderID` (`OrderID`),
  ADD UNIQUE KEY `ProductDonarionID` (`ProductDonarionID`);

--
-- Indices de la tabla `productcategory`
--
ALTER TABLE `productcategory`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `productdonation`
--
ALTER TABLE `productdonation`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `UserID` (`UserID`),
  ADD UNIQUE KEY `BrandID` (`BrandID`),
  ADD UNIQUE KEY `CondirionID` (`CondirionID`),
  ADD UNIQUE KEY `ProductCategoryID` (`ProductCategoryID`);

--
-- Indices de la tabla `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `UserID` (`UserID`);

--
-- Indices de la tabla `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `studyplan`
--
ALTER TABLE `studyplan`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `CarrerID` (`CareerID`);

--
-- Indices de la tabla `tuition`
--
ALTER TABLE `tuition`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `CarrerID` (`CarrerID`);

--
-- Indices de la tabla `university`
--
ALTER TABLE `university`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `ReviewID` (`ReviewID`),
  ADD UNIQUE KEY `TypeID` (`TypeID`),
  ADD UNIQUE KEY `ModalityID` (`ModalityID`);

--
-- Indices de la tabla `universitycategory`
--
ALTER TABLE `universitycategory`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `universitycategoryassignment`
--
ALTER TABLE `universitycategoryassignment`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `UniversityID` (`UniversityID`),
  ADD UNIQUE KEY `CategoryID` (`UniCategoryID`);

--
-- Indices de la tabla `universitytype`
--
ALTER TABLE `universitytype`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `CountryID` (`CountryID`);

--
-- Indices de la tabla `usercourse`
--
ALTER TABLE `usercourse`
  ADD UNIQUE KEY `UserID` (`UserID`,`CourseID`),
  ADD KEY `CourseID` (`CourseID`);

--
-- Indices de la tabla `userdesiredcareer`
--
ALTER TABLE `userdesiredcareer`
  ADD UNIQUE KEY `UserID` (`UserID`,`DesiredCareerID`),
  ADD KEY `DesiredCareerID` (`DesiredCareerID`);

--
-- Indices de la tabla `userinterest`
--
ALTER TABLE `userinterest`
  ADD UNIQUE KEY `UserID` (`UserID`),
  ADD UNIQUE KEY `InterestID` (`InterestID`);

--
-- Indices de la tabla `vocationaltestresult`
--
ALTER TABLE `vocationaltestresult`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `UserID` (`UserID`),
  ADD UNIQUE KEY `UniversityID` (`UniversityID`),
  ADD UNIQUE KEY `CareerID` (`CareerID`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `billinginformation`
--
ALTER TABLE `billinginformation`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `brand`
--
ALTER TABLE `brand`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `career`
--
ALTER TABLE `career`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `careercostrange`
--
ALTER TABLE `careercostrange`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `careerdurationrange`
--
ALTER TABLE `careerdurationrange`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `careerstudyarea`
--
ALTER TABLE `careerstudyarea`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `cart`
--
ALTER TABLE `cart`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `cartitem`
--
ALTER TABLE `cartitem`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `category`
--
ALTER TABLE `category`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `condition1`
--
ALTER TABLE `condition1`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `country`
--
ALTER TABLE `country`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `course`
--
ALTER TABLE `course`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `courselevel`
--
ALTER TABLE `courselevel`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `coursemodality`
--
ALTER TABLE `coursemodality`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `coursetype`
--
ALTER TABLE `coursetype`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `curriculumdetails`
--
ALTER TABLE `curriculumdetails`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `desiredcareer`
--
ALTER TABLE `desiredcareer`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `donationassignment`
--
ALTER TABLE `donationassignment`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `favorite`
--
ALTER TABLE `favorite`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `imagegallery`
--
ALTER TABLE `imagegallery`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `interests`
--
ALTER TABLE `interests`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `notificationregistration`
--
ALTER TABLE `notificationregistration`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `order1`
--
ALTER TABLE `order1`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `orderdetail`
--
ALTER TABLE `orderdetail`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `productcategory`
--
ALTER TABLE `productcategory`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `productdonation`
--
ALTER TABLE `productdonation`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `review`
--
ALTER TABLE `review`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `status`
--
ALTER TABLE `status`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `studyplan`
--
ALTER TABLE `studyplan`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tuition`
--
ALTER TABLE `tuition`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `university`
--
ALTER TABLE `university`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `universitycategory`
--
ALTER TABLE `universitycategory`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `universitycategoryassignment`
--
ALTER TABLE `universitycategoryassignment`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `universitytype`
--
ALTER TABLE `universitytype`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `user`
--
ALTER TABLE `user`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `vocationaltestresult`
--
ALTER TABLE `vocationaltestresult`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `billinginformation`
--
ALTER TABLE `billinginformation`
  ADD CONSTRAINT `billinginformation_ibfk_1` FOREIGN KEY (`UserID`) REFERENCES `user` (`ID`) ON UPDATE CASCADE,
  ADD CONSTRAINT `billinginformation_ibfk_2` FOREIGN KEY (`CountryID`) REFERENCES `country` (`ID`) ON UPDATE CASCADE,
  ADD CONSTRAINT `billinginformation_ibfk_3` FOREIGN KEY (`CartID`) REFERENCES `cart` (`ID`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `career`
--
ALTER TABLE `career`
  ADD CONSTRAINT `career_ibfk_1` FOREIGN KEY (`StudyAreaID`) REFERENCES `careerstudyarea` (`ID`) ON UPDATE CASCADE,
  ADD CONSTRAINT `career_ibfk_2` FOREIGN KEY (`DurationRangeID`) REFERENCES `careerdurationrange` (`ID`) ON UPDATE CASCADE,
  ADD CONSTRAINT `career_ibfk_3` FOREIGN KEY (`CostRangeID`) REFERENCES `careercostrange` (`ID`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `cartitem`
--
ALTER TABLE `cartitem`
  ADD CONSTRAINT `cartitem_ibfk_1` FOREIGN KEY (`CartID`) REFERENCES `cart` (`ID`) ON UPDATE CASCADE,
  ADD CONSTRAINT `cartitem_ibfk_2` FOREIGN KEY (`ProductID`) REFERENCES `productdonation` (`ID`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `course`
--
ALTER TABLE `course`
  ADD CONSTRAINT `course_ibfk_1` FOREIGN KEY (`CourseTypeID`) REFERENCES `coursetype` (`ID`) ON UPDATE CASCADE,
  ADD CONSTRAINT `course_ibfk_2` FOREIGN KEY (`CategoryID`) REFERENCES `category` (`ID`) ON UPDATE CASCADE,
  ADD CONSTRAINT `course_ibfk_3` FOREIGN KEY (`ModalityID`) REFERENCES `coursemodality` (`ID`) ON UPDATE CASCADE,
  ADD CONSTRAINT `course_ibfk_4` FOREIGN KEY (`LevelID`) REFERENCES `courselevel` (`ID`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `curriculumdetails`
--
ALTER TABLE `curriculumdetails`
  ADD CONSTRAINT `curriculumdetails_ibfk_1` FOREIGN KEY (`StuduyPlanID`) REFERENCES `studyplan` (`ID`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `donationassignment`
--
ALTER TABLE `donationassignment`
  ADD CONSTRAINT `donationassignment_ibfk_1` FOREIGN KEY (`ProductID`) REFERENCES `productdonation` (`ID`) ON UPDATE CASCADE,
  ADD CONSTRAINT `donationassignment_ibfk_2` FOREIGN KEY (`UserID`) REFERENCES `user` (`ID`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `favorite`
--
ALTER TABLE `favorite`
  ADD CONSTRAINT `favorite_ibfk_1` FOREIGN KEY (`UserID`) REFERENCES `user` (`ID`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `imagegallery`
--
ALTER TABLE `imagegallery`
  ADD CONSTRAINT `imagegallery_ibfk_1` FOREIGN KEY (`UniversityID`) REFERENCES `university` (`ID`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `notificationregistration`
--
ALTER TABLE `notificationregistration`
  ADD CONSTRAINT `notificationregistration_ibfk_1` FOREIGN KEY (`UserID`) REFERENCES `user` (`ID`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `order1`
--
ALTER TABLE `order1`
  ADD CONSTRAINT `order1_ibfk_1` FOREIGN KEY (`StatusID`) REFERENCES `status` (`ID`) ON UPDATE CASCADE,
  ADD CONSTRAINT `order1_ibfk_2` FOREIGN KEY (`UserID`) REFERENCES `user` (`ID`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `orderdetail`
--
ALTER TABLE `orderdetail`
  ADD CONSTRAINT `orderdetail_ibfk_1` FOREIGN KEY (`OrderID`) REFERENCES `order1` (`ID`) ON UPDATE CASCADE,
  ADD CONSTRAINT `orderdetail_ibfk_2` FOREIGN KEY (`ProductDonarionID`) REFERENCES `productdonation` (`ID`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `productdonation`
--
ALTER TABLE `productdonation`
  ADD CONSTRAINT `productdonation_ibfk_1` FOREIGN KEY (`BrandID`) REFERENCES `brand` (`ID`) ON UPDATE CASCADE,
  ADD CONSTRAINT `productdonation_ibfk_2` FOREIGN KEY (`CondirionID`) REFERENCES `condition1` (`ID`) ON UPDATE CASCADE,
  ADD CONSTRAINT `productdonation_ibfk_3` FOREIGN KEY (`UserID`) REFERENCES `user` (`ID`) ON UPDATE CASCADE,
  ADD CONSTRAINT `productdonation_ibfk_4` FOREIGN KEY (`ProductCategoryID`) REFERENCES `productcategory` (`ID`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `studyplan`
--
ALTER TABLE `studyplan`
  ADD CONSTRAINT `studyplan_ibfk_1` FOREIGN KEY (`CareerID`) REFERENCES `career` (`ID`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `tuition`
--
ALTER TABLE `tuition`
  ADD CONSTRAINT `tuition_ibfk_1` FOREIGN KEY (`CarrerID`) REFERENCES `career` (`ID`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `university`
--
ALTER TABLE `university`
  ADD CONSTRAINT `university_ibfk_1` FOREIGN KEY (`ReviewID`) REFERENCES `review` (`ID`) ON UPDATE CASCADE,
  ADD CONSTRAINT `university_ibfk_2` FOREIGN KEY (`TypeID`) REFERENCES `universitytype` (`ID`) ON UPDATE CASCADE,
  ADD CONSTRAINT `university_ibfk_3` FOREIGN KEY (`ModalityID`) REFERENCES `coursemodality` (`ID`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `universitycategoryassignment`
--
ALTER TABLE `universitycategoryassignment`
  ADD CONSTRAINT `universitycategoryassignment_ibfk_1` FOREIGN KEY (`UniversityID`) REFERENCES `university` (`ID`) ON UPDATE CASCADE,
  ADD CONSTRAINT `universitycategoryassignment_ibfk_2` FOREIGN KEY (`UniCategoryID`) REFERENCES `universitycategory` (`ID`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`CountryID`) REFERENCES `country` (`ID`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `usercourse`
--
ALTER TABLE `usercourse`
  ADD CONSTRAINT `usercourse_ibfk_1` FOREIGN KEY (`UserID`) REFERENCES `user` (`ID`) ON UPDATE CASCADE,
  ADD CONSTRAINT `usercourse_ibfk_2` FOREIGN KEY (`CourseID`) REFERENCES `course` (`ID`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `userdesiredcareer`
--
ALTER TABLE `userdesiredcareer`
  ADD CONSTRAINT `userdesiredcareer_ibfk_1` FOREIGN KEY (`UserID`) REFERENCES `user` (`ID`) ON UPDATE CASCADE,
  ADD CONSTRAINT `userdesiredcareer_ibfk_2` FOREIGN KEY (`DesiredCareerID`) REFERENCES `desiredcareer` (`ID`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `userinterest`
--
ALTER TABLE `userinterest`
  ADD CONSTRAINT `userinterest_ibfk_1` FOREIGN KEY (`UserID`) REFERENCES `user` (`ID`) ON UPDATE CASCADE,
  ADD CONSTRAINT `userinterest_ibfk_2` FOREIGN KEY (`InterestID`) REFERENCES `interests` (`ID`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `vocationaltestresult`
--
ALTER TABLE `vocationaltestresult`
  ADD CONSTRAINT `vocationaltestresult_ibfk_1` FOREIGN KEY (`UserID`) REFERENCES `user` (`ID`) ON UPDATE CASCADE,
  ADD CONSTRAINT `vocationaltestresult_ibfk_2` FOREIGN KEY (`UniversityID`) REFERENCES `university` (`ID`) ON UPDATE CASCADE,
  ADD CONSTRAINT `vocationaltestresult_ibfk_3` FOREIGN KEY (`CareerID`) REFERENCES `career` (`ID`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
