-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 07, 2023 at 06:30 AM
-- Server version: 5.7.41-log
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `naritaeasyglue_uat`
--

-- --------------------------------------------------------

--
-- Table structure for table `oc_address`
--

CREATE TABLE `oc_address` (
  `address_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `firstname` varchar(32) NOT NULL,
  `lastname` varchar(32) NOT NULL,
  `company` varchar(40) NOT NULL,
  `address_1` varchar(128) NOT NULL,
  `address_2` varchar(128) NOT NULL,
  `city` varchar(128) NOT NULL,
  `postcode` varchar(10) NOT NULL,
  `country_id` int(11) NOT NULL DEFAULT '0',
  `zone_id` int(11) NOT NULL DEFAULT '0',
  `custom_field` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `oc_address`
--

INSERT INTO `oc_address` (`address_id`, `customer_id`, `firstname`, `lastname`, `company`, `address_1`, `address_2`, `city`, `postcode`, `country_id`, `zone_id`, `custom_field`) VALUES
(1, 1, 'v x', 'bgdfgh', 'ghfh', 'ghfdh', 'gfh', 'fgdh', '47654654', 255, 0, ''),
(2, 2, 'admin', 'admin', '', 'fewfrwef', 'fdsfdsfdsf', 'dfsdfdsfds', '132045', 208, 3168, ''),
(3, 3, 'vcxb', 'vcnbvnb', 'nbvmnb', 'mnbmnbm', 'nbm,n,mn', ',nbmnbm', '36985', 216, 3397, ''),
(4, 4, 'dhgh', 'fghfgh', 'tretrt', 'tretret', 'tretret', 'retretr', '145789', 217, 3406, ''),
(5, 5, 'ewr', 'fs', 'dsf', 'fdsf', 'fdsf', 'fdsfg', '36985', 219, 3468, ''),
(6, 5, 'dasfdsg', 'fdhfgh', 'gfhjgfjhg', 'jhgj', 'ghjhgj', 'hjghjhg', '36985', 201, 0, ''),
(7, 7, 'sgesrg', 'gsdgd', 'sdgsg', 'dgsgg', '', 'sgggdsgsdg', '154627', 218, 3415, ''),
(8, 8, 'fdfdsg', 'fdsg', 'fdsfgfdg', 'fdgdfg', 'dgdfgfd', 'fdfg', '9566', 215, 3327, ''),
(9, 6, 'chandni', 'dobariya', 'ishi technolab', 'utran', '', 'surat', '395006', 99, 1485, ''),
(10, 9, 'kajal', 'admin', 'varachha', 'varachha', '', 'surat', '39656', 219, 3441, ''),
(11, 10, 'kajal', 'admin', 'ishi themes', 'varachha', '', 'surat', '39656', 219, 3441, ''),
(12, 12, 'demo', 'demo', '', 'xyz', '', 'xyz', '285456', 220, 3491, ''),
(13, 13, 'dfsdf', 'sdfsd', '', 'sdfsafsdfsd', 'sdf', 'sdfsd', '963258', 218, 3421, ''),
(14, 14, 'fdsf', 'sdfds', '', 'dfsdfgsdf', '', 'surat', '', 221, 3511, ''),
(15, 15, 'dfgdfg', 'dfgdfg', 'dwsd', 'dsdsd', '', 'sdfdsf', '963245', 218, 3421, ''),
(16, 16, 'fsdfd', 'sdfdsf', 'sdfsdffd', 'sdfsdf', '', 'sdfsdf', '', 220, 3492, ''),
(17, 17, 'ad', 'sd', 'sdf', 'sdf', 'sdf', 'sdf', '258456', 220, 3495, ''),
(19, 19, 'Sagar', 'Pancholi', 'sagar.in', 'Bardoli Patel Street, opp-Shiv Temple', '', 'Surat', '395001', 99, 1485, ''),
(22, 19, 'sagar', 'Pancholi', 'sagar.in', 'Bajipura Patel Street, opp-Shiv Temple', '', 'Surat', '394690', 219, 3469, ''),
(23, 20, 'sdfsdf', 'sdfsdf', '', 'gjgj', '', 'hfghfghfg', '852456', 209, 3206, ''),
(24, 22, 'abc', 'xyz', 'abds', 'abds', 'abds', 'surat', '021365', 220, 3493, ''),
(25, 21, 'abc', 'xyz', 'abds', 'abds', 'abds', 'surat', '021365', 220, 3486, '');

-- --------------------------------------------------------

--
-- Table structure for table `oc_api`
--

CREATE TABLE `oc_api` (
  `api_id` int(11) NOT NULL,
  `username` varchar(64) NOT NULL,
  `key` text NOT NULL,
  `status` tinyint(1) NOT NULL,
  `date_added` datetime NOT NULL,
  `date_modified` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `oc_api`
--

INSERT INTO `oc_api` (`api_id`, `username`, `key`, `status`, `date_added`, `date_modified`) VALUES
(1, 'Default', '8VFZQhMZvIbMzP7uesNtMr105xnyFdhBQzbU0EHkyWruuEjSjTwT9Yc0YF6dnB4k71HaOAUDVdUVmdXHSFd7rtPggM2MT1QrAi9LPeydl1an7RTDkybuXfjGMMU6q39oyMX6T3GxGizzXWLHAjh8e5KWSOHNN8j9aj2Wu5bFip8Xi1gUqD4P0PiEcnG417WfCCnpFqvW39NXHC5T4RHFo3vYO82ku1FhLv1sqm3JHJzErHKoWn0siPlSklwlfiM7', 1, '2019-05-16 17:29:52', '2019-05-16 17:29:52'),
(2, 'Default', 'PuHq05ATY2f4sqsOq1v2p5ehLgR7uY9NtiLPggatHPnYzirHhp0dQbxaXZbYSdItnorizZ6n9dVvu4lx86sSDvLjCqfPMO7auCnsR9iHhcfBANBrHWPyTXtawMfsDJHXyH1Sb16aox6o1t94lLaTNc7FjfvftmVUug7i6jfWq1aBmTmckcofOCnTLXqIa2e34j8Kmhurm9BHVXrrv3e7xWSqmVSNCMAuZZDsyOL6pBcmcl9zm6NJDqLs1ZcXePtU', 1, '2019-05-24 11:24:26', '2019-05-24 11:24:26'),
(3, 'Default', 'eec05zAm5rpPXv3VK8AG2P08pSi5g0zU5jsYSxoYHsVFIQzqfGF2mMfx27Hqti3MPEgwR5VtLTIeOlkUlG7h416wxu8XztvLypfTcSqAukAYP6WRv5iF6QbREGXdLFVaYAQSgGdB95QngrQ6flvNIYzhz3jJ3CYgioyup4YyuITbXk3Rd7izOQgLyZqtSdCjO1QvLLKillvwMoEvM18k74jb7znFGJTZb1OqldPSj5SkDMbkA2BkeddT60Mt4s2U', 1, '2019-07-16 07:38:51', '2019-07-16 07:38:51'),
(4, 'Default', 'U9MFbWfWVG6YOClunBLd7AHtWryYnS9ENQCN0JUnUyDvx6p1GQMZtqOtljQx8eAYkBIhOeOxfiyPsAqy5Aw3KA5yqJsFgXuHKfiEXhab2q15I59iSsNaXANSn8QvdCgE9E9ohOP6bMMtwSqXrzix6FRkQfSBxOy7Af5bl4SFe6vepAjXhyOchizUK7ePaawFhxbIRNbI6QhVqsNbczACHfnZLiEFLzX5JHIqLhJK3JcRXWYyrw51y1yc6PVLfJc6', 1, '2019-08-09 11:05:00', '2019-08-09 11:05:00'),
(5, 'Default', 'IThUETQ2eQva7n6zB3TXnuebnZcqvgSsMyYJpyXknbnTvbAr7lXblRrGn1tacFKSmRo3m5iD6768jRpWsvEWIsJ5lJzPgoUIqBjR6LFMvr3Yvd1zypKjOzDrkQQP7H8nQK623T0dgvzdiBM7HsnyhLb7O1aptEBfqCVjb5DMvzd2rxkrOQI7XiEOwjWOy8nUcq8kfBlkkNLLY8P8AVInkMZWwQL4Id0PupyxBt2wdmPrfEMGluRwxkWbCsVBeTs9', 1, '2019-09-02 07:05:41', '2019-09-02 07:05:41'),
(6, 'Default', 'c5hMbyIrvSsRk4AHe9qVawDiRCDGaKiYassudMe64F1yayGN8p7cnAt4QGmCtYqpzPFvJFe0mbo18bd0koJGwymV22PviPsE0rwU12CfNY97FcRTO1TsXzEspK78v9Y6YVEPcemK1wmMjIkbswuxtWc1sTSxlFmbaJsqBQkYc3215NvmfQau6tlaGVECjP8PkWlH5H6dDpl7Jx2FMSPzfZzYPEfK18CgLPDNPOgBFiceue9GEpc0nqXsyBa8Ucml', 1, '2019-09-25 08:38:13', '2019-09-25 08:38:13'),
(7, 'Default', 'fqnyv0YLzhNX06Batk9heImAebAZjxgoeCMcV81f1mCUDHZQAefUaTboCqu7lu9kKBfl3xx2kwusMUHf5g7gQZjvPJ1ZvE7F1DajjDvdIcgqudftwvbVTaYQHJinJs1XwMeehmpeHBzdDUV5Qv7d5VRF2tS3qWK0hJ0IBCfRLheoJshPGg5eiZ91I6MuSdyvjrgrtrHqWbq73A8TjaAMueybsBdxom3iUB6X3yHsbEFkI4PV2EjIIkgdInnLJQaZ', 1, '2019-10-03 07:26:49', '2019-10-03 07:26:49'),
(8, 'Default', '1Y7dnZiNGPf39zItOjYlu6meXKR6I2W2NLOa3VQW8UIkDmbfYjZUnXlvNe8dJEtdfxXKCBy5hV54l9mVUQoQx3oz1s2atSHXh90hClPxdyrDFrn8z67VsMAhQLM5aZMYoM4skK9OIMadSVmeDQZYNAoqxJiZo2nCw8D0sG8FG4McTEs7EmhjrGSFHsesI0PtIFZYjarjlUawQ2EhWPSssC2P2QInvgTdMQrhWT3pLXVeK2n1AJYiatndkFfmeWYY', 1, '2019-10-24 08:51:29', '2019-10-24 08:51:29'),
(9, 'Default', 'lhaiWSqKJbWMvVB8xMqs5PzkrUWr6Ng3Cizxh4sVQMEfTKEapYw5BHEu5OPddBi6QhDx0UQXcf3zjKHwIklapZDxBBN7LJ7XJrxXONPGXElLEdg8OzcZjtxgUoQyW6Tw90UEOZCo5yBVaXVR2a20Oz1mZBqx0j28AqDcSK89DqljWvbbmJucnLc7SKtrAVHhuH3AmnvxjTrCYtGlaqV0zlRXHFHocGFj1y4ILT4fKN86C6SZlZAdX3HMHGJmRW40', 1, '2019-11-25 12:37:20', '2019-11-25 12:37:20'),
(10, 'Default', 'nn2oTj9lAW3dB8AmTZf5w5U63TWkeqBu3yNOPIUJ9HHbTIs237veLZXJvqISDsz62HNXa6I0MRrvGH5c3fYk0LKlk5l5BVesYtQA00pf802R6sJt2DdKemSwzZ6vlgMiBEeHS8Zu6ybloMFq1fC1I5wvz5RmtF5Z2Q2ajgnBKt8Rj0IB6KyVDkhh2AjXXOJYhbDCWLjojjipC95gCfVGESg6MckvWxFVj4fQj3g43rXs9EhzswvA5v3txLfIPpBq', 1, '2020-03-09 06:20:18', '2020-03-09 06:20:18'),
(11, 'Default', 'MXVk2DfBRQ8PucUVD644xAx7mPaDvmWLBZ3h9d6tXP8gaxLixivWwTp9xt5XQFwAxVedrCOON5j8cXfdpHHNqhuL0xqkkZbwl3in0CbHgh0EzDsGOXtj3StFOR7kV78SVOnGg6J8BDACWkuTBBLwzAnUDlKpl5hAHJk00wF8BLAK3r7r5fNu0zLYUv7gDhFYDJ5xn7KS1HmrtlIzlh8SlJUHEY8I9WFfak0pF7myD8x03K5F4LLBE5HLg32aIEef', 1, '2020-06-07 04:34:33', '2020-06-07 04:34:33'),
(12, 'Default', 'VsobPuuwaO8DwcKmEm2pAIu5Xeb3BrAib9fSsXYyuao1FE3wK4GCJdIZMn5ZTxswIexWi8yCSU3ic1V1psl6F1ebUqIyNGr8BOUgKgUvMAMgZTxl1UVNlwCVRjUPONkwEUXI1xZXlu776EyiNxTDzO79mQBFw5TxxGJyZjLHTxWyNGU6ZCGCpnOPODUMQQNVt78cFOcTwFfRL9azJfYuft4vd2lUBKCqgncKLF35kQWJ3TAYeGDXkeQWvbsrFyFG', 1, '2020-10-12 07:33:40', '2020-10-12 07:33:40'),
(13, 'Default', 'Grl8cZ0y1CLsCFnWsSIQAivLgWaPbxfcnXG5vSNCafL76jVUMYrrNl9S5PlTSJCCPB2psPAqCYzVLO14CPEs8WGbj2g3ZlnSlKIHsumcV9Sq3Mft5oaol5kaKcr0XFbvqoLmyjGZFdD3ZnmJlqK4qAupavDgjVQIPDs4xMOQjqAAtMes7OqGtcAtxXd8piMnAbNRm3u4Mn6dTC1dcvcHRQt8eV5JYa44tai8xEKtDSHMT8XqHalySLp54Rpr04pD', 1, '2020-12-11 07:27:54', '2020-12-11 07:27:54'),
(14, 'Default', 'vDVnbIXvXfdPIEI2MPXY6QJ7thAiu6mjHZ7NoTTsgwTzSdRlry7pOuLhhta8cfhtTyHIBOFBO8hxxRdY5EhwFoeElySWbpzwbgM7TueilGYnAo1Jd2BPDOFp3uOfQsrKDK6zqVCGQITb0o5PC7EDA3rR8wDV2WeXahwVObla984lZZrFNFWHj1ZnsrYMRH6sPoqNmwPRHCYW8YTIGh3Hy7aDhejybf0WwmhvhtsdPoUdFiDV2fB9kEp8mcc4jHmy', 1, '2021-02-09 08:02:11', '2021-02-09 08:02:11'),
(15, 'Default', 'M9twA3eZRJ4hPlcuT7H7cGK4YlKmiAsZ9STrvL0R6DkpRfNugzqaeHDaIFrxmY2CcVsruWXFSScWECYhuMpKa2YtSbpdkDiJWQp5hI0ZH1GwsQaJWlNwWSuztnnD8jJMBS6VC0NSfVyD47xiC0SvXLyItGUhDlIAKBLDXwRM27NJl1H9RmKbNxABXkM3FaKOaJ37DGOTtWIWu7Qps1lxLdTQPG63Un5h87kmnRG110Zz3vsoJUZhDj83OeotUpKz', 1, '2021-06-26 07:48:45', '2021-06-26 07:48:45'),
(16, 'Default', 'K8ZyRP08PYo9LDdnmOn80lB7ZLuOAKqp6uslHmFo8BvV9WTtcIU081L2moSofy8lcmN7GpM4WRRjUuq8Fmya2Wsg078uZEXUAWKG5evtHNwZhwSnHOxJOC6OQDBakgQAYEh5JqmF42DfoQQ2DwlfA5MAfbBMlqj45ygBrhJFtC5KjBXfJXSw3xORjer66CVEiuGXKmUmkbY4lWDSO0Zjg8w2RVbj50E1dmkLYDNEbh2SGHnnkrCdIto0idzVwrK3', 1, '2021-07-05 04:11:54', '2021-07-05 04:11:54'),
(17, 'Default', 'wxgaT6m7FNarijbaMlvWRk9xSxnECr9TurDJk0QIXAcYTTu4SBHnLsL3k1XNZpMlYUFgJLx7BJbfLPEMK4GOproAlGzp6RfL05YSsc9r6pGEXk4Qu7IA5WJAF0j0HPlLKan8SCYs4smuGbhcqINXpFBHxQatCVVhWdoFDoY9qXIpbPQp86TfyDB93UcA28M2zgzhU9tQMEsWudFC0FwobCW2FWur36WXfKbog2synbHG48vyDJWMBNffWStHsYco', 1, '2021-12-18 08:20:31', '2021-12-18 08:20:31'),
(18, 'Default', 'CXT6R3W12or01xcFoCTCJHshCryEx6zK7kdLHt3JoEmFffcHUNZtoaasxkMtMT1tx6w2AFaGeDFs5dcrmw6ZAsAQdIwLoMGbyt2NfCBECEdMcaxGGravGaVF3CNXb40QQEZNOAX749t5QdnB3CIZbhZQNVB1r1HPZv87tdArw8dmyYcJ2PHGYzrFIzBFpz3HJygnWZF6mrTpy3pxLHGeQtIb0jhcBNFJcJfJi6XTyYdeSxDQ6jz6nC6f2wyWeyq1', 1, '2022-03-22 07:06:36', '2022-03-22 07:06:36'),
(19, 'Default', 'Z9sEhDY2gX6EF3rKTw1UKyrH3lNuPGAScD3hH4LDfSZVN62Dnha9dZIFCSN3FcHwwd1g6rHlhHcwHUfMgds5vCTVzzqgDQBaybHgqiWNGtOZZaSBIuIu88XdhijS6OOqqU9aQ2xPxXdW0eaiRycbztc3z5Wj5kn4Z09dZZmRBNBPQGhSdgGLykpg6UCaG8OXxzzqPTtx08e2VeS01Rm9EFors0z1llwMGhnIM6cgYIKk2Z3nT0TkikYlua0qi9xk', 1, '2022-04-05 10:54:10', '2022-04-05 10:54:10'),
(20, 'Default', 'xOuKN4isKkICoZm6PTJx3cuaaRf9sK7fvj5c3J1lNzZbBR6befggifcPpAnF24N5TpMLFowUPIWDiiDmfVZf2vu3eJl59K1Wk6bKjs0vVNkCDxEiBzRMta6w8sQrwvtY0m0HUcNHshIve6YqqAgAs6ohNJmrowWActQdfRlyGf1uzZWLJQg2JFsOieFw8tYFZbv8oS0oc6cGsZ5Xu5uz11NPHpoINCaG17v1w1mRFPsKnauVmyBlsUOR16yDnpRI', 1, '2022-04-12 03:27:10', '2022-04-12 03:27:10'),
(21, 'Default', 'KcGvsqvCZOzszEbHyhnPRAantOVIvDj0woPistrlk6CApJam7DfGKDJJstSvO9q5VEf88sDW3Kif2lMnFOcDJrPNANungnojcLGXw3EW9c9XObOscakODEgggJ8JTJmGOOLMAmz3T4zjyKks5qDalEndBz8UwcqbxboWdXpNYbm9rGsBiEPwzh5NRc11XGTuzcHsAQ9umjkIBzJ51akOxM4mOrnLNOOrKiAsVQnrFMKMjMUl2SwRPJQav1G6XyrO', 1, '2022-05-21 03:56:31', '2022-05-21 03:56:31'),
(22, 'Default', 'V8PlQSUByDHCoVFdIneFqWAs8HqQcr69sO0jnx2SLbMh22k8r3JsfxZApo6z8PNnJGBpLna2PNqXOEAyVMleBy0225HSeHLPjHANqv379xMu6V4IqGO0u8C1O9BvXGYgImpgCBtNUDTWBxQqKyd3FDHdeRnYtTUF0wsQ2Ebbsz2owdM0LSfUJjpNL2zb4qTU8SZ4zmleDiRbMSKyG4tcXIeGhrDKK1lILRLKAZwna9qnM5sllOOHAArDGA8qSKwL', 1, '2022-05-24 03:34:21', '2022-05-24 03:34:21'),
(23, 'Default', 'OXXSMvgRMLBIh3s6IRT4iWo8Pue9Qaf8LleZaZXDBLYp6i5dLIDCJ5PW3s7pEvPkeAh7hIEpBxDtjsmd4gOntDCM6SsnfzcCeXqKOuAcSWlPM4gnFJtsddGGcMfR7k2bnBGgxOeZO1Hs6ILdVa8MaFI9d2BTpM8HVI5YRgKhlbk6kHqGYqKpHQrjY3e37vN8ogdsly84ZcIXB4JYrNPZWKHq1ftFz63vArQkoTNfmwpHU10DuIEtWat3BmtUDyaZ', 1, '2022-05-28 03:36:23', '2022-05-28 03:36:23'),
(24, 'Default', 'UUWkWO2XcOtPeQcR12QSTnbpqZ3ehBbbFN4mha205gZ2pk5noX8ILXICxuCLYqi5snr11Brge9TgsOjLsCOPHDee4X11fMhzG4HYaP98NqN61fhMP1ycdLQx0RDxO0PP6IKwyhPBRKqhAy7gA5I7VyQM5hj3SPqiMM33oUcvEUidaGvZwRdTseKrgAbbALqPFDwVoKgy1p1Lkqruuu0CRcgcZWGlqKXms0ABlYcjKz43a9xx1ctUT8Zu2aVq07It', 1, '2022-05-30 03:35:57', '2022-05-30 03:35:57'),
(25, 'Default', '2968Doy3qJRLifkt7L5iN6ImH9f4d7k6D5nPOFFIKFfQq8jMYPhBlP7lDlEqHOkmgI8bDLo4uur5djn2qAHreyYDoVVy5fnwISIXSKVWes5LiiNazQUSaIEJm6jos3Z6EWDgDrp6LEcwazyi1WnjVUjSa58YGPexLk0nJlCcLug7H09zjmOejwpFbRAtzQxj01XlJqmdbEWPNSCvEsY3Tqlk2JLsuFfdJYVbNxh0dLxlIK2nHLGsnsx6bWuaFXYI', 1, '2022-06-01 04:46:40', '2022-06-01 04:46:40'),
(26, 'Default', 'w68m9mKCigOL8bwgtAbbjqn6YKhb28odDu47ocYRJBE6EfoBxZ09R7fbyOICJrjnohwOAjZGnrLb5QPkt5He99PqrbGe8EUNxENG9HFFoRM7q09Nm65GpiD1cTC98jC2bjzPhAs3NDO1vh2Y7XrCTwmbxVYZAm7lmjDkpW092DF327A2Hxb4fWKMu0NWKs6lLGpAUjNE0KKdyasWrBk6jUr5hhXHyBdd0QykGb702jFffKrPQsgH2NCeOVt7DqjU', 1, '2022-06-02 03:35:00', '2022-06-02 03:35:00'),
(27, 'Default', 'LbINtzvv5UckzNK3HRpSu9o39JdFfFA2dzzKgxELMZjy436bqnCffTC4vfuC6hqrRZPrJMlFEk9vjozofgoX52bSpsivgcIHiXZl39ILBsccMup3QglWK4tUhXbm7nhFqBCqbABbopyRm1kwofOtJYuYIfihs1pDk6CoglF3MDELPhy3Ne1SXwzZ61oZt5gDFuSs7HTPM4JK6mFQ7lHVMYwtf6u7ifoFOFXe8UTmJQ8FC4xtXj2WVjC6SRkafOns', 1, '2022-06-04 03:42:22', '2022-06-04 03:42:22'),
(28, 'Default', 'EQpDbx42JO3O2UTQOxq7tEwDMjFpzd6F3yaTC9esx6Kom13cmEHTHT5WDMeiLnTXe7x0pWPkg54xyn1NY7RheLdzfxHdrXlSMKQssSN4NUtBr4k51WfRHDM1dFAzjeQWeGvcXTc6bsKyom7dgYHHtRlKVu7MSW5Gc8OmizZNRdbxPNUWoOjjwl5ryOsnhno9ALm3Zmqrooc674rCcV6nEf8vq0IEwnkjtTNUHmvT4bdUXStSXTP3grPLM2OgTXLu', 1, '2022-07-22 08:59:28', '2022-07-22 08:59:28'),
(29, 'Default', 'cjQqfZzJ4lkZc8BhT7XnFcCBDZ0fs1jsMUCtwyMEJBtsK7LCmlUWbszjnb7jub3vaTzAAPNGis5OsAYldmdDEcEUJcW0HF3jyrPdjYioFHLVGWu64WXYcvHshiENzekvqlB2iJZJCgo8ezdfCoRKkg7pZD7WuW3jUfXvAbbNpYrtbxC7ShmcrmV7V4h7LtUwV4LmcINhBCU1ECnuJDUWtGbgdK8tXQDIneOaRIpGhW6nGkHA8Nkob4W4rUHmIXFT', 1, '2022-07-23 02:55:00', '2022-07-23 02:55:00'),
(30, 'Default', 'Tt5nB6KUGpUGofEMJBaPf7dcN7VQmtKm0gWZXz59h7w3oGhSOilbGMD1rCsOAGHzn80hGgbLjwaZUWO91OUDWaAVKDfV5tav0TCg9Xwq2dF5iivDbsR6tPbY0j0BqNSS736Rgj6Q63TJgepFyWQwoQLWGLdqqcosNXwiPq4RtiDTWw9GSYW7dtlbTQUSZDoIUQCLWPkuWVdKRGPgdkbOyafKK62ZADIDB5NkdumOH2nu7QntfAnkQ5eu99n9k5hR', 1, '2022-07-25 03:33:24', '2022-07-25 03:33:24'),
(31, 'Default', 'iNXU1rgpW584E4JIjmo7TuTz8QrY8NxUYPW1NLF7TImfl3xqCZ8V205Pbe769TxnqHK3dvlAQ0m3j4k5nw0i1QDTtuSS6kgqmFBi7wk26BAgy5du7zfLQRJR5RySLM1u2osBEAsrNXPoNXRRawDvbRJ0AqGp5NsWlvTe6DfGKaudkiziigS5jfCMzThEEDwpzr39mZ3JgKgjzJ55wIognuMBgsuLxJFRSjXB4jEWk8F5NviwZL88V0spJlFhCDab', 1, '2022-07-30 03:02:51', '2022-07-30 03:02:51'),
(32, 'Default', '6CBqsjdQ4BWEjgdrX6i7HsL8HFIOohxWPCj3KvTGEF9YxZ6VQiVvixkInY3IwHrkkrg1gdLZLbmwAAhaR4NSjmopxirOmTvZKuR0SLRpouQB3G2afs0kno0PucnJsIo9b6SQibadHyvh7tJecsnT2YvyKySh30biOiXhz2azRzI0wqHt9W49EuFwrrBPnujUY2FZkjfreclVOXqvRfyeX0ze0e0BKSibqSwi1DFiTmozfza26qkrxTRQ6TGxx5jB', 1, '2022-08-01 03:52:12', '2022-08-01 03:52:12'),
(33, 'Default', '3JyF3inBhrdCfjkdRtsKWppndr2CAHz5ry4YG91wI3NBs3C98XJS3pMIGT0vZyrUyCsxOvLotLuR5D1fxAsBLBpByRpCCNjUQBxf1HnHwJthOGrjhomOiCxB9C9k9yrlALHaDXLxL6OzTBmEP7aDBIEcQpoZq54HGpxo39YHaKTBY2x1VIZaJDjhfmKeOCNlld6AqyQ2lIuQRNQ4Zc0B4WdvR0uC4nLehqiYRZLzobbDuGhdTdBIYun6BiBDoWZe', 1, '2022-08-02 05:38:46', '2022-08-02 05:38:46'),
(34, 'Default', 'e5X8u1MZiIgt7kjJAjnsiCoHL0x8YveYVppe71kCChCq8GH4qv5DaLBKfcmmYKZCcYX8WdBfOR2mlHDHaC6VY1TtqZVLck0tkd1I3ITmwZ4YeJ0GIPJwiD4UOLdlj5y0LHcKKVAlzhsXjbg9ouQtDtrtgiyPGdJkC3I83QkHHDrF6Hk0JydERmj8onckBKBrkXbI5cvR9YjMdegNdeDvAr0EaEIriajJfeFa1uS8H30nTo3FzL493yedoxG5vjNg', 1, '2022-08-03 07:07:48', '2022-08-03 07:07:48'),
(35, 'Default', 'PUkWsY459jJgO0qquhYzmHBLabDbh98J8C2yw92aHJZBWq3VZIAjaAUT8ZE7M2VaVA2uUOYtADy4H3BxyOugcp5kkD0nOCJ8fLsL9kkkXx2QylWOxepyn2p7l91hMAoXNcWc3ocrEC7UnJwUlUa0MCQ1Wea9oS3SEUcQQJ1KooQVqJfYP9Ub7tXyvMd9aMY8UNMCN1sZJOqRtJWSTYT76Kb6p7DZArN6WhXIUFdkFgoIaUcp73VeQeUz1SMplyrx', 1, '2022-08-06 02:56:18', '2022-08-06 02:56:18'),
(36, 'Default', 'SPPfcYnuEjIZpJriETTyVO40vHglSt0aH2KQh5Kqa1T3u8rCTibiMLW2OwwhtJwL27nZJks7ZSfgTnG5bcnJ4KzQ9j2HW1UDktT8qiY8pqmaxCofvT39r70syFMcuyiSCZZyknLeyDbqN1rmMPb95HfOETBBmQQH5L8qxEFLiRIoXM1dsSmkXuw39ML3E4ZA4yaa1makIFHYeC3tIwcEp2e1YqFwkGXPdc4zJTI8iNkNN3hQSflMzCkm3X5lHffF', 1, '2022-08-08 03:31:28', '2022-08-08 03:31:28'),
(37, 'Default', 'u2FOhl6FnJiBXB7umXtRxyNnNCIlUNk8qqmCeSHz67gZGEOda3QjDyW3RCrCWe0Hyv8CEUp6faKg4AQhVwpRjdhj2DiKDxyTiNdpma2T92xn4jAr5euKCIkr54AOADgVjwErfEqELDhU6btn4Wc0UIRR8P4SxURaIu5CkwVsSUjH8j5oF2opRrI69eLppPM8dLE8UaS3AkZ9MRSDsDMxoMpOZUGRTeOvKxOWFUQvEWYadBWg7uu1ngzIBPzT403H', 1, '2022-08-08 08:36:27', '2022-08-08 08:36:27'),
(38, 'Default', 'BGqHwQlx2bJa7Vn5x3q1OV7xezoM3BAwH44qAPDPgTVHUpEGOswRDy6aJNzhqOPqeHiyNmEyasHQHlg3AqlSllGdSehpth6X1SysZrcazMiZJ9QpwftxCspEovWEz61EPG9vZARXRZBcWR1uJSQbVolnvEQ7WyHxNBJyWJB96jqLfPge7lD6cCtRsl67JfEQmjfHOEWRqTFvgJI9Wb5bgfc9nnMqVHuawDhiJeTTa3ptKqCQs79GstaiJSddurEQ', 1, '2022-08-12 03:37:31', '2022-08-12 03:37:31'),
(39, 'Default', 'TFyhzEo1TeMizJOzENS7iZsDVd8wOA89bdV5Bohc2FyhfQSLeFWIvwL5TBRWfF0lrhT2ybT4FGqe3C7vy6loOU5bTWwD8XLpAYwVJFDQ2qYmbfOk9vCA6LAXW6w3Lykgetz9rZdnMMmIvRVJsqYTUhBr9AVFDdr239IGwQSB3jTjDGg3ooMCTzv00DzBZrxyiQR6oGBMNYQY4bsDFEQkfwccI5p26fSHbflmktqbyteq56GCupuOhNqPnKzbGoR3', 1, '2022-08-15 03:38:06', '2022-08-15 03:38:06'),
(40, 'Default', 'ED7hsPfOMz8mmcV9Hr7s3IcGk5uI7LRAxxaiyh8vmguRkbh1Kn9k8OqfD8xiq4gVhwlXE1mvUy7sR2m3HyKGpzMeLas1RHEF7A0zooTfBD8F6KvCAJaLMrMkNl7Cqxts9A5nJAWNz4rnUMH1I8lXaY5Qp1MUoTweS6zUBlCP2xp7PkJSwwzKWm5WqHpbYUzt2Aq7Cj0bqKyBBQZqNuRGAUvCQQgEhzYaDViYLAbgAAlQnsZoN4ni1bSXj6QjYPOj', 1, '2022-08-16 06:39:36', '2022-08-16 06:39:36'),
(41, 'Default', 'yJYKB6H6KEfaR84k6r5i3PJO0edA3quNtyAKVMUDqcpovPEXE8ZEdB2pQ6pkivn5ZZoYtA0GigWTFwTTFUO88PW6Gkbqva5HajEZTDfb83KlK8deKv1aP9GF3gt2tgwkwXmkuxzex5M2HnIj216WayzRWySHg5OnxamjYugclASirVQh4PZ3LPCvsT46UP1zIJVaVPvIXj6COFuNMEpR3Ct6WWZ2Q5IC1tO4GzpqZZ4pTxnMn8hcv7lkuNNf3EOv', 1, '2022-08-17 04:03:39', '2022-08-17 04:03:39'),
(42, 'Default', 'WpLn1KUZdhZ6YNYVhUbP3yWlWvLRVAfxyqq2n1LkwN5Br3xiNJsmyPvX46hs3NBiDEqZXohb2Bu7eVTdL0MJoTxCSy1ex9zfHwNjebPTspyx5Qe8mp8plkYOeGG86XbCD0Nj6MjEyNfgm9aCGqAauWAujSTiayOsLt2teVZAnx1uTfqDFxogjXasy65q0MONoqBLMm5VLbH0uNcTYUQyqGjrG7rhyOtP2IjWT3WQ7iOUZGfd9mrJiCvaJeWbWnYX', 1, '2022-08-24 03:50:59', '2022-08-24 03:50:59'),
(43, 'Default', 'tUrNwTC9R79MSXyFYQAoWY2c9e5fovp5QvbM7kuTY07pIdYfWLPtxAFQrLimcy4m3Wqx5KkudDElMIxHtJxmnJkU98MSv5u7rgV9QQwEygRdY0nVHdQxUMypDkONBzlP8o0t9zyZtwlPGNf7tezqKVW2EZkRJ2z9HnAdXS8HMB5wUqEg5QKyDsYsBSHQX7RGXvqsCg1OcHNLkfHE062jzjUpwEf4hgabps0jLh7fpzsjByL8U4YQyv4fPsIdRUPk', 1, '2022-08-25 03:56:45', '2022-08-25 03:56:45'),
(44, 'Default', 'hcFtpSGZyD1CVonWG3lTFOUxw793KPcWYAm0UGKRJbnno5e6JMDJm2Wlv2jGFnDLbxeeqtzhG5myChd72oX0FxoHGJRecqoC5U74wvWoZ904ijIm3FxdKOBvYLhtqDVX8wAytIVF1Gyar1VqtadfXdaD2Fi3hOIlSwOVhnv2R2nk8c9aKgQbHl3jf2LYJ1vZPU2Rc61FKnA5eiMDjtGa9TbbmWJ6qaSaUfewpIGResoON1nmDtDGUZuswRfqGwnW', 1, '2022-11-24 04:46:16', '2022-11-24 04:46:16'),
(45, 'Default', '9pGJWf8WtYFhwAoSpWnYki95pQFFsGJZONCeGN9ug5o8tEkqrdOKfKwPUj8TUGA4FATK9p4AsTtAWLEQMqnO1wyzf5buHKx2s6KkwXloqJNxfxXRxcrnYgbx25ugrDNcrGRscZJXhZQBssa44WDb0VnHfIyIBIWvL8pnkVcFJiIK6DrfEoJr9prc2yUZkAI1zReqQBH0QC8JgrVgwfh4lHSfRUEvsyQj8qAmuxyQIbY0snZHJBQCJIoEzeEYhdFr', 1, '2023-01-12 12:46:42', '2023-01-12 12:46:42');

-- --------------------------------------------------------

--
-- Table structure for table `oc_api_ip`
--

CREATE TABLE `oc_api_ip` (
  `api_ip_id` int(11) NOT NULL,
  `api_id` int(11) NOT NULL,
  `ip` varchar(40) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `oc_api_ip`
--

INSERT INTO `oc_api_ip` (`api_ip_id`, `api_id`, `ip`) VALUES
(1, 7, '192.168.0.105'),
(2, 32, '192.168.0.106'),
(3, 42, '127.0.0.1');

-- --------------------------------------------------------

--
-- Table structure for table `oc_api_session`
--

CREATE TABLE `oc_api_session` (
  `api_session_id` int(11) NOT NULL,
  `api_id` int(11) NOT NULL,
  `session_id` varchar(32) NOT NULL,
  `ip` varchar(40) NOT NULL,
  `date_added` datetime NOT NULL,
  `date_modified` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `oc_api_session`
--

INSERT INTO `oc_api_session` (`api_session_id`, `api_id`, `session_id`, `ip`, `date_added`, `date_modified`) VALUES
(42, 42, '6a3984f72e51787b1424737aae', '127.0.0.1', '2022-08-24 06:56:07', '2022-08-24 06:56:07'),
(41, 42, '0e1158dc62a02c75bbc4bd4a33', '127.0.0.1', '2022-08-24 06:56:01', '2022-08-24 06:56:05'),
(39, 42, '776912fd26769ff111052e7990', '127.0.0.1', '2022-08-24 06:53:42', '2022-08-24 06:55:59'),
(40, 42, '69c603c1962c97c57e5f80f20a', '127.0.0.1', '2022-08-24 06:53:49', '2022-08-24 06:54:16'),
(43, 43, '6c4ff6c2adfe16b3ab09ad6815', '192.168.0.106', '2022-08-25 04:09:41', '2022-08-25 04:09:41');

-- --------------------------------------------------------

--
-- Table structure for table `oc_attribute`
--

CREATE TABLE `oc_attribute` (
  `attribute_id` int(11) NOT NULL,
  `attribute_group_id` int(11) NOT NULL,
  `sort_order` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `oc_attribute`
--

INSERT INTO `oc_attribute` (`attribute_id`, `attribute_group_id`, `sort_order`) VALUES
(13, 7, 0),
(21, 8, 8),
(20, 8, 7),
(19, 8, 6),
(18, 8, 5),
(17, 8, 4),
(16, 8, 3),
(15, 8, 2),
(14, 7, 1);

-- --------------------------------------------------------

--
-- Table structure for table `oc_attribute_description`
--

CREATE TABLE `oc_attribute_description` (
  `attribute_id` int(11) NOT NULL,
  `language_id` int(11) NOT NULL,
  `name` varchar(64) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `oc_attribute_description`
--

INSERT INTO `oc_attribute_description` (`attribute_id`, `language_id`, `name`) VALUES
(14, 1, 'Sold By'),
(21, 1, 'Wash Care'),
(19, 1, 'Sleeve'),
(16, 1, 'Fabric'),
(13, 1, 'Country Of Origin'),
(20, 1, 'Opening'),
(18, 1, 'Type'),
(17, 1, 'Neck Line'),
(15, 1, 'Color');

-- --------------------------------------------------------

--
-- Table structure for table `oc_attribute_group`
--

CREATE TABLE `oc_attribute_group` (
  `attribute_group_id` int(11) NOT NULL,
  `sort_order` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `oc_attribute_group`
--

INSERT INTO `oc_attribute_group` (`attribute_group_id`, `sort_order`) VALUES
(7, 0),
(8, 1);

-- --------------------------------------------------------

--
-- Table structure for table `oc_attribute_group_description`
--

CREATE TABLE `oc_attribute_group_description` (
  `attribute_group_id` int(11) NOT NULL,
  `language_id` int(11) NOT NULL,
  `name` varchar(64) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `oc_attribute_group_description`
--

INSERT INTO `oc_attribute_group_description` (`attribute_group_id`, `language_id`, `name`) VALUES
(8, 1, 'Product Details'),
(7, 1, 'Group 1');

-- --------------------------------------------------------

--
-- Table structure for table `oc_banner`
--

CREATE TABLE `oc_banner` (
  `banner_id` int(11) NOT NULL,
  `name` varchar(64) NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `oc_banner_image`
--

CREATE TABLE `oc_banner_image` (
  `banner_image_id` int(11) NOT NULL,
  `banner_id` int(11) NOT NULL,
  `language_id` int(11) NOT NULL,
  `title` varchar(64) NOT NULL,
  `link` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `sort_order` int(11) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `oc_blogger`
--

CREATE TABLE `oc_blogger` (
  `blogger_id` int(11) NOT NULL,
  `module_id` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  `image` varchar(255) DEFAULT NULL,
  `date_added` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `date_modified` datetime NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `oc_blogger`
--

INSERT INTO `oc_blogger` (`blogger_id`, `module_id`, `status`, `image`, `date_added`, `date_modified`) VALUES
(1, 45, 1, 'catalog/blog/1.jpg', '2022-04-01 15:05:24', '2020-03-14 11:57:57'),
(2, 45, 1, 'catalog/blog/2.jpg', '2022-04-01 15:06:19', '2020-03-14 11:57:43'),
(3, 45, 1, 'catalog/blog/3.jpg', '2022-04-01 15:07:46', '2021-02-09 09:02:23'),
(4, 45, 1, 'catalog/blog/4.jpg', '2022-04-01 15:08:36', '2020-03-14 11:58:09'),
(5, 45, 1, 'catalog/blog/5.jpg', '2022-04-01 15:09:18', '2020-03-14 11:58:24'),
(6, 45, 1, 'catalog/blog/6.jpg', '2022-04-01 15:09:47', '2020-03-14 11:59:44'),
(7, 45, 1, 'catalog/blog/7.jpg', '2022-04-01 15:10:21', '2020-03-14 12:00:03'),
(8, 45, 1, 'catalog/blog/8.jpg', '2022-04-01 15:10:40', '2020-03-14 12:00:27'),
(10, 155, 1, 'catalog/blog/1.png', '2022-08-13 12:26:09', '2022-08-22 08:47:44'),
(11, 155, 1, 'catalog/blog/2.png', '2022-08-15 04:00:58', '2022-08-22 09:44:15'),
(12, 155, 1, 'catalog/blog/3.png', '2022-08-15 04:01:28', '2022-08-22 09:44:25'),
(13, 155, 1, 'catalog/blog/4.png', '2022-08-15 04:02:28', '2022-08-22 09:44:35');

-- --------------------------------------------------------

--
-- Table structure for table `oc_blogger_comment`
--

CREATE TABLE `oc_blogger_comment` (
  `blogger_comment_id` int(11) NOT NULL,
  `blogger_id` int(11) NOT NULL,
  `approved` int(11) NOT NULL DEFAULT '0',
  `author` varchar(64) NOT NULL DEFAULT '',
  `email` varchar(96) NOT NULL,
  `date_added` datetime NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `oc_blogger_comment`
--

INSERT INTO `oc_blogger_comment` (`blogger_comment_id`, `blogger_id`, `approved`, `author`, `email`, `date_added`) VALUES
(21, 6, 1, 'desfd', 'dsfdsf@gvfd.com', '2022-04-06 11:49:40'),
(20, 6, 1, 'desfd', 'dsfdsf@gvfd.com', '2022-04-06 11:48:55'),
(19, 6, 1, 'desfd', 'dsfdsf@gvfd.com', '2022-04-06 11:46:22'),
(7, 9, 1, 'darshana', 'darshana123@gmail.com', '2022-04-06 18:01:55'),
(15, 9, 1, 'chandni dobariya', 'chandnidobariya111@gmail.com', '2022-04-06 10:30:29'),
(18, 7, 1, 'wwww', 'wwwfcv@bgdfhf.com', '2022-04-06 11:26:09'),
(16, 8, 1, 'aaa', 'aaa@dcf.com', '2022-04-06 11:18:11'),
(17, 5, 1, 'aeae', 'aeae@ggh.com', '2022-04-06 11:24:00');

-- --------------------------------------------------------

--
-- Table structure for table `oc_blogger_comment_description`
--

CREATE TABLE `oc_blogger_comment_description` (
  `blogger_comment_id` int(11) NOT NULL DEFAULT '0',
  `language_id` int(11) NOT NULL DEFAULT '0',
  `comment` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `oc_blogger_comment_description`
--

INSERT INTO `oc_blogger_comment_description` (`blogger_comment_id`, `language_id`, `comment`) VALUES
(21, 1, 'dsetgdfh vdsfgbdfhfgj'),
(20, 1, 'dsetgdfh vdsfgbdfhfgj'),
(19, 1, 'dsetgdfh vdsfgbdfhfgj'),
(7, 1, 'sfgdsf \r\ndfgdfg\r\ndfgdfgdfg'),
(15, 1, 'sefrsewrewr\r\newrewsrfeswrfewreswrewr\r\nereswrfeswfrsewr'),
(18, 1, 'fhsftgjkhn fjghkjhklgj'),
(16, 1, 'safdsgfdh fgfdgdfhf'),
(17, 1, 'fdsgfh dsfdfgfghgj dfghf');

-- --------------------------------------------------------

--
-- Table structure for table `oc_blogger_description`
--

CREATE TABLE `oc_blogger_description` (
  `blogger_id` int(11) NOT NULL DEFAULT '0',
  `language_id` int(11) NOT NULL DEFAULT '0',
  `title` varchar(64) NOT NULL DEFAULT '',
  `description` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `oc_blogger_description`
--

INSERT INTO `oc_blogger_description` (`blogger_id`, `language_id`, `title`, `description`) VALUES
(1, 1, 'Proin faucibus massa tristique', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.'),
(2, 2, 'Upon of seasons earth dominion', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.'),
(3, 1, 'Nostro expetenda voluptatum', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.'),
(3, 2, 'Nostro expetenda voluptatum', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.'),
(4, 1, 'Viderer voluptatum te eum', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.'),
(4, 2, 'Viderer voluptatum te eum', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.'),
(5, 1, 'Nec intellegat deseruisse te', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.'),
(5, 2, 'Nec intellegat deseruisse te', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.'),
(6, 1, 'Scelerisque vestibulum urna', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.'),
(7, 2, 'Upon of seasons earth', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.'),
(7, 1, 'Upon of seasons earth', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.'),
(8, 2, 'Lorem ipsum dolor sit amet', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.'),
(8, 1, 'Lorem ipsum dolor sit amet', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour.'),
(1, 2, 'Proin faucibus massa tristique', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.'),
(2, 1, 'Upon of seasons earth dominion', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.'),
(6, 2, 'Scelerisque vestibulum urna', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.'),
(10, 1, 'Blouse selection as per occassion', '&lt;p&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sed molestie ligula. Sed aliquet arcu ut dolor placerat dapibus. Curabitur eleifend luctus rutrum. Integer lobortis diam in gravida malesuada. Aliquam accumsan enim vestibulum, suscipit quam et, laoreet tellus. Suspendisse accumsan quam ac tincidunt tempor. Donec efficitur tempor vulputate. Duis vel molestie lacus. Donec ornare libero ultrices justo dictum porta. Praesent condimentum, velit quis viverra blandit, augue nunc venenatis magna, quis condimentum massa est dictum ipsum. Pellentesque turpis risus, facilisis a ante sed, mollis mattis neque. In metus magna, tempor at ligula vel, consequat tincidunt mi.&lt;/p&gt; \r\n\r\n&lt;p&gt;Nunc vel dui ultrices, sodales sem ac, congue leo. Etiam arcu nunc, malesuada eget suscipit non, bibendum vel elit. Nulla semper orci elit, vel elementum eros tempor id. In hac habitasse platea dictumst. In quis massa ut lorem facilisis egestas. Phasellus iaculis est nec aliquet condimentum. Suspendisse potenti. Proin dictum ut elit vel mattis. Aenean vehicula dictum tellus vel interdum.&lt;/p&gt;\r\n\r\n&lt;div class=&quot;blog-subtitle&quot;&gt;Nam quis nisl eget eros&lt;/div&gt;\r\n\r\n &lt;p&gt;auctor iaculis eget nec lacus. Nunc fringilla ex elit, et tempor leo venenatis ut. Nunc rhoncus suscipit leo quis feugiat. Aenean viverra urna orci, vitae aliquam orci varius id. Sed convallis pulvinar placerat. Nulla commodo leo id velit imperdiet finibus. Ut interdum leo in aliquet pretium. Ut ac quam porttitor, finibus nibh vitae, consequat mauris. Nam suscipit vestibulum egestas. Suspendisse bibendum mauris et nisl hendrerit finibus. Curabitur ac diam et metus fermentum mattis.&lt;/p&gt;\r\n\r\n &lt;p&gt;In vitae enim condimentum, vestibulum est ut, facilisis quam. Donec et dapibus ligula, nec venenatis dui. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nam ut vulputate lorem. Duis finibus erat nibh, ut sollicitudin dui imperdiet id. Nunc rutrum fringilla felis eget congue. Praesent eget egestas ligula, a lobortis sapien. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Fusce ut magna sit amet dui porttitor pellentesque quis a metus. Morbi gravida ex at metus ornare pharetra. Phasellus condimentum magna nec enim luctus pretium. Maecenas accumsan ligula ac dui scelerisque lobortis. Pellentesque ut tincidunt purus. Duis scelerisque varius turpis viverra rhoncus.&lt;/p&gt;\r\n\r\n &lt;div class=&quot;blog-image blog-image1&quot;&gt;\r\n 	&lt;img src=&quot;image/catalog/blogimage-1.png&quot; alt=&quot;blog-banner&quot;&gt;\r\n &lt;/div&gt;\r\n\r\n &lt;div class=&quot;blog-subtitle&quot;&gt;Sed vitae felis elit.&lt;/div&gt;\r\n\r\n  &lt;p&gt;Duis pretium vehicula sollicitudin. Morbi id porta ipsum, nec suscipit leo. Aenean hendrerit pulvinar sem, et maximus ex blandit a. Ut hendrerit, ipsum id eleifend commodo, urna odio suscipit eros, et ornare eros dui a metus. Curabitur pretium eget urna quis lobortis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed auctor vitae ex id placerat. Mauris id massa vestibulum magna rutrum pretium nec eget elit. In eu accumsan est, sodales pharetra nunc. Donec finibus nulla sit amet purus dignissim ultrices. Nulla scelerisque mi at diam iaculis interdum.&lt;/p&gt;\r\n\r\n  &lt;p&gt;Cras vitae eleifend neque. Nullam massa lacus, auctor sed blandit eu, feugiat ut urna. Etiam posuere lectus at tellus posuere, sed rhoncus velit scelerisque. Mauris eros turpis, gravida sit amet ultricies in, eleifend ac enim. Ut vulputate, risus quis ornare feugiat, felis turpis vulputate elit, eu porta nibh urna et felis. Duis massa velit, pulvinar eu orci ut, facilisis malesuada nulla. Quisque laoreet, mauris quis consectetur fermentum, magna eros tristique ligula, quis elementum velit enim nec orci. Duis rutrum scelerisque sapien, vel ornare leo dignissim et. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vestibulum elementum felis eu ligula egestas vulputate. Quisque nec elit ex. Donec id turpis quis elit finibus semper a a urna. Praesent a dictum urna.&lt;/p&gt;\r\n\r\n  &lt;div class=&quot;blog-image&quot;&gt;\r\n  	&lt;div class=&quot;row&quot;&gt;\r\n	  	&lt;div class=&quot;col-lg-6 col-md-6 col-sm-6 col-xs-6 banner-1&quot;&gt;\r\n	 		&lt;img src=&quot;image/catalog/blogimage-2.png&quot; alt=&quot;blog-banner&quot;&gt;\r\n	 	&lt;/div&gt;\r\n	 	&lt;div class=&quot;col-lg-6 col-md-6 col-sm-6 col-xs-6 banner-2&quot;&gt;\r\n	 		&lt;img src=&quot;image/catalog/blogimage-3.png&quot; alt=&quot;blog-banner&quot;&gt;\r\n	 	&lt;/div&gt;\r\n 	&lt;/div&gt;\r\n &lt;/div&gt;\r\n\r\n  &lt;div class=&quot;blog-subtitle&quot;&gt;Pellentesque venenatis&lt;/div&gt;\r\n\r\n  &lt;p&gt;risus efficitur mauris venenatis fringilla. Aliquam erat volutpat. Proin tristique ullamcorper justo, consectetur ornare velit viverra eget. Donec in efficitur diam. In ultricies vel justo id gravida. Suspendisse in ex id nulla hendrerit rhoncus vitae at augue. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean a ligula eu mauris pharetra posuere nec id nisi. Sed eleifend lectus sit amet dolor cursus suscipit. Phasellus massa lorem, scelerisque eget dapibus id, viverra non sapien. Nullam vel metus tempus, porta lorem a, dignissim ante. Donec sed ante dui.&lt;/p&gt;'),
(11, 1, 'Blouse selection as per occassion', '&lt;p&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sed molestie ligula. Sed aliquet arcu ut dolor placerat dapibus. Curabitur eleifend luctus rutrum. Integer lobortis diam in gravida malesuada. Aliquam accumsan enim vestibulum, suscipit quam et, laoreet tellus. Suspendisse accumsan quam ac tincidunt tempor. Donec efficitur tempor vulputate. Duis vel molestie lacus. Donec ornare libero ultrices justo dictum porta. Praesent condimentum, velit quis viverra blandit, augue nunc venenatis magna, quis condimentum massa est dictum ipsum. Pellentesque turpis risus, facilisis a ante sed, mollis mattis neque. In metus magna, tempor at ligula vel, consequat tincidunt mi.&lt;/p&gt; \r\n\r\n&lt;p&gt;Nunc vel dui ultrices, sodales sem ac, congue leo. Etiam arcu nunc, malesuada eget suscipit non, bibendum vel elit. Nulla semper orci elit, vel elementum eros tempor id. In hac habitasse platea dictumst. In quis massa ut lorem facilisis egestas. Phasellus iaculis est nec aliquet condimentum. Suspendisse potenti. Proin dictum ut elit vel mattis. Aenean vehicula dictum tellus vel interdum.&lt;/p&gt;\r\n\r\n&lt;div class=&quot;blog-subtitle&quot;&gt;Nam quis nisl eget eros&lt;/div&gt;\r\n\r\n &lt;p&gt;auctor iaculis eget nec lacus. Nunc fringilla ex elit, et tempor leo venenatis ut. Nunc rhoncus suscipit leo quis feugiat. Aenean viverra urna orci, vitae aliquam orci varius id. Sed convallis pulvinar placerat. Nulla commodo leo id velit imperdiet finibus. Ut interdum leo in aliquet pretium. Ut ac quam porttitor, finibus nibh vitae, consequat mauris. Nam suscipit vestibulum egestas. Suspendisse bibendum mauris et nisl hendrerit finibus. Curabitur ac diam et metus fermentum mattis.&lt;/p&gt;\r\n\r\n &lt;p&gt;In vitae enim condimentum, vestibulum est ut, facilisis quam. Donec et dapibus ligula, nec venenatis dui. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nam ut vulputate lorem. Duis finibus erat nibh, ut sollicitudin dui imperdiet id. Nunc rutrum fringilla felis eget congue. Praesent eget egestas ligula, a lobortis sapien. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Fusce ut magna sit amet dui porttitor pellentesque quis a metus. Morbi gravida ex at metus ornare pharetra. Phasellus condimentum magna nec enim luctus pretium. Maecenas accumsan ligula ac dui scelerisque lobortis. Pellentesque ut tincidunt purus. Duis scelerisque varius turpis viverra rhoncus.&lt;/p&gt;\r\n\r\n &lt;div class=&quot;blog-image blog-image1&quot;&gt;\r\n 	&lt;img src=&quot;image/catalog/blogimage-1.png&quot; alt=&quot;blog-banner&quot;&gt;\r\n &lt;/div&gt;\r\n\r\n &lt;div class=&quot;blog-subtitle&quot;&gt;Sed vitae felis elit.&lt;/div&gt;\r\n\r\n  &lt;p&gt;Duis pretium vehicula sollicitudin. Morbi id porta ipsum, nec suscipit leo. Aenean hendrerit pulvinar sem, et maximus ex blandit a. Ut hendrerit, ipsum id eleifend commodo, urna odio suscipit eros, et ornare eros dui a metus. Curabitur pretium eget urna quis lobortis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed auctor vitae ex id placerat. Mauris id massa vestibulum magna rutrum pretium nec eget elit. In eu accumsan est, sodales pharetra nunc. Donec finibus nulla sit amet purus dignissim ultrices. Nulla scelerisque mi at diam iaculis interdum.&lt;/p&gt;\r\n\r\n  &lt;p&gt;Cras vitae eleifend neque. Nullam massa lacus, auctor sed blandit eu, feugiat ut urna. Etiam posuere lectus at tellus posuere, sed rhoncus velit scelerisque. Mauris eros turpis, gravida sit amet ultricies in, eleifend ac enim. Ut vulputate, risus quis ornare feugiat, felis turpis vulputate elit, eu porta nibh urna et felis. Duis massa velit, pulvinar eu orci ut, facilisis malesuada nulla. Quisque laoreet, mauris quis consectetur fermentum, magna eros tristique ligula, quis elementum velit enim nec orci. Duis rutrum scelerisque sapien, vel ornare leo dignissim et. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vestibulum elementum felis eu ligula egestas vulputate. Quisque nec elit ex. Donec id turpis quis elit finibus semper a a urna. Praesent a dictum urna.&lt;/p&gt;\r\n\r\n  &lt;div class=&quot;blog-image&quot;&gt;\r\n  	&lt;div class=&quot;row&quot;&gt;\r\n	  	&lt;div class=&quot;col-lg-6 col-md-6 col-sm-6 col-xs-6 banner-1&quot;&gt;\r\n	 		&lt;img src=&quot;image/catalog/blogimage-2.png&quot; alt=&quot;blog-banner&quot;&gt;\r\n	 	&lt;/div&gt;\r\n	 	&lt;div class=&quot;col-lg-6 col-md-6 col-sm-6 col-xs-6 banner-2&quot;&gt;\r\n	 		&lt;img src=&quot;image/catalog/blogimage-3.png&quot; alt=&quot;blog-banner&quot;&gt;\r\n	 	&lt;/div&gt;\r\n 	&lt;/div&gt;\r\n &lt;/div&gt;\r\n\r\n  &lt;div class=&quot;blog-subtitle&quot;&gt;Pellentesque venenatis&lt;/div&gt;\r\n\r\n  &lt;p&gt;risus efficitur mauris venenatis fringilla. Aliquam erat volutpat. Proin tristique ullamcorper justo, consectetur ornare velit viverra eget. Donec in efficitur diam. In ultricies vel justo id gravida. Suspendisse in ex id nulla hendrerit rhoncus vitae at augue. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean a ligula eu mauris pharetra posuere nec id nisi. Sed eleifend lectus sit amet dolor cursus suscipit. Phasellus massa lorem, scelerisque eget dapibus id, viverra non sapien. Nullam vel metus tempus, porta lorem a, dignissim ante. Donec sed ante dui.&lt;/p&gt;'),
(12, 1, 'Blouse selection as per occassion', '&lt;p&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sed molestie ligula. Sed aliquet arcu ut dolor placerat dapibus. Curabitur eleifend luctus rutrum. Integer lobortis diam in gravida malesuada. Aliquam accumsan enim vestibulum, suscipit quam et, laoreet tellus. Suspendisse accumsan quam ac tincidunt tempor. Donec efficitur tempor vulputate. Duis vel molestie lacus. Donec ornare libero ultrices justo dictum porta. Praesent condimentum, velit quis viverra blandit, augue nunc venenatis magna, quis condimentum massa est dictum ipsum. Pellentesque turpis risus, facilisis a ante sed, mollis mattis neque. In metus magna, tempor at ligula vel, consequat tincidunt mi.&lt;/p&gt; \r\n\r\n&lt;p&gt;Nunc vel dui ultrices, sodales sem ac, congue leo. Etiam arcu nunc, malesuada eget suscipit non, bibendum vel elit. Nulla semper orci elit, vel elementum eros tempor id. In hac habitasse platea dictumst. In quis massa ut lorem facilisis egestas. Phasellus iaculis est nec aliquet condimentum. Suspendisse potenti. Proin dictum ut elit vel mattis. Aenean vehicula dictum tellus vel interdum.&lt;/p&gt;\r\n\r\n&lt;div class=&quot;blog-subtitle&quot;&gt;Nam quis nisl eget eros&lt;/div&gt;\r\n\r\n &lt;p&gt;auctor iaculis eget nec lacus. Nunc fringilla ex elit, et tempor leo venenatis ut. Nunc rhoncus suscipit leo quis feugiat. Aenean viverra urna orci, vitae aliquam orci varius id. Sed convallis pulvinar placerat. Nulla commodo leo id velit imperdiet finibus. Ut interdum leo in aliquet pretium. Ut ac quam porttitor, finibus nibh vitae, consequat mauris. Nam suscipit vestibulum egestas. Suspendisse bibendum mauris et nisl hendrerit finibus. Curabitur ac diam et metus fermentum mattis.&lt;/p&gt;\r\n\r\n &lt;p&gt;In vitae enim condimentum, vestibulum est ut, facilisis quam. Donec et dapibus ligula, nec venenatis dui. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nam ut vulputate lorem. Duis finibus erat nibh, ut sollicitudin dui imperdiet id. Nunc rutrum fringilla felis eget congue. Praesent eget egestas ligula, a lobortis sapien. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Fusce ut magna sit amet dui porttitor pellentesque quis a metus. Morbi gravida ex at metus ornare pharetra. Phasellus condimentum magna nec enim luctus pretium. Maecenas accumsan ligula ac dui scelerisque lobortis. Pellentesque ut tincidunt purus. Duis scelerisque varius turpis viverra rhoncus.&lt;/p&gt;\r\n\r\n &lt;div class=&quot;blog-image blog-image1&quot;&gt;\r\n 	&lt;img src=&quot;image/catalog/blogimage-1.png&quot; alt=&quot;blog-banner&quot;&gt;\r\n &lt;/div&gt;\r\n\r\n &lt;div class=&quot;blog-subtitle&quot;&gt;Sed vitae felis elit.&lt;/div&gt;\r\n\r\n  &lt;p&gt;Duis pretium vehicula sollicitudin. Morbi id porta ipsum, nec suscipit leo. Aenean hendrerit pulvinar sem, et maximus ex blandit a. Ut hendrerit, ipsum id eleifend commodo, urna odio suscipit eros, et ornare eros dui a metus. Curabitur pretium eget urna quis lobortis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed auctor vitae ex id placerat. Mauris id massa vestibulum magna rutrum pretium nec eget elit. In eu accumsan est, sodales pharetra nunc. Donec finibus nulla sit amet purus dignissim ultrices. Nulla scelerisque mi at diam iaculis interdum.&lt;/p&gt;\r\n\r\n  &lt;p&gt;Cras vitae eleifend neque. Nullam massa lacus, auctor sed blandit eu, feugiat ut urna. Etiam posuere lectus at tellus posuere, sed rhoncus velit scelerisque. Mauris eros turpis, gravida sit amet ultricies in, eleifend ac enim. Ut vulputate, risus quis ornare feugiat, felis turpis vulputate elit, eu porta nibh urna et felis. Duis massa velit, pulvinar eu orci ut, facilisis malesuada nulla. Quisque laoreet, mauris quis consectetur fermentum, magna eros tristique ligula, quis elementum velit enim nec orci. Duis rutrum scelerisque sapien, vel ornare leo dignissim et. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vestibulum elementum felis eu ligula egestas vulputate. Quisque nec elit ex. Donec id turpis quis elit finibus semper a a urna. Praesent a dictum urna.&lt;/p&gt;\r\n\r\n  &lt;div class=&quot;blog-image&quot;&gt;\r\n  	&lt;div class=&quot;row&quot;&gt;\r\n	  	&lt;div class=&quot;col-lg-6 col-md-6 col-sm-6 col-xs-6 banner-1&quot;&gt;\r\n	 		&lt;img src=&quot;image/catalog/blogimage-2.png&quot; alt=&quot;blog-banner&quot;&gt;\r\n	 	&lt;/div&gt;\r\n	 	&lt;div class=&quot;col-lg-6 col-md-6 col-sm-6 col-xs-6 banner-2&quot;&gt;\r\n	 		&lt;img src=&quot;image/catalog/blogimage-3.png&quot; alt=&quot;blog-banner&quot;&gt;\r\n	 	&lt;/div&gt;\r\n 	&lt;/div&gt;\r\n &lt;/div&gt;\r\n\r\n  &lt;div class=&quot;blog-subtitle&quot;&gt;Pellentesque venenatis&lt;/div&gt;\r\n\r\n  &lt;p&gt;risus efficitur mauris venenatis fringilla. Aliquam erat volutpat. Proin tristique ullamcorper justo, consectetur ornare velit viverra eget. Donec in efficitur diam. In ultricies vel justo id gravida. Suspendisse in ex id nulla hendrerit rhoncus vitae at augue. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean a ligula eu mauris pharetra posuere nec id nisi. Sed eleifend lectus sit amet dolor cursus suscipit. Phasellus massa lorem, scelerisque eget dapibus id, viverra non sapien. Nullam vel metus tempus, porta lorem a, dignissim ante. Donec sed ante dui.&lt;/p&gt;'),
(13, 1, 'Blouse selection as per occassion', '&lt;p&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sed molestie ligula. Sed aliquet arcu ut dolor placerat dapibus. Curabitur eleifend luctus rutrum. Integer lobortis diam in gravida malesuada. Aliquam accumsan enim vestibulum, suscipit quam et, laoreet tellus. Suspendisse accumsan quam ac tincidunt tempor. Donec efficitur tempor vulputate. Duis vel molestie lacus. Donec ornare libero ultrices justo dictum porta. Praesent condimentum, velit quis viverra blandit, augue nunc venenatis magna, quis condimentum massa est dictum ipsum. Pellentesque turpis risus, facilisis a ante sed, mollis mattis neque. In metus magna, tempor at ligula vel, consequat tincidunt mi.&lt;/p&gt; \r\n\r\n&lt;p&gt;Nunc vel dui ultrices, sodales sem ac, congue leo. Etiam arcu nunc, malesuada eget suscipit non, bibendum vel elit. Nulla semper orci elit, vel elementum eros tempor id. In hac habitasse platea dictumst. In quis massa ut lorem facilisis egestas. Phasellus iaculis est nec aliquet condimentum. Suspendisse potenti. Proin dictum ut elit vel mattis. Aenean vehicula dictum tellus vel interdum.&lt;/p&gt;\r\n\r\n&lt;div class=&quot;blog-subtitle&quot;&gt;Nam quis nisl eget eros&lt;/div&gt;\r\n\r\n &lt;p&gt;auctor iaculis eget nec lacus. Nunc fringilla ex elit, et tempor leo venenatis ut. Nunc rhoncus suscipit leo quis feugiat. Aenean viverra urna orci, vitae aliquam orci varius id. Sed convallis pulvinar placerat. Nulla commodo leo id velit imperdiet finibus. Ut interdum leo in aliquet pretium. Ut ac quam porttitor, finibus nibh vitae, consequat mauris. Nam suscipit vestibulum egestas. Suspendisse bibendum mauris et nisl hendrerit finibus. Curabitur ac diam et metus fermentum mattis.&lt;/p&gt;\r\n\r\n &lt;p&gt;In vitae enim condimentum, vestibulum est ut, facilisis quam. Donec et dapibus ligula, nec venenatis dui. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nam ut vulputate lorem. Duis finibus erat nibh, ut sollicitudin dui imperdiet id. Nunc rutrum fringilla felis eget congue. Praesent eget egestas ligula, a lobortis sapien. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Fusce ut magna sit amet dui porttitor pellentesque quis a metus. Morbi gravida ex at metus ornare pharetra. Phasellus condimentum magna nec enim luctus pretium. Maecenas accumsan ligula ac dui scelerisque lobortis. Pellentesque ut tincidunt purus. Duis scelerisque varius turpis viverra rhoncus.&lt;/p&gt;\r\n\r\n &lt;div class=&quot;blog-image blog-image1&quot;&gt;\r\n 	&lt;img src=&quot;image/catalog/blogimage-1.png&quot; alt=&quot;blog-banner&quot;&gt;\r\n &lt;/div&gt;\r\n\r\n &lt;div class=&quot;blog-subtitle&quot;&gt;Sed vitae felis elit.&lt;/div&gt;\r\n\r\n  &lt;p&gt;Duis pretium vehicula sollicitudin. Morbi id porta ipsum, nec suscipit leo. Aenean hendrerit pulvinar sem, et maximus ex blandit a. Ut hendrerit, ipsum id eleifend commodo, urna odio suscipit eros, et ornare eros dui a metus. Curabitur pretium eget urna quis lobortis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed auctor vitae ex id placerat. Mauris id massa vestibulum magna rutrum pretium nec eget elit. In eu accumsan est, sodales pharetra nunc. Donec finibus nulla sit amet purus dignissim ultrices. Nulla scelerisque mi at diam iaculis interdum.&lt;/p&gt;\r\n\r\n  &lt;p&gt;Cras vitae eleifend neque. Nullam massa lacus, auctor sed blandit eu, feugiat ut urna. Etiam posuere lectus at tellus posuere, sed rhoncus velit scelerisque. Mauris eros turpis, gravida sit amet ultricies in, eleifend ac enim. Ut vulputate, risus quis ornare feugiat, felis turpis vulputate elit, eu porta nibh urna et felis. Duis massa velit, pulvinar eu orci ut, facilisis malesuada nulla. Quisque laoreet, mauris quis consectetur fermentum, magna eros tristique ligula, quis elementum velit enim nec orci. Duis rutrum scelerisque sapien, vel ornare leo dignissim et. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vestibulum elementum felis eu ligula egestas vulputate. Quisque nec elit ex. Donec id turpis quis elit finibus semper a a urna. Praesent a dictum urna.&lt;/p&gt;\r\n\r\n  &lt;div class=&quot;blog-image&quot;&gt;\r\n  	&lt;div class=&quot;row&quot;&gt;\r\n	  	&lt;div class=&quot;col-lg-6 col-md-6 col-sm-6 col-xs-6 banner-1&quot;&gt;\r\n	 		&lt;img src=&quot;image/catalog/blogimage-2.png&quot; alt=&quot;blog-banner&quot;&gt;\r\n	 	&lt;/div&gt;\r\n	 	&lt;div class=&quot;col-lg-6 col-md-6 col-sm-6 col-xs-6 banner-2&quot;&gt;\r\n	 		&lt;img src=&quot;image/catalog/blogimage-3.png&quot; alt=&quot;blog-banner&quot;&gt;\r\n	 	&lt;/div&gt;\r\n 	&lt;/div&gt;\r\n &lt;/div&gt;\r\n\r\n  &lt;div class=&quot;blog-subtitle&quot;&gt;Pellentesque venenatis&lt;/div&gt;\r\n\r\n  &lt;p&gt;risus efficitur mauris venenatis fringilla. Aliquam erat volutpat. Proin tristique ullamcorper justo, consectetur ornare velit viverra eget. Donec in efficitur diam. In ultricies vel justo id gravida. Suspendisse in ex id nulla hendrerit rhoncus vitae at augue. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean a ligula eu mauris pharetra posuere nec id nisi. Sed eleifend lectus sit amet dolor cursus suscipit. Phasellus massa lorem, scelerisque eget dapibus id, viverra non sapien. Nullam vel metus tempus, porta lorem a, dignissim ante. Donec sed ante dui.&lt;/p&gt;');

-- --------------------------------------------------------

--
-- Table structure for table `oc_cart`
--

CREATE TABLE `oc_cart` (
  `cart_id` int(10) UNSIGNED NOT NULL,
  `api_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `session_id` varchar(32) NOT NULL,
  `product_id` int(11) NOT NULL,
  `recurring_id` int(11) NOT NULL,
  `option` text NOT NULL,
  `quantity` int(11) NOT NULL,
  `date_added` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `oc_cart`
--

INSERT INTO `oc_cart` (`cart_id`, `api_id`, `customer_id`, `session_id`, `product_id`, `recurring_id`, `option`, `quantity`, `date_added`) VALUES
(5, 0, 1, 'ad71c6b781cb87882c28706e6e', 40, 0, '[]', 1, '2019-05-24 15:54:41'),
(6, 0, 1, 'ad71c6b781cb87882c28706e6e', 28, 0, '[]', 1, '2019-05-24 15:54:58'),
(11, 0, 2, 'a55a0dabe784f3861a57fc2076', 36, 0, '[]', 1, '2019-06-11 15:38:03'),
(12, 0, 2, 'a55a0dabe784f3861a57fc2076', 28, 0, '[]', 1, '2019-06-13 14:36:53'),
(13, 0, 2, 'a55a0dabe784f3861a57fc2076', 48, 0, '[]', 1, '2019-06-13 14:36:57'),
(27, 0, 3, 'bd54879c897123b54f1a8b02ca', 34, 0, '[]', 2, '2019-06-14 18:21:21'),
(35, 0, 5, '3922141b12f0eefea92e2a69dc', 28, 0, '[]', 2, '2019-08-21 13:03:12'),
(45, 0, 8, '8c3baf728be8fa87ce9266c5a0', 28, 0, '[]', 1, '2019-10-04 15:51:04'),
(57, 0, 9, '8aa377cb9c7b36063abfe83be4', 47, 0, '{\"225\":\"2011-04-22\"}', 1, '2019-12-24 16:57:58'),
(58, 0, 9, '8aa377cb9c7b36063abfe83be4', 41, 0, '[]', 1, '2019-12-24 17:00:24'),
(59, 0, 9, '8aa377cb9c7b36063abfe83be4', 34, 0, '[]', 1, '2019-12-24 17:00:26'),
(119, 0, 12, '632ba15dd9de28ecbee906d199', 41, 0, '{\"240\":\"41\"}', 1, '2022-07-28 05:15:17'),
(122, 0, 13, 'b7429e0bac57126d3699009ce3', 30, 0, '{\"238\":\"35\",\"253\":\"84\",\"254\":\"88\",\"255\":\"92\"}', 2, '2022-07-30 06:52:49'),
(133, 0, 14, '5dc1e68aa89bbafdfb0de967a0', 47, 0, '{\"235\":\"19\"}', 1, '2022-08-04 06:04:23'),
(134, 0, 14, '5dc1e68aa89bbafdfb0de967a0', 40, 0, '{\"241\":\"44\"}', 2, '2022-08-04 06:04:40'),
(138, 0, 15, 'b7429e0bac57126d3699009ce3', 47, 0, '{\"235\":\"19\"}', 1, '2022-08-12 09:28:08'),
(140, 0, 15, 'b7429e0bac57126d3699009ce3', 48, 0, '{\"242\":\"47\"}', 1, '2022-08-12 11:38:07'),
(143, 0, 16, 'b7429e0bac57126d3699009ce3', 40, 0, '{\"241\":\"44\"}', 3, '2022-08-13 05:20:50'),
(150, 0, 17, '5dc1e68aa89bbafdfb0de967a0', 40, 0, '{\"241\":\"44\"}', 1, '2022-08-17 06:51:31'),
(209, 0, 12, '632ba15dd9de28ecbee906d199', 48, 0, '{\"242\":\"47\"}', 1, '2023-01-11 11:31:51'),
(219, 0, 19, 'a46ed9e9dba821040ee05c43ac', 55, 0, '{\"264\":\"121\"}', 1, '2023-02-02 11:18:09');

-- --------------------------------------------------------

--
-- Table structure for table `oc_category`
--

CREATE TABLE `oc_category` (
  `category_id` int(11) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `parent_id` int(11) NOT NULL DEFAULT '0',
  `top` tinyint(1) NOT NULL,
  `column` int(11) NOT NULL,
  `sort_order` int(11) NOT NULL DEFAULT '0',
  `status` tinyint(1) NOT NULL,
  `date_added` datetime NOT NULL,
  `date_modified` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `oc_category`
--

INSERT INTO `oc_category` (`category_id`, `image`, `parent_id`, `top`, `column`, `sort_order`, `status`, `date_added`, `date_modified`) VALUES
(27, 'catalog/categoryimage.png', 20, 1, 0, 2, 1, '2009-01-31 01:55:34', '2022-08-04 08:19:10'),
(20, 'catalog/bannerimage.png', 0, 1, 3, 1, 1, '2009-01-05 21:49:43', '2023-01-02 09:12:35'),
(26, 'catalog/categoryimage.png', 20, 1, 0, 1, 1, '2009-01-31 01:55:14', '2022-08-04 08:12:32'),
(33, 'catalog/categoryimage.png', 0, 1, 1, 3, 1, '2009-02-03 14:17:55', '2022-07-29 09:57:43'),
(59, 'catalog/categoryimage.png', 26, 1, 1, 0, 1, '2019-05-21 11:16:39', '2022-08-04 08:16:55'),
(60, 'catalog/categoryimage.png', 26, 1, 0, 0, 1, '2019-05-21 11:26:06', '2022-08-04 08:17:10'),
(61, 'catalog/categoryimage.png', 26, 1, 1, 0, 1, '2019-05-21 11:28:41', '2022-08-04 08:17:28'),
(62, 'catalog/categoryimage.png', 27, 1, 1, 0, 1, '2019-05-21 11:29:45', '2022-08-04 08:15:09'),
(63, 'catalog/categoryimage.png', 27, 1, 1, 0, 1, '2019-05-21 11:31:20', '2022-08-04 08:14:17'),
(64, 'catalog/categoryimage.png', 27, 1, 1, 0, 1, '2019-05-21 11:33:09', '2022-08-04 08:13:36'),
(77, 'catalog/categoryimage.png', 20, 1, 1, 3, 1, '2019-08-06 17:43:48', '2022-08-04 08:10:41'),
(78, 'catalog/categoryimage.png', 77, 1, 1, 0, 1, '2019-08-06 17:45:44', '2022-08-04 08:18:51'),
(79, 'catalog/categoryimage.png', 77, 1, 1, 0, 1, '2019-08-06 17:50:39', '2022-08-04 08:18:09'),
(80, 'catalog/categoryimage.png', 77, 1, 1, 0, 1, '2019-08-06 17:54:42', '2022-08-04 08:17:52'),
(87, 'catalog/categoryimage.png', 0, 1, 1, 2, 1, '2019-09-27 14:41:31', '2023-01-02 08:59:45'),
(105, 'catalog/categoryimage.png', 26, 0, 1, 0, 1, '2022-07-26 08:17:46', '2022-08-04 08:11:37'),
(106, 'catalog/categoryimage.png', 27, 0, 1, 0, 1, '2022-07-26 08:24:49', '2022-08-04 08:15:38'),
(107, 'catalog/categoryimage.png', 77, 0, 1, 0, 1, '2022-07-26 08:28:27', '2022-08-04 08:18:26');

-- --------------------------------------------------------

--
-- Table structure for table `oc_category_description`
--

CREATE TABLE `oc_category_description` (
  `category_id` int(11) NOT NULL,
  `language_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `meta_title` varchar(255) NOT NULL,
  `meta_description` varchar(255) NOT NULL,
  `meta_keyword` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `oc_category_description`
--

INSERT INTO `oc_category_description` (`category_id`, `language_id`, `name`, `description`, `meta_title`, `meta_description`, `meta_keyword`) VALUES
(87, 1, 'All Blouse', '', 'All Blouse', '', ''),
(26, 1, 'Collection', '', 'Collection', '', ''),
(20, 1, 'Shop By', '&lt;p&gt;\r\n	Example of category description text&lt;/p&gt;\r\n', 'Shop By', '', ''),
(62, 1, 'Sleeves', '', 'Sleeves', '', ''),
(106, 1, 'Sleeveless', '', 'Sleeveless', '', ''),
(107, 1, 'Theme Wear', '', 'Theme Wear', '', ''),
(33, 1, 'Offers', '', 'Offers', '', ''),
(27, 1, 'Type', '', 'Type', '', ''),
(61, 1, 'Retro', '', 'Retro', '', ''),
(63, 1, 'Un - Padded', '', 'Un - Padded', '', ''),
(64, 1, 'Padded', '', 'Padded', '', ''),
(59, 1, 'Jazzy', '', 'Jazzy', '', ''),
(60, 1, 'Neo', '', 'Neo', '', ''),
(77, 1, 'Occasion', '', 'Occasion', '', ''),
(80, 1, 'Everyday Wear', '', 'Everyday Wear', '', ''),
(79, 1, 'Party', '', 'Party', '', ''),
(78, 1, 'Wedding', '', 'Wedding', '', ''),
(105, 1, 'Classic', '', 'Classic', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `oc_category_filter`
--

CREATE TABLE `oc_category_filter` (
  `category_id` int(11) NOT NULL,
  `filter_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `oc_category_filter`
--

INSERT INTO `oc_category_filter` (`category_id`, `filter_id`) VALUES
(20, 1),
(20, 2),
(20, 3),
(20, 4),
(20, 5),
(20, 6),
(20, 7),
(20, 8),
(20, 9),
(20, 11),
(20, 12),
(20, 13),
(20, 15),
(20, 16),
(20, 17),
(20, 18),
(20, 19),
(20, 20),
(20, 21),
(20, 22),
(20, 23),
(20, 24),
(20, 25),
(20, 26),
(20, 27),
(20, 28),
(26, 1),
(26, 2),
(26, 3),
(26, 4),
(26, 5),
(26, 6),
(26, 7),
(26, 8),
(26, 9),
(27, 1),
(27, 2),
(27, 3),
(27, 4),
(27, 5),
(27, 6),
(27, 7),
(27, 8),
(27, 9),
(33, 1),
(33, 2),
(33, 3),
(33, 4),
(33, 5),
(33, 6),
(33, 7),
(33, 8),
(33, 9),
(60, 1),
(60, 2),
(60, 3),
(60, 4),
(60, 5),
(60, 6),
(60, 7),
(60, 8),
(60, 9),
(61, 1),
(61, 2),
(61, 3),
(61, 4),
(61, 5),
(61, 6),
(61, 7),
(61, 8),
(61, 9),
(62, 1),
(62, 2),
(62, 3),
(62, 4),
(62, 5),
(62, 6),
(62, 7),
(62, 8),
(62, 9),
(63, 1),
(63, 2),
(63, 3),
(63, 4),
(63, 5),
(63, 6),
(63, 7),
(63, 8),
(63, 9),
(64, 1),
(64, 2),
(64, 3),
(64, 4),
(64, 5),
(64, 6),
(64, 7),
(64, 8),
(64, 9),
(77, 1),
(77, 4),
(77, 5),
(77, 6),
(77, 8),
(77, 9),
(78, 1),
(78, 2),
(78, 5),
(78, 6),
(78, 8),
(78, 9),
(79, 1),
(79, 2),
(79, 5),
(79, 6),
(79, 8),
(79, 9),
(80, 1),
(80, 4),
(80, 5),
(80, 6),
(80, 8),
(80, 9),
(87, 1),
(87, 2),
(87, 3),
(87, 5),
(87, 6),
(87, 8),
(87, 9),
(105, 1),
(105, 2),
(105, 3),
(105, 4),
(105, 5),
(105, 6),
(105, 8),
(107, 1),
(107, 2),
(107, 3),
(107, 4),
(107, 5),
(107, 6);

-- --------------------------------------------------------

--
-- Table structure for table `oc_category_path`
--

CREATE TABLE `oc_category_path` (
  `category_id` int(11) NOT NULL,
  `path_id` int(11) NOT NULL,
  `level` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `oc_category_path`
--

INSERT INTO `oc_category_path` (`category_id`, `path_id`, `level`) VALUES
(20, 20, 0),
(27, 27, 1),
(27, 20, 0),
(26, 26, 1),
(26, 20, 0),
(33, 33, 0),
(59, 59, 2),
(59, 26, 1),
(59, 20, 0),
(60, 60, 2),
(60, 26, 1),
(60, 20, 0),
(61, 61, 2),
(61, 20, 0),
(61, 26, 1),
(62, 62, 2),
(62, 20, 0),
(62, 27, 1),
(63, 63, 2),
(63, 20, 0),
(63, 27, 1),
(64, 64, 2),
(64, 27, 1),
(64, 20, 0),
(77, 20, 0),
(77, 77, 1),
(78, 20, 0),
(78, 77, 1),
(78, 78, 2),
(79, 20, 0),
(79, 77, 1),
(79, 79, 2),
(80, 20, 0),
(80, 77, 1),
(80, 80, 2),
(87, 87, 0),
(105, 20, 0),
(105, 26, 1),
(105, 105, 2),
(106, 106, 2),
(106, 27, 1),
(106, 20, 0),
(107, 107, 2),
(107, 77, 1),
(107, 20, 0);

-- --------------------------------------------------------

--
-- Table structure for table `oc_category_to_layout`
--

CREATE TABLE `oc_category_to_layout` (
  `category_id` int(11) NOT NULL,
  `store_id` int(11) NOT NULL,
  `layout_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `oc_category_to_layout`
--

INSERT INTO `oc_category_to_layout` (`category_id`, `store_id`, `layout_id`) VALUES
(59, 0, 0),
(20, 0, 0),
(33, 0, 0),
(60, 0, 0),
(61, 0, 0),
(62, 0, 0),
(63, 0, 0),
(64, 0, 0),
(27, 0, 0),
(26, 0, 0),
(87, 0, 0),
(77, 0, 0),
(78, 0, 0),
(79, 0, 0),
(80, 0, 0),
(105, 0, 0),
(106, 0, 0),
(107, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `oc_category_to_store`
--

CREATE TABLE `oc_category_to_store` (
  `category_id` int(11) NOT NULL,
  `store_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `oc_category_to_store`
--

INSERT INTO `oc_category_to_store` (`category_id`, `store_id`) VALUES
(20, 0),
(26, 0),
(27, 0),
(33, 0),
(59, 0),
(60, 0),
(61, 0),
(62, 0),
(63, 0),
(64, 0),
(77, 0),
(78, 0),
(79, 0),
(80, 0),
(87, 0),
(105, 0),
(106, 0),
(107, 0);

-- --------------------------------------------------------

--
-- Table structure for table `oc_country`
--

CREATE TABLE `oc_country` (
  `country_id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `iso_code_2` varchar(2) NOT NULL,
  `iso_code_3` varchar(3) NOT NULL,
  `address_format` text NOT NULL,
  `postcode_required` tinyint(1) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `oc_country`
--

INSERT INTO `oc_country` (`country_id`, `name`, `iso_code_2`, `iso_code_3`, `address_format`, `postcode_required`, `status`) VALUES
(1, 'Afghanistan', 'AF', 'AFG', '', 0, 1),
(2, 'Albania', 'AL', 'ALB', '', 0, 1),
(3, 'Algeria', 'DZ', 'DZA', '', 0, 1),
(4, 'American Samoa', 'AS', 'ASM', '', 0, 1),
(5, 'Andorra', 'AD', 'AND', '', 0, 1),
(6, 'Angola', 'AO', 'AGO', '', 0, 1),
(7, 'Anguilla', 'AI', 'AIA', '', 0, 1),
(8, 'Antarctica', 'AQ', 'ATA', '', 0, 1),
(9, 'Antigua and Barbuda', 'AG', 'ATG', '', 0, 1),
(10, 'Argentina', 'AR', 'ARG', '', 0, 1),
(11, 'Armenia', 'AM', 'ARM', '', 0, 1),
(12, 'Aruba', 'AW', 'ABW', '', 0, 1),
(13, 'Australia', 'AU', 'AUS', '', 0, 1),
(14, 'Austria', 'AT', 'AUT', '', 0, 1),
(15, 'Azerbaijan', 'AZ', 'AZE', '', 0, 1),
(16, 'Bahamas', 'BS', 'BHS', '', 0, 1),
(17, 'Bahrain', 'BH', 'BHR', '', 0, 1),
(18, 'Bangladesh', 'BD', 'BGD', '', 0, 1),
(19, 'Barbados', 'BB', 'BRB', '', 0, 1),
(20, 'Belarus', 'BY', 'BLR', '', 0, 1),
(21, 'Belgium', 'BE', 'BEL', '{firstname} {lastname}\r\n{company}\r\n{address_1}\r\n{address_2}\r\n{postcode} {city}\r\n{country}', 0, 1),
(22, 'Belize', 'BZ', 'BLZ', '', 0, 1),
(23, 'Benin', 'BJ', 'BEN', '', 0, 1),
(24, 'Bermuda', 'BM', 'BMU', '', 0, 1),
(25, 'Bhutan', 'BT', 'BTN', '', 0, 1),
(26, 'Bolivia', 'BO', 'BOL', '', 0, 1),
(27, 'Bosnia and Herzegovina', 'BA', 'BIH', '', 0, 1),
(28, 'Botswana', 'BW', 'BWA', '', 0, 1),
(29, 'Bouvet Island', 'BV', 'BVT', '', 0, 1),
(30, 'Brazil', 'BR', 'BRA', '', 0, 1),
(31, 'British Indian Ocean Territory', 'IO', 'IOT', '', 0, 1),
(32, 'Brunei Darussalam', 'BN', 'BRN', '', 0, 1),
(33, 'Bulgaria', 'BG', 'BGR', '', 0, 1),
(34, 'Burkina Faso', 'BF', 'BFA', '', 0, 1),
(35, 'Burundi', 'BI', 'BDI', '', 0, 1),
(36, 'Cambodia', 'KH', 'KHM', '', 0, 1),
(37, 'Cameroon', 'CM', 'CMR', '', 0, 1),
(38, 'Canada', 'CA', 'CAN', '', 0, 1),
(39, 'Cape Verde', 'CV', 'CPV', '', 0, 1),
(40, 'Cayman Islands', 'KY', 'CYM', '', 0, 1),
(41, 'Central African Republic', 'CF', 'CAF', '', 0, 1),
(42, 'Chad', 'TD', 'TCD', '', 0, 1),
(43, 'Chile', 'CL', 'CHL', '', 0, 1),
(44, 'China', 'CN', 'CHN', '', 0, 1),
(45, 'Christmas Island', 'CX', 'CXR', '', 0, 1),
(46, 'Cocos (Keeling) Islands', 'CC', 'CCK', '', 0, 1),
(47, 'Colombia', 'CO', 'COL', '', 0, 1),
(48, 'Comoros', 'KM', 'COM', '', 0, 1),
(49, 'Congo', 'CG', 'COG', '', 0, 1),
(50, 'Cook Islands', 'CK', 'COK', '', 0, 1),
(51, 'Costa Rica', 'CR', 'CRI', '', 0, 1),
(52, 'Cote D\'Ivoire', 'CI', 'CIV', '', 0, 1),
(53, 'Croatia', 'HR', 'HRV', '', 0, 1),
(54, 'Cuba', 'CU', 'CUB', '', 0, 1),
(55, 'Cyprus', 'CY', 'CYP', '', 0, 1),
(56, 'Czech Republic', 'CZ', 'CZE', '', 0, 1),
(57, 'Denmark', 'DK', 'DNK', '', 0, 1),
(58, 'Djibouti', 'DJ', 'DJI', '', 0, 1),
(59, 'Dominica', 'DM', 'DMA', '', 0, 1),
(60, 'Dominican Republic', 'DO', 'DOM', '', 0, 1),
(61, 'East Timor', 'TL', 'TLS', '', 0, 1),
(62, 'Ecuador', 'EC', 'ECU', '', 0, 1),
(63, 'Egypt', 'EG', 'EGY', '', 0, 1),
(64, 'El Salvador', 'SV', 'SLV', '', 0, 1),
(65, 'Equatorial Guinea', 'GQ', 'GNQ', '', 0, 1),
(66, 'Eritrea', 'ER', 'ERI', '', 0, 1),
(67, 'Estonia', 'EE', 'EST', '', 0, 1),
(68, 'Ethiopia', 'ET', 'ETH', '', 0, 1),
(69, 'Falkland Islands (Malvinas)', 'FK', 'FLK', '', 0, 1),
(70, 'Faroe Islands', 'FO', 'FRO', '', 0, 1),
(71, 'Fiji', 'FJ', 'FJI', '', 0, 1),
(72, 'Finland', 'FI', 'FIN', '', 0, 1),
(74, 'France, Metropolitan', 'FR', 'FRA', '{firstname} {lastname}\r\n{company}\r\n{address_1}\r\n{address_2}\r\n{postcode} {city}\r\n{country}', 1, 1),
(75, 'French Guiana', 'GF', 'GUF', '', 0, 1),
(76, 'French Polynesia', 'PF', 'PYF', '', 0, 1),
(77, 'French Southern Territories', 'TF', 'ATF', '', 0, 1),
(78, 'Gabon', 'GA', 'GAB', '', 0, 1),
(79, 'Gambia', 'GM', 'GMB', '', 0, 1),
(80, 'Georgia', 'GE', 'GEO', '', 0, 1),
(81, 'Germany', 'DE', 'DEU', '{company}\r\n{firstname} {lastname}\r\n{address_1}\r\n{address_2}\r\n{postcode} {city}\r\n{country}', 1, 1),
(82, 'Ghana', 'GH', 'GHA', '', 0, 1),
(83, 'Gibraltar', 'GI', 'GIB', '', 0, 1),
(84, 'Greece', 'GR', 'GRC', '', 0, 1),
(85, 'Greenland', 'GL', 'GRL', '', 0, 1),
(86, 'Grenada', 'GD', 'GRD', '', 0, 1),
(87, 'Guadeloupe', 'GP', 'GLP', '', 0, 1),
(88, 'Guam', 'GU', 'GUM', '', 0, 1),
(89, 'Guatemala', 'GT', 'GTM', '', 0, 1),
(90, 'Guinea', 'GN', 'GIN', '', 0, 1),
(91, 'Guinea-Bissau', 'GW', 'GNB', '', 0, 1),
(92, 'Guyana', 'GY', 'GUY', '', 0, 1),
(93, 'Haiti', 'HT', 'HTI', '', 0, 1),
(94, 'Heard and Mc Donald Islands', 'HM', 'HMD', '', 0, 1),
(95, 'Honduras', 'HN', 'HND', '', 0, 1),
(96, 'Hong Kong', 'HK', 'HKG', '', 0, 1),
(97, 'Hungary', 'HU', 'HUN', '', 0, 1),
(98, 'Iceland', 'IS', 'ISL', '', 0, 1),
(99, 'India', 'IN', 'IND', '', 0, 1),
(100, 'Indonesia', 'ID', 'IDN', '', 0, 1),
(101, 'Iran (Islamic Republic of)', 'IR', 'IRN', '', 0, 1),
(102, 'Iraq', 'IQ', 'IRQ', '', 0, 1),
(103, 'Ireland', 'IE', 'IRL', '', 0, 1),
(104, 'Israel', 'IL', 'ISR', '', 0, 1),
(105, 'Italy', 'IT', 'ITA', '', 0, 1),
(106, 'Jamaica', 'JM', 'JAM', '', 0, 1),
(107, 'Japan', 'JP', 'JPN', '', 0, 1),
(108, 'Jordan', 'JO', 'JOR', '', 0, 1),
(109, 'Kazakhstan', 'KZ', 'KAZ', '', 0, 1),
(110, 'Kenya', 'KE', 'KEN', '', 0, 1),
(111, 'Kiribati', 'KI', 'KIR', '', 0, 1),
(112, 'North Korea', 'KP', 'PRK', '', 0, 1),
(113, 'South Korea', 'KR', 'KOR', '', 0, 1),
(114, 'Kuwait', 'KW', 'KWT', '', 0, 1),
(115, 'Kyrgyzstan', 'KG', 'KGZ', '', 0, 1),
(116, 'Lao People\'s Democratic Republic', 'LA', 'LAO', '', 0, 1),
(117, 'Latvia', 'LV', 'LVA', '', 0, 1),
(118, 'Lebanon', 'LB', 'LBN', '', 0, 1),
(119, 'Lesotho', 'LS', 'LSO', '', 0, 1),
(120, 'Liberia', 'LR', 'LBR', '', 0, 1),
(121, 'Libyan Arab Jamahiriya', 'LY', 'LBY', '', 0, 1),
(122, 'Liechtenstein', 'LI', 'LIE', '', 0, 1),
(123, 'Lithuania', 'LT', 'LTU', '', 0, 1),
(124, 'Luxembourg', 'LU', 'LUX', '', 0, 1),
(125, 'Macau', 'MO', 'MAC', '', 0, 1),
(126, 'FYROM', 'MK', 'MKD', '', 0, 1),
(127, 'Madagascar', 'MG', 'MDG', '', 0, 1),
(128, 'Malawi', 'MW', 'MWI', '', 0, 1),
(129, 'Malaysia', 'MY', 'MYS', '', 0, 1),
(130, 'Maldives', 'MV', 'MDV', '', 0, 1),
(131, 'Mali', 'ML', 'MLI', '', 0, 1),
(132, 'Malta', 'MT', 'MLT', '', 0, 1),
(133, 'Marshall Islands', 'MH', 'MHL', '', 0, 1),
(134, 'Martinique', 'MQ', 'MTQ', '', 0, 1),
(135, 'Mauritania', 'MR', 'MRT', '', 0, 1),
(136, 'Mauritius', 'MU', 'MUS', '', 0, 1),
(137, 'Mayotte', 'YT', 'MYT', '', 0, 1),
(138, 'Mexico', 'MX', 'MEX', '', 0, 1),
(139, 'Micronesia, Federated States of', 'FM', 'FSM', '', 0, 1),
(140, 'Moldova, Republic of', 'MD', 'MDA', '', 0, 1),
(141, 'Monaco', 'MC', 'MCO', '', 0, 1),
(142, 'Mongolia', 'MN', 'MNG', '', 0, 1),
(143, 'Montserrat', 'MS', 'MSR', '', 0, 1),
(144, 'Morocco', 'MA', 'MAR', '', 0, 1),
(145, 'Mozambique', 'MZ', 'MOZ', '', 0, 1),
(146, 'Myanmar', 'MM', 'MMR', '', 0, 1),
(147, 'Namibia', 'NA', 'NAM', '', 0, 1),
(148, 'Nauru', 'NR', 'NRU', '', 0, 1),
(149, 'Nepal', 'NP', 'NPL', '', 0, 1),
(150, 'Netherlands', 'NL', 'NLD', '', 0, 1),
(151, 'Netherlands Antilles', 'AN', 'ANT', '', 0, 1),
(152, 'New Caledonia', 'NC', 'NCL', '', 0, 1),
(153, 'New Zealand', 'NZ', 'NZL', '', 0, 1),
(154, 'Nicaragua', 'NI', 'NIC', '', 0, 1),
(155, 'Niger', 'NE', 'NER', '', 0, 1),
(156, 'Nigeria', 'NG', 'NGA', '', 0, 1),
(157, 'Niue', 'NU', 'NIU', '', 0, 1),
(158, 'Norfolk Island', 'NF', 'NFK', '', 0, 1),
(159, 'Northern Mariana Islands', 'MP', 'MNP', '', 0, 1),
(160, 'Norway', 'NO', 'NOR', '', 0, 1),
(161, 'Oman', 'OM', 'OMN', '', 0, 1),
(162, 'Pakistan', 'PK', 'PAK', '', 0, 1),
(163, 'Palau', 'PW', 'PLW', '', 0, 1),
(164, 'Panama', 'PA', 'PAN', '', 0, 1),
(165, 'Papua New Guinea', 'PG', 'PNG', '', 0, 1),
(166, 'Paraguay', 'PY', 'PRY', '', 0, 1),
(167, 'Peru', 'PE', 'PER', '', 0, 1),
(168, 'Philippines', 'PH', 'PHL', '', 0, 1),
(169, 'Pitcairn', 'PN', 'PCN', '', 0, 1),
(170, 'Poland', 'PL', 'POL', '', 0, 1),
(171, 'Portugal', 'PT', 'PRT', '', 0, 1),
(172, 'Puerto Rico', 'PR', 'PRI', '', 0, 1),
(173, 'Qatar', 'QA', 'QAT', '', 0, 1),
(174, 'Reunion', 'RE', 'REU', '', 0, 1),
(175, 'Romania', 'RO', 'ROM', '', 0, 1),
(176, 'Russian Federation', 'RU', 'RUS', '', 0, 1),
(177, 'Rwanda', 'RW', 'RWA', '', 0, 1),
(178, 'Saint Kitts and Nevis', 'KN', 'KNA', '', 0, 1),
(179, 'Saint Lucia', 'LC', 'LCA', '', 0, 1),
(180, 'Saint Vincent and the Grenadines', 'VC', 'VCT', '', 0, 1),
(181, 'Samoa', 'WS', 'WSM', '', 0, 1),
(182, 'San Marino', 'SM', 'SMR', '', 0, 1),
(183, 'Sao Tome and Principe', 'ST', 'STP', '', 0, 1),
(184, 'Saudi Arabia', 'SA', 'SAU', '', 0, 1),
(185, 'Senegal', 'SN', 'SEN', '', 0, 1),
(186, 'Seychelles', 'SC', 'SYC', '', 0, 1),
(187, 'Sierra Leone', 'SL', 'SLE', '', 0, 1),
(188, 'Singapore', 'SG', 'SGP', '', 0, 1),
(189, 'Slovak Republic', 'SK', 'SVK', '{firstname} {lastname}\r\n{company}\r\n{address_1}\r\n{address_2}\r\n{city} {postcode}\r\n{zone}\r\n{country}', 0, 1),
(190, 'Slovenia', 'SI', 'SVN', '', 0, 1),
(191, 'Solomon Islands', 'SB', 'SLB', '', 0, 1),
(192, 'Somalia', 'SO', 'SOM', '', 0, 1),
(193, 'South Africa', 'ZA', 'ZAF', '', 0, 1),
(194, 'South Georgia &amp; South Sandwich Islands', 'GS', 'SGS', '', 0, 1),
(195, 'Spain', 'ES', 'ESP', '', 0, 1),
(196, 'Sri Lanka', 'LK', 'LKA', '', 0, 1),
(197, 'St. Helena', 'SH', 'SHN', '', 0, 1),
(198, 'St. Pierre and Miquelon', 'PM', 'SPM', '', 0, 1),
(199, 'Sudan', 'SD', 'SDN', '', 0, 1),
(200, 'Suriname', 'SR', 'SUR', '', 0, 1),
(201, 'Svalbard and Jan Mayen Islands', 'SJ', 'SJM', '', 0, 1),
(202, 'Swaziland', 'SZ', 'SWZ', '', 0, 1),
(203, 'Sweden', 'SE', 'SWE', '{company}\r\n{firstname} {lastname}\r\n{address_1}\r\n{address_2}\r\n{postcode} {city}\r\n{country}', 1, 1),
(204, 'Switzerland', 'CH', 'CHE', '', 0, 1),
(205, 'Syrian Arab Republic', 'SY', 'SYR', '', 0, 1),
(206, 'Taiwan', 'TW', 'TWN', '', 0, 1),
(207, 'Tajikistan', 'TJ', 'TJK', '', 0, 1),
(208, 'Tanzania, United Republic of', 'TZ', 'TZA', '', 0, 1),
(209, 'Thailand', 'TH', 'THA', '', 0, 1),
(210, 'Togo', 'TG', 'TGO', '', 0, 1),
(211, 'Tokelau', 'TK', 'TKL', '', 0, 1),
(212, 'Tonga', 'TO', 'TON', '', 0, 1),
(213, 'Trinidad and Tobago', 'TT', 'TTO', '', 0, 1),
(214, 'Tunisia', 'TN', 'TUN', '', 0, 1),
(215, 'Turkey', 'TR', 'TUR', '', 0, 1),
(216, 'Turkmenistan', 'TM', 'TKM', '', 0, 1),
(217, 'Turks and Caicos Islands', 'TC', 'TCA', '', 0, 1),
(218, 'Tuvalu', 'TV', 'TUV', '', 0, 1),
(219, 'Uganda', 'UG', 'UGA', '', 0, 1),
(220, 'Ukraine', 'UA', 'UKR', '', 0, 1),
(221, 'United Arab Emirates', 'AE', 'ARE', '', 0, 1),
(222, 'United Kingdom', 'GB', 'GBR', '', 1, 1),
(223, 'United States', 'US', 'USA', '{firstname} {lastname}\r\n{company}\r\n{address_1}\r\n{address_2}\r\n{city}, {zone} {postcode}\r\n{country}', 0, 1),
(224, 'United States Minor Outlying Islands', 'UM', 'UMI', '', 0, 1),
(225, 'Uruguay', 'UY', 'URY', '', 0, 1),
(226, 'Uzbekistan', 'UZ', 'UZB', '', 0, 1),
(227, 'Vanuatu', 'VU', 'VUT', '', 0, 1),
(228, 'Vatican City State (Holy See)', 'VA', 'VAT', '', 0, 1),
(229, 'Venezuela', 'VE', 'VEN', '', 0, 1),
(230, 'Viet Nam', 'VN', 'VNM', '', 0, 1),
(231, 'Virgin Islands (British)', 'VG', 'VGB', '', 0, 1),
(232, 'Virgin Islands (U.S.)', 'VI', 'VIR', '', 0, 1),
(233, 'Wallis and Futuna Islands', 'WF', 'WLF', '', 0, 1),
(234, 'Western Sahara', 'EH', 'ESH', '', 0, 1),
(235, 'Yemen', 'YE', 'YEM', '', 0, 1),
(237, 'Democratic Republic of Congo', 'CD', 'COD', '', 0, 1),
(238, 'Zambia', 'ZM', 'ZMB', '', 0, 1),
(239, 'Zimbabwe', 'ZW', 'ZWE', '', 0, 1),
(242, 'Montenegro', 'ME', 'MNE', '', 0, 1),
(243, 'Serbia', 'RS', 'SRB', '', 0, 1),
(244, 'Aaland Islands', 'AX', 'ALA', '', 0, 1),
(245, 'Bonaire, Sint Eustatius and Saba', 'BQ', 'BES', '', 0, 1),
(246, 'Curacao', 'CW', 'CUW', '', 0, 1),
(247, 'Palestinian Territory, Occupied', 'PS', 'PSE', '', 0, 1),
(248, 'South Sudan', 'SS', 'SSD', '', 0, 1),
(249, 'St. Barthelemy', 'BL', 'BLM', '', 0, 1),
(250, 'St. Martin (French part)', 'MF', 'MAF', '', 0, 1),
(251, 'Canary Islands', 'IC', 'ICA', '', 0, 1),
(252, 'Ascension Island (British)', 'AC', 'ASC', '', 0, 1),
(253, 'Kosovo, Republic of', 'XK', 'UNK', '', 0, 1),
(254, 'Isle of Man', 'IM', 'IMN', '', 0, 1),
(255, 'Tristan da Cunha', 'TA', 'SHN', '', 0, 1),
(256, 'Guernsey', 'GG', 'GGY', '', 0, 1),
(257, 'Jersey', 'JE', 'JEY', '', 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `oc_coupon`
--

CREATE TABLE `oc_coupon` (
  `coupon_id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `code` varchar(20) NOT NULL,
  `type` char(1) NOT NULL,
  `discount` decimal(15,4) NOT NULL,
  `logged` tinyint(1) NOT NULL,
  `shipping` tinyint(1) NOT NULL,
  `total` decimal(15,4) NOT NULL,
  `date_start` date NOT NULL DEFAULT '0000-00-00',
  `date_end` date NOT NULL DEFAULT '0000-00-00',
  `uses_total` int(11) NOT NULL,
  `uses_customer` varchar(11) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `date_added` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `oc_coupon`
--

INSERT INTO `oc_coupon` (`coupon_id`, `name`, `code`, `type`, `discount`, `logged`, `shipping`, `total`, `date_start`, `date_end`, `uses_total`, `uses_customer`, `status`, `date_added`) VALUES
(4, '-10% Discount', '2222', 'P', '10.0000', 0, 0, '0.0000', '2014-01-01', '2020-01-01', 10, '10', 0, '2009-01-27 13:55:03'),
(5, 'Free Shipping', '3333', 'P', '0.0000', 0, 1, '100.0000', '2014-01-01', '2014-02-01', 10, '10', 0, '2009-03-14 21:13:53'),
(6, '-10.00 Discount', '1111', 'F', '10.0000', 0, 0, '10.0000', '2014-01-01', '2020-01-01', 100000, '10000', 0, '2009-03-14 21:15:18');

-- --------------------------------------------------------

--
-- Table structure for table `oc_coupon_category`
--

CREATE TABLE `oc_coupon_category` (
  `coupon_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `oc_coupon_history`
--

CREATE TABLE `oc_coupon_history` (
  `coupon_history_id` int(11) NOT NULL,
  `coupon_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `amount` decimal(15,4) NOT NULL,
  `date_added` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `oc_coupon_product`
--

CREATE TABLE `oc_coupon_product` (
  `coupon_product_id` int(11) NOT NULL,
  `coupon_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `oc_currency`
--

CREATE TABLE `oc_currency` (
  `currency_id` int(11) NOT NULL,
  `title` varchar(32) NOT NULL,
  `code` varchar(3) NOT NULL,
  `symbol_left` varchar(12) NOT NULL,
  `symbol_right` varchar(12) NOT NULL,
  `decimal_place` char(1) NOT NULL,
  `value` double(15,8) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `date_modified` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `oc_currency`
--

INSERT INTO `oc_currency` (`currency_id`, `title`, `code`, `symbol_left`, `symbol_right`, `decimal_place`, `value`, `status`, `date_modified`) VALUES
(4, 'Indian Rupee', 'INR', 'RS.', '', '2', 1.00000000, 1, '2023-02-03 11:17:40');

-- --------------------------------------------------------

--
-- Table structure for table `oc_customer`
--

CREATE TABLE `oc_customer` (
  `customer_id` int(11) NOT NULL,
  `customer_group_id` int(11) NOT NULL,
  `store_id` int(11) NOT NULL DEFAULT '0',
  `language_id` int(11) NOT NULL,
  `firstname` varchar(32) NOT NULL,
  `lastname` varchar(32) NOT NULL,
  `email` varchar(96) NOT NULL,
  `telephone` varchar(32) NOT NULL,
  `fax` varchar(32) NOT NULL,
  `password` varchar(40) NOT NULL,
  `salt` varchar(9) NOT NULL,
  `cart` text,
  `wishlist` text,
  `newsletter` tinyint(1) NOT NULL DEFAULT '0',
  `address_id` int(11) NOT NULL DEFAULT '0',
  `custom_field` text NOT NULL,
  `ip` varchar(40) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `safe` tinyint(1) NOT NULL,
  `token` text NOT NULL,
  `code` varchar(40) NOT NULL,
  `date_added` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `oc_customer`
--

INSERT INTO `oc_customer` (`customer_id`, `customer_group_id`, `store_id`, `language_id`, `firstname`, `lastname`, `email`, `telephone`, `fax`, `password`, `salt`, `cart`, `wishlist`, `newsletter`, `address_id`, `custom_field`, `ip`, `status`, `safe`, `token`, `code`, `date_added`) VALUES
(1, 1, 0, 1, 'demo', 'hfisgj', 'fihjds@lf.com', '1564984798456', '', '2e79ff887c825e7a936d95ea1d922a9b211cbcb4', 'p7pPjsASm', NULL, NULL, 0, 1, '', '192.168.0.109', 1, 0, '', '', '2019-05-23 13:01:45'),
(2, 1, 0, 1, 'admin', 'admin', 'info@example.com', '123456789', '', '35d31002bd73ea8ab7e50fadb94bad7bdeb6ece1', '4ZWuWkB9s', NULL, NULL, 0, 2, '', '192.168.0.111', 1, 0, '', '', '2019-06-11 15:31:56'),
(3, 1, 0, 1, 'trey', 'ytytr', 'ytruy@gdfg.com', '98749864564564', '', 'bdc5acfe202498f684c2576b751308ded1507176', 'tDTAcuvoa', NULL, NULL, 0, 3, '', '192.168.0.100', 1, 0, '', '', '2019-06-14 18:20:10'),
(4, 1, 0, 1, 'dhgh', 'fghfgh', 'fghgfh@gmail.com', '1231531321', '', 'd033b03fb735074ee9ea136b9db8597bb436f91c', 'ogCRDqjcd', NULL, NULL, 0, 4, '', '192.168.0.100', 1, 0, '', '', '2019-08-06 10:11:14'),
(5, 1, 0, 1, 'ewr', 'fs', 'fdg@fdsfg.com', '36985214789', '', 'fc2eb340970ffa88d6f5ba80f0502a9994ca6385', 'S26mE9mTG', NULL, NULL, 0, 5, '', '192.168.0.106', 1, 0, '', '', '2019-08-07 11:52:42'),
(6, 1, 0, 1, 'admin', 'admin', 'admin@gmail.com', '3698521478', '', 'adf5f8dadf49718275f5840629bdae8d5a5a3b7f', 'bXOPPPEmv', NULL, NULL, 0, 9, '', '192.168.0.105', 1, 0, '', '', '2019-09-09 14:37:52'),
(7, 1, 0, 1, 'tyhtry', 'trytry', 'retyrty@gmail.com', '4744968798', '', '8619c3bab05493187047d7624d725845949be87e', 'xOA7r8dGZ', NULL, NULL, 0, 7, '', '192.168.0.112', 1, 0, '', '', '2019-09-26 12:21:12'),
(8, 1, 0, 1, 'admin', 'admin', 'admin123@gmail.com', '1234567896', '', '03cc087c007234747efe6a7bc68b5ebe870f468e', '1IMdOkr4t', NULL, NULL, 0, 8, '', '192.168.0.106', 1, 0, '', '', '2019-09-28 12:32:59'),
(9, 1, 0, 1, 'kajal', 'admin', 'ishitechnolabs@gmail.com', '9632587412', '', 'bc68fd81ab03a8da47c2598a4426d9d56e986837', 'qJYxvT8lP', NULL, NULL, 0, 10, '', '192.168.0.102', 1, 0, '', '', '2019-12-24 15:48:50'),
(10, 1, 0, 1, 'kajal', 'admin', 'kkdholakiya123@gmail.com', '9632587412', '', '11f636e9004c3a99a0d46c0c6991c37cce3309ef', 'iNogJXD0u', NULL, NULL, 0, 11, '', '192.168.0.102', 1, 0, '', '', '2020-01-20 17:40:19'),
(11, 1, 0, 1, 'gfjftrh', 'tdhdfth', 'fghftgh@gmail.com', 'fghfgh', '', '29fd73d9363a6dbd9bc0ec8176a3a9d0a608b7b9', '2RPWAJbQD', NULL, NULL, 1, 0, '', '192.168.0.113', 1, 0, '', '', '2020-03-09 13:03:23'),
(12, 1, 0, 1, 'demo', 'demo', 'demo@gmail.com', '123456852', '', '9ec24262657ca9f2e7ac63b0157f14ea8f7140ee', 'MBgjvsjbl', NULL, NULL, 0, 12, '', '192.168.0.104', 1, 0, '', '', '2022-07-28 05:14:59'),
(13, 1, 0, 1, 'dfsdf', 'sdfsd', 'dsfsdfsd@gmail.com', '852456', '', '12a840346e4e5e5ce03cb9ae6d48312a89b585f7', 'GiDhFIJYM', NULL, NULL, 0, 13, '', '127.0.0.1', 1, 0, '', '', '2022-07-30 06:52:43'),
(14, 1, 0, 1, 'fdsf', 'sdfds', 'sdfsdf@gmail.com', '2585654', '', '25d74a805e501539b3337607a40299e58a7c85cf', 'lLtIa8bYI', NULL, NULL, 0, 14, '', '192.168.0.106', 1, 0, '', '', '2022-08-04 06:04:08'),
(15, 1, 0, 1, 'dfgdfg', 'dfgdfg', 'dfgdfggf@gmail.com', '258456', '', 'a1998e7ca075ddeecbb132a5faaaf1d34d47ef98', 'v4xVxVB3x', NULL, NULL, 0, 15, '', '127.0.0.1', 1, 0, '', '', '2022-08-12 09:27:13'),
(16, 1, 0, 1, 'admin', 'admin', 'admin01@gmail.com', '285456962', '', 'f25078695381477ca4c303cf707584c949a419ed', 'u2P2GjSmS', NULL, NULL, 0, 16, '', '127.0.0.1', 1, 0, '', '', '2022-08-13 05:20:47'),
(17, 1, 0, 1, 'fdfds', 'sdfsdf', 'sdfsdfdfdsf@gmail.com', '2584568576', '', 'dd6f1e042631e17b6fb9b264c6e332572e54be2e', '3qZlquCSO', NULL, NULL, 0, 0, '', '192.168.0.106', 1, 0, '', '', '2022-08-17 06:51:31'),
(18, 1, 0, 1, 'Pratik', 'Jivani', 'pratikjivani35@gmail.com', '1234567890', '', '11476d1a7f9b5278c49454a1f745c996bae4c4da', 'n0wavP7ye', NULL, NULL, 0, 0, '', '192.168.0.112', 1, 0, '', '', '2022-08-18 07:29:43'),
(19, 1, 0, 1, 'sagar', 'sagar', 'sagarpancholi@gmail.com', '2854569875', '', '6a66648cfc4b1fa00496fea1e66db73c71d31356', 'kz0ipwbO8', NULL, NULL, 0, 19, '', '49.36.91.45', 1, 0, '', '', '2022-08-18 08:01:00'),
(20, 1, 0, 1, 'sdfsdf', 'sdfsdf', 'sdfsdfsdfsdfsdf@gmail.com', '856458758', '', '2e9e5d42d7c9a649edaec88587dd93d007432b03', 'Tg9VLvLIs', NULL, NULL, 0, 23, '', '192.168.0.109', 1, 0, '', '', '2022-11-29 08:57:27'),
(21, 1, 0, 1, 'abc', 'xyz', 'demoexample@gmail.com', '1234567890', '', '3993410c4983853bde09c67d4c7de3d4728dfd03', 'NbKhwg9Nf', NULL, NULL, 1, 25, '', '192.168.0.109', 1, 0, '', '', '2022-11-29 09:28:51'),
(22, 1, 0, 1, 'abc', 'xyz', 'demo14598@gmail.com', '1234567895', '', '91e75a55c927042bb0dafc064ca8831e891f6f5c', 'y57pwS9Wz', NULL, NULL, 1, 24, '', '192.168.0.104', 1, 0, '', '', '2022-12-31 06:58:30');

-- --------------------------------------------------------

--
-- Table structure for table `oc_customer_activity`
--

CREATE TABLE `oc_customer_activity` (
  `customer_activity_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `key` varchar(64) NOT NULL,
  `data` text NOT NULL,
  `ip` varchar(40) NOT NULL,
  `date_added` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `oc_customer_affiliate`
--

CREATE TABLE `oc_customer_affiliate` (
  `customer_id` int(11) NOT NULL,
  `company` varchar(40) NOT NULL,
  `website` varchar(255) NOT NULL,
  `tracking` varchar(64) NOT NULL,
  `commission` decimal(4,2) NOT NULL DEFAULT '0.00',
  `tax` varchar(64) NOT NULL,
  `payment` varchar(6) NOT NULL,
  `cheque` varchar(100) NOT NULL,
  `paypal` varchar(64) NOT NULL,
  `bank_name` varchar(64) NOT NULL,
  `bank_branch_number` varchar(64) NOT NULL,
  `bank_swift_code` varchar(64) NOT NULL,
  `bank_account_name` varchar(64) NOT NULL,
  `bank_account_number` varchar(64) NOT NULL,
  `custom_field` text NOT NULL,
  `status` tinyint(1) NOT NULL,
  `date_added` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `oc_customer_approval`
--

CREATE TABLE `oc_customer_approval` (
  `customer_approval_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `type` varchar(9) NOT NULL,
  `date_added` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `oc_customer_group`
--

CREATE TABLE `oc_customer_group` (
  `customer_group_id` int(11) NOT NULL,
  `approval` int(11) NOT NULL,
  `sort_order` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `oc_customer_group`
--

INSERT INTO `oc_customer_group` (`customer_group_id`, `approval`, `sort_order`) VALUES
(1, 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `oc_customer_group_description`
--

CREATE TABLE `oc_customer_group_description` (
  `customer_group_id` int(11) NOT NULL,
  `language_id` int(11) NOT NULL,
  `name` varchar(32) NOT NULL,
  `description` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `oc_customer_group_description`
--

INSERT INTO `oc_customer_group_description` (`customer_group_id`, `language_id`, `name`, `description`) VALUES
(1, 1, 'Default', 'test'),
(1, 2, 'Default', 'test');

-- --------------------------------------------------------

--
-- Table structure for table `oc_customer_history`
--

CREATE TABLE `oc_customer_history` (
  `customer_history_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `comment` text NOT NULL,
  `date_added` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `oc_customer_ip`
--

CREATE TABLE `oc_customer_ip` (
  `customer_ip_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `ip` varchar(40) NOT NULL,
  `date_added` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `oc_customer_ip`
--

INSERT INTO `oc_customer_ip` (`customer_ip_id`, `customer_id`, `ip`, `date_added`) VALUES
(1, 1, '192.168.0.106', '2019-05-23 13:01:45'),
(2, 1, '192.168.0.109', '2019-05-24 10:26:33'),
(3, 2, '192.168.0.113', '2019-06-11 15:31:56'),
(4, 2, '192.168.0.103', '2019-06-12 08:44:32'),
(5, 2, '192.168.0.104', '2019-06-13 10:58:36'),
(6, 2, '192.168.0.111', '2019-06-13 13:17:18'),
(7, 3, '192.168.0.105', '2019-06-14 18:20:10'),
(8, 3, '192.168.0.100', '2019-06-17 12:29:11'),
(9, 4, '192.168.0.103', '2019-08-06 10:11:14'),
(10, 5, '192.168.0.112', '2019-08-07 11:52:42'),
(11, 5, '192.168.0.100', '2019-08-20 10:35:48'),
(12, 5, '192.168.0.106', '2019-08-20 14:46:35'),
(13, 4, '192.168.0.100', '2019-08-22 09:48:44'),
(14, 6, '192.168.0.106', '2019-09-09 14:37:52'),
(15, 7, '192.168.0.112', '2019-09-26 12:21:12'),
(16, 8, '192.168.0.106', '2019-09-28 12:32:59'),
(17, 6, '192.168.0.105', '2019-10-10 09:57:11'),
(18, 9, '192.168.0.102', '2019-12-24 15:48:50'),
(19, 10, '192.168.0.102', '2020-01-20 17:40:19'),
(20, 11, '192.168.0.113', '2020-03-09 13:03:23'),
(21, 12, '192.168.0.106', '2022-07-28 05:14:59'),
(22, 12, '192.168.0.106', '2022-07-28 05:14:59'),
(23, 13, '127.0.0.1', '2022-07-30 06:52:49'),
(24, 14, '192.168.0.106', '2022-08-04 06:04:08'),
(25, 14, '192.168.0.106', '2022-08-04 06:04:08'),
(26, 15, '127.0.0.1', '2022-08-12 09:27:20'),
(27, 16, '127.0.0.1', '2022-08-13 05:20:50'),
(28, 17, '192.168.0.106', '2022-08-17 06:51:31'),
(29, 18, '192.168.0.112', '2022-08-18 07:29:43'),
(30, 19, '192.168.0.106', '2022-08-18 08:01:01'),
(31, 19, '192.168.0.112', '2022-08-22 10:43:30'),
(32, 19, '127.0.0.1', '2022-08-24 04:03:20'),
(33, 20, '192.168.0.109', '2022-11-29 08:57:27'),
(34, 20, '192.168.0.109', '2022-11-29 08:57:27'),
(35, 21, '192.168.0.109', '2022-11-29 09:28:51'),
(36, 22, '192.168.0.104', '2022-12-31 06:58:30'),
(37, 22, '192.168.0.104', '2022-12-31 06:58:30'),
(38, 21, '192.168.0.104', '2022-12-31 08:14:34'),
(39, 12, '192.168.0.104', '2023-01-11 11:31:27'),
(40, 19, '49.36.91.45', '2023-02-02 06:07:04');

-- --------------------------------------------------------

--
-- Table structure for table `oc_customer_login`
--

CREATE TABLE `oc_customer_login` (
  `customer_login_id` int(11) NOT NULL,
  `email` varchar(96) NOT NULL,
  `ip` varchar(40) NOT NULL,
  `total` int(11) NOT NULL,
  `date_added` datetime NOT NULL,
  `date_modified` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `oc_customer_login`
--

INSERT INTO `oc_customer_login` (`customer_login_id`, `email`, `ip`, `total`, `date_added`, `date_modified`) VALUES
(3, 'chandnidobariya111@gmail.com', '192.168.0.105', 1, '2019-10-11 12:23:10', '2019-10-11 12:23:10'),
(6, 'admin@gmai.com', '192.168.0.116', 2, '2021-07-05 06:39:50', '2021-07-05 06:39:57'),
(8, 'sagar@gmail.com', '192.168.0.106', 2, '2022-08-22 05:00:50', '2022-09-13 05:19:19'),
(9, '', '192.168.0.112', 1, '2022-08-22 10:43:09', '2022-08-22 10:43:09'),
(11, 'admin1@gmail.com', '192.168.0.106', 1, '2022-09-13 05:18:53', '2022-09-13 05:18:53'),
(12, 'admin@gmail.com', '192.168.0.106', 1, '2022-09-13 05:19:01', '2022-09-13 05:19:01'),
(13, 'demo1@gmail.com', '192.168.0.106', 1, '2022-09-13 05:19:14', '2022-09-13 05:19:14'),
(16, 'ishitechnolabs', '49.36.91.45', 2, '2023-02-02 10:34:26', '2023-02-02 10:34:40');

-- --------------------------------------------------------

--
-- Table structure for table `oc_customer_online`
--

CREATE TABLE `oc_customer_online` (
  `ip` varchar(40) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `url` text NOT NULL,
  `referer` text NOT NULL,
  `date_added` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `oc_customer_reward`
--

CREATE TABLE `oc_customer_reward` (
  `customer_reward_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL DEFAULT '0',
  `order_id` int(11) NOT NULL DEFAULT '0',
  `description` text NOT NULL,
  `points` int(11) NOT NULL DEFAULT '0',
  `date_added` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `oc_customer_search`
--

CREATE TABLE `oc_customer_search` (
  `customer_search_id` int(11) NOT NULL,
  `store_id` int(11) NOT NULL,
  `language_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `keyword` varchar(255) NOT NULL,
  `category_id` int(11) DEFAULT NULL,
  `sub_category` tinyint(1) NOT NULL,
  `description` tinyint(1) NOT NULL,
  `products` int(11) NOT NULL,
  `ip` varchar(40) NOT NULL,
  `date_added` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `oc_customer_transaction`
--

CREATE TABLE `oc_customer_transaction` (
  `customer_transaction_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `description` text NOT NULL,
  `amount` decimal(15,4) NOT NULL,
  `date_added` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `oc_customer_wishlist`
--

CREATE TABLE `oc_customer_wishlist` (
  `customer_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `date_added` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `oc_customer_wishlist`
--

INSERT INTO `oc_customer_wishlist` (`customer_id`, `product_id`, `date_added`) VALUES
(2, 36, '2019-06-11 15:38:05'),
(2, 28, '2019-06-13 14:42:57'),
(5, 30, '2019-08-12 17:20:18'),
(8, 36, '2019-09-28 12:33:51'),
(8, 28, '2019-09-28 12:35:16'),
(8, 47, '2019-09-28 12:35:54'),
(9, 47, '2019-12-24 15:50:20'),
(9, 49, '2019-12-24 15:50:38'),
(21, 49, '2022-12-31 08:30:59'),
(21, 29, '2023-01-12 03:59:16'),
(21, 33, '2022-11-29 09:31:58'),
(12, 49, '2023-01-11 12:01:34'),
(12, 34, '2023-01-11 12:01:39'),
(21, 48, '2023-01-12 04:29:54');

-- --------------------------------------------------------

--
-- Table structure for table `oc_custom_field`
--

CREATE TABLE `oc_custom_field` (
  `custom_field_id` int(11) NOT NULL,
  `type` varchar(32) NOT NULL,
  `value` text NOT NULL,
  `validation` varchar(255) NOT NULL,
  `location` varchar(10) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `sort_order` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `oc_custom_field_customer_group`
--

CREATE TABLE `oc_custom_field_customer_group` (
  `custom_field_id` int(11) NOT NULL,
  `customer_group_id` int(11) NOT NULL,
  `required` tinyint(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `oc_custom_field_description`
--

CREATE TABLE `oc_custom_field_description` (
  `custom_field_id` int(11) NOT NULL,
  `language_id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `oc_custom_field_value`
--

CREATE TABLE `oc_custom_field_value` (
  `custom_field_value_id` int(11) NOT NULL,
  `custom_field_id` int(11) NOT NULL,
  `sort_order` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `oc_custom_field_value_description`
--

CREATE TABLE `oc_custom_field_value_description` (
  `custom_field_value_id` int(11) NOT NULL,
  `language_id` int(11) NOT NULL,
  `custom_field_id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `oc_download`
--

CREATE TABLE `oc_download` (
  `download_id` int(11) NOT NULL,
  `filename` varchar(160) NOT NULL,
  `mask` varchar(128) NOT NULL,
  `date_added` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `oc_download`
--

INSERT INTO `oc_download` (`download_id`, `filename`, `mask`, `date_added`) VALUES
(1, '948a4b4c3886d1bcfdd203d54bb02f214c554d7f', 'license.pdf', '2019-10-10 09:53:43');

-- --------------------------------------------------------

--
-- Table structure for table `oc_download_description`
--

CREATE TABLE `oc_download_description` (
  `download_id` int(11) NOT NULL,
  `language_id` int(11) NOT NULL,
  `name` varchar(64) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `oc_download_description`
--

INSERT INTO `oc_download_description` (`download_id`, `language_id`, `name`) VALUES
(1, 1, 'Product pdf'),
(1, 2, 'Product pdf');

-- --------------------------------------------------------

--
-- Table structure for table `oc_event`
--

CREATE TABLE `oc_event` (
  `event_id` int(11) NOT NULL,
  `code` varchar(64) NOT NULL,
  `trigger` text NOT NULL,
  `action` text NOT NULL,
  `status` tinyint(1) NOT NULL,
  `sort_order` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `oc_event`
--

INSERT INTO `oc_event` (`event_id`, `code`, `trigger`, `action`, `status`, `sort_order`) VALUES
(1, 'activity_customer_add', 'catalog/model/account/customer/addCustomer/after', 'event/activity/addCustomer', 1, 0),
(2, 'activity_customer_edit', 'catalog/model/account/customer/editCustomer/after', 'event/activity/editCustomer', 1, 0),
(3, 'activity_customer_password', 'catalog/model/account/customer/editPassword/after', 'event/activity/editPassword', 1, 0),
(4, 'activity_customer_forgotten', 'catalog/model/account/customer/editCode/after', 'event/activity/forgotten', 1, 0),
(5, 'activity_transaction', 'catalog/model/account/customer/addTransaction/after', 'event/activity/addTransaction', 1, 0),
(6, 'activity_customer_login', 'catalog/model/account/customer/deleteLoginAttempts/after', 'event/activity/login', 1, 0),
(7, 'activity_address_add', 'catalog/model/account/address/addAddress/after', 'event/activity/addAddress', 1, 0),
(8, 'activity_address_edit', 'catalog/model/account/address/editAddress/after', 'event/activity/editAddress', 1, 0),
(9, 'activity_address_delete', 'catalog/model/account/address/deleteAddress/after', 'event/activity/deleteAddress', 1, 0),
(10, 'activity_affiliate_add', 'catalog/model/account/customer/addAffiliate/after', 'event/activity/addAffiliate', 1, 0),
(11, 'activity_affiliate_edit', 'catalog/model/account/customer/editAffiliate/after', 'event/activity/editAffiliate', 1, 0),
(12, 'activity_order_add', 'catalog/model/checkout/order/addOrderHistory/before', 'event/activity/addOrderHistory', 1, 0),
(13, 'activity_return_add', 'catalog/model/account/return/addReturn/after', 'event/activity/addReturn', 1, 0),
(14, 'mail_transaction', 'catalog/model/account/customer/addTransaction/after', 'mail/transaction', 1, 0),
(15, 'mail_forgotten', 'catalog/model/account/customer/editCode/after', 'mail/forgotten', 1, 0),
(16, 'mail_customer_add', 'catalog/model/account/customer/addCustomer/after', 'mail/register', 1, 0),
(17, 'mail_customer_alert', 'catalog/model/account/customer/addCustomer/after', 'mail/register/alert', 1, 0),
(18, 'mail_affiliate_add', 'catalog/model/account/customer/addAffiliate/after', 'mail/affiliate', 1, 0),
(19, 'mail_affiliate_alert', 'catalog/model/account/customer/addAffiliate/after', 'mail/affiliate/alert', 1, 0),
(20, 'mail_voucher', 'catalog/model/checkout/order/addOrderHistory/after', 'extension/total/voucher/send', 1, 0),
(21, 'mail_order_add', 'catalog/model/checkout/order/addOrderHistory/before', 'mail/order', 1, 0),
(22, 'mail_order_alert', 'catalog/model/checkout/order/addOrderHistory/before', 'mail/order/alert', 1, 0),
(23, 'statistics_review_add', 'catalog/model/catalog/review/addReview/after', 'event/statistics/addReview', 1, 0),
(24, 'statistics_return_add', 'catalog/model/account/return/addReturn/after', 'event/statistics/addReturn', 1, 0),
(25, 'statistics_order_history', 'catalog/model/checkout/order/addOrderHistory/after', 'event/statistics/addOrderHistory', 1, 0),
(26, 'admin_mail_affiliate_approve', 'admin/model/customer/customer_approval/approveAffiliate/after', 'mail/affiliate/approve', 1, 0),
(27, 'admin_mail_affiliate_deny', 'admin/model/customer/customer_approval/denyAffiliate/after', 'mail/affiliate/deny', 1, 0),
(28, 'admin_mail_customer_approve', 'admin/model/customer/customer_approval/approveCustomer/after', 'mail/customer/approve', 1, 0),
(29, 'admin_mail_customer_deny', 'admin/model/customer/customer_approval/denyCustomer/after', 'mail/customer/deny', 1, 0),
(30, 'admin_mail_reward', 'admin/model/customer/customer/addReward/after', 'mail/reward', 1, 0),
(31, 'admin_mail_transaction', 'admin/model/customer/customer/addTransaction/after', 'mail/transaction', 1, 0),
(32, 'admin_mail_return', 'admin/model/sale/return/addReturnHistory/after', 'mail/return', 1, 0),
(33, 'admin_mail_forgotten', 'admin/model/user/user/editCode/after', 'mail/forgotten', 1, 0),
(34, 'advertise_google', 'admin/model/catalog/product/deleteProduct/after', 'extension/advertise/google/deleteProduct', 1, 0),
(35, 'advertise_google', 'admin/model/catalog/product/copyProduct/after', 'extension/advertise/google/copyProduct', 1, 0),
(36, 'advertise_google', 'admin/view/common/column_left/before', 'extension/advertise/google/admin_link', 1, 0),
(37, 'advertise_google', 'admin/model/catalog/product/addProduct/after', 'extension/advertise/google/addProduct', 1, 0),
(38, 'advertise_google', 'catalog/controller/checkout/success/before', 'extension/advertise/google/before_checkout_success', 1, 0),
(39, 'advertise_google', 'catalog/view/common/header/after', 'extension/advertise/google/google_global_site_tag', 1, 0),
(40, 'advertise_google', 'catalog/view/common/success/after', 'extension/advertise/google/google_dynamic_remarketing_purchase', 1, 0),
(41, 'advertise_google', 'catalog/view/product/product/after', 'extension/advertise/google/google_dynamic_remarketing_product', 1, 0),
(42, 'advertise_google', 'catalog/view/product/search/after', 'extension/advertise/google/google_dynamic_remarketing_searchresults', 1, 0),
(43, 'advertise_google', 'catalog/view/product/category/after', 'extension/advertise/google/google_dynamic_remarketing_category', 1, 0),
(44, 'advertise_google', 'catalog/view/common/home/after', 'extension/advertise/google/google_dynamic_remarketing_home', 1, 0),
(45, 'advertise_google', 'catalog/view/checkout/cart/after', 'extension/advertise/google/google_dynamic_remarketing_cart', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `oc_extension`
--

CREATE TABLE `oc_extension` (
  `extension_id` int(11) NOT NULL,
  `type` varchar(32) NOT NULL,
  `code` varchar(32) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `oc_extension`
--

INSERT INTO `oc_extension` (`extension_id`, `type`, `code`) VALUES
(1, 'payment', 'cod'),
(2, 'total', 'shipping'),
(3, 'total', 'sub_total'),
(4, 'total', 'tax'),
(5, 'total', 'total'),
(8, 'total', 'credit'),
(9, 'shipping', 'flat'),
(10, 'total', 'handling'),
(11, 'total', 'low_order_fee'),
(12, 'total', 'coupon'),
(13, 'module', 'category'),
(14, 'module', 'account'),
(15, 'total', 'reward'),
(16, 'total', 'voucher'),
(17, 'payment', 'free_checkout'),
(20, 'theme', 'default'),
(21, 'dashboard', 'activity'),
(22, 'dashboard', 'sale'),
(23, 'dashboard', 'recent'),
(24, 'dashboard', 'order'),
(25, 'dashboard', 'online'),
(26, 'dashboard', 'map'),
(27, 'dashboard', 'customer'),
(28, 'dashboard', 'chart'),
(29, 'report', 'sale_coupon'),
(31, 'report', 'customer_search'),
(32, 'report', 'customer_transaction'),
(33, 'report', 'product_purchased'),
(34, 'report', 'product_viewed'),
(35, 'report', 'sale_return'),
(36, 'report', 'sale_order'),
(37, 'report', 'sale_shipping'),
(38, 'report', 'sale_tax'),
(39, 'report', 'customer_activity'),
(40, 'report', 'customer_order'),
(41, 'report', 'customer_reward'),
(42, 'advertise', 'google'),
(120, 'module', 'slider'),
(49, 'module', 'newslettersubscribe'),
(124, 'module', 'socialfollow'),
(122, 'module', 'bannerblock'),
(60, 'module', 'filter'),
(125, 'module', 'servicesblock'),
(65, 'module', 'latest'),
(87, 'module', 'carousel'),
(110, 'module', 'html'),
(121, 'module', 'categoryblock'),
(136, 'module', 'offersblock'),
(123, 'module', 'fivebannerblock'),
(135, 'module', 'discountblock'),
(130, 'module', 'instagramblock'),
(131, 'module', 'featuredcollectionblock'),
(133, 'module', 'bestsellerblock'),
(134, 'module', 'productservicesblock'),
(137, 'module', 'blogger'),
(141, 'module', 'linklist'),
(142, 'payment', 'paypal'),
(143, 'module', 'franchiseenquiryblock'),
(144, 'module', 'careerblock');

-- --------------------------------------------------------

--
-- Table structure for table `oc_extension_install`
--

CREATE TABLE `oc_extension_install` (
  `extension_install_id` int(11) NOT NULL,
  `extension_download_id` int(11) NOT NULL,
  `filename` varchar(255) NOT NULL,
  `date_added` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `oc_extension_path`
--

CREATE TABLE `oc_extension_path` (
  `extension_path_id` int(11) NOT NULL,
  `extension_install_id` int(11) NOT NULL,
  `path` varchar(255) NOT NULL,
  `date_added` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `oc_filter`
--

CREATE TABLE `oc_filter` (
  `filter_id` int(11) NOT NULL,
  `filter_group_id` int(11) NOT NULL,
  `sort_order` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `oc_filter`
--

INSERT INTO `oc_filter` (`filter_id`, `filter_group_id`, `sort_order`) VALUES
(4, 1, 3),
(3, 1, 2),
(2, 1, 1),
(1, 1, 0),
(5, 2, 0),
(6, 2, 1),
(7, 2, 2),
(10, 3, 2),
(9, 3, 1),
(8, 3, 0),
(13, 4, 1),
(12, 4, 2),
(11, 4, 3),
(14, 1, 4),
(15, 6, 0),
(16, 6, 0),
(17, 6, 0),
(19, 7, 1),
(18, 7, 0),
(22, 8, 2),
(21, 8, 1),
(20, 8, 0),
(24, 9, 2),
(23, 9, 1),
(25, 10, 1),
(26, 10, 2),
(27, 5, 0),
(28, 5, 0);

-- --------------------------------------------------------

--
-- Table structure for table `oc_filter_description`
--

CREATE TABLE `oc_filter_description` (
  `filter_id` int(11) NOT NULL,
  `language_id` int(11) NOT NULL,
  `filter_group_id` int(11) NOT NULL,
  `name` varchar(64) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `oc_filter_description`
--

INSERT INTO `oc_filter_description` (`filter_id`, `language_id`, `filter_group_id`, `name`) VALUES
(17, 1, 6, 'puff Sleeve'),
(4, 1, 1, 'XL'),
(3, 1, 1, 'L'),
(2, 1, 1, 'M'),
(1, 1, 1, 'S'),
(14, 1, 1, 'XXL'),
(16, 1, 6, 'Bell Sleeve'),
(15, 1, 6, 'Frill Sleeve'),
(5, 1, 2, 'Red'),
(6, 1, 2, 'Green'),
(7, 1, 2, 'Blue'),
(10, 1, 3, '2000-3000'),
(9, 1, 3, '1100-2000'),
(8, 1, 3, '500-1000'),
(13, 1, 4, 'Nylon'),
(12, 1, 4, 'Rayon'),
(11, 1, 4, 'Cotton'),
(19, 1, 7, 'one tucks Blouse'),
(18, 1, 7, 'Backless Blouse'),
(22, 1, 8, 'Illusion Neck'),
(21, 1, 8, 'Collared Neck'),
(20, 1, 8, 'Keyhole Neck'),
(24, 1, 9, 'Semi-formal'),
(23, 1, 9, 'Cocktail'),
(25, 1, 10, 'Sweater Blouse'),
(26, 1, 10, 'Princess-Cut Blouse'),
(27, 1, 5, 'In Stock'),
(28, 1, 5, 'Out Of Stock');

-- --------------------------------------------------------

--
-- Table structure for table `oc_filter_group`
--

CREATE TABLE `oc_filter_group` (
  `filter_group_id` int(11) NOT NULL,
  `sort_order` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `oc_filter_group`
--

INSERT INTO `oc_filter_group` (`filter_group_id`, `sort_order`) VALUES
(1, 9),
(2, 6),
(3, 2),
(4, 3),
(5, 1),
(6, 4),
(7, 5),
(8, 7),
(9, 8),
(10, 10);

-- --------------------------------------------------------

--
-- Table structure for table `oc_filter_group_description`
--

CREATE TABLE `oc_filter_group_description` (
  `filter_group_id` int(11) NOT NULL,
  `language_id` int(11) NOT NULL,
  `name` varchar(64) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `oc_filter_group_description`
--

INSERT INTO `oc_filter_group_description` (`filter_group_id`, `language_id`, `name`) VALUES
(1, 1, 'Size'),
(6, 1, 'Sleeves'),
(2, 1, 'Colour'),
(3, 1, 'Price'),
(4, 1, 'Fabric'),
(5, 1, 'Availability'),
(7, 1, 'Blouse Type'),
(8, 1, 'Neckline'),
(9, 1, 'Occasion'),
(10, 1, 'Type');

-- --------------------------------------------------------

--
-- Table structure for table `oc_geo_zone`
--

CREATE TABLE `oc_geo_zone` (
  `geo_zone_id` int(11) NOT NULL,
  `name` varchar(32) NOT NULL,
  `description` varchar(255) NOT NULL,
  `date_added` datetime NOT NULL,
  `date_modified` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `oc_geo_zone`
--

INSERT INTO `oc_geo_zone` (`geo_zone_id`, `name`, `description`, `date_added`, `date_modified`) VALUES
(3, 'UK VAT Zone', 'UK VAT', '2009-01-06 23:26:25', '2010-02-26 22:33:24'),
(4, 'UK Shipping', 'UK Shipping Zones', '2009-06-23 01:14:53', '2010-12-15 15:18:13');

-- --------------------------------------------------------

--
-- Table structure for table `oc_googleshopping_category`
--

CREATE TABLE `oc_googleshopping_category` (
  `google_product_category` varchar(10) NOT NULL,
  `store_id` int(11) NOT NULL DEFAULT '0',
  `category_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `oc_googleshopping_product`
--

CREATE TABLE `oc_googleshopping_product` (
  `product_advertise_google_id` int(10) UNSIGNED NOT NULL,
  `product_id` int(11) DEFAULT NULL,
  `store_id` int(11) NOT NULL DEFAULT '0',
  `has_issues` tinyint(1) DEFAULT NULL,
  `destination_status` enum('pending','approved','disapproved') NOT NULL DEFAULT 'pending',
  `impressions` int(11) NOT NULL DEFAULT '0',
  `clicks` int(11) NOT NULL DEFAULT '0',
  `conversions` int(11) NOT NULL DEFAULT '0',
  `cost` decimal(15,4) NOT NULL DEFAULT '0.0000',
  `conversion_value` decimal(15,4) NOT NULL DEFAULT '0.0000',
  `google_product_category` varchar(10) DEFAULT NULL,
  `condition` enum('new','refurbished','used') DEFAULT NULL,
  `adult` tinyint(1) DEFAULT NULL,
  `multipack` int(11) DEFAULT NULL,
  `is_bundle` tinyint(1) DEFAULT NULL,
  `age_group` enum('newborn','infant','toddler','kids','adult') DEFAULT NULL,
  `color` int(11) DEFAULT NULL,
  `gender` enum('male','female','unisex') DEFAULT NULL,
  `size_type` enum('regular','petite','plus','big and tall','maternity') DEFAULT NULL,
  `size_system` enum('AU','BR','CN','DE','EU','FR','IT','JP','MEX','UK','US') DEFAULT NULL,
  `size` int(11) DEFAULT NULL,
  `is_modified` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `oc_googleshopping_product`
--

INSERT INTO `oc_googleshopping_product` (`product_advertise_google_id`, `product_id`, `store_id`, `has_issues`, `destination_status`, `impressions`, `clicks`, `conversions`, `cost`, `conversion_value`, `google_product_category`, `condition`, `adult`, `multipack`, `is_bundle`, `age_group`, `color`, `gender`, `size_type`, `size_system`, `size`, `is_modified`) VALUES
(1, 50, 0, NULL, 'pending', 0, 0, 0, '0.0000', '0.0000', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0),
(2, 51, 0, NULL, 'pending', 0, 0, 0, '0.0000', '0.0000', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0),
(3, 52, 0, NULL, 'pending', 0, 0, 0, '0.0000', '0.0000', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0),
(4, 53, 0, NULL, 'pending', 0, 0, 0, '0.0000', '0.0000', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0),
(5, 54, 0, NULL, 'pending', 0, 0, 0, '0.0000', '0.0000', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0),
(6, 55, 0, NULL, 'pending', 0, 0, 0, '0.0000', '0.0000', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0),
(7, 56, 0, NULL, 'pending', 0, 0, 0, '0.0000', '0.0000', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `oc_googleshopping_product_status`
--

CREATE TABLE `oc_googleshopping_product_status` (
  `product_id` int(11) NOT NULL DEFAULT '0',
  `store_id` int(11) NOT NULL DEFAULT '0',
  `product_variation_id` varchar(64) NOT NULL DEFAULT '',
  `destination_statuses` text NOT NULL,
  `data_quality_issues` text NOT NULL,
  `item_level_issues` text NOT NULL,
  `google_expiration_date` int(11) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `oc_googleshopping_product_target`
--

CREATE TABLE `oc_googleshopping_product_target` (
  `product_id` int(11) NOT NULL,
  `store_id` int(11) NOT NULL DEFAULT '0',
  `advertise_google_target_id` int(10) UNSIGNED NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `oc_googleshopping_target`
--

CREATE TABLE `oc_googleshopping_target` (
  `advertise_google_target_id` int(10) UNSIGNED NOT NULL,
  `store_id` int(11) NOT NULL DEFAULT '0',
  `campaign_name` varchar(255) NOT NULL DEFAULT '',
  `country` varchar(2) NOT NULL DEFAULT '',
  `budget` decimal(15,4) NOT NULL DEFAULT '0.0000',
  `feeds` text NOT NULL,
  `status` enum('paused','active') NOT NULL DEFAULT 'paused',
  `date_added` date DEFAULT NULL,
  `roas` int(11) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `oc_information`
--

CREATE TABLE `oc_information` (
  `information_id` int(11) NOT NULL,
  `bottom` int(11) NOT NULL DEFAULT '0',
  `sort_order` int(11) NOT NULL DEFAULT '0',
  `status` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `oc_information`
--

INSERT INTO `oc_information` (`information_id`, `bottom`, `sort_order`, `status`) VALUES
(3, 1, 3, 1),
(4, 1, 1, 1),
(5, 1, 4, 1),
(6, 1, 2, 1),
(8, 1, 5, 1),
(9, 1, 6, 1),
(10, 1, 0, 1),
(12, 1, 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `oc_information_description`
--

CREATE TABLE `oc_information_description` (
  `information_id` int(11) NOT NULL,
  `language_id` int(11) NOT NULL,
  `title` varchar(64) NOT NULL,
  `breadcrumb_image` varchar(255) DEFAULT NULL,
  `description` mediumtext NOT NULL,
  `meta_title` varchar(255) NOT NULL,
  `meta_description` varchar(255) NOT NULL,
  `meta_keyword` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `oc_information_description`
--

INSERT INTO `oc_information_description` (`information_id`, `language_id`, `title`, `breadcrumb_image`, `description`, `meta_title`, `meta_description`, `meta_keyword`) VALUES
(4, 1, 'About Us', 'catalog/categoryimage.png', '&lt;div class=&quot;about row&quot;&gt;\r\n    &lt;div class=&quot;about-content about1&quot;&gt;\r\n        &lt;div class=&quot;about-image col-lg-6 col-md-6 col-sm-12 col-xs-12&quot;&gt;\r\n            &lt;img src=&quot;image/catalog/aboutimage-1.png&quot; alt=&quot;About-Us&quot;&gt;\r\n        &lt;/div&gt;\r\n        &lt;div class=&quot;about-desc col-lg-6 col-md-6 col-sm-12 col-xs-12&quot;&gt;\r\n            &lt;p&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sed molestie ligula. Sed aliquet arcu ut dolor placerat dapibus. Curabitur eleifend luctus rutrum. Integer lobortis diam in gravida malesuada. Aliquam accumsan enim vestibulum, suscipit quam et, laoreet tellus. Suspendisse accumsan quam ac tincidunt tempor. Donec efficitur tempor vulputate. Duis vel molestie lacus. Donec ornare libero ultrices justo dictum porta. Praesent condimentum, velit quis viverra blandit, augue nunc venenatis magna, quis condimentum massa est dictum ipsum. Pellentesque turpis risus, facilisis a ante sed, mollis mattis neque. In metus magna, tempor at ligula vel, consequat tincidunt mi.&lt;/p&gt;\r\n            &lt;p&gt;Nunc vel dui ultrices, sodales sem ac, congue leo. Etiam arcu nunc, malesuada eget suscipit non, bibendum vel elit. Nulla semper orci elit, vel elementum eros tempor id. In hac habitasse platea dictumst. In quis massa ut lorem facilisis egestas. Phasellus iaculis est nec aliquet condimentum. Suspendisse potenti. Proin dictum ut elit vel mattis. Aenean vehicula dictum tellus vel interdum.&lt;/p&gt;\r\n        &lt;/div&gt;\r\n    &lt;/div&gt; \r\n    &lt;div class=&quot;about-content about2&quot;&gt;\r\n        &lt;div class=&quot;about-image col-lg-6 col-md-6 col-sm-12 col-xs-12&quot;&gt;\r\n            &lt;img src=&quot;image/catalog/aboutimage-2.png&quot; alt=&quot;About-Us&quot;&gt;\r\n        &lt;/div&gt;\r\n        &lt;div class=&quot;about-desc col-lg-6 col-md-6 col-sm-12 col-xs-12&quot;&gt;\r\n            &lt;p&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sed molestie ligula. Sed aliquet arcu ut dolor placerat dapibus. Curabitur eleifend luctus rutrum. Integer lobortis diam in gravida malesuada. Aliquam accumsan enim vestibulum, suscipit quam et, laoreet tellus. Suspendisse accumsan quam ac tincidunt tempor. Donec efficitur tempor vulputate. Duis vel molestie lacus. Donec ornare libero ultrices justo dictum porta. Praesent condimentum, velit quis viverra blandit, augue nunc venenatis magna, quis condimentum massa est dictum ipsum. Pellentesque turpis risus, facilisis a ante sed, mollis mattis neque. In metus magna, tempor at ligula vel, consequat tincidunt mi.&lt;/p&gt;\r\n            &lt;p&gt;Nunc vel dui ultrices, sodales sem ac, congue leo. Etiam arcu nunc, malesuada eget suscipit non, bibendum vel elit. Nulla semper orci elit, vel elementum eros tempor id. In hac habitasse platea dictumst. In quis massa ut lorem facilisis egestas. Phasellus iaculis est nec aliquet condimentum. Suspendisse potenti. Proin dictum ut elit vel mattis. Aenean vehicula dictum tellus vel interdum.&lt;/p&gt;\r\n        &lt;/div&gt;\r\n    &lt;/div&gt; \r\n&lt;/div&gt;', 'About Us', '', ''),
(12, 1, 'Terms &amp; Conditions', 'catalog/termsandcondition.png', ' \r\n&lt;h4&gt;Terms of Privacy&lt;/h4&gt;\r\n&lt;p&gt;The terms &quot;We&quot; / &quot;Us&quot; / &quot;Our&quot;/”Company” individually and collectively refer to “Narita Lifestyle ” and\r\nthe terms &quot;You&quot; /&quot;Your&quot; / &quot;Yourself&quot; refer to the users.&lt;/p&gt;\r\n&lt;p&gt;We have several areas on this Site &amp;amp; our social media campaigns where you can submit personal and\r\nother information to us. The types of personal information we may obtain or you may choose to provide\r\ninclude:&lt;/p&gt;\r\n&lt;p&gt;-Contact information (such as name, postal or e-mail address, and phone number)&lt;/p&gt;\r\n&lt;p&gt;-Your professional information (such as job title, department, and name of organization)&lt;/p&gt;\r\n&lt;p&gt;-Subscription details&lt;/p&gt;\r\n&lt;p&gt;-Other Information which we may ask or you may choose to provide.&lt;/p&gt;\r\n&lt;h4&gt;Subscription details&lt;/h4&gt;\r\n&lt;p&gt;How We Use Your Information&lt;/p&gt;\r\n&lt;p&gt;Communications with You – Offerings and Services in Which You Expressed Interest, Newsletters, and\r\nMarketing Purposes&lt;/p&gt;\r\n&lt;p&gt;We also may use the information in other ways for which we provide specific notice at the time of\r\ncollection.&lt;/p&gt;\r\n&lt;h4&gt;USE OF CONTENT&lt;/h4&gt;\r\n&lt;p&gt;All logos, brands, marks headings, labels, names, signatures, numerals, shapes or any combinations\r\nthereof, appearing in this site, except as otherwise noted, are properties either owned, or used under\r\nlicense, by the business and / or its associate entities who feature on this Website. The use of these\r\nproperties or any other content on this site, except as provided in these terms and conditions or in the\r\nsite content, is strictly prohibited.&lt;/p&gt;\r\n&lt;p&gt;You may not sell or modify the content of this Website or reproduce, display, publicly perform,\r\ndistribute, or otherwise use the materials in any way for any public or commercial purpose without the\r\nrespective organization’s or entity’s written permission.&lt;/p&gt;\r\n&lt;h4&gt;ACCEPTABLE WEBSITE USE&lt;/h4&gt;\r\n&lt;h5&gt;(A) Security Rules&lt;/h5&gt;\r\n&lt;p&gt;Visitors are prohibited from violating or attempting to violate the security of the Website, including,\r\nwithout limitation, (1) accessing data not intended for such user or logging into a server or account\r\nwhich the user is not authorized to access, (2) attempting to probe, scan or test the vulnerability of a\r\nsystem or network or to breach security or authentication measures without proper authorization, (3)\r\nattempting to interfere with service to any user, host or network, including, without limitation, via\r\nmeans of submitting a virus or &quot;Trojan horse&quot; to the Website, overloading, &quot;flooding&quot;, &quot;mail bombing&quot;\r\nor &quot;crashing&quot;, or (4) sending unsolicited electronic mail, including promotions and/or advertising of\r\n\r\nproducts or services. Violations of system or network security may result in civil or criminal liability. The\r\nbusiness and / or its associate entities will have the right to investigate occurrences that they suspect as\r\ninvolving such violations and will have the right to involve, and cooperate with, law enforcement\r\nauthorities in prosecuting users who are involved in such violations&lt;/p&gt;\r\n&lt;h5&gt;(B) General Rules&lt;/h5&gt;\r\n&lt;p&gt;Visitors may not use the Website in order to transmit, distribute, store or destroy material (a) that could\r\nconstitute or encourage conduct that would be considered a criminal offence or violate any applicable\r\nlaw or regulation, (b) in a manner that will infringe the copyright, trademark, trade secret or other\r\nintellectual property rights of others or violate the privacy or publicity of other personal rights of others,\r\nor (c) that is libelous, defamatory, pornographic, profane, obscene, threatening, abusive or hateful.&lt;/p&gt;\r\n&lt;h5&gt;INDEMNITY&lt;/h5&gt;\r\n&lt;p&gt;The User unilaterally agree to indemnify and hold harmless, without objection, the Company, its\r\nofficers, directors, employees and agents from and against any claims, actions and/or demands and/or\r\nliabilities and/or losses and/or damages whatsoever arising from or resulting from their use of\r\nwww.nareity.com or their breach of the terms.&lt;/p&gt;\r\n&lt;h5&gt;LIABILITY&lt;/h5&gt;\r\n&lt;p&gt;User agrees that neither Company nor its group companies, directors, officers or employee shall be\r\nliable for any direct or/and indirect or/and incidental or/and special or/and consequential or/and\r\nexemplary damages, resulting from the use or/and the inability to use the service or/and for cost of\r\nprocurement of substitute goods or/and services or resulting from any goods or/and data or/and\r\ninformation or/and services purchased or/and obtained or/and messages received or/and transactions\r\nentered into through or/and from the service or/and resulting from unauthorized access to or/and\r\nalteration of user\'s transmissions or/and data or/and arising from any other matter relating to the\r\nservice, including but not limited to, damages for loss of profits or/and use or/and data or other\r\nintangible, even if Company has been advised of the possibility of such damages.&lt;/p&gt;\r\n&lt;p&gt;User further agrees that Company shall not be liable for any damages arising from interruption,\r\nsuspension or termination of service, including but not limited to direct or/and indirect or/and incidental\r\nor/and special consequential or/and exemplary damages, whether such interruption or/and suspension\r\nor/and termination was justified or not, negligent or intentional, inadvertent or advertent.&lt;/p&gt;\r\n&lt;p&gt;User agrees that Company shall not be responsible or liable to user, or anyone, for the statements or\r\nconduct of any third party of the service. In sum, in no event shall Company\'s total liability to the User\r\nfor all damages or/and losses or/and causes of action exceed the amount paid by the User to Company,\r\nif any, that is related to the cause of action.&lt;/p&gt;\r\n&lt;h5&gt;SCLAIMER OF CONSEQUENTIAL DAMAGES&lt;/h5&gt;\r\n&lt;p&gt;In no event shall Company or any parties, organizations or entities associated with the corporate brand\r\nname us or otherwise, mentioned at this Website be liable for any damages whatsoever (including,\r\nwithout limitations, incidental and consequential damages, lost profits, or damage to computer\r\nhardware or loss of data information or business interruption) resulting from the use or inability to use\r\nthe Website and the Website material, whether based on warranty, contract, tort, or any other legal\r\ntheory, and whether or not, such organization or entities were advised of the possibility of such\r\ndamages.&lt;/p&gt;\r\n&lt;h4&gt;Grievance Officer&lt;/h4&gt;\r\n&lt;h5&gt;Mr xxxxx:&lt;/h5&gt;\r\n&lt;h5&gt;Designation:&lt;/h5&gt;\r\n&lt;h5&gt;Address:&lt;/h5&gt;\r\n&lt;h5&gt;Contact:&lt;/h5&gt;\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n', 'Terms &amp; Conditions', '', ''),
(8, 1, 'Information', 'catalog/categoryimage.png', ' \r\n&lt;h4&gt;Narita&lt;/h4&gt;	\r\n&lt;p&gt;Abiding by the meaning of the name– Princess with strength – NARITA was evolved to add a touch of\r\nglam, style &amp;amp; panache to every woman’s outfit thereby enhancing her beauty, elegance and charm.\r\nWhen talking about perfect Indian ethnic attire – saree is the first thing that pops in our mind. A chic &amp;amp;\r\nclassy blouse is what completes a saree when combined with accessories.\r\nIn today’s trendy world, women are inclined towards being modish &amp;amp; confident and that’s clearly seen in\r\ntheir attire. Blouses today are not only paired with sarees but also with skirts, palazzos, lehengas,\r\nuniforms and more.&lt;/p&gt;\r\n&lt;p&gt;But when it comes to shopping blouses, women are still unable to shop it with ease. We identified a void\r\nin the blouse segment wherein the options are limited &amp;amp; its availability on both – online and an offline\r\nplatform is low.&lt;/p&gt;\r\n&lt;p&gt;Narita Lifestyle aims to solve and simplify online &amp;amp; offline shopping of blouses. We are the only brand\r\nwhich exclusively deals in women ethnic and contemporary blouses, with an in-store shop experience\r\nand website for online shopping.&lt;/p&gt;\r\n&lt;h5&gt;man’s woes and how Narita resolves them all&lt;/h5&gt;\r\n&lt;p&gt;There are a gamut of reasons responsible behind women woes while making a purchase of saree\r\nblouses. This includes stitching time &amp;amp; cost attached to it and limited options available in the market at\r\nan economical price range. Moreover, Lead time is another issue when ordering blouse online, if the\r\nblouse does not fits well, one will have to raise the return request which consumes more time.&lt;/p&gt;\r\n&lt;p&gt;Therefore, to purchase or stitch a blouse, ladies have to plan in advance or pay demanded amount to\r\nthe tailors or designers.&lt;/p&gt;\r\n&lt;p&gt;Currently there are no key players in India making any attempt to sort the above-mentioned issues\r\nexclusively. So, we decided to tap on to it to avail ease &amp;amp; convenience in shopping of blouses online &amp;amp;\r\noffline.&lt;/p&gt;\r\n&lt;h5&gt;Narita’s Galore&lt;/h5&gt;\r\n&lt;p&gt;At Narita Lifestyle, one can explore an array of traditional and modern ready-made blouses suitable to\r\nmatch with your sarees, skirts, palazzos, lehengas for auspicious occasions, parties, indo-western\r\nstatement outfit, casual wear, uniforms and more.&lt;/p&gt;\r\n&lt;p&gt;Our blouses are available in wide range of color, patterns and unique styles- ones never seen before at\r\nboth online and offline stores. From cotton, velvet, georgette, silk, linen, net and more we have unique\r\ndesigner &amp;amp; casual blouses available in all fabric. For a classic appeal we have blouses Inspired from\r\nbollywood celebs, trending designs inspired from renowned designers and dress makers across the\r\nglobe.&lt;/p&gt;\r\n&lt;h4&gt;Why us?&lt;/h4&gt;\r\n&lt;h5&gt;One stop solution&lt;/h5&gt;\r\n&lt;p&gt;Narita Lifestyle is a one stop solution for ethnic, modern and custom made readily available blouse.&lt;/p&gt;\r\n\r\n&lt;h5&gt;Quality &amp;amp; Variety&lt;/h5&gt;\r\n&lt;p&gt;Explore a uniquely wide range of blouses curated with superior quality fabric, that’s durable and adds to\r\nyour ethnic glam.&lt;/p&gt;\r\n\r\n&lt;h5&gt;Economical Range&lt;/h5&gt;\r\n&lt;p&gt;We offer a plethora of readymade &amp;amp; customized blouse at an economical range starting from 200 INR\r\nTO 20,000 INR.&lt;/p&gt;\r\n\r\n&lt;h5&gt;Timely delivery &amp;amp; returns&lt;/h5&gt;\r\n&lt;p&gt;Shop hassle free as we avail the benefit of custom-made solutions with minimum lead time delivery and\r\nreturn service.&lt;/p&gt;\r\n\r\n&lt;h5&gt;Environment Friendly&lt;/h5&gt;\r\n&lt;p&gt;We are an eco-friendly; sustainable and environmentally safe company with an aim to generate\r\nemployment of 3000 employees which majorly includes women tribe fulfilling the motto for the women\r\nby the women.&lt;/p&gt;\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n', 'Information', '', ''),
(3, 1, 'Privacy Policy', 'catalog/categoryimage.png', '\r\n&lt;h4&gt;PRIVACY POLICY&lt;/h4&gt;	\r\n&lt;p&gt;This privacy policy states how Narita Lifestyle uses and protects any information that you give when you\r\nuse this website&lt;/p&gt;\r\n&lt;p&gt;Narita Lifestyle ensures that your privacy is protected. We may ask you to provide certain information\r\nby which you can be identified when using this website; this information will only be used in accordance\r\nwith this privacy statement.&lt;/p&gt;\r\n&lt;p&gt;Narita Lifestyle may change this policy from time to time by updating this page. You should check this\r\npage from time to time to ensure that you are happy with any changes. We may collect the following\r\ninformation:&lt;/p&gt;\r\n&lt;p&gt;Name and Date of birth&lt;/p&gt;\r\n&lt;p&gt;Contact information including email address&lt;/p&gt;\r\n&lt;p&gt;Demographic information such as postcode, preferences and interests&lt;/p&gt;\r\n&lt;p&gt;Other information relevant to customer surveys and/or offers&lt;/p&gt;\r\n&lt;p&gt;We require this information to understand your needs and provide you with a better service, and in\r\nparticular for the following reasons:&lt;/p&gt;\r\n&lt;p&gt;Internal record keeping&lt;/p&gt;\r\n&lt;p&gt;We may use the information to improve our products and services&lt;/p&gt;\r\n&lt;p&gt;We may periodically send promotional emails about new products, special offers or other information\r\nwhich we think you may find interesting using the email address which you have provided&lt;/p&gt;\r\n&lt;p&gt;From time to time, we may also use your information to contact you for market research purposes. We\r\nmay contact you by email, phone, fax or mail. We may use the information to customize the website\r\naccording to your interests.&lt;/p&gt;\r\n&lt;h5&gt;Security:&lt;/h5&gt;\r\n&lt;p&gt;We are committed to ensuring that your information is secure. In order to prevent unauthorized access\r\nor disclosure we have put in place suitable physical, electronic and managerial procedures to safeguard\r\nand secure the information we collect online.&lt;/p&gt;\r\n&lt;h5&gt;How we use cookies:&lt;/h5&gt;\r\n&lt;p&gt;A cookie is a small file which asks permission to be placed on your computer\'s hard drive. Once you\r\nagree, the file is added and the cookie helps analyze web traffic or lets you know when you visit a\r\nparticular site&lt;/p&gt;\r\n&lt;p&gt;Cookies allow web applications to respond to you as an individual. The web application can tailor its\r\noperations to your needs, likes and dislikes by gathering and remembering information about your\r\npreferences&lt;/p&gt;\r\n&lt;p&gt;We use traffic log cookies to identify which pages are being used. This helps us analyze data about web\r\npage traffic and improve our website in order to tailor it to customer needs. We only use this\r\ninformation for statistical analysis purposes and then the data is removed from the system&lt;/p&gt;\r\n&lt;p&gt;Overall, cookies help us provide you with a better website, by enabling us to monitor which pages you\r\nfind useful and which you do not. A cookie doesn’t gives us access to your computer or any information\r\nabout you, other than the data you choose to share with us&lt;/p&gt;\r\n&lt;p&gt;You can choose to accept or decline cookies. Most web browsers automatically accept cookies, but you\r\ncan usually modify your browser setting to decline cookies if you prefer. This may prevent you from\r\ntaking full advantage of the website&lt;/p&gt;\r\n&lt;h5&gt;Links to other websites:&lt;/h5&gt;\r\n&lt;p&gt;Our website may contain links to other websites of interest. However, once you have used these links to\r\nleave our site, you should note that we do not have any control over that other website. Therefore, we\r\ncannot be responsible for the protection and privacy of any information which you provide whilst\r\nvisiting such sites and those sites are not governed by this privacy statement. You should exercise\r\ncaution and look at the privacy statement applicable to the website in question.&lt;/p&gt;\r\n&lt;p&gt;Controlling your personal information&lt;/p&gt;\r\n&lt;p&gt;You may choose to restrict the collection or use of your personal information in the following ways:&lt;/p&gt;\r\n&lt;p&gt;Whenever you are asked to fill in a form on the website, look for the box that you can click to indicate\r\nthat you do not want the information to be used by anybody for direct marketing purposes&lt;/p&gt;\r\n&lt;p&gt;if you have previously agreed to us using your personal information for direct marketing purposes, you\r\nmay change your mind at any time by writing to or emailing us on our email id&lt;/p&gt;\r\n&lt;p&gt;We will not sell, distribute or lease your personal information to third parties unless we have your\r\npermission or are required by law to do so. We may use your personal information to send you\r\npromotional information about third parties which we think you may find interesting if you tell us that\r\nyou wish this to happen&lt;/p&gt;\r\n&lt;p&gt;You may request details of personal information which we hold about you under the Data Protection Act\r\n1998. A small fee will be payable. If you would like a copy of the information held on you please write to\r\nus and mail it on the given id.&lt;/p&gt;\r\n&lt;p&gt;If you believe that any information we are holding on you is incorrect or incomplete, please write to us\r\nor email us as soon as possible. We will promptly correct any information found to be incorrect&lt;/p&gt;\r\n&lt;h5&gt;Contact Us:&lt;/h5&gt;\r\n&lt;p&gt;If there are any questions regarding this privacy policy you may contact us using the information below:&lt;/p&gt;\r\n&lt;h5&gt;Address:&lt;/h5&gt;\r\n&lt;h5&gt;Contact:&lt;/h5&gt;\r\n&lt;h5&gt;Email:&lt;/h5&gt;\r\n\r\n\r\n\r\n\r\n\r\n', 'Privacy Policy', '', ''),
(6, 1, 'Delivery', 'catalog/categoryimage.png', ' \r\n&lt;h4&gt;Narita&lt;/h4&gt;	\r\n&lt;p&gt;Abiding by the meaning of the name– Princess with strength – NARITA was evolved to add a touch of\r\nglam, style &amp;amp; panache to every woman’s outfit thereby enhancing her beauty, elegance and charm.\r\nWhen talking about perfect Indian ethnic attire – saree is the first thing that pops in our mind. A chic &amp;amp;\r\nclassy blouse is what completes a saree when combined with accessories.\r\nIn today’s trendy world, women are inclined towards being modish &amp;amp; confident and that’s clearly seen in\r\ntheir attire. Blouses today are not only paired with sarees but also with skirts, palazzos, lehengas,\r\nuniforms and more.&lt;/p&gt;\r\n&lt;p&gt;But when it comes to shopping blouses, women are still unable to shop it with ease. We identified a void\r\nin the blouse segment wherein the options are limited &amp;amp; its availability on both – online and an offline\r\nplatform is low.&lt;/p&gt;\r\n&lt;p&gt;Narita Lifestyle aims to solve and simplify online &amp;amp; offline shopping of blouses. We are the only brand\r\nwhich exclusively deals in women ethnic and contemporary blouses, with an in-store shop experience\r\nand website for online shopping.&lt;/p&gt;\r\n&lt;h5&gt;man’s woes and how Narita resolves them all&lt;/h5&gt;\r\n&lt;p&gt;There are a gamut of reasons responsible behind women woes while making a purchase of saree\r\nblouses. This includes stitching time &amp;amp; cost attached to it and limited options available in the market at\r\nan economical price range. Moreover, Lead time is another issue when ordering blouse online, if the\r\nblouse does not fits well, one will have to raise the return request which consumes more time.&lt;/p&gt;\r\n&lt;p&gt;Therefore, to purchase or stitch a blouse, ladies have to plan in advance or pay demanded amount to\r\nthe tailors or designers.&lt;/p&gt;\r\n&lt;p&gt;Currently there are no key players in India making any attempt to sort the above-mentioned issues\r\nexclusively. So, we decided to tap on to it to avail ease &amp;amp; convenience in shopping of blouses online &amp;amp;\r\noffline.&lt;/p&gt;\r\n&lt;h5&gt;Narita’s Galore&lt;/h5&gt;\r\n&lt;p&gt;At Narita Lifestyle, one can explore an array of traditional and modern ready-made blouses suitable to\r\nmatch with your sarees, skirts, palazzos, lehengas for auspicious occasions, parties, indo-western\r\nstatement outfit, casual wear, uniforms and more.&lt;/p&gt;\r\n&lt;p&gt;Our blouses are available in wide range of color, patterns and unique styles- ones never seen before at\r\nboth online and offline stores. From cotton, velvet, georgette, silk, linen, net and more we have unique\r\ndesigner &amp;amp; casual blouses available in all fabric. For a classic appeal we have blouses Inspired from\r\nbollywood celebs, trending designs inspired from renowned designers and dress makers across the\r\nglobe.&lt;/p&gt;\r\n&lt;h4&gt;Why us?&lt;/h4&gt;\r\n&lt;h5&gt;One stop solution&lt;/h5&gt;\r\n&lt;p&gt;Narita Lifestyle is a one stop solution for ethnic, modern and custom made readily available blouse.&lt;/p&gt;\r\n\r\n&lt;h5&gt;Quality &amp;amp; Variety&lt;/h5&gt;\r\n&lt;p&gt;Explore a uniquely wide range of blouses curated with superior quality fabric, that’s durable and adds to\r\nyour ethnic glam.&lt;/p&gt;\r\n\r\n&lt;h5&gt;Economical Range&lt;/h5&gt;\r\n&lt;p&gt;We offer a plethora of readymade &amp;amp; customized blouse at an economical range starting from 200 INR\r\nTO 20,000 INR.&lt;/p&gt;\r\n\r\n&lt;h5&gt;Timely delivery &amp;amp; returns&lt;/h5&gt;\r\n&lt;p&gt;Shop hassle free as we avail the benefit of custom-made solutions with minimum lead time delivery and\r\nreturn service.&lt;/p&gt;\r\n\r\n&lt;h5&gt;Environment Friendly&lt;/h5&gt;\r\n&lt;p&gt;We are an eco-friendly; sustainable and environmentally safe company with an aim to generate\r\nemployment of 3000 employees which majorly includes women tribe fulfilling the motto for the women\r\nby the women.&lt;/p&gt;\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n', 'Delivery', '', ''),
(9, 1, 'Careers', 'catalog/categoryimage.png', '&lt;p&gt;&lt;br&gt;&lt;/p&gt;', 'Careers', '', ''),
(10, 1, 'Franchise Enquiry', 'catalog/FranchiseEnquiry.png', '&lt;p&gt;&lt;br&gt;&lt;/p&gt;', 'Franchise Enquiry', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `oc_information_to_layout`
--

CREATE TABLE `oc_information_to_layout` (
  `information_id` int(11) NOT NULL,
  `store_id` int(11) NOT NULL,
  `layout_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `oc_information_to_layout`
--

INSERT INTO `oc_information_to_layout` (`information_id`, `store_id`, `layout_id`) VALUES
(4, 0, 0),
(6, 0, 0),
(3, 0, 0),
(5, 0, 0),
(8, 0, 0),
(9, 0, 24),
(10, 0, 23),
(12, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `oc_information_to_store`
--

CREATE TABLE `oc_information_to_store` (
  `information_id` int(11) NOT NULL,
  `store_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `oc_information_to_store`
--

INSERT INTO `oc_information_to_store` (`information_id`, `store_id`) VALUES
(3, 0),
(4, 0),
(5, 0),
(6, 0),
(8, 0),
(9, 0),
(10, 0),
(12, 0);

-- --------------------------------------------------------

--
-- Table structure for table `oc_ishi_bannerblock`
--

CREATE TABLE `oc_ishi_bannerblock` (
  `ishi_bennerblock_id` int(11) NOT NULL,
  `module_id` int(11) NOT NULL,
  `banner_id` int(11) NOT NULL,
  `language_id` int(11) NOT NULL,
  `title` varchar(64) NOT NULL,
  `button_name` varchar(25) NOT NULL,
  `link` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `sort_order` int(11) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `oc_ishi_sliderimage`
--

CREATE TABLE `oc_ishi_sliderimage` (
  `ishi_sliderimage_id` int(11) NOT NULL,
  `module_id` int(11) NOT NULL,
  `language_id` int(11) NOT NULL,
  `title` varchar(64) NOT NULL,
  `link` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `sort_order` int(11) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `oc_language`
--

CREATE TABLE `oc_language` (
  `language_id` int(11) NOT NULL,
  `name` varchar(32) NOT NULL,
  `code` varchar(5) NOT NULL,
  `locale` varchar(255) NOT NULL,
  `image` varchar(64) NOT NULL,
  `directory` varchar(32) NOT NULL,
  `sort_order` int(11) NOT NULL DEFAULT '0',
  `status` tinyint(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `oc_language`
--

INSERT INTO `oc_language` (`language_id`, `name`, `code`, `locale`, `image`, `directory`, `sort_order`, `status`) VALUES
(1, 'English', 'en-gb', 'en-US,en_US.UTF-8,en_US,en-gb,english', 'gb.png', 'english', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `oc_layout`
--

CREATE TABLE `oc_layout` (
  `layout_id` int(11) NOT NULL,
  `name` varchar(64) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `oc_layout`
--

INSERT INTO `oc_layout` (`layout_id`, `name`) VALUES
(1, 'Home'),
(2, 'Product'),
(3, 'Category'),
(4, 'Default'),
(5, 'Manufacturer'),
(6, 'Account'),
(7, 'Checkout'),
(8, 'Contact'),
(9, 'Sitemap'),
(10, 'Affiliate'),
(11, 'Information'),
(12, 'Compare'),
(13, 'Search'),
(23, 'Franchise Enquiry'),
(24, 'Career');

-- --------------------------------------------------------

--
-- Table structure for table `oc_layout_module`
--

CREATE TABLE `oc_layout_module` (
  `layout_module_id` int(11) NOT NULL,
  `layout_id` int(11) NOT NULL,
  `code` varchar(64) NOT NULL,
  `position` varchar(14) NOT NULL,
  `sort_order` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `oc_layout_module`
--

INSERT INTO `oc_layout_module` (`layout_module_id`, `layout_id`, `code`, `position`, `sort_order`) VALUES
(6881, 3, 'servicesblock.140', 'footerafter', 1),
(6933, 6, 'socialfollow.139', 'footerbefore', 0),
(6934, 6, 'linklist.158', 'footermiddle', 0),
(6890, 7, 'newslettersubscribe.38', 'footermiddle', 1),
(6875, 10, 'servicesblock.140', 'footerafter', 1),
(6936, 6, 'servicesblock.140', 'footerafter', 1),
(6879, 3, 'linklist.158', 'footermiddle', 0),
(6872, 10, 'socialfollow.139', 'footerbefore', 0),
(6880, 3, 'newslettersubscribe.38', 'footermiddle', 1),
(6891, 7, 'servicesblock.140', 'footerafter', 1),
(7013, 1, 'linklist.158', 'footermiddle', 0),
(6895, 12, 'newslettersubscribe.38', 'footermiddle', 1),
(6874, 10, 'newslettersubscribe.38', 'footermiddle', 1),
(6893, 12, 'socialfollow.139', 'footerbefore', 0),
(6898, 8, 'socialfollow.139', 'footerbefore', 0),
(6903, 4, 'socialfollow.139', 'footerbefore', 0),
(6908, 11, 'socialfollow.139', 'footerbefore', 0),
(7014, 1, 'newslettersubscribe.38', 'footermiddle', 1),
(6913, 5, 'socialfollow.139', 'footerbefore', 0),
(7012, 1, 'socialfollow.139', 'footerbefore', 0),
(6923, 13, 'socialfollow.139', 'footerbefore', 0),
(7011, 1, 'blogger.155', 'content_top', 9),
(6928, 9, 'socialfollow.139', 'footerbefore', 0),
(7010, 1, 'instagramblock.148', 'content_top', 8),
(7009, 1, 'discountblock.153', 'content_top', 7),
(6999, 2, 'linklist.158', 'footermiddle', 0),
(6998, 2, 'socialfollow.139', 'footerbefore', 0),
(6997, 2, 'html.159', 'content_bottom', 0),
(7008, 1, 'categoryblock.136', 'content_top', 6),
(6878, 3, 'socialfollow.139', 'footerbefore', 0),
(7005, 1, 'bestsellerblock.151', 'content_top', 3),
(7006, 1, 'bannerblock.137', 'content_top', 4),
(7007, 1, 'fivebannerblock.138', 'content_top', 5),
(6935, 6, 'newslettersubscribe.38', 'footermiddle', 1),
(6932, 6, 'account', 'column_left', 0),
(6873, 10, 'linklist.158', 'footermiddle', 0),
(6871, 10, 'filter', 'column_left', 0),
(6877, 3, 'offersblock.154', 'content_top', 0),
(6876, 3, 'filter', 'column_left', 0),
(6889, 7, 'linklist.158', 'footermiddle', 0),
(6894, 12, 'linklist.158', 'footermiddle', 0),
(6892, 12, 'filter', 'column_left', 3),
(6899, 8, 'linklist.158', 'footermiddle', 0),
(6897, 8, 'filter', 'column_left', 0),
(6904, 4, 'linklist.158', 'footermiddle', 0),
(6902, 4, 'filter', 'column_left', 0),
(6909, 11, 'linklist.158', 'footermiddle', 0),
(6907, 11, 'filter', 'column_left', 0),
(6914, 5, 'linklist.158', 'footermiddle', 0),
(6912, 5, 'filter', 'column_left', 0),
(6924, 13, 'linklist.158', 'footermiddle', 0),
(6922, 13, 'filter', 'column_left', 0),
(6929, 9, 'linklist.158', 'footermiddle', 0),
(6927, 9, 'filter', 'column_left', 0),
(6888, 7, 'socialfollow.139', 'footerbefore', 0),
(6887, 7, 'filter', 'column_left', 0),
(6896, 12, 'servicesblock.140', 'footerafter', 1),
(6900, 8, 'newslettersubscribe.38', 'footermiddle', 1),
(6901, 8, 'servicesblock.140', 'footerafter', 1),
(6905, 4, 'newslettersubscribe.38', 'footermiddle', 1),
(6906, 4, 'servicesblock.140', 'footerafter', 1),
(6910, 11, 'newslettersubscribe.38', 'footermiddle', 1),
(6911, 11, 'servicesblock.140', 'footerafter', 1),
(6915, 5, 'newslettersubscribe.38', 'footermiddle', 1),
(6916, 5, 'servicesblock.140', 'footerafter', 1),
(6996, 2, 'productservicesblock.152', 'content_top', 0),
(6925, 13, 'newslettersubscribe.38', 'footermiddle', 1),
(6926, 13, 'servicesblock.140', 'footerafter', 1),
(6930, 9, 'newslettersubscribe.38', 'footermiddle', 1),
(6931, 9, 'servicesblock.140', 'footerafter', 1),
(7000, 2, 'newslettersubscribe.38', 'footermiddle', 1),
(7004, 1, 'featuredcollectionblock.149', 'content_top', 2),
(7003, 1, 'bannerblock.147', 'content_top', 1),
(7002, 1, 'slider.135', 'content_top', 0),
(7001, 2, 'servicesblock.140', 'footerafter', 1),
(7015, 1, 'html.141', 'footerafter', 0),
(7016, 1, 'servicesblock.140', 'footerafter', 1),
(7022, 23, 'socialfollow.139', 'footerbefore', 0),
(7021, 23, 'franchiseenquiryblock.160', 'content_middle', 0),
(7023, 23, 'linklist.158', 'footermiddle', 0),
(7024, 23, 'newslettersubscribe.38', 'footermiddle', 1),
(7025, 23, 'servicesblock.140', 'footerafter', 0),
(7033, 24, 'newslettersubscribe.38', 'footermiddle', 1),
(7032, 24, 'linklist.158', 'footermiddle', 0),
(7031, 24, 'socialfollow.139', 'footerbefore', 0),
(7030, 24, 'careerblock.162', 'content_top', 0),
(7034, 24, 'servicesblock.140', 'footerafter', 0);

-- --------------------------------------------------------

--
-- Table structure for table `oc_layout_route`
--

CREATE TABLE `oc_layout_route` (
  `layout_route_id` int(11) NOT NULL,
  `layout_id` int(11) NOT NULL,
  `store_id` int(11) NOT NULL,
  `route` varchar(64) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `oc_layout_route`
--

INSERT INTO `oc_layout_route` (`layout_route_id`, `layout_id`, `store_id`, `route`) VALUES
(719, 6, 0, 'account/%'),
(707, 10, 0, 'affiliate/%'),
(708, 3, 0, 'product/category'),
(725, 1, 0, 'common/home'),
(724, 2, 0, 'product/product'),
(714, 11, 0, 'information/information'),
(710, 7, 0, 'checkout/%'),
(712, 8, 0, 'information/contact'),
(718, 9, 0, 'information/sitemap'),
(713, 4, 0, ''),
(715, 5, 0, 'product/manufacturer'),
(711, 12, 0, 'product/compare'),
(717, 13, 0, 'product/search'),
(728, 23, 0, 'information/Franchise Enquiry');

-- --------------------------------------------------------

--
-- Table structure for table `oc_length_class`
--

CREATE TABLE `oc_length_class` (
  `length_class_id` int(11) NOT NULL,
  `value` decimal(15,8) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `oc_length_class`
--

INSERT INTO `oc_length_class` (`length_class_id`, `value`) VALUES
(1, '1.00000000'),
(2, '10.00000000'),
(3, '0.39370000');

-- --------------------------------------------------------

--
-- Table structure for table `oc_length_class_description`
--

CREATE TABLE `oc_length_class_description` (
  `length_class_id` int(11) NOT NULL,
  `language_id` int(11) NOT NULL,
  `title` varchar(32) NOT NULL,
  `unit` varchar(4) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `oc_length_class_description`
--

INSERT INTO `oc_length_class_description` (`length_class_id`, `language_id`, `title`, `unit`) VALUES
(1, 1, 'Centimeter', 'cm'),
(2, 1, 'Millimeter', 'mm'),
(3, 1, 'Inch', 'in'),
(1, 2, 'Centimeter', 'cm'),
(2, 2, 'Millimeter', 'mm'),
(3, 2, 'Inch', 'in');

-- --------------------------------------------------------

--
-- Table structure for table `oc_linklist`
--

CREATE TABLE `oc_linklist` (
  `linklist_id` int(11) NOT NULL,
  `module_id` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  `image` varchar(255) DEFAULT NULL,
  `date_added` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `date_modified` datetime NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `oc_linklist`
--

INSERT INTO `oc_linklist` (`linklist_id`, `module_id`, `status`, `image`, `date_added`, `date_modified`) VALUES
(1, 46, 1, 'catalog/category/1.png', '2019-05-20 15:17:22', '2019-05-20 15:21:30'),
(2, 46, 1, 'catalog/category/2.png', '2019-05-20 15:17:56', '2019-05-20 15:20:23'),
(3, 46, 1, 'catalog/category/3.png', '2019-05-20 15:18:09', '2019-05-20 15:20:53'),
(4, 46, 1, 'catalog/category/4.png', '2019-05-20 15:18:29', '2019-05-20 15:21:17'),
(5, 106, 1, 'catalog/linklist/1.png', '2019-12-06 16:10:46', '2022-06-25 04:16:46'),
(6, 106, 1, 'catalog/linklist/2.png', '2019-12-06 16:11:21', '2022-06-25 04:20:34'),
(7, 106, 1, 'catalog/linklist/3.png', '2019-12-06 16:12:09', '2022-06-25 04:20:57'),
(11, 106, 1, 'catalog/linklist/4.png', '2020-03-17 14:54:04', '2022-06-29 09:28:36'),
(14, 106, 1, 'catalog/linklist/5.png', '2022-06-29 09:30:04', '2022-06-29 09:30:04'),
(15, 158, 1, '', '2022-08-18 04:09:03', '2022-08-18 04:09:03'),
(16, 158, 1, '', '2022-08-18 04:09:34', '2022-08-18 04:09:34'),
(17, 158, 1, '', '2022-08-18 04:10:17', '2022-08-18 04:10:17'),
(18, 158, 1, '', '2022-08-18 04:10:41', '2022-08-18 04:10:41'),
(19, 158, 1, '', '2022-08-18 04:11:13', '2022-08-18 04:11:13'),
(20, 158, 1, '', '2022-08-18 04:12:02', '2022-08-18 04:12:02');

-- --------------------------------------------------------

--
-- Table structure for table `oc_linklist_description`
--

CREATE TABLE `oc_linklist_description` (
  `linklist_id` int(11) NOT NULL DEFAULT '0',
  `language_id` int(11) NOT NULL DEFAULT '0',
  `title` varchar(64) NOT NULL DEFAULT '',
  `subtitle` varchar(64) NOT NULL DEFAULT '',
  `description` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `oc_linklist_description`
--

INSERT INTO `oc_linklist_description` (`linklist_id`, `language_id`, `title`, `subtitle`, `description`) VALUES
(1, 1, 'Speakers', '', '&lt;li&gt;&lt;a href=&quot;#&quot;&gt;Nokia&lt;/a&gt;&lt;/li&gt;\r\n&lt;li&gt;&lt;a href=&quot;#&quot;&gt;Digital&lt;/a&gt;&lt;/li&gt;\r\n&lt;li&gt;&lt;a href=&quot;#&quot;&gt;Accessories&lt;/a&gt;&lt;/li&gt;'),
(1, 2, 'Speakers', '', '&lt;li&gt;&lt;a href=&quot;#&quot;&gt;Nokia&lt;/a&gt;&lt;/li&gt;\r\n&lt;li&gt;&lt;a href=&quot;#&quot;&gt;Digital&lt;/a&gt;&lt;/li&gt;\r\n&lt;li&gt;&lt;a href=&quot;#&quot;&gt;Accessories&lt;/a&gt;&lt;/li&gt;'),
(2, 1, 'Smart Watches', '', '&lt;li&gt;&lt;a href=&quot;#&quot;&gt;Nokia&lt;/a&gt;&lt;/li&gt;\r\n&lt;li&gt;&lt;a href=&quot;#&quot;&gt;Digital&lt;/a&gt;&lt;/li&gt;\r\n&lt;li&gt;&lt;a href=&quot;#&quot;&gt;Accessories&lt;/a&gt;&lt;/li&gt;'),
(2, 2, 'Smart Watches', '', '&lt;li&gt;&lt;a href=&quot;#&quot;&gt;Nokia&lt;/a&gt;&lt;/li&gt;\r\n&lt;li&gt;&lt;a href=&quot;#&quot;&gt;Digital&lt;/a&gt;&lt;/li&gt;\r\n&lt;li&gt;&lt;a href=&quot;#&quot;&gt;Accessories&lt;/a&gt;&lt;/li&gt;'),
(3, 1, 'Headphones', '', '&lt;li&gt;&lt;a href=&quot;#&quot;&gt;Nokia&lt;/a&gt;&lt;/li&gt;\r\n&lt;li&gt;&lt;a href=&quot;#&quot;&gt;Digital&lt;/a&gt;&lt;/li&gt;\r\n&lt;li&gt;&lt;a href=&quot;#&quot;&gt;Accessories&lt;/a&gt;&lt;/li&gt;'),
(3, 2, 'Headphones', '', '&lt;li&gt;&lt;a href=&quot;#&quot;&gt;Nokia&lt;/a&gt;&lt;/li&gt;\r\n&lt;li&gt;&lt;a href=&quot;#&quot;&gt;Digital&lt;/a&gt;&lt;/li&gt;\r\n&lt;li&gt;&lt;a href=&quot;#&quot;&gt;Accessories&lt;/a&gt;&lt;/li&gt;'),
(4, 2, 'Speakers', '', '&lt;li&gt;&lt;a href=&quot;#&quot;&gt;Nokia&lt;/a&gt;&lt;/li&gt;\r\n&lt;li&gt;&lt;a href=&quot;#&quot;&gt;Digital&lt;/a&gt;&lt;/li&gt;\r\n&lt;li&gt;&lt;a href=&quot;#&quot;&gt;Accessories&lt;/a&gt;&lt;/li&gt;'),
(4, 1, 'Speakers', '', '&lt;li&gt;&lt;a href=&quot;#&quot;&gt;Nokia&lt;/a&gt;&lt;/li&gt;\r\n&lt;li&gt;&lt;a href=&quot;#&quot;&gt;Digital&lt;/a&gt;&lt;/li&gt;\r\n&lt;li&gt;&lt;a href=&quot;#&quot;&gt;Accessories&lt;/a&gt;&lt;/li&gt;'),
(5, 1, 'Post Card', 'Basic Package that fits many users needs', '&lt;li&gt;&lt;a href=&quot;#&quot;&gt;Lorem ipsum dolor sit amet, conseadi\r\npiscing elit.&lt;/a&gt;&lt;/li&gt;\r\n&lt;li&gt;&lt;a href=&quot;#&quot;&gt;Lorem ipsum dolor sit amet, consect&lt;/a&gt;&lt;/li&gt;\r\n&lt;li&gt;&lt;a href=&quot;#&quot;&gt;Lorem ipsum dolor sit amet, cadipi&lt;/a&gt;&lt;/li&gt;\r\n&lt;li&gt;&lt;a href=&quot;#&quot;&gt;Lorem ipsum dolor sit amet, conseadi\r\npiscing elit&lt;/a&gt;&lt;/li&gt;\r\n&lt;div class=&quot;price&quot;&gt;$20&lt;/div&gt;\r\n&lt;div class=&quot;view-btn&quot;&gt;&lt;a href=&quot;#&quot; class=&quot;btn-default&quot;&gt;SHOP NOW&lt;/a&gt;&lt;/div&gt;'),
(11, 1, 'Work Book', 'Basic Package that fits many users needs', '&lt;li&gt;&lt;a href=&quot;#&quot;&gt;Lorem ipsum dolor sit amet, conseadi\r\npiscing elit.&lt;/a&gt;&lt;/li&gt;\r\n&lt;li&gt;&lt;a href=&quot;#&quot;&gt;Lorem ipsum dolor sit amet, consect&lt;/a&gt;&lt;/li&gt;\r\n&lt;li&gt;&lt;a href=&quot;#&quot;&gt;Lorem ipsum dolor sit amet, cadipi&lt;/a&gt;&lt;/li&gt;\r\n&lt;li&gt;&lt;a href=&quot;#&quot;&gt;Lorem ipsum dolor sit amet, conseadi\r\npiscing elit&lt;/a&gt;&lt;/li&gt;\r\n&lt;div class=&quot;price&quot;&gt;$90&lt;/div&gt;\r\n&lt;div class=&quot;view-btn&quot;&gt;&lt;a href=&quot;#&quot; class=&quot;btn-default&quot;&gt;SHOP NOW&lt;/a&gt;&lt;/div&gt;'),
(11, 2, 'Work Book', 'Basic Package that fits many users needs', '&lt;li&gt;&lt;a href=&quot;#&quot;&gt;Lorem ipsum dolor sit amet, conseadi\r\npiscing elit.&lt;/a&gt;&lt;/li&gt;\r\n&lt;li&gt;&lt;a href=&quot;#&quot;&gt;Lorem ipsum dolor sit amet, consect&lt;/a&gt;&lt;/li&gt;\r\n&lt;li&gt;&lt;a href=&quot;#&quot;&gt;Lorem ipsum dolor sit amet, cadipi&lt;/a&gt;&lt;/li&gt;\r\n&lt;li&gt;&lt;a href=&quot;#&quot;&gt;Lorem ipsum dolor sit amet, conseadi\r\npiscing elit&lt;/a&gt;&lt;/li&gt;\r\n&lt;div class=&quot;price&quot;&gt;$90&lt;/div&gt;\r\n&lt;div class=&quot;view-btn&quot;&gt;&lt;a href=&quot;#&quot; class=&quot;btn-default&quot;&gt;SHOP NOW&lt;/a&gt;&lt;/div&gt;'),
(7, 1, 'Calender', 'Basic Package that fits many users needs', '&lt;li&gt;&lt;a href=&quot;#&quot;&gt;Lorem ipsum dolor sit amet, conseadi\r\npiscing elit.&lt;/a&gt;&lt;/li&gt;\r\n&lt;li&gt;&lt;a href=&quot;#&quot;&gt;Lorem ipsum dolor sit amet, consect&lt;/a&gt;&lt;/li&gt;\r\n&lt;li&gt;&lt;a href=&quot;#&quot;&gt;Lorem ipsum dolor sit amet, cadipi&lt;/a&gt;&lt;/li&gt;\r\n&lt;div class=&quot;price&quot;&gt;$110&lt;/div&gt;\r\n&lt;div class=&quot;view-btn&quot;&gt;&lt;a href=&quot;#&quot; class=&quot;btn-default&quot;&gt;SHOP NOW&lt;/a&gt;&lt;/div&gt;'),
(6, 2, 'Brochure', 'Basic Package that fits many users needs', '&lt;li&gt;&lt;a href=&quot;#&quot;&gt;Lorem ipsum dolor sit amet, conseadi\r\npiscing elit.&lt;/a&gt;&lt;/li&gt;\r\n&lt;li&gt;&lt;a href=&quot;#&quot;&gt;Lorem ipsum dolor sit amet, consect&lt;/a&gt;&lt;/li&gt;\r\n&lt;div class=&quot;price&quot;&gt;$80&lt;/div&gt;\r\n&lt;div class=&quot;view-btn&quot;&gt;&lt;a href=&quot;#&quot; class=&quot;btn-default&quot;&gt;SHOP NOW&lt;/a&gt;&lt;/div&gt;'),
(6, 1, 'Brochure', 'Basic Package that fits many users needs', '&lt;li&gt;&lt;a href=&quot;#&quot;&gt;Lorem ipsum dolor sit amet, conseadi\r\npiscing elit.&lt;/a&gt;&lt;/li&gt;\r\n&lt;li&gt;&lt;a href=&quot;#&quot;&gt;Lorem ipsum dolor sit amet, consect&lt;/a&gt;&lt;/li&gt;\r\n&lt;div class=&quot;price&quot;&gt;$80&lt;/div&gt;\r\n&lt;div class=&quot;view-btn&quot;&gt;&lt;a href=&quot;#&quot; class=&quot;btn-default&quot;&gt;SHOP NOW&lt;/a&gt;&lt;/div&gt;'),
(7, 2, 'Calender', 'Basic Package that fits many users needs', '&lt;li&gt;&lt;a href=&quot;#&quot;&gt;Lorem ipsum dolor sit amet, conseadi\r\npiscing elit.&lt;/a&gt;&lt;/li&gt;\r\n&lt;li&gt;&lt;a href=&quot;#&quot;&gt;Lorem ipsum dolor sit amet, consect&lt;/a&gt;&lt;/li&gt;\r\n&lt;li&gt;&lt;a href=&quot;#&quot;&gt;Lorem ipsum dolor sit amet, cadipi&lt;/a&gt;&lt;/li&gt;\r\n&lt;div class=&quot;price&quot;&gt;$110&lt;/div&gt;\r\n&lt;div class=&quot;view-btn&quot;&gt;&lt;a href=&quot;#&quot; class=&quot;btn-default&quot;&gt;SHOP NOW&lt;/a&gt;&lt;/div&gt;'),
(5, 2, 'Post Card', 'Basic Package that fits many users needs', '&lt;li&gt;&lt;a href=&quot;#&quot;&gt;Lorem ipsum dolor sit amet, conseadi\r\npiscing elit.&lt;/a&gt;&lt;/li&gt;\r\n&lt;li&gt;&lt;a href=&quot;#&quot;&gt;Lorem ipsum dolor sit amet, consect&lt;/a&gt;&lt;/li&gt;\r\n&lt;li&gt;&lt;a href=&quot;#&quot;&gt;Lorem ipsum dolor sit amet, cadipi&lt;/a&gt;&lt;/li&gt;\r\n&lt;li&gt;&lt;a href=&quot;#&quot;&gt;Lorem ipsum dolor sit amet, conseadi\r\npiscing elit&lt;/a&gt;&lt;/li&gt;\r\n&lt;div class=&quot;price&quot;&gt;$20&lt;/div&gt;\r\n&lt;div class=&quot;view-btn&quot;&gt;&lt;a href=&quot;#&quot; class=&quot;btn-default&quot;&gt;SHOP NOW&lt;/a&gt;&lt;/div&gt;'),
(14, 1, 'Business Card', 'Basic Package that fits many users needs', '&lt;li&gt;&lt;a href=&quot;#&quot;&gt;Lorem ipsum dolor sit amet, conseadi\r\npiscing elit.&lt;/a&gt;&lt;/li&gt;\r\n&lt;li&gt;&lt;a href=&quot;#&quot;&gt;Lorem ipsum dolor sit amet, consect&lt;/a&gt;&lt;/li&gt;\r\n&lt;li&gt;&lt;a href=&quot;#&quot;&gt;Lorem ipsum dolor sit amet, cadipi&lt;/a&gt;&lt;/li&gt;\r\n&lt;li&gt;&lt;a href=&quot;#&quot;&gt;Lorem ipsum dolor sit amet, conseadi\r\npiscing elit&lt;/a&gt;&lt;/li&gt;\r\n&lt;div class=&quot;price&quot;&gt;$90&lt;/div&gt;\r\n&lt;div class=&quot;view-btn&quot;&gt;&lt;a href=&quot;#&quot; class=&quot;btn-default&quot;&gt;SHOP NOW&lt;/a&gt;&lt;/div&gt;'),
(14, 2, 'Business Card', 'Basic Package that fits many users needs', '&lt;li&gt;&lt;a href=&quot;#&quot;&gt;Lorem ipsum dolor sit amet, conseadi\r\npiscing elit.&lt;/a&gt;&lt;/li&gt;\r\n&lt;li&gt;&lt;a href=&quot;#&quot;&gt;Lorem ipsum dolor sit amet, consect&lt;/a&gt;&lt;/li&gt;\r\n&lt;li&gt;&lt;a href=&quot;#&quot;&gt;Lorem ipsum dolor sit amet, cadipi&lt;/a&gt;&lt;/li&gt;\r\n&lt;li&gt;&lt;a href=&quot;#&quot;&gt;Lorem ipsum dolor sit amet, conseadi\r\npiscing elit&lt;/a&gt;&lt;/li&gt;\r\n&lt;div class=&quot;price&quot;&gt;$90&lt;/div&gt;\r\n&lt;div class=&quot;view-btn&quot;&gt;&lt;a href=&quot;#&quot; class=&quot;btn-default&quot;&gt;SHOP NOW&lt;/a&gt;&lt;/div&gt;'),
(15, 1, 'Sleeveless Blouse', '', '&lt;a href=&quot;#&quot;&gt;&lt;/a&gt;'),
(16, 1, 'Full Sleeve Blouse', '', '&lt;a href=&quot;#&quot;&gt;&lt;/a&gt;'),
(17, 1, 'Plain Blouse', '', '&lt;a href=&quot;#&quot;&gt;&lt;/a&gt;'),
(18, 1, 'Embroidered Blouse', '', '&lt;a href=&quot;#&quot;&gt;&lt;/a&gt;'),
(19, 1, 'Wedding Range', '', '&lt;a href=&quot;#&quot;&gt;&lt;/a&gt;'),
(20, 1, 'Everyday Wear', '', '&lt;a href=&quot;#&quot;&gt;&lt;/a&gt;');

-- --------------------------------------------------------

--
-- Table structure for table `oc_location`
--

CREATE TABLE `oc_location` (
  `location_id` int(11) NOT NULL,
  `name` varchar(32) NOT NULL,
  `address` text NOT NULL,
  `telephone` varchar(32) NOT NULL,
  `fax` varchar(32) NOT NULL,
  `geocode` varchar(32) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `open` text NOT NULL,
  `comment` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `oc_manufacturer`
--

CREATE TABLE `oc_manufacturer` (
  `manufacturer_id` int(11) NOT NULL,
  `name` varchar(64) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `sort_order` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `oc_manufacturer`
--

INSERT INTO `oc_manufacturer` (`manufacturer_id`, `name`, `image`, `sort_order`) VALUES
(5, 'HTC', 'catalog/brand/Brand-Logo-4.png', 0),
(6, 'Palm', 'catalog/brand/Brand-Logo-5.png', 0),
(7, 'Hewlett-Packard', 'catalog/brand/Brand-Logo-3.png', 0),
(8, 'Apple', 'catalog/brand/Brand-Logo-1.png', 0),
(9, 'Canon', 'catalog/brand/Brand-Logo-2.png', 0),
(10, 'Sony', 'catalog/brand/Brand-Logo-6.png', 0);

-- --------------------------------------------------------

--
-- Table structure for table `oc_manufacturer_to_store`
--

CREATE TABLE `oc_manufacturer_to_store` (
  `manufacturer_id` int(11) NOT NULL,
  `store_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `oc_manufacturer_to_store`
--

INSERT INTO `oc_manufacturer_to_store` (`manufacturer_id`, `store_id`) VALUES
(5, 0),
(6, 0),
(7, 0),
(8, 0),
(9, 0),
(10, 0);

-- --------------------------------------------------------

--
-- Table structure for table `oc_marketing`
--

CREATE TABLE `oc_marketing` (
  `marketing_id` int(11) NOT NULL,
  `name` varchar(32) NOT NULL,
  `description` text NOT NULL,
  `code` varchar(64) NOT NULL,
  `clicks` int(11) NOT NULL DEFAULT '0',
  `date_added` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `oc_modification`
--

CREATE TABLE `oc_modification` (
  `modification_id` int(11) NOT NULL,
  `extension_install_id` int(11) NOT NULL,
  `name` varchar(64) NOT NULL,
  `code` varchar(64) NOT NULL,
  `author` varchar(64) NOT NULL,
  `version` varchar(32) NOT NULL,
  `link` varchar(255) NOT NULL,
  `xml` mediumtext NOT NULL,
  `status` tinyint(1) NOT NULL,
  `date_added` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `oc_module`
--

CREATE TABLE `oc_module` (
  `module_id` int(11) NOT NULL,
  `name` varchar(64) NOT NULL,
  `code` varchar(32) NOT NULL,
  `setting` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `oc_module`
--

INSERT INTO `oc_module` (`module_id`, `name`, `code`, `setting`) VALUES
(140, 'Services Block', 'servicesblock', '{\"name\":\"Services Block\",\"column\":\"4\",\"width\":\"50\",\"height\":\"50\",\"status\":\"1\",\"service\":{\"1\":[{\"image\":\"catalog\\/services\\/services-1.png\",\"title\":\"Easy Returns\"},{\"image\":\"catalog\\/services\\/services-2.png\",\"title\":\"100% Secure\"},{\"image\":\"catalog\\/services\\/services-3.png\",\"title\":\"COD Available\"},{\"image\":\"catalog\\/services\\/services-4.png\",\"title\":\"Free Shipping\"}]}}'),
(137, 'Banner Block', 'bannerblock', '{\"name\":\"Banner Block\",\"width\":\"1920\",\"height\":\"501\",\"column\":\"1\",\"status\":\"1\",\"ishibanner\":[{\"image\":\"catalog\\/bannerimage.png\",\"link\":\"#\",\"sort_order\":\"1\",\"title\":{\"1\":\"\"},\"titlecolor\":\"\",\"subtitle\":{\"1\":\"\"},\"subtitlecolor\":\"\",\"subtitlebgcolor\":\"\",\"button_name\":{\"1\":\"\"}}]}'),
(138, 'Five Banner Block', 'fivebannerblock', '{\"name\":\"Five Banner Block\",\"title\":{\"1\":\"Deal of the Day\"},\"status\":\"1\",\"ishi_banner1_image\":\"catalog\\/fivebanner\\/banner-1.png\",\"ishi_banner1_title\":\"FLAT 10% OFF\",\"ishi_banner1_btn\":\"EXPLORE+\",\"category_label1\":\"Shop By\\u00a0\\u00a0&gt;\\u00a0\\u00a0Occasion\",\"category1\":\"77\",\"ishi_banner2_image\":\"catalog\\/fivebanner\\/banner-2.png\",\"ishi_banner2_title\":\"FLAT 20% OFF\",\"category_label2\":\"Shop By\\u00a0\\u00a0&gt;\\u00a0\\u00a0Collection\\u00a0\\u00a0&gt;\\u00a0\\u00a0Classic\",\"category2\":\"105\",\"ishi_banner3_image\":\"catalog\\/fivebanner\\/banner-3.png\",\"ishi_banner3_title\":\"FLAT 10% OFF\",\"category_label3\":\"Shop By\",\"category3\":\"20\",\"ishi_banner4_image\":\"catalog\\/fivebanner\\/banner-4.png\",\"ishi_banner4_title\":\"BUY 2 GET 1\",\"category_label4\":\"Shop By\\u00a0\\u00a0&gt;\\u00a0\\u00a0Collection\",\"category4\":\"26\",\"ishi_banner5_image\":\"catalog\\/fivebanner\\/banner-5.png\",\"ishi_banner5_title\":\"FLAT 40% OFF\",\"category_label5\":\"All Blouse\",\"category5\":\"87\"}'),
(153, 'Discount Block', 'discountblock', '{\"name\":\"Discount Block\",\"bgimage\":\"catalog\\/offerimage.png\",\"bg_color\":\"#fbeaee\",\"title1\":{\"1\":\"BUY 1 GET FLAT 10% OFF | BUY 2 GET 30% OFF\"},\"btntitle1\":{\"1\":\"Use Code : NARINTRO\"},\"ishi_banner1_link\":\"#\",\"status\":\"1\"}'),
(38, 'Newsletter', 'newslettersubscribe', '{\"name\":\"Newsletter\",\"heading\":{\"1\":\"Newsletter\"},\"subtitle\":{\"1\":\"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed\"},\"status\":\"1\"}'),
(139, 'Social Block', 'socialfollow', '{\"name\":\"Social Block\",\"facebook\":\"#\",\"twitter\":\"#\",\"youtube\":\"#\",\"gplus\":\"\",\"rss\":\"\",\"pinterest\":\"\",\"vimeo\":\"\",\"instagram\":\"#\",\"status\":\"1\"}'),
(52, 'New Latest', 'latest', '{\"name\":\"New Latest\",\"limit\":\"4\",\"width\":\"90\",\"height\":\"90\",\"status\":\"1\"}'),
(135, 'Slider', 'slider', '{\"name\":\"Slider\",\"width\":\"1920\",\"height\":\"500\",\"status\":\"1\",\"autoplay\":\"1\",\"navigation\":\"1\",\"navigation_style\":\"ishi-style-nav2\",\"dot\":\"1\",\"dot_style\":\"ishi-style-dot1\",\"ishi_image\":{\"1\":[{\"title\":\"WEDDING COLLECTION\",\"subtitle\":\"A Collection Dedicated to Traditional Wedding wear\",\"btntext\":\"Explore +\",\"textcolor\":\"#ffffff\",\"link\":\"#\",\"image\":\"catalog\\/slider\\/slider1.png\",\"textalignment\":\"left\",\"textposition\":\"slider-content-right\",\"sort_order\":\"1\"},{\"title\":\"WEDDING COLLECTION\",\"subtitle\":\"A Collection Dedicated to Traditional Wedding wear\",\"btntext\":\"Explore +\",\"textcolor\":\"#ffffff\",\"link\":\"#\",\"image\":\"catalog\\/slider\\/slider1.png\",\"textalignment\":\"left\",\"textposition\":\"slider-content-right\",\"sort_order\":\"\"}]}}'),
(141, 'Footer Block', 'html', '{\"name\":\"Footer Block\",\"module_description\":{\"1\":{\"title\":\"\",\"description\":\"&lt;div class=&quot;footers-block&quot;&gt;\\r\\n      &lt;div class=&quot;about-details-exclusice&quot;&gt;\\r\\n        &lt;div class=&quot;home-title&quot;&gt;Exclusive Readymade Blouse&lt;\\/div&gt;\\r\\n        &lt;p&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque tristique, ipsum nec varius finibus, est ipsum mattis odio, nec elementum nulla lorem eget erat. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. In sollicitudin massa a nulla vulputate elementum. Nam ut ullamcorper sapien. Sed eu egestas magna. Nam et metus fringilla, scelerisque dui sit amet, sollicitudin nisi. Vivamus sit amet blandit justo. Fusce facilisis, urna sit amet condimentum sodales, diam erat condimentum urna, et pretium odio orci vitae mi. Aenean vel lectus nulla.&lt;\\/p&gt;\\r\\n        &lt;p&gt;Nam interdum elementum nisi, in placerat diam posuere sit amet. Ut pulvinar sem id lobortis venenatis. Duis non convallis neque. Vivamus sit amet ex id mauris tincidunt aliquet ac non ligula. Proin pellentesque nisi quis ultrices imperdiet. Nam euismod vitae velit vitae euismod. Fusce purus sem, vulputate id sollicitudin nec, ultricies sed nulla.&lt;\\/p&gt; \\r\\n        &lt;p&gt;Sed sed dui vel mauris luctus lacinia vel eget sem. Vestibulum scelerisque tristique nibh, at maximus mi aliquet a. Vivamus a condimentum sem, et vulputate ipsum. Proin odio odio, sollicitudin vel semper non, faucibus vel est. Donec volutpat erat sed nunc scelerisque cursus. Cras nec ipsum condimentum, tristique nibh sed, pulvinar libero. Cras sagittis ex sit amet pulvinar sodales. Integer vitae ornare leo. Praesent dui massa, finibus id odio sit amet, aliquam malesuada mi. Interdum et malesuada fames ac ante ipsum primis in faucibus. Duis at dignissim neque. Suspendisse sodales laoreet maximus.&lt;\\/p&gt;\\r\\n      &lt;\\/div&gt;\\r\\n      &lt;div class=&quot;about-details-india&quot;&gt;\\r\\n        &lt;div class=&quot;home-title&quot;&gt;Made in India&lt;\\/div&gt;\\r\\n        &lt;p&gt;Nunc eu dapibus enim, at elementum mi. Nam purus sem, pellentesque eu tristique in, sagittis at lorem. Mauris ex orci, convallis quis nunc in, ullamcorper sagittis risus. Nulla vitae fringilla diam, eu viverra lectus. Quisque sapien nunc, ultricies vel ex ut, tristique porta leo. Donec ac lorem eu nunc vehicula pretium. Pellentesque eget erat laoreet, scelerisque quam eget, commodo augue. Duis fringilla nunc sed mauris mattis tincidunt. In eget metus vel libero sagittis vehicula id sed ante. Donec posuere sollicitudin arcu sed ultricies. &lt;\\/p&gt;\\r\\n        &lt;p&gt;Ut vel leo eget massa porttitor finibus. Sed blandit scelerisque arcu, ut eleifend risus viverra eleifend. Nam sit amet aliquam magna, at varius lacus. Maecenas eu mi egestas, interdum dolor rutrum, finibus magna. Donec auctor turpis eu lorem eleifend, sed mattis nisi tempus. Suspendisse nec sodales massa. Maecenas aliquam erat vitae cursus laoreet. Morbi vestibulum ipsum sollicitudin, bibendum massa eu, volutpat leo. Aliquam at orci a nisi consectetur mollis. Morbi non erat dolor. Vestibulum tincidunt ut nibh sit amet tristique. Nam dapibus tellus in justo sodales, a placerat dolor placerat. Donec eu auctor ante. Cras vehicula imperdiet tortor, a pretium ligula. Praesent et pretium mi.&lt;\\/p&gt;\\r\\n      &lt;\\/div&gt;\\r\\n    &lt;\\/div&gt;\"}},\"status\":\"1\"}'),
(136, 'Category Block', 'categoryblock', '{\"name\":\"Category Block\",\"title\":{\"1\":\"Categories\"},\"width\":\"255\",\"height\":\"255\",\"status\":\"1\",\"ishibanner\":{\"1\":[{\"image\":\"catalog\\/Category\\/category-1.png\",\"categorytitle\":\"Shop By\\u00a0\\u00a0&gt;\\u00a0\\u00a0Type\\u00a0\\u00a0&gt;\\u00a0\\u00a0Padded\",\"categoryid\":\"64\",\"sort_order\":\"1\"},{\"image\":\"catalog\\/Category\\/category-2.png\",\"categorytitle\":\"Shop By\\u00a0\\u00a0&gt;\\u00a0\\u00a0Collection\\u00a0\\u00a0&gt;\\u00a0\\u00a0Classic\",\"categoryid\":\"105\",\"sort_order\":\"2\"},{\"image\":\"catalog\\/Category\\/category-3.png\",\"categorytitle\":\"Shop By\\u00a0\\u00a0&gt;\\u00a0\\u00a0Type\\u00a0\\u00a0&gt;\\u00a0\\u00a0With Sleeve\",\"categoryid\":\"62\",\"sort_order\":\"3\"},{\"image\":\"catalog\\/Category\\/category-4.png\",\"categorytitle\":\"Shop By\\u00a0\\u00a0&gt;\\u00a0\\u00a0Type\\u00a0\\u00a0&gt;\\u00a0\\u00a0Sleeveless\",\"categoryid\":\"106\",\"sort_order\":\"4\"}]}}'),
(154, 'Offers Block', 'offersblock', '{\"module_id\":\"154\",\"name\":\"Offers Block\",\"bg_color\":\"#fbeaee\",\"btntitle1\":{\"1\":\"NARINTRO\"},\"ishi_banner1_link\":\"#\",\"status\":\"1\"}'),
(145, 'Featurd Category Block', 'ishifeaturedblock', '{\"name\":\"Featurd Category Block\",\"title\":{\"1\":\"Featured Collection\"},\"subtitle\":{\"1\":\"s\"},\"width\":\"292\",\"height\":\"391\",\"status\":\"1\",\"ishifeatured\":[{\"image\":\"catalog\\/Category\\/category-1.png\",\"hoverimage\":\"\",\"category_name\":{\"1\":\"NEO\"},\"categoryid\":\"33\",\"button_name\":{\"1\":\"\"},\"link\":\"#\",\"sort_order\":\"1\"}]}'),
(146, 'Featured Category Block', 'ishifeaturedblock', '{\"name\":\"Featured Category Block\",\"title\":{\"1\":\"Featured Collection\"},\"subtitle\":{\"1\":\"f\"},\"width\":\"350\",\"height\":\"350\",\"status\":\"1\",\"ishifeatured\":[{\"image\":\"catalog\\/Category\\/category-1.png\",\"hoverimage\":\"\",\"category_name\":{\"1\":\"NEO\"},\"categoryid\":\"33\",\"button_name\":{\"1\":\"D\"},\"link\":\"#\",\"sort_order\":\"1\"}]}'),
(147, 'One Banner Block', 'bannerblock', '{\"name\":\"One Banner Block\",\"width\":\"1920\",\"height\":\"118\",\"column\":\"1\",\"status\":\"1\",\"ishibanner\":[{\"image\":\"catalog\\/onebanner.png\",\"sort_order\":\"1\",\"link\":\"#\"}]}'),
(148, 'Instagram Block', 'instagramblock', '{\"name\":\"Instagram Block\",\"title\":{\"1\":\"Love from Instagram!\"},\"username\":\"instagram\",\"userid\":\"6827780227\",\"accesstoken\":\"IGQVJXUUFELVBtSlR6YXZAMOEFxS3RPVE5jVUNfTmJ0ejF1N2REQU1VeHZATTG9WVVk0Q19RUS13dmRsRS1BekNfVVAzdXVIQ1BpX1U2dXN2T2FVRnpxRllleU9WR0U0SmNZASndQSk5tc1VDZAnNsbTJPcAZDZD\",\"sortby\":\"random\",\"status\":\"1\"}'),
(149, 'Featured Collection Block', 'featuredcollectionblock', '{\"name\":\"Featured Collection Block\",\"title\":{\"1\":\"Featured Collection\"},\"width\":\"255\",\"height\":\"255\",\"status\":\"1\",\"ishibanner\":{\"1\":[{\"image\":\"catalog\\/featured\\/featured-1.png\",\"categorytitle\":\"Shop By\\u00a0\\u00a0&gt;\\u00a0\\u00a0Collection\\u00a0\\u00a0&gt;\\u00a0\\u00a0Neo\",\"categoryid\":\"60\",\"sort_order\":\"1\"},{\"image\":\"catalog\\/featured\\/featured-2.png\",\"categorytitle\":\"Shop By\\u00a0\\u00a0&gt;\\u00a0\\u00a0Collection\\u00a0\\u00a0&gt;\\u00a0\\u00a0Retro\",\"categoryid\":\"61\",\"sort_order\":\"2\"},{\"image\":\"catalog\\/featured\\/featured-3.png\",\"categorytitle\":\"Shop By\\u00a0\\u00a0&gt;\\u00a0\\u00a0Collection\\u00a0\\u00a0&gt;\\u00a0\\u00a0Jazzy\",\"categoryid\":\"59\",\"sort_order\":\"3\"},{\"image\":\"catalog\\/featured\\/featured-4.png\",\"categorytitle\":\"Shop By\\u00a0\\u00a0&gt;\\u00a0\\u00a0Collection\\u00a0\\u00a0&gt;\\u00a0\\u00a0Classic\",\"categoryid\":\"105\",\"sort_order\":\"4\"}]}}'),
(151, 'Bestseller Block', 'bestsellerblock', '{\"name\":\"Bestseller Block\",\"heading\":{\"1\":\"Best Seller\"},\"categoryid\":\"20\",\"status\":\"1\"}'),
(152, 'Product Services Block', 'productservicesblock', '{\"name\":\"Product Services Block\",\"title\":{\"1\":\"NARITA PROMISE\"},\"subtitle\":{\"1\":\"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation\"},\"image\":\"catalog\\/productservicesbanner.png\",\"width\":\"50\",\"height\":\"50\",\"status\":\"1\",\"service\":{\"1\":[{\"image\":\"catalog\\/productservices\\/productservices-1.png\",\"title\":\"Quality Manufacting\",\"desc\":\"Lorem ipsum dolor sit amet, consectetur adipiscing elit,\"},{\"image\":\"catalog\\/productservices\\/productservices-2.png\",\"title\":\"Quality Manufacting\",\"desc\":\"Lorem ipsum dolor sit amet, consectetur adipiscing elit,\"},{\"image\":\"catalog\\/productservices\\/productservices-1.png\",\"title\":\"Quality Manufacting\",\"desc\":\"Lorem ipsum dolor sit amet, consectetur adipiscing elit,\"},{\"image\":\"catalog\\/productservices\\/productservices-2.png\",\"title\":\"Quality Manufacting\",\"desc\":\"Lorem ipsum dolor sit amet, consectetur adipiscing elit,\"}]}}'),
(155, 'Themes Blog', 'blogger', '{\"module_id\":\"155\",\"name\":\"Themes Blog\",\"title\":{\"1\":\"Blog\"},\"status\":\"1\",\"width\":\"825\",\"height\":\"496\",\"limit\":\"5\",\"char_limit\":\"50\"}'),
(158, 'Link List', 'linklist', '{\"module_id\":\"158\",\"name\":\"Link List\",\"title\":{\"1\":\"Quick Links\"},\"status\":\"1\",\"width\":\"80\",\"height\":\"80\"}'),
(159, 'Size Chart', 'html', '{\"name\":\"Size Chart\",\"module_description\":{\"1\":{\"title\":\"\",\"description\":\"&lt;div class=&quot;custom_size_chart_des&quot;&gt;\\r\\n&lt;h4&gt;Measurement Term Definitions&lt;\\/h4&gt;\\r\\n&lt;div class=&quot;custom-text-right-table&quot;&gt;\\r\\n&lt;table class=&quot;table&quot;&gt;\\r\\n&lt;thead class=&quot;thead-light&quot;&gt;\\r\\n&lt;tr&gt;\\r\\n&lt;th scope=&quot;col&quot;&gt;Size&lt;\\/th&gt;\\r\\n&lt;th scope=&quot;col&quot;&gt;Chest&lt;\\/th&gt;\\r\\n&lt;th scope=&quot;col&quot;&gt;Brand Size&lt;\\/th&gt;\\r\\n&lt;th scope=&quot;col&quot;&gt;Shoulder&lt;\\/th&gt;\\r\\n&lt;th scope=&quot;col&quot;&gt;Length&lt;\\/th&gt;\\r\\n&lt;th scope=&quot;col&quot;&gt;Sleeve Length&lt;\\/th&gt;\\r\\n&lt;\\/tr&gt;\\r\\n&lt;\\/thead&gt;\\r\\n&lt;tbody&gt;\\r\\n&lt;tr&gt;\\r\\n&lt;td&gt;38&lt;\\/td&gt;\\r\\n&lt;td&gt;40.2&lt;\\/td&gt;\\r\\n&lt;td&gt;38&lt;\\/td&gt;\\r\\n&lt;td&gt;17.9&lt;\\/td&gt;\\r\\n&lt;td&gt;29.9&lt;\\/td&gt;\\r\\n&lt;td&gt;24&lt;\\/td&gt;\\r\\n&lt;\\/tr&gt;\\r\\n&lt;tr&gt;\\r\\n&lt;td&gt;39&lt;\\/td&gt;\\r\\n&lt;td&gt;41.3&lt;\\/td&gt;\\r\\n&lt;td&gt;39&lt;\\/td&gt;\\r\\n&lt;td&gt;18.2&lt;\\/td&gt;\\r\\n&lt;td&gt;30.1&lt;\\/td&gt;\\r\\n&lt;td&gt;24.5&lt;\\/td&gt;\\r\\n&lt;\\/tr&gt;\\r\\n&lt;tr&gt;\\r\\n&lt;td&gt;40&lt;\\/td&gt;\\r\\n&lt;td&gt;42.5&lt;\\/td&gt;\\r\\n&lt;td&gt;40&lt;\\/td&gt;\\r\\n&lt;td&gt;18.5&lt;\\/td&gt;\\r\\n&lt;td&gt;30.3&lt;\\/td&gt;\\r\\n&lt;td&gt;25&lt;\\/td&gt;\\r\\n&lt;\\/tr&gt;\\r\\n&lt;tr&gt;\\r\\n&lt;td&gt;42&lt;\\/td&gt;\\r\\n&lt;td&gt;44.9&lt;\\/td&gt;\\r\\n&lt;td&gt;42&lt;\\/td&gt;\\r\\n&lt;td&gt;19.1&lt;\\/td&gt;\\r\\n&lt;td&gt;30.7&lt;\\/td&gt;\\r\\n&lt;td&gt;25.5&lt;\\/td&gt;\\r\\n&lt;\\/tr&gt;\\r\\n&lt;tr&gt;\\r\\n&lt;td&gt;44&lt;\\/td&gt;\\r\\n&lt;td&gt;47.2&lt;\\/td&gt;\\r\\n&lt;td&gt;44&lt;\\/td&gt;\\r\\n&lt;td&gt;19.7&lt;\\/td&gt;\\r\\n&lt;td&gt;31.1&lt;\\/td&gt;\\r\\n&lt;td&gt;26&lt;\\/td&gt;\\r\\n&lt;\\/tr&gt;\\r\\n&lt;tr&gt;\\r\\n&lt;td&gt;46&lt;\\/td&gt;\\r\\n&lt;td&gt;49.6&lt;\\/td&gt;\\r\\n&lt;td&gt;46&lt;\\/td&gt;\\r\\n&lt;td&gt;20.3&lt;\\/td&gt;\\r\\n&lt;td&gt;31.5&lt;\\/td&gt;\\r\\n&lt;td&gt;26.5&lt;\\/td&gt;\\r\\n&lt;\\/tr&gt;\\r\\n&lt;\\/tbody&gt;\\r\\n&lt;\\/table&gt;\\r\\n&lt;\\/div&gt;\\r\\n&lt;div class=&quot;custom-text-right&quot;&gt;\\r\\n&lt;p&gt;&lt;strong&gt;Effective Top Tube Length:&lt;\\/strong&gt; Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s.&lt;\\/p&gt;\\r\\n&lt;p&gt;&lt;strong&gt;Seat Tube Length:&lt;\\/strong&gt; dummy text of the printing and typesetting industry when an unknown printer took a galley of type and scrambled but also the leap into electronic typesetting, remaining essentially unchanged.&lt;\\/p&gt;\\r\\n&lt;p&gt;&lt;strong&gt;Head Tube Length:&lt;\\/strong&gt; Ipsum passages and more recently with desktop publishing software like Aldus PageMaker including versions.&lt;\\/p&gt;\\r\\n&lt;p&gt;&lt;strong&gt;Head Angle:&lt;\\/strong&gt; Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.&lt;\\/p&gt;\\r\\n&lt;p&gt;&lt;strong&gt;Fork Rake (rake):&lt;\\/strong&gt; It has survived not only five centuries popularised of Letraset sheets containing and more recently with desktop publishing software like Aldus PageMaker including versions.&lt;\\/p&gt;\\r\\n&lt;p&gt;&lt;strong&gt;Stand Over Height:&lt;\\/strong&gt; galley of type and scrambled it to make a type specimen book. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages.&lt;\\/p&gt;\\r\\n&lt;\\/div&gt;\\r\\n&lt;\\/div&gt;\"}},\"status\":\"1\"}'),
(160, 'FranchiseenquiryBlock', 'franchiseenquiryblock', '{\"name\":\"FranchiseenquiryBlock\",\"banner1\":\"catalog\\/franchise-banner.png\",\"heading\":{\"1\":\"Enquire\"},\"subtitle\":{\"1\":\"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sed molestie ligula. Sed aliquet arcu ut dolor placerat dapibus. Curabitur eleifend luctus rutrum. Integer lobortis diam in gravida malesuada. Aliquam accumsan enim vestibulum, suscipit quam et, laoreet tellus.\"},\"note\":{\"1\":\"Please fill the following details and we will get in touch with you in 48 working hours\"},\"status\":\"1\"}'),
(162, 'Career Block', 'careerblock', '{\"name\":\"Career Block\",\"banner1\":\"catalog\\/careersimage.png\",\"bgcolor\":\"#ffffff\",\"title\":{\"1\":\"Openings\"},\"subtitle\":{\"1\":\"Life at Narita\"},\"module_description\":{\"1\":{\"description\":\"&lt;p&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sed molestie ligula. Sed aliquet arcu ut dolor placerat dapibus. Curabitur eleifend luctus rutrum. Integer lobortis diam in gravida malesuada. Aliquam accumsan enim vestibulum, suscipit quam et, laoreet tellus. Suspendisse accumsan quam ac tincidunt tempor. Donec efficitur tempor vulputate. Duis vel molestie lacus. Donec ornare libero ultrices justo dictum porta. Praesent condimentum, velit quis viverra blandit, augue nunc venenatis magna, quis condimentum massa est dictum ipsum. Pellentesque turpis risus, facilisis a ante sed, mollis mattis neque. In metus magna, tempor at ligula vel, consequat tincidunt mi.&lt;\\/p&gt;\\r\\n\\t            &lt;p&gt;Nunc vel dui ultrices, sodales sem ac, congue leo. Etiam arcu nunc, malesuada eget suscipit non, bibendum vel elit. Nulla semper orci elit, vel elementum eros tempor id. In hac habitasse platea dictumst. In quis massa ut lorem facilisis egestas. Phasellus iaculis est nec aliquet condimentum. Suspendisse potenti. Proin dictum ut elit vel mattis. Aenean vehicula dictum tellus vel interdum.&lt;\\/p&gt;\"}},\"status\":\"1\",\"ishitestimonial\":{\"1\":[{\"username\":\"SALES EXECUTIVE\",\"description\":\"&lt;div class=&quot;sales-subtitle&quot;&gt;Experience: 3-5 Years(in Related Field)&lt;\\/div&gt;\\r\\n&lt;ol&gt;\\r\\n\\t                            &lt;li&gt;Experience in the field of sales in readymade product Trading.&lt;\\/li&gt;\\r\\n\\t                            &lt;li&gt;Ability to understand, Describe, Sell features of all our Products.&lt;\\/li&gt;\\r\\n\\t                            &lt;li&gt;Good Communication Skills&lt;\\/li&gt;\\r\\n\\t                        &lt;\\/ol&gt;\"},{\"username\":\"ACCOUNTS EXECUTIVE\",\"description\":\"&lt;div class=&quot;sales-subtitle&quot;&gt;Experience: 3-5 Years(in Related Field)&lt;\\/div&gt;\\r\\n&lt;ol&gt;\\r\\n\\t                            &lt;li&gt;Experience in the field of sales in readymade product Trading.&lt;\\/li&gt;\\r\\n\\t                            &lt;li&gt;Ability to understand, Describe, Sell features of all our Products.&lt;\\/li&gt;\\r\\n\\t                            &lt;li&gt;Good Communication Skills&lt;\\/li&gt;\\r\\n\\t                        &lt;\\/ol&gt;\"}]}}');

-- --------------------------------------------------------

--
-- Table structure for table `oc_offer`
--

CREATE TABLE `oc_offer` (
  `offer_id` int(11) NOT NULL,
  `date_added` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `date_modified` datetime NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `oc_offer`
--

INSERT INTO `oc_offer` (`offer_id`, `date_added`, `date_modified`) VALUES
(1, '2019-05-17 16:37:08', '2022-08-04 10:39:49'),
(2, '2019-05-17 16:46:11', '2022-08-04 10:45:39');

-- --------------------------------------------------------

--
-- Table structure for table `oc_offer_description`
--

CREATE TABLE `oc_offer_description` (
  `offer_id` int(11) NOT NULL DEFAULT '0',
  `language_id` int(11) NOT NULL DEFAULT '0',
  `title` varchar(200) NOT NULL DEFAULT ''
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `oc_offer_description`
--

INSERT INTO `oc_offer_description` (`offer_id`, `language_id`, `title`) VALUES
(1, 1, 'BUY 1 GET FLAT 10% OFF | BUY 2 GET 30% OFF'),
(2, 1, 'BUY 1 GET FLAT 25% OFF | BUY 5 GET 50% OFF');

-- --------------------------------------------------------

--
-- Table structure for table `oc_option`
--

CREATE TABLE `oc_option` (
  `option_id` int(11) NOT NULL,
  `type` varchar(32) NOT NULL,
  `sort_order` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `oc_option`
--

INSERT INTO `oc_option` (`option_id`, `type`, `sort_order`) VALUES
(1, 'radio', 1),
(2, 'checkbox', 2),
(4, 'text', 3),
(5, 'select', 4),
(6, 'textarea', 5),
(7, 'file', 6),
(8, 'date', 7),
(9, 'time', 8),
(10, 'datetime', 9),
(11, 'radio', 10),
(12, 'date', 11),
(13, 'select', 1),
(14, 'select', 2),
(15, 'select', 3);

-- --------------------------------------------------------

--
-- Table structure for table `oc_option_description`
--

CREATE TABLE `oc_option_description` (
  `option_id` int(11) NOT NULL,
  `language_id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `oc_option_description`
--

INSERT INTO `oc_option_description` (`option_id`, `language_id`, `name`) VALUES
(1, 1, 'Radio'),
(2, 1, 'Checkbox'),
(4, 1, 'Text'),
(6, 1, 'Textarea'),
(8, 1, 'Date'),
(7, 1, 'File'),
(5, 1, 'Select'),
(9, 1, 'Time'),
(10, 1, 'Date &amp; Time'),
(12, 1, 'Delivery Date'),
(1, 2, 'Radio'),
(2, 2, 'Checkbox'),
(4, 2, 'Text'),
(6, 2, 'Textarea'),
(8, 2, 'Date'),
(7, 2, 'File'),
(5, 2, 'Select'),
(9, 2, 'Time'),
(10, 2, 'Date &amp; Time'),
(12, 2, 'Delivery Date'),
(11, 1, 'Size'),
(13, 1, 'Blouse Length:'),
(14, 1, 'Neck Length:'),
(15, 1, 'Sleev Length:');

-- --------------------------------------------------------

--
-- Table structure for table `oc_option_value`
--

CREATE TABLE `oc_option_value` (
  `option_value_id` int(11) NOT NULL,
  `option_id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `sort_order` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `oc_option_value`
--

INSERT INTO `oc_option_value` (`option_value_id`, `option_id`, `image`, `sort_order`) VALUES
(43, 1, '', 3),
(32, 1, '', 1),
(45, 2, '', 4),
(44, 2, '', 3),
(42, 5, '', 4),
(41, 5, '', 3),
(39, 5, '', 1),
(40, 5, '', 2),
(31, 1, '', 2),
(23, 2, '', 1),
(24, 2, '', 2),
(51, 11, '', 6),
(50, 11, '', 5),
(49, 11, '', 4),
(48, 11, '', 3),
(47, 11, '', 2),
(46, 11, '', 1),
(54, 13, '', 3),
(53, 13, '', 2),
(52, 13, '', 1),
(57, 14, '', 3),
(56, 14, '', 2),
(55, 14, '', 1),
(60, 15, '', 3),
(59, 15, '', 2),
(58, 15, '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `oc_option_value_description`
--

CREATE TABLE `oc_option_value_description` (
  `option_value_id` int(11) NOT NULL,
  `language_id` int(11) NOT NULL,
  `option_id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `oc_option_value_description`
--

INSERT INTO `oc_option_value_description` (`option_value_id`, `language_id`, `option_id`, `name`) VALUES
(43, 1, 1, 'Large'),
(32, 1, 1, 'Small'),
(45, 1, 2, 'Checkbox 4'),
(44, 1, 2, 'Checkbox 3'),
(31, 1, 1, 'Medium'),
(42, 1, 5, 'Yellow'),
(41, 1, 5, 'Green'),
(39, 1, 5, 'Red'),
(40, 1, 5, 'Blue'),
(23, 1, 2, 'Checkbox 1'),
(24, 1, 2, 'Checkbox 2'),
(51, 1, 11, 'XXL'),
(50, 1, 11, 'XL'),
(49, 1, 11, 'L'),
(43, 2, 1, 'Large'),
(32, 2, 1, 'Small'),
(45, 2, 2, 'Checkbox 4'),
(44, 2, 2, 'Checkbox 3'),
(31, 2, 1, 'Medium'),
(42, 2, 5, 'Yellow'),
(41, 2, 5, 'Green'),
(39, 2, 5, 'Red'),
(40, 2, 5, 'Blue'),
(23, 2, 2, 'Checkbox 1'),
(24, 2, 2, 'Checkbox 2'),
(48, 1, 11, 'M'),
(47, 1, 11, 'S'),
(46, 1, 11, 'XS'),
(54, 1, 13, '17'),
(53, 1, 13, '15'),
(52, 1, 13, '14'),
(57, 1, 14, '15'),
(56, 1, 14, '12'),
(55, 1, 14, '8'),
(60, 1, 15, '32'),
(59, 1, 15, '25'),
(58, 1, 15, '20');

-- --------------------------------------------------------

--
-- Table structure for table `oc_order`
--

CREATE TABLE `oc_order` (
  `order_id` int(11) NOT NULL,
  `invoice_no` int(11) NOT NULL DEFAULT '0',
  `invoice_prefix` varchar(26) NOT NULL,
  `store_id` int(11) NOT NULL DEFAULT '0',
  `store_name` varchar(64) NOT NULL,
  `store_url` varchar(255) NOT NULL,
  `customer_id` int(11) NOT NULL DEFAULT '0',
  `customer_group_id` int(11) NOT NULL DEFAULT '0',
  `firstname` varchar(32) NOT NULL,
  `lastname` varchar(32) NOT NULL,
  `email` varchar(96) NOT NULL,
  `telephone` varchar(32) NOT NULL,
  `fax` varchar(32) NOT NULL,
  `custom_field` text NOT NULL,
  `payment_firstname` varchar(32) NOT NULL,
  `payment_lastname` varchar(32) NOT NULL,
  `payment_company` varchar(60) NOT NULL,
  `payment_address_1` varchar(128) NOT NULL,
  `payment_address_2` varchar(128) NOT NULL,
  `payment_city` varchar(128) NOT NULL,
  `payment_postcode` varchar(10) NOT NULL,
  `payment_country` varchar(128) NOT NULL,
  `payment_country_id` int(11) NOT NULL,
  `payment_zone` varchar(128) NOT NULL,
  `payment_zone_id` int(11) NOT NULL,
  `payment_address_format` text NOT NULL,
  `payment_custom_field` text NOT NULL,
  `payment_method` varchar(128) NOT NULL,
  `payment_code` varchar(128) NOT NULL,
  `shipping_firstname` varchar(32) NOT NULL,
  `shipping_lastname` varchar(32) NOT NULL,
  `shipping_company` varchar(40) NOT NULL,
  `shipping_address_1` varchar(128) NOT NULL,
  `shipping_address_2` varchar(128) NOT NULL,
  `shipping_city` varchar(128) NOT NULL,
  `shipping_postcode` varchar(10) NOT NULL,
  `shipping_country` varchar(128) NOT NULL,
  `shipping_country_id` int(11) NOT NULL,
  `shipping_zone` varchar(128) NOT NULL,
  `shipping_zone_id` int(11) NOT NULL,
  `shipping_address_format` text NOT NULL,
  `shipping_custom_field` text NOT NULL,
  `shipping_method` varchar(128) NOT NULL,
  `shipping_code` varchar(128) NOT NULL,
  `comment` text NOT NULL,
  `total` decimal(15,4) NOT NULL DEFAULT '0.0000',
  `order_status_id` int(11) NOT NULL DEFAULT '0',
  `affiliate_id` int(11) NOT NULL,
  `commission` decimal(15,4) NOT NULL,
  `marketing_id` int(11) NOT NULL,
  `tracking` varchar(64) NOT NULL,
  `language_id` int(11) NOT NULL,
  `currency_id` int(11) NOT NULL,
  `currency_code` varchar(3) NOT NULL,
  `currency_value` decimal(15,8) NOT NULL DEFAULT '1.00000000',
  `ip` varchar(40) NOT NULL,
  `forwarded_ip` varchar(40) NOT NULL,
  `user_agent` varchar(255) NOT NULL,
  `accept_language` varchar(255) NOT NULL,
  `date_added` datetime NOT NULL,
  `date_modified` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `oc_order`
--

INSERT INTO `oc_order` (`order_id`, `invoice_no`, `invoice_prefix`, `store_id`, `store_name`, `store_url`, `customer_id`, `customer_group_id`, `firstname`, `lastname`, `email`, `telephone`, `fax`, `custom_field`, `payment_firstname`, `payment_lastname`, `payment_company`, `payment_address_1`, `payment_address_2`, `payment_city`, `payment_postcode`, `payment_country`, `payment_country_id`, `payment_zone`, `payment_zone_id`, `payment_address_format`, `payment_custom_field`, `payment_method`, `payment_code`, `shipping_firstname`, `shipping_lastname`, `shipping_company`, `shipping_address_1`, `shipping_address_2`, `shipping_city`, `shipping_postcode`, `shipping_country`, `shipping_country_id`, `shipping_zone`, `shipping_zone_id`, `shipping_address_format`, `shipping_custom_field`, `shipping_method`, `shipping_code`, `comment`, `total`, `order_status_id`, `affiliate_id`, `commission`, `marketing_id`, `tracking`, `language_id`, `currency_id`, `currency_code`, `currency_value`, `ip`, `forwarded_ip`, `user_agent`, `accept_language`, `date_added`, `date_modified`) VALUES
(15, 0, 'INV-2019-00', 0, 'Your Store', 'http://192.168.0.101/user10/Kenza/', 7, 1, 'tyhtry', 'trytry', 'retyrty@gmail.com', '4744968798', '', '', 'sgesrg', 'gsdgd', 'sdgsg', 'dgsgg', '', 'sgggdsgsdg', '154627', 'Tuvalu', 218, 'Nanumanga', 3415, '', '[]', 'Cash On Delivery', 'cod', 'sgesrg', 'gsdgd', 'sdgsg', 'dgsgg', '', 'sgggdsgsdg', '154627', 'Tuvalu', 218, 'Nanumanga', 3415, '', '[]', 'Flat Shipping Rate', 'flat.flat', '', '105.0000', 0, 0, '0.0000', 0, '', 1, 2, 'USD', '1.00000000', '192.168.0.112', '', 'Mozilla/5.0 (Windows NT 6.1; rv:69.0) Gecko/20100101 Firefox/69.0', 'en-US,en;q=0.5', '2019-09-28 09:38:02', '2019-09-28 09:38:02'),
(28, 0, 'INV-2022-00', 0, 'Your Store', 'http://localhost/naritafashion/', 13, 1, 'dfsdf', 'sdfsd', 'dsfsdfsd@gmail.com', '852456', '', '', 'dfsdf', 'sdfsd', '', 'sdfsafsdfsd', 'sdf', 'sdfsd', '963258', 'Tuvalu', 218, 'Nukufetau', 3421, '', '[]', 'Cash On Delivery', 'cod', 'dfsdf', 'sdfsd', '', 'sdfsafsdfsd', 'sdf', 'sdfsd', '963258', 'Tuvalu', 218, 'Nukufetau', 3421, '', '[]', 'Flat Shipping Rate', 'flat.flat', '', '205.0000', 0, 0, '0.0000', 0, '', 1, 2, 'USD', '1.00000000', '127.0.0.1', '', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:102.0) Gecko/20100101 Firefox/102.0', 'en-US,en;q=0.5', '2022-07-30 06:53:04', '2022-07-30 06:53:04'),
(29, 0, 'INV-2022-00', 0, 'Your Store', 'http://192.168.0.101/user8/Naritafashion/', 14, 1, 'fdsf', 'sdfds', 'sdfsdf@gmail.com', '2585654', '', '', 'fdsf', 'sdfds', '', 'dfsdfgsdf', '', 'surat', '', 'United Arab Emirates', 221, 'Raâ€™s al Khaymah', 3511, '', '[]', 'Cash On Delivery', 'cod', 'fdsf', 'sdfds', '', 'dfsdfgsdf', '', 'surat', '', 'United Arab Emirates', 221, 'Raâ€™s al Khaymah', 3511, '', '[]', 'Flat Shipping Rate', 'flat.flat', '', '1015.0000', 1, 0, '0.0000', 0, '', 1, 4, 'INR', '1.00000000', '192.168.0.106', '', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64; rv:103.0) Gecko/20100101 Firefox/103.0', 'en-US,en;q=0.5', '2022-08-04 06:04:11', '2022-08-04 06:04:12'),
(30, 0, 'INV-2022-00', 0, 'Your Store', 'http://localhost/naritafashion/', 15, 1, 'dfgdfg', 'dfgdfg', 'dfgdfggf@gmail.com', '258456', '', '', 'dfgdfg', 'dfgdfg', 'dwsd', 'dsdsd', '', 'sdfdsf', '963245', 'Tuvalu', 218, 'Nukufetau', 3421, '', '[]', 'Cash On Delivery', 'cod', 'dfgdfg', 'dfgdfg', 'dwsd', 'dsdsd', '', 'sdfdsf', '963245', 'Tuvalu', 218, 'Nukufetau', 3421, '', '[]', 'Flat Shipping Rate', 'flat.flat', '', '105.0000', 1, 0, '0.0000', 0, '', 1, 4, 'INR', '1.00000000', '127.0.0.1', '', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:103.0) Gecko/20100101 Firefox/103.0', 'en-US,en;q=0.5', '2022-08-12 09:27:33', '2022-08-12 09:27:42'),
(31, 0, 'INV-2022-00', 0, 'Your Store', 'http://localhost/naritafashion/', 15, 1, 'dfgdfg', 'dfgdfg', 'dfgdfggf@gmail.com', '258456', '', '', 'dfgdfg', 'dfgdfg', 'dwsd', 'dsdsd', '', 'sdfdsf', '963245', 'Tuvalu', 218, 'Nukufetau', 3421, '', '[]', 'Cash On Delivery', 'cod', 'dfgdfg', 'dfgdfg', 'dwsd', 'dsdsd', '', 'sdfdsf', '963245', 'Tuvalu', 218, 'Nukufetau', 3421, '', '[]', 'Flat Shipping Rate', 'flat.flat', '', '55.0000', 0, 0, '0.0000', 0, '', 1, 4, 'INR', '1.00000000', '127.0.0.1', '', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:103.0) Gecko/20100101 Firefox/103.0', 'en-US,en;q=0.5', '2022-08-12 09:28:24', '2022-08-12 09:28:24'),
(32, 0, 'INV-2022-00', 0, 'Your Store', 'http://localhost/naritafashion/', 16, 1, 'admin', 'admin', 'admin01@gmail.com', '285456962', '', '', 'fsdfd', 'sdfdsf', 'sdfsdffd', 'sdfsdf', '', 'sdfsdf', '', 'Ukraine', 220, 'Luhans\'ka Oblast\'', 3492, '', '[]', 'Cash On Delivery', 'cod', 'fsdfd', 'sdfdsf', 'sdfsdffd', 'sdfsdf', '', 'sdfsdf', '', 'Ukraine', 220, 'Luhans\'ka Oblast\'', 3492, '', '[]', 'Flat Shipping Rate', 'flat.flat', '', '308.0000', 0, 0, '0.0000', 0, '', 1, 4, 'INR', '1.00000000', '127.0.0.1', '', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:103.0) Gecko/20100101 Firefox/103.0', 'en-US,en;q=0.5', '2022-08-13 05:21:53', '2022-08-13 05:21:53'),
(35, 0, 'INV-2022-00', 0, 'Your Store', 'http://localhost/naritafashion/', 19, 1, 'sagar', 'sagar', 'sagarpancholi@gmail.com', '2854569875', '', '', 'Sagar', 'Pancholi', 'sagar.in', 'Bardoli Patel Street, opp-Shiv Temple', '', 'Surat', '395001', 'India', 99, 'Gujarat', 1485, '', '[]', 'Cash On Delivery', 'cod', 'Sagar', 'Pancholi', 'sagar.in', 'Bardoli Patel Street, opp-Shiv Temple', '', 'Surat', '395001', 'India', 99, 'Gujarat', 1485, '', '[]', 'Flat Shipping Rate', 'flat.flat', '', '481.0000', 1, 0, '0.0000', 0, '', 1, 4, 'INR', '1.00000000', '127.0.0.1', '', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:103.0) Gecko/20100101 Firefox/103.0', 'en-US,en;q=0.5', '2022-08-24 09:16:50', '2022-08-24 09:17:04'),
(36, 0, 'INV-2022-00', 0, 'Your Store', 'http://192.168.0.101/user2/naritafashion/', 20, 1, 'sdfsdf', 'sdfsdf', 'sdfsdfsdfsdfsdf@gmail.com', '856458758', '', '', 'sdfsdf', 'sdfsdf', '', 'gjgj', '', 'hfghfghfg', '852456', 'Thailand', 209, 'Krabi', 3206, '', '[]', 'Cash On Delivery', 'cod', 'sdfsdf', 'sdfsdf', '', 'gjgj', '', 'hfghfghfg', '852456', 'Thailand', 209, 'Krabi', 3206, '', '[]', 'Flat Shipping Rate', 'flat.flat', '', '106.0000', 1, 0, '0.0000', 0, '', 1, 4, 'INR', '1.00000000', '192.168.0.109', '', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/107.0.0.0 Safari/537.36', 'en-US,en;q=0.9', '2022-11-29 08:57:39', '2022-11-29 08:57:40'),
(37, 0, 'INV-2022-00', 0, 'Your Store', 'http://192.168.0.101/user2/naritafashion/', 20, 1, 'sdfsdf', 'sdfsdf', 'sdfsdfsdfsdfsdf@gmail.com', '856458758', '', '', 'sdfsdf', 'sdfsdf', '', 'gjgj', '', 'hfghfghfg', '852456', 'Thailand', 209, 'Krabi', 3206, '', '[]', 'Cash On Delivery', 'cod', 'sdfsdf', 'sdfsdf', '', 'gjgj', '', 'hfghfghfg', '852456', 'Thailand', 209, 'Krabi', 3206, '', '[]', 'Flat Shipping Rate', 'flat.flat', '', '245.0000', 1, 0, '0.0000', 0, '', 1, 4, 'INR', '1.00000000', '192.168.0.109', '', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/107.0.0.0 Safari/537.36', 'en-US,en;q=0.9', '2022-11-29 09:19:24', '2022-11-29 09:19:29'),
(38, 0, 'INV-2022-00', 0, 'Your Store', 'http://192.168.0.101/user2/naritafashion/', 0, 1, 'abc', 'xyz', 'demo@gmail.com', '1234567890', '', '[]', 'abc', 'xyz', 'abds', 'abds', 'abds', 'surat', '021365', 'Ukraine', 220, 'Odes\'ka Oblast\'', 3495, '', '[]', 'Cash On Delivery', 'cod', 'abc', 'xyz', 'abds', 'abds', 'abds', 'surat', '021365', 'Ukraine', 220, 'Odes\'ka Oblast\'', 3495, '', '[]', 'Flat Shipping Rate', 'flat.flat', '', '20.0000', 1, 0, '0.0000', 0, '', 1, 4, 'INR', '1.00000000', '192.168.0.104', '', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/108.0.0.0 Safari/537.36', 'en-US,en;q=0.9', '2022-12-28 04:43:13', '2022-12-28 04:43:16'),
(39, 0, 'INV-2022-00', 0, 'Your Store', 'http://192.168.0.101/user2/naritafashion/', 22, 1, 'abc', 'xyz', 'demo14598@gmail.com', '1234567895', '', '', 'abc', 'xyz', 'abds', 'abds', 'abds', 'surat', '021365', 'Ukraine', 220, 'L\'vivs\'ka Oblast\'', 3493, '', '[]', 'Cash On Delivery', 'cod', 'abc', 'xyz', 'abds', 'abds', 'abds', 'surat', '021365', 'Ukraine', 220, 'L\'vivs\'ka Oblast\'', 3493, '', '[]', 'Flat Shipping Rate', 'flat.flat', '', '235.0000', 1, 0, '0.0000', 0, '', 1, 4, 'INR', '1.00000000', '192.168.0.104', '', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/108.0.0.0 Safari/537.36', 'en-US,en;q=0.9', '2022-12-31 06:59:15', '2022-12-31 06:59:18'),
(40, 0, 'INV-2022-00', 0, 'Your Store', 'http://192.168.0.101/user2/naritafashion/', 21, 1, 'abc', 'xyz', 'demoexample@gmail.com', '1234567890', '', '', 'abc', 'xyz', 'abds', 'abds', 'abds', 'surat', '021365', 'Ukraine', 220, 'Ivano-Frankivs\'ka Oblast\'', 3486, '', '[]', 'Cash On Delivery', 'cod', 'abc', 'xyz', 'abds', 'abds', 'abds', 'surat', '021365', 'Ukraine', 220, 'Ivano-Frankivs\'ka Oblast\'', 3486, '', '[]', 'Flat Shipping Rate', 'flat.flat', '', '50.0000', 1, 0, '0.0000', 0, '', 1, 4, 'INR', '1.00000000', '192.168.0.104', '', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/108.0.0.0 Safari/537.36', 'en-US,en;q=0.9', '2022-12-31 08:20:16', '2022-12-31 08:20:18'),
(41, 0, 'INV-2022-00', 0, 'Your Store', 'http://192.168.0.101/user2/naritafashion/', 21, 1, 'abc', 'xyz', 'demoexample@gmail.com', '1234567890', '', '', 'abc', 'xyz', 'abds', 'abds', 'abds', 'surat', '021365', 'Ukraine', 220, 'Ivano-Frankivs\'ka Oblast\'', 3486, '', '[]', 'Cash On Delivery', 'cod', 'abc', 'xyz', 'abds', 'abds', 'abds', 'surat', '021365', 'Ukraine', 220, 'Ivano-Frankivs\'ka Oblast\'', 3486, '', '[]', 'Flat Shipping Rate', 'flat.flat', '', '20.0000', 1, 0, '0.0000', 0, '', 1, 4, 'INR', '1.00000000', '192.168.0.104', '', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/108.0.0.0 Safari/537.36', 'en-US,en;q=0.9', '2022-12-31 08:23:44', '2022-12-31 08:23:45'),
(42, 0, 'INV-2023-00', 0, 'Your Store', 'https://narita.easyglue.in/', 0, 1, 'a', 's', 'a@a.com', '9876543210', '', '[]', 'a', 's', '', 'asd', 'asd', 'Surat', '395006', 'India', 99, 'Gujarat', 1485, '', '[]', 'Cash On Delivery', 'cod', 'a', 's', '', 'asd', 'asd', 'Surat', '395006', 'India', 99, 'Gujarat', 1485, '', '[]', 'Flat Shipping Rate', 'flat.flat', '', '804.0000', 0, 0, '0.0000', 0, '', 1, 4, 'INR', '1.00000000', '49.36.83.236', '', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/109.0.0.0 Safari/537.36', 'en-US,en;q=0.9', '2023-01-29 06:28:59', '2023-01-29 06:28:59'),
(43, 0, 'INV-2023-00', 0, 'Your Store', 'https://narita.easyglue.in/', 0, 1, 'a', 'd', 'a@a.com', '987653210', '', '[]', 'a', 'd', '', 'asd', 'asdf', 'surat', '395006', 'India', 99, 'Gujarat', 1485, '', '[]', 'Cash On Delivery', 'cod', 'a', 'd', '', 'asd', 'asdf', 'surat', '395006', 'India', 99, 'Gujarat', 1485, '', '[]', 'Flat Shipping Rate', 'flat.flat', '', '804.0000', 0, 0, '0.0000', 0, '', 1, 4, 'INR', '1.00000000', '49.36.83.236', '', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/109.0.0.0 Safari/537.36', 'en-US,en;q=0.9', '2023-01-29 06:31:35', '2023-01-29 06:31:35');

-- --------------------------------------------------------

--
-- Table structure for table `oc_order_history`
--

CREATE TABLE `oc_order_history` (
  `order_history_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `order_status_id` int(11) NOT NULL,
  `notify` tinyint(1) NOT NULL DEFAULT '0',
  `comment` text NOT NULL,
  `date_added` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `oc_order_history`
--

INSERT INTO `oc_order_history` (`order_history_id`, `order_id`, `order_status_id`, `notify`, `comment`, `date_added`) VALUES
(58, 29, 1, 0, '', '2022-08-04 06:04:12'),
(59, 30, 1, 0, '', '2022-08-12 09:27:39'),
(60, 30, 1, 0, '', '2022-08-12 09:27:42'),
(67, 35, 1, 0, '', '2022-08-24 09:17:04'),
(66, 35, 1, 0, '', '2022-08-24 09:17:01'),
(68, 36, 1, 0, '', '2022-11-29 08:57:40'),
(69, 37, 1, 0, '', '2022-11-29 09:19:29'),
(70, 38, 1, 0, '', '2022-12-28 04:43:16'),
(71, 39, 1, 0, '', '2022-12-31 06:59:18'),
(72, 40, 1, 0, '', '2022-12-31 08:20:18'),
(73, 41, 1, 0, '', '2022-12-31 08:23:45');

-- --------------------------------------------------------

--
-- Table structure for table `oc_order_option`
--

CREATE TABLE `oc_order_option` (
  `order_option_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `order_product_id` int(11) NOT NULL,
  `product_option_id` int(11) NOT NULL,
  `product_option_value_id` int(11) NOT NULL DEFAULT '0',
  `name` varchar(255) NOT NULL,
  `value` text NOT NULL,
  `type` varchar(32) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `oc_order_option`
--

INSERT INTO `oc_order_option` (`order_option_id`, `order_id`, `order_product_id`, `product_option_id`, `product_option_value_id`, `name`, `value`, `type`) VALUES
(42, 28, 58, 238, 35, 'Size', 'M', 'radio'),
(43, 28, 58, 253, 84, 'Blouse Length:', 'A', 'select'),
(44, 28, 58, 254, 88, 'Neck Length:', 'B', 'select'),
(45, 28, 58, 255, 92, 'Sleev Length:', 'C', 'select'),
(46, 29, 59, 241, 44, 'Size', 'S', 'radio'),
(47, 30, 60, 238, 93, 'Size', 'XS', 'radio'),
(48, 31, 61, 235, 19, 'Size', 'XS', 'radio'),
(49, 32, 62, 241, 44, 'Size', 'S', 'radio'),
(53, 35, 66, 241, 45, 'Size', 'M', 'radio'),
(54, 35, 67, 236, 29, 'Size', 'XS', 'radio'),
(55, 35, 68, 235, 19, 'Size', 'XS', 'radio'),
(56, 35, 69, 235, 20, 'Size', 'S', 'radio'),
(57, 35, 70, 242, 47, 'Size', 'S', 'radio'),
(58, 36, 71, 241, 44, 'Size', 'S', 'radio'),
(59, 37, 72, 242, 47, 'Size', 'S', 'radio'),
(60, 38, 73, 250, 75, 'Size', 'S', 'radio'),
(61, 39, 74, 236, 29, 'Size', 'XS', 'radio'),
(62, 39, 75, 250, 76, 'Size', 'M', 'radio'),
(63, 39, 76, 250, 76, 'Size', 'M', 'radio'),
(64, 40, 77, 242, 47, 'Size', 'S', 'radio'),
(65, 40, 78, 250, 75, 'Size', 'S', 'radio'),
(66, 41, 79, 250, 75, 'Size', 'S', 'radio'),
(67, 42, 80, 262, 115, 'Size', 'S', 'radio'),
(68, 43, 81, 265, 124, 'Size', 'S', 'radio');

-- --------------------------------------------------------

--
-- Table structure for table `oc_order_product`
--

CREATE TABLE `oc_order_product` (
  `order_product_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `model` varchar(64) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` decimal(15,4) NOT NULL DEFAULT '0.0000',
  `total` decimal(15,4) NOT NULL DEFAULT '0.0000',
  `tax` decimal(15,4) NOT NULL DEFAULT '0.0000',
  `reward` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `oc_order_product`
--

INSERT INTO `oc_order_product` (`order_product_id`, `order_id`, `product_id`, `name`, `model`, `quantity`, `price`, `total`, `tax`, `reward`) VALUES
(28, 15, 34, 'iPod Shuffle', 'Product 7', 1, '100.0000', '100.0000', '0.0000', 0),
(58, 28, 30, 'Basic Gulabi Blouse', 'Product 3', 2, '100.0000', '200.0000', '0.0000', 400),
(59, 29, 40, 'Basic Black Blouse', 'product 11', 10, '101.0000', '1010.0000', '0.0000', 0),
(60, 30, 30, 'Basic Gulabi Blouse', 'Product 3', 1, '100.0000', '100.0000', '0.0000', 200),
(61, 31, 47, 'Lacy Macy Blouse', 'Product 21', 1, '50.0000', '50.0000', '0.0000', 300),
(62, 32, 40, 'Basic Black Blouse', 'product 11', 3, '101.0000', '303.0000', '0.0000', 0),
(66, 35, 40, 'Basic Black Blouse', 'product 11', 1, '101.0000', '101.0000', '0.0000', 0),
(67, 35, 42, 'Basic Kala Blouse', 'Product 15', 2, '100.0000', '200.0000', '0.0000', 0),
(68, 35, 47, 'Lacy Macy Blouse', 'Product 21', 2, '50.0000', '100.0000', '0.0000', 600),
(69, 35, 47, 'Lacy Macy Blouse', 'Product 21', 1, '45.0000', '45.0000', '0.0000', 300),
(70, 35, 48, 'Green Blouse', 'product 20', 1, '30.0000', '30.0000', '0.0000', 0),
(71, 36, 40, 'Basic Black Blouse', 'product 11', 1, '101.0000', '101.0000', '0.0000', 0),
(72, 37, 48, 'Green Blouse', 'product 20', 8, '30.0000', '240.0000', '0.0000', 0),
(73, 38, 49, 'Basic Maroon Blouse', 'SAM1', 1, '15.0000', '15.0000', '0.0000', 1000),
(74, 39, 42, 'Basic Kala Blouse', 'Product 15', 2, '100.0000', '200.0000', '0.0000', 0),
(75, 39, 49, 'Basic Maroon Blouse', 'SAM1', 1, '15.0000', '15.0000', '0.0000', 1000),
(76, 39, 49, 'Basic Maroon Blouse', 'SAM1', 1, '15.0000', '15.0000', '0.0000', 1000),
(77, 40, 48, 'Green Blouse', 'product 20', 1, '30.0000', '30.0000', '0.0000', 0),
(78, 40, 49, 'Basic Maroon Blouse', 'SAM1', 1, '15.0000', '15.0000', '0.0000', 1000),
(79, 41, 49, 'Basic Maroon Blouse', 'SAM1', 1, '15.0000', '15.0000', '0.0000', 1000),
(80, 42, 53, 'Pink Sleeveless Blouse', 'Pink Sleeveless Blouse', 1, '799.0000', '799.0000', '0.0000', 0),
(81, 43, 56, 'Yellow Sleeveless Blouse', 'Yellow Sleeveless Blouse', 1, '799.0000', '799.0000', '0.0000', 0);

-- --------------------------------------------------------

--
-- Table structure for table `oc_order_recurring`
--

CREATE TABLE `oc_order_recurring` (
  `order_recurring_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `reference` varchar(255) NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_quantity` int(11) NOT NULL,
  `recurring_id` int(11) NOT NULL,
  `recurring_name` varchar(255) NOT NULL,
  `recurring_description` varchar(255) NOT NULL,
  `recurring_frequency` varchar(25) NOT NULL,
  `recurring_cycle` smallint(6) NOT NULL,
  `recurring_duration` smallint(6) NOT NULL,
  `recurring_price` decimal(10,4) NOT NULL,
  `trial` tinyint(1) NOT NULL,
  `trial_frequency` varchar(25) NOT NULL,
  `trial_cycle` smallint(6) NOT NULL,
  `trial_duration` smallint(6) NOT NULL,
  `trial_price` decimal(10,4) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `date_added` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `oc_order_recurring_transaction`
--

CREATE TABLE `oc_order_recurring_transaction` (
  `order_recurring_transaction_id` int(11) NOT NULL,
  `order_recurring_id` int(11) NOT NULL,
  `reference` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `amount` decimal(10,4) NOT NULL,
  `date_added` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `oc_order_shipment`
--

CREATE TABLE `oc_order_shipment` (
  `order_shipment_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `date_added` datetime NOT NULL,
  `shipping_courier_id` varchar(255) NOT NULL DEFAULT '',
  `tracking_number` varchar(255) NOT NULL DEFAULT ''
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `oc_order_status`
--

CREATE TABLE `oc_order_status` (
  `order_status_id` int(11) NOT NULL,
  `language_id` int(11) NOT NULL,
  `name` varchar(32) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `oc_order_status`
--

INSERT INTO `oc_order_status` (`order_status_id`, `language_id`, `name`) VALUES
(2, 1, 'Processing'),
(3, 1, 'Shipped'),
(7, 1, 'Canceled'),
(5, 1, 'Complete'),
(8, 1, 'Denied'),
(9, 1, 'Canceled Reversal'),
(10, 1, 'Failed'),
(11, 1, 'Refunded'),
(12, 1, 'Reversed'),
(13, 1, 'Chargeback'),
(1, 1, 'Pending'),
(16, 1, 'Voided'),
(15, 1, 'Processed'),
(14, 1, 'Expired'),
(2, 2, 'Processing'),
(3, 2, 'Shipped'),
(7, 2, 'Canceled'),
(5, 2, 'Complete'),
(8, 2, 'Denied'),
(9, 2, 'Canceled Reversal'),
(10, 2, 'Failed'),
(11, 2, 'Refunded'),
(12, 2, 'Reversed'),
(13, 2, 'Chargeback'),
(1, 2, 'Pending'),
(16, 2, 'Voided'),
(15, 2, 'Processed'),
(14, 2, 'Expired');

-- --------------------------------------------------------

--
-- Table structure for table `oc_order_total`
--

CREATE TABLE `oc_order_total` (
  `order_total_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `code` varchar(32) NOT NULL,
  `title` varchar(255) NOT NULL,
  `value` decimal(15,4) NOT NULL DEFAULT '0.0000',
  `sort_order` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `oc_order_total`
--

INSERT INTO `oc_order_total` (`order_total_id`, `order_id`, `code`, `title`, `value`, `sort_order`) VALUES
(43, 15, 'sub_total', 'Sub-Total', '100.0000', 1),
(44, 15, 'shipping', 'Flat Shipping Rate', '5.0000', 3),
(45, 15, 'total', 'Total', '105.0000', 9),
(82, 28, 'sub_total', 'Sub-Total', '200.0000', 1),
(83, 28, 'shipping', 'Flat Shipping Rate', '5.0000', 3),
(84, 28, 'total', 'Total', '205.0000', 9),
(85, 29, 'sub_total', 'Sub-Total', '1010.0000', 1),
(86, 29, 'shipping', 'Flat Shipping Rate', '5.0000', 3),
(87, 29, 'total', 'Total', '1015.0000', 9),
(88, 30, 'sub_total', 'Sub-Total', '100.0000', 1),
(89, 30, 'shipping', 'Flat Shipping Rate', '5.0000', 3),
(90, 30, 'total', 'Total', '105.0000', 9),
(91, 31, 'sub_total', 'Sub-Total', '50.0000', 1),
(92, 31, 'shipping', 'Flat Shipping Rate', '5.0000', 3),
(93, 31, 'total', 'Total', '55.0000', 9),
(94, 32, 'sub_total', 'Sub-Total', '303.0000', 1),
(95, 32, 'shipping', 'Flat Shipping Rate', '5.0000', 3),
(96, 32, 'total', 'Total', '308.0000', 9),
(105, 35, 'total', 'Total', '481.0000', 9),
(104, 35, 'shipping', 'Flat Shipping Rate', '5.0000', 3),
(103, 35, 'sub_total', 'Sub-Total', '476.0000', 1),
(106, 36, 'sub_total', 'Sub-Total', '101.0000', 1),
(107, 36, 'shipping', 'Flat Shipping Rate', '5.0000', 3),
(108, 36, 'total', 'Total', '106.0000', 9),
(109, 37, 'sub_total', 'Sub-Total', '240.0000', 1),
(110, 37, 'shipping', 'Flat Shipping Rate', '5.0000', 3),
(111, 37, 'total', 'Total', '245.0000', 9),
(112, 38, 'sub_total', 'Sub-Total', '15.0000', 1),
(113, 38, 'shipping', 'Flat Shipping Rate', '5.0000', 3),
(114, 38, 'total', 'Total', '20.0000', 9),
(115, 39, 'sub_total', 'Sub-Total', '230.0000', 1),
(116, 39, 'shipping', 'Flat Shipping Rate', '5.0000', 3),
(117, 39, 'total', 'Total', '235.0000', 9),
(118, 40, 'sub_total', 'Sub-Total', '45.0000', 1),
(119, 40, 'shipping', 'Flat Shipping Rate', '5.0000', 3),
(120, 40, 'total', 'Total', '50.0000', 9),
(121, 41, 'sub_total', 'Sub-Total', '15.0000', 1),
(122, 41, 'shipping', 'Flat Shipping Rate', '5.0000', 3),
(123, 41, 'total', 'Total', '20.0000', 9),
(124, 42, 'sub_total', 'Sub-Total', '799.0000', 1),
(125, 42, 'shipping', 'Flat Shipping Rate', '5.0000', 3),
(126, 42, 'total', 'Total', '804.0000', 9),
(127, 43, 'sub_total', 'Sub-Total', '799.0000', 1),
(128, 43, 'shipping', 'Flat Shipping Rate', '5.0000', 3),
(129, 43, 'total', 'Total', '804.0000', 9);

-- --------------------------------------------------------

--
-- Table structure for table `oc_order_voucher`
--

CREATE TABLE `oc_order_voucher` (
  `order_voucher_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `voucher_id` int(11) NOT NULL,
  `description` varchar(255) NOT NULL,
  `code` varchar(10) NOT NULL,
  `from_name` varchar(64) NOT NULL,
  `from_email` varchar(96) NOT NULL,
  `to_name` varchar(64) NOT NULL,
  `to_email` varchar(96) NOT NULL,
  `voucher_theme_id` int(11) NOT NULL,
  `message` text NOT NULL,
  `amount` decimal(15,4) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `oc_product`
--

CREATE TABLE `oc_product` (
  `product_id` int(11) NOT NULL,
  `model` varchar(64) NOT NULL,
  `sku` varchar(64) NOT NULL,
  `upc` varchar(12) NOT NULL,
  `ean` varchar(14) NOT NULL,
  `jan` varchar(13) NOT NULL,
  `isbn` varchar(17) NOT NULL,
  `mpn` varchar(64) NOT NULL,
  `location` varchar(128) NOT NULL,
  `quantity` int(11) NOT NULL DEFAULT '0',
  `stock_status_id` int(11) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `manufacturer_id` int(11) NOT NULL,
  `shipping` tinyint(1) NOT NULL DEFAULT '1',
  `price` varchar(255) NOT NULL,
  `points` int(11) NOT NULL DEFAULT '0',
  `tax_class_id` int(11) NOT NULL,
  `date_available` date NOT NULL DEFAULT '0000-00-00',
  `weight` decimal(15,8) NOT NULL DEFAULT '0.00000000',
  `weight_class_id` int(11) NOT NULL DEFAULT '0',
  `length` decimal(15,8) NOT NULL DEFAULT '0.00000000',
  `width` decimal(15,8) NOT NULL DEFAULT '0.00000000',
  `height` decimal(15,8) NOT NULL DEFAULT '0.00000000',
  `length_class_id` int(11) NOT NULL DEFAULT '0',
  `subtract` tinyint(1) NOT NULL DEFAULT '1',
  `minimum` int(11) NOT NULL DEFAULT '1',
  `sort_order` int(11) NOT NULL DEFAULT '0',
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `viewed` int(11) NOT NULL DEFAULT '0',
  `date_added` datetime NOT NULL,
  `date_modified` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `oc_product`
--

INSERT INTO `oc_product` (`product_id`, `model`, `sku`, `upc`, `ean`, `jan`, `isbn`, `mpn`, `location`, `quantity`, `stock_status_id`, `image`, `manufacturer_id`, `shipping`, `price`, `points`, `tax_class_id`, `date_available`, `weight`, `weight_class_id`, `length`, `width`, `height`, `length_class_id`, `subtract`, `minimum`, `sort_order`, `status`, `viewed`, `date_added`, `date_modified`) VALUES
(50, 'Blue Stripe Blouse', '23BLM0026', '', '', '', '', '', '', 6, 6, 'catalog/productsimage/1.jpg', 0, 1, '799', 0, 0, '2023-01-12', '0.00000000', 1, '0.00000000', '0.00000000', '0.00000000', 1, 1, 1, 1, 1, 6, '2023-01-12 11:10:54', '2023-02-02 10:52:10'),
(51, 'Floral Marron Blouse', '23MRM0027', '', '', '', '', '', '', 6, 6, 'catalog/productsimage/3.jpg', 0, 1, '799', 0, 0, '2023-01-12', '0.00000000', 1, '0.00000000', '0.00000000', '0.00000000', 1, 1, 1, 1, 1, 0, '2023-01-12 11:31:26', '2023-01-12 12:01:07'),
(52, 'Olive Sleeveless Blouse', '23OGM0024', '', '', '', '', '', '', 1, 6, 'catalog/productsimage/5.jpg', 0, 1, '799', 0, 0, '2023-01-12', '0.00000000', 1, '0.00000000', '0.00000000', '0.00000000', 1, 1, 1, 1, 1, 0, '2023-01-12 11:45:47', '2023-02-02 10:51:59'),
(53, 'Pink Sleeveless Blouse', '', '', '', '', '', '', '', 6, 6, 'catalog/productsimage/7.jpg', 0, 1, '799', 0, 0, '2023-01-12', '0.00000000', 1, '0.00000000', '0.00000000', '0.00000000', 1, 1, 1, 1, 1, 4, '2023-01-12 11:48:25', '2023-02-02 10:47:01'),
(54, 'Red Sleeveless Blouse', '23RDM0023', '', '', '', '', '', '', 1, 6, 'catalog/productsimage/9.jpg', 0, 1, '799', 0, 0, '2023-01-12', '0.00000000', 1, '0.00000000', '0.00000000', '0.00000000', 1, 1, 1, 1, 1, 2, '2023-01-12 11:51:02', '2023-02-02 10:53:13'),
(55, 'Satin Embroidered Blouse', '23AMM0021', '', '', '', '', '', '', 1, 6, 'catalog/productsimage/11.jpg', 0, 1, '799', 0, 0, '2023-01-12', '0.00000000', 1, '0.00000000', '0.00000000', '0.00000000', 1, 1, 1, 1, 1, 10, '2023-01-12 11:52:48', '2023-01-12 11:52:48'),
(56, 'Yellow Sleeveless Blouse', '23YLM0025', '', '', '', '', '', '', 1, 6, 'catalog/productsimage/13.jpg', 0, 1, '799', 0, 0, '2023-01-12', '0.00000000', 1, '0.00000000', '0.00000000', '0.00000000', 1, 1, 1, 1, 1, 12, '2023-01-12 11:56:23', '2023-01-12 12:04:02');

-- --------------------------------------------------------

--
-- Table structure for table `oc_product_attribute`
--

CREATE TABLE `oc_product_attribute` (
  `product_id` int(11) NOT NULL,
  `attribute_id` int(11) NOT NULL,
  `language_id` int(11) NOT NULL,
  `text` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `oc_product_attribute`
--

INSERT INTO `oc_product_attribute` (`product_id`, `attribute_id`, `language_id`, `text`) VALUES
(52, 14, 1, 'Narita Lifestyle Pvt.Ltd.'),
(52, 15, 1, 'Olive'),
(53, 14, 1, 'Narita Lifestyle Pvt.Ltd.'),
(53, 15, 1, 'Pink'),
(51, 13, 1, 'India'),
(50, 13, 1, 'India'),
(50, 14, 1, 'Narita Lifestyle Pvt.Ltd.'),
(51, 16, 1, 'Cotton'),
(51, 15, 1, 'Maroon'),
(54, 14, 1, 'Narita Lifestyle Pvt.Ltd.'),
(56, 14, 1, 'Narita Lifestyle Pvt.Ltd.'),
(56, 15, 1, 'Yellow'),
(56, 13, 1, 'India'),
(52, 13, 1, 'India'),
(53, 13, 1, 'India'),
(54, 15, 1, 'Red'),
(56, 16, 1, 'Cotton'),
(54, 13, 1, 'India'),
(50, 15, 1, 'Blue Stripe'),
(53, 16, 1, 'Cotton'),
(52, 16, 1, 'Cotton'),
(50, 16, 1, 'Cotton'),
(54, 16, 1, 'Cotton');

-- --------------------------------------------------------

--
-- Table structure for table `oc_product_description`
--

CREATE TABLE `oc_product_description` (
  `product_id` int(11) NOT NULL,
  `language_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `tag` text NOT NULL,
  `meta_title` varchar(255) NOT NULL,
  `meta_description` varchar(255) NOT NULL,
  `meta_keyword` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `oc_product_description`
--

INSERT INTO `oc_product_description` (`product_id`, `language_id`, `name`, `description`, `tag`, `meta_title`, `meta_description`, `meta_keyword`) VALUES
(50, 1, 'Blue Stripe Blouse', '&lt;table border=&quot;0&quot; cellpadding=&quot;0&quot; cellspacing=&quot;0&quot; width=&quot;295&quot; style=&quot;width: 221pt;&quot;&gt;&lt;tbody&gt;&lt;tr height=&quot;19&quot; style=&quot;height:14.4pt&quot;&gt;\r\n  &lt;td height=&quot;19&quot; width=&quot;295&quot; style=&quot;height:14.4pt;width:221pt&quot;&gt;Blue Stripe Blouse&lt;/td&gt;&lt;/tr&gt;&lt;/tbody&gt;&lt;/table&gt;', '', 'Blue Stripe Blouse', '', ''),
(51, 1, 'Floral Maroon Blouse', 'Floral Maroon Blouse&lt;br&gt;', '', 'Floral Maroon Blouse', '', ''),
(52, 1, 'Olive Sleeveless Blouse', '&lt;table border=&quot;0&quot; cellpadding=&quot;0&quot; cellspacing=&quot;0&quot; width=&quot;295&quot; style=&quot;width: 221pt;&quot;&gt;&lt;tbody&gt;&lt;tr height=&quot;19&quot; style=&quot;height:14.4pt&quot;&gt;\r\n  &lt;td height=&quot;19&quot; width=&quot;295&quot; style=&quot;height:14.4pt;width:221pt&quot;&gt;Olive Sleeveless\r\n  Blouse&lt;/td&gt;&lt;/tr&gt;&lt;/tbody&gt;&lt;/table&gt;', '', 'Olive Sleeveless Blouse', '', ''),
(53, 1, 'Pink Sleeveless Blouse', '&lt;p&gt;Pink Sleeveless Blouse&lt;br&gt;&lt;/p&gt;', '', 'Pink Sleeveless Blouse', '', ''),
(54, 1, 'Red Sleeveless Blouse', '&lt;table border=&quot;0&quot; cellpadding=&quot;0&quot; cellspacing=&quot;0&quot; width=&quot;295&quot; style=&quot;width: 221pt;&quot;&gt;&lt;tbody&gt;&lt;tr height=&quot;19&quot; style=&quot;height:14.4pt&quot;&gt;\r\n  &lt;td height=&quot;19&quot; width=&quot;295&quot; style=&quot;height:14.4pt;width:221pt&quot;&gt;Red Sleeveless\r\n  Blouse&lt;/td&gt;&lt;/tr&gt;&lt;/tbody&gt;&lt;/table&gt;', '', 'Red Sleeveless Blouse', '', ''),
(55, 1, 'Satin Embroidered Blouse', '&lt;table border=&quot;0&quot; cellpadding=&quot;0&quot; cellspacing=&quot;0&quot; width=&quot;295&quot; style=&quot;width: 221pt;&quot;&gt;&lt;tbody&gt;&lt;tr height=&quot;19&quot; style=&quot;height:14.4pt&quot;&gt;\r\n  &lt;td height=&quot;19&quot; width=&quot;295&quot; style=&quot;height:14.4pt;width:221pt&quot;&gt;&lt;p&gt;Satin Embroidered\r\n  Blouse&lt;/p&gt;&lt;/td&gt;&lt;/tr&gt;&lt;/tbody&gt;&lt;/table&gt;', '', 'Satin Embroidered Blouse', '', ''),
(56, 1, 'Yellow Sleeveless Blouse', '&lt;table border=&quot;0&quot; cellpadding=&quot;0&quot; cellspacing=&quot;0&quot; width=&quot;295&quot; style=&quot;width: 221pt;&quot;&gt;&lt;tbody&gt;&lt;tr height=&quot;19&quot; style=&quot;height:14.4pt&quot;&gt;\r\n  &lt;td height=&quot;19&quot; width=&quot;295&quot; style=&quot;height:14.4pt;width:221pt&quot;&gt;Yellow Sleeveless\r\n  Blouse&lt;/td&gt;&lt;/tr&gt;&lt;/tbody&gt;&lt;/table&gt;', '', 'Yellow Sleeveless Blouse', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `oc_product_discount`
--

CREATE TABLE `oc_product_discount` (
  `product_discount_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `customer_group_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL DEFAULT '0',
  `priority` int(11) NOT NULL DEFAULT '1',
  `price` decimal(15,4) NOT NULL DEFAULT '0.0000',
  `date_start` date NOT NULL DEFAULT '0000-00-00',
  `date_end` date NOT NULL DEFAULT '0000-00-00'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `oc_product_filter`
--

CREATE TABLE `oc_product_filter` (
  `product_id` int(11) NOT NULL,
  `filter_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `oc_product_filter`
--

INSERT INTO `oc_product_filter` (`product_id`, `filter_id`) VALUES
(50, 3),
(50, 8),
(53, 1),
(53, 2),
(53, 3),
(53, 8),
(54, 1),
(54, 2),
(54, 3),
(54, 5),
(54, 8);

-- --------------------------------------------------------

--
-- Table structure for table `oc_product_image`
--

CREATE TABLE `oc_product_image` (
  `product_image_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `sort_order` int(11) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `oc_product_image`
--

INSERT INTO `oc_product_image` (`product_image_id`, `product_id`, `image`, `sort_order`) VALUES
(4706, 50, 'catalog/productsimage/2.jpg', 0),
(4689, 51, 'catalog/productsimage/4.jpg', 0),
(4704, 52, 'catalog/productsimage/6.jpg', 0),
(4699, 53, 'catalog/productsimage/8.jpg', 0),
(4707, 54, 'catalog/productsimage/10.jpg', 0),
(4685, 55, 'catalog/productsimage/12.jpg', 0),
(4693, 56, 'catalog/productsimage/14.jpg', 0),
(4705, 50, 'catalog/productsimage/13.jpg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `oc_product_option`
--

CREATE TABLE `oc_product_option` (
  `product_option_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `option_id` int(11) NOT NULL,
  `value` text NOT NULL,
  `required` tinyint(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `oc_product_option`
--

INSERT INTO `oc_product_option` (`product_option_id`, `product_id`, `option_id`, `value`, `required`) VALUES
(259, 50, 11, '', 1),
(260, 51, 11, '', 1),
(262, 53, 11, '', 1),
(265, 56, 11, '', 1),
(261, 52, 11, '', 1),
(264, 55, 11, '', 1),
(263, 54, 11, '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `oc_product_option_value`
--

CREATE TABLE `oc_product_option_value` (
  `product_option_value_id` int(11) NOT NULL,
  `product_option_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `option_id` int(11) NOT NULL,
  `option_value_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `subtract` tinyint(1) NOT NULL,
  `price` decimal(15,4) NOT NULL,
  `price_prefix` varchar(1) NOT NULL,
  `points` int(11) NOT NULL,
  `points_prefix` varchar(1) NOT NULL,
  `weight` decimal(15,8) NOT NULL,
  `weight_prefix` varchar(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `oc_product_option_value`
--

INSERT INTO `oc_product_option_value` (`product_option_value_id`, `product_option_id`, `product_id`, `option_id`, `option_value_id`, `quantity`, `subtract`, `price`, `price_prefix`, `points`, `points_prefix`, `weight`, `weight_prefix`) VALUES
(114, 261, 52, 11, 49, 0, 1, '0.0000', '+', 0, '+', '0.00000000', '+'),
(113, 261, 52, 11, 48, 6, 1, '0.0000', '+', 0, '+', '0.00000000', '+'),
(112, 261, 52, 11, 47, 6, 1, '0.0000', '+', 0, '+', '0.00000000', '+'),
(109, 260, 51, 11, 47, 6, 1, '0.0000', '+', 0, '+', '0.00000000', '+'),
(110, 260, 51, 11, 48, 6, 1, '0.0000', '+', 0, '+', '0.00000000', '+'),
(111, 260, 51, 11, 49, 6, 1, '0.0000', '+', 0, '+', '0.00000000', '+'),
(117, 262, 53, 11, 49, 6, 1, '0.0000', '+', 0, '+', '0.00000000', '+'),
(116, 262, 53, 11, 48, 6, 1, '0.0000', '+', 0, '+', '0.00000000', '+'),
(115, 262, 53, 11, 47, 6, 1, '0.0000', '+', 0, '+', '0.00000000', '+'),
(120, 263, 54, 11, 49, 6, 1, '0.0000', '+', 0, '+', '0.00000000', '+'),
(119, 263, 54, 11, 48, 6, 1, '0.0000', '+', 0, '+', '0.00000000', '+'),
(123, 264, 55, 11, 49, 6, 1, '0.0000', '+', 0, '+', '0.00000000', '+'),
(124, 265, 56, 11, 47, 6, 1, '0.0000', '+', 0, '+', '0.00000000', '+'),
(125, 265, 56, 11, 48, 6, 1, '0.0000', '+', 0, '+', '0.00000000', '+'),
(126, 265, 56, 11, 49, 6, 1, '0.0000', '+', 0, '+', '0.00000000', '+'),
(122, 264, 55, 11, 48, 6, 1, '0.0000', '+', 0, '+', '0.00000000', '+'),
(118, 263, 54, 11, 47, 6, 1, '0.0000', '+', 0, '+', '0.00000000', '+'),
(121, 264, 55, 11, 47, 6, 1, '0.0000', '+', 0, '+', '0.00000000', '+'),
(108, 259, 50, 11, 49, 6, 1, '0.0000', '+', 0, '+', '0.00000000', '+'),
(107, 259, 50, 11, 48, 6, 1, '0.0000', '+', 0, '+', '0.00000000', '+'),
(106, 259, 50, 11, 47, 6, 1, '0.0000', '+', 0, '+', '0.00000000', '+');

-- --------------------------------------------------------

--
-- Table structure for table `oc_product_recurring`
--

CREATE TABLE `oc_product_recurring` (
  `product_id` int(11) NOT NULL,
  `recurring_id` int(11) NOT NULL,
  `customer_group_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `oc_product_related`
--

CREATE TABLE `oc_product_related` (
  `product_id` int(11) NOT NULL,
  `related_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `oc_product_related`
--

INSERT INTO `oc_product_related` (`product_id`, `related_id`) VALUES
(50, 50),
(50, 51),
(50, 52),
(50, 53),
(50, 54),
(50, 55),
(50, 56),
(51, 50),
(51, 51),
(51, 52),
(51, 53),
(51, 54),
(51, 55),
(51, 56),
(52, 50),
(52, 51),
(52, 53),
(52, 54),
(52, 55),
(52, 56),
(53, 50),
(53, 51),
(53, 52),
(53, 53),
(53, 54),
(53, 55),
(53, 56),
(54, 50),
(54, 51),
(54, 52),
(54, 53),
(54, 54),
(54, 55),
(54, 56),
(55, 50),
(55, 51),
(55, 52),
(55, 53),
(55, 54),
(55, 56),
(56, 50),
(56, 51),
(56, 52),
(56, 53),
(56, 54),
(56, 55),
(56, 56);

-- --------------------------------------------------------

--
-- Table structure for table `oc_product_reward`
--

CREATE TABLE `oc_product_reward` (
  `product_reward_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL DEFAULT '0',
  `customer_group_id` int(11) NOT NULL DEFAULT '0',
  `points` int(11) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `oc_product_special`
--

CREATE TABLE `oc_product_special` (
  `product_special_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `customer_group_id` int(11) NOT NULL,
  `priority` int(11) NOT NULL DEFAULT '1',
  `price` varchar(255) NOT NULL,
  `percentage` varchar(255) NOT NULL,
  `discount_price` varchar(255) NOT NULL,
  `date_start` date NOT NULL DEFAULT '0000-00-00',
  `date_end` date NOT NULL DEFAULT '0000-00-00'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `oc_product_to_category`
--

CREATE TABLE `oc_product_to_category` (
  `product_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `oc_product_to_category`
--

INSERT INTO `oc_product_to_category` (`product_id`, `category_id`) VALUES
(50, 20),
(51, 20),
(52, 20),
(53, 87),
(54, 20),
(55, 20),
(56, 20);

-- --------------------------------------------------------

--
-- Table structure for table `oc_product_to_download`
--

CREATE TABLE `oc_product_to_download` (
  `product_id` int(11) NOT NULL,
  `download_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `oc_product_to_layout`
--

CREATE TABLE `oc_product_to_layout` (
  `product_id` int(11) NOT NULL,
  `store_id` int(11) NOT NULL,
  `layout_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `oc_product_to_layout`
--

INSERT INTO `oc_product_to_layout` (`product_id`, `store_id`, `layout_id`) VALUES
(50, 0, 0),
(51, 0, 0),
(53, 0, 0),
(56, 0, 0),
(52, 0, 0),
(55, 0, 0),
(54, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `oc_product_to_store`
--

CREATE TABLE `oc_product_to_store` (
  `product_id` int(11) NOT NULL,
  `store_id` int(11) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `oc_product_to_store`
--

INSERT INTO `oc_product_to_store` (`product_id`, `store_id`) VALUES
(50, 0),
(51, 0),
(52, 0),
(53, 0),
(54, 0),
(55, 0),
(56, 0);

-- --------------------------------------------------------

--
-- Table structure for table `oc_recurring`
--

CREATE TABLE `oc_recurring` (
  `recurring_id` int(11) NOT NULL,
  `price` decimal(10,4) NOT NULL,
  `frequency` enum('day','week','semi_month','month','year') NOT NULL,
  `duration` int(10) UNSIGNED NOT NULL,
  `cycle` int(10) UNSIGNED NOT NULL,
  `trial_status` tinyint(4) NOT NULL,
  `trial_price` decimal(10,4) NOT NULL,
  `trial_frequency` enum('day','week','semi_month','month','year') NOT NULL,
  `trial_duration` int(10) UNSIGNED NOT NULL,
  `trial_cycle` int(10) UNSIGNED NOT NULL,
  `status` tinyint(4) NOT NULL,
  `sort_order` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `oc_recurring_description`
--

CREATE TABLE `oc_recurring_description` (
  `recurring_id` int(11) NOT NULL,
  `language_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `oc_return`
--

CREATE TABLE `oc_return` (
  `return_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `firstname` varchar(32) NOT NULL,
  `lastname` varchar(32) NOT NULL,
  `email` varchar(96) NOT NULL,
  `telephone` varchar(32) NOT NULL,
  `product` varchar(255) NOT NULL,
  `model` varchar(64) NOT NULL,
  `quantity` int(11) NOT NULL,
  `opened` tinyint(1) NOT NULL,
  `return_reason_id` int(11) NOT NULL,
  `return_action_id` int(11) NOT NULL,
  `return_status_id` int(11) NOT NULL,
  `comment` text,
  `date_ordered` date NOT NULL DEFAULT '0000-00-00',
  `date_added` datetime NOT NULL,
  `date_modified` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `oc_return`
--

INSERT INTO `oc_return` (`return_id`, `order_id`, `product_id`, `customer_id`, `firstname`, `lastname`, `email`, `telephone`, `product`, `model`, `quantity`, `opened`, `return_reason_id`, `return_action_id`, `return_status_id`, `comment`, `date_ordered`, `date_added`, `date_modified`) VALUES
(1, 3, 0, 1, 'demo', 'hfisgj', 'fihjds@lf.com', '1564984798456', 'HP LP3065', 'Product 21', 1, 1, 1, 0, 2, 'g0dorih0-ytoyluj-0ory-=ho-ouh0t6ou', '2019-05-23', '2019-05-23 15:02:25', '2019-05-23 15:02:25'),
(2, 7, 0, 3, 'trey', 'ytytr', 'ytruy@gdfg.com', '98749864564564', 'iPod Nano', 'Product 9', 1, 0, 1, 0, 2, 'r9io43tuo953yo iyhkop i4tijiryjtrhlkh ', '2019-06-14', '2019-06-15 10:02:46', '2019-06-15 10:02:46'),
(3, 9, 0, 5, 'ewr', 'fs', 'fdg@fdsfg.com', '36985214789', 'Product 8', 'Product 8', 1, 0, 3, 0, 2, 'deswtgreyhtruhjtyutr', '2019-08-07', '2019-08-07 11:55:01', '2019-08-07 11:55:01'),
(4, 17, 0, 8, 'admin', 'admin', 'admin123@gmail.com', '1234567896', 'HTC Touch HD', 'Product 1', 1, 1, 1, 0, 2, 'dewftgregrethtgrhghgfh', '2019-09-28', '2019-09-28 12:42:26', '2019-09-28 12:42:26'),
(5, 25, 0, 9, 'kajal', 'admin', 'ishitechnolabs@gmail.com', '9632587412', 'HP LP3065', 'Product 21', 1, 1, 1, 0, 2, 'fdgfdgh  ghngnjhgmjhmkj,lkj,lkjl,  gfgfhghjgjgdsfdfdgfgfdgf', '2019-12-24', '2019-12-24 16:59:02', '2019-12-24 16:59:02');

-- --------------------------------------------------------

--
-- Table structure for table `oc_return_action`
--

CREATE TABLE `oc_return_action` (
  `return_action_id` int(11) NOT NULL,
  `language_id` int(11) NOT NULL DEFAULT '0',
  `name` varchar(64) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `oc_return_action`
--

INSERT INTO `oc_return_action` (`return_action_id`, `language_id`, `name`) VALUES
(1, 1, 'Refunded'),
(2, 1, 'Credit Issued'),
(3, 1, 'Replacement Sent'),
(1, 2, 'Refunded'),
(2, 2, 'Credit Issued'),
(3, 2, 'Replacement Sent');

-- --------------------------------------------------------

--
-- Table structure for table `oc_return_history`
--

CREATE TABLE `oc_return_history` (
  `return_history_id` int(11) NOT NULL,
  `return_id` int(11) NOT NULL,
  `return_status_id` int(11) NOT NULL,
  `notify` tinyint(1) NOT NULL,
  `comment` text NOT NULL,
  `date_added` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `oc_return_reason`
--

CREATE TABLE `oc_return_reason` (
  `return_reason_id` int(11) NOT NULL,
  `language_id` int(11) NOT NULL DEFAULT '0',
  `name` varchar(128) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `oc_return_reason`
--

INSERT INTO `oc_return_reason` (`return_reason_id`, `language_id`, `name`) VALUES
(1, 1, 'Dead On Arrival'),
(2, 1, 'Received Wrong Item'),
(3, 1, 'Order Error'),
(4, 1, 'Faulty, please supply details'),
(5, 1, 'Other, please supply details'),
(1, 2, 'Dead On Arrival'),
(2, 2, 'Received Wrong Item'),
(3, 2, 'Order Error'),
(4, 2, 'Faulty, please supply details'),
(5, 2, 'Other, please supply details');

-- --------------------------------------------------------

--
-- Table structure for table `oc_return_status`
--

CREATE TABLE `oc_return_status` (
  `return_status_id` int(11) NOT NULL,
  `language_id` int(11) NOT NULL DEFAULT '0',
  `name` varchar(32) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `oc_return_status`
--

INSERT INTO `oc_return_status` (`return_status_id`, `language_id`, `name`) VALUES
(1, 1, 'Pending'),
(3, 1, 'Complete'),
(2, 1, 'Awaiting Products'),
(1, 2, 'Pending'),
(3, 2, 'Complete'),
(2, 2, 'Awaiting Products');

-- --------------------------------------------------------

--
-- Table structure for table `oc_review`
--

CREATE TABLE `oc_review` (
  `review_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `author` varchar(64) NOT NULL,
  `text` text NOT NULL,
  `rating` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `date_added` datetime NOT NULL,
  `date_modified` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `oc_seo_url`
--

CREATE TABLE `oc_seo_url` (
  `seo_url_id` int(11) NOT NULL,
  `store_id` int(11) NOT NULL,
  `language_id` int(11) NOT NULL,
  `query` varchar(255) NOT NULL,
  `keyword` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `oc_seo_url`
--

INSERT INTO `oc_seo_url` (`seo_url_id`, `store_id`, `language_id`, `query`, `keyword`) VALUES
(1356, 0, 1, 'category_id=20', 'desktops'),
(1307, 0, 1, 'category_id=26', 'pc'),
(1308, 0, 1, 'category_id=27', 'mac'),
(1058, 0, 1, 'manufacturer_id=8', 'apple'),
(1523, 0, 1, 'information_id=4', 'about_us'),
(1221, 0, 1, 'category_id=33', 'camera'),
(1586, 0, 1, 'product_id=50', 'Blue Stripe Blouse'),
(1573, 0, 1, 'product_id=51', 'Floral Maroon Blouse'),
(1585, 0, 1, 'product_id=52', 'Olive Sleeveless Blouse'),
(1580, 0, 1, 'product_id=53', 'Pink Sleeveless Blouse'),
(1587, 0, 1, 'product_id=54', 'Red Sleeveless Blouse'),
(1571, 0, 1, 'product_id=55', 'Satin Embroidered Blouse'),
(1059, 0, 1, 'manufacturer_id=9', 'canon'),
(1061, 0, 1, 'manufacturer_id=5', 'htc'),
(1060, 0, 1, 'manufacturer_id=7', 'hewlett-packard'),
(1062, 0, 1, 'manufacturer_id=6', 'palm'),
(1063, 0, 1, 'manufacturer_id=10', 'sony'),
(1524, 0, 1, 'information_id=6', 'delivery'),
(1521, 0, 1, 'information_id=3', 'privacy'),
(1379, 0, 1, 'information_id=5', 'terms'),
(967, 0, 1, 'demopage', 'demopage');

-- --------------------------------------------------------

--
-- Table structure for table `oc_session`
--

CREATE TABLE `oc_session` (
  `session_id` varchar(32) NOT NULL,
  `data` text NOT NULL,
  `expire` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `oc_session`
--

INSERT INTO `oc_session` (`session_id`, `data`, `expire`) VALUES
('04f87115a1835e25c9697118d6', '{\"language\":\"en-gb\",\"currency\":\"INR\"}', '2023-02-03 12:36:24'),
('0576bab2ba7934f41d49a98ac0', '{\"language\":\"en-gb\",\"currency\":\"INR\"}', '2023-02-04 16:40:35'),
('06be11f4c0fec2f0fa5e2cd95e', '{\"language\":\"en-gb\",\"currency\":\"INR\"}', '2023-02-03 12:36:57'),
('0c38ab4b6fa62c33ac337d2f80', '{\"language\":\"en-gb\",\"currency\":\"INR\"}', '2023-02-06 04:42:18'),
('0d2c46308ee16967a5b5f32296', '{\"language\":\"en-gb\",\"currency\":\"INR\"}', '2023-02-03 12:36:28'),
('0d98653e07946473f2acc8cdcc', '{\"language\":\"en-gb\",\"currency\":\"INR\",\"variable_name_here\":\"data value here\",\"account\":\"guest\",\"guest\":{\"customer_group_id\":\"1\",\"firstname\":\"a\",\"lastname\":\"a\",\"email\":\"a@a.com\",\"telephone\":\"9876543210\",\"custom_field\":[],\"shipping_address\":\"1\"},\"payment_address\":{\"firstname\":\"a\",\"lastname\":\"a\",\"company\":\"\",\"address_1\":\"aaa\",\"address_2\":\"a\",\"postcode\":\"395009\",\"city\":\"surat\",\"country_id\":\"99\",\"zone_id\":\"1485\",\"country\":\"India\",\"iso_code_2\":\"IN\",\"iso_code_3\":\"IND\",\"address_format\":\"\",\"custom_field\":[],\"zone\":\"Gujarat\",\"zone_code\":\"GU\"},\"shipping_address\":{\"firstname\":\"a\",\"lastname\":\"a\",\"company\":\"\",\"address_1\":\"aaa\",\"address_2\":\"a\",\"postcode\":\"395009\",\"city\":\"surat\",\"country_id\":\"99\",\"zone_id\":\"1485\",\"country\":\"India\",\"iso_code_2\":\"IN\",\"iso_code_3\":\"IND\",\"address_format\":\"\",\"zone\":\"Gujarat\",\"zone_code\":\"GU\",\"custom_field\":[]},\"comment\":\"\"}', '2023-02-06 17:18:26'),
('0df3c19d11eddfef3c0b51c14b', '{\"language\":\"en-gb\",\"currency\":\"INR\"}', '2023-02-03 12:36:27'),
('17f4ef410f7dbe6ff9575bb506', '{\"language\":\"en-gb\",\"currency\":\"INR\"}', '2023-02-03 12:42:54'),
('19caec21c901da575a4cc4581d', '{\"language\":\"en-gb\",\"currency\":\"INR\"}', '2023-02-03 12:50:45'),
('1ba160d40678c199d1d53afb7f', '{\"language\":\"en-gb\",\"currency\":\"INR\"}', '2023-02-03 12:37:24'),
('204db60894703dbba91bc00a43', '{\"language\":\"en-gb\",\"currency\":\"INR\"}', '2023-02-03 12:36:24'),
('2a86141e452f6a191792be401a', '{\"language\":\"en-gb\",\"currency\":\"INR\"}', '2023-02-03 12:37:17'),
('2be92c127cf224dc60230e0c98', '{\"language\":\"en-gb\",\"currency\":\"INR\"}', '2023-02-06 04:42:05'),
('2ee0a0b872e47fbe746287f4e8', '{\"language\":\"en-gb\",\"currency\":\"INR\"}', '2023-02-06 04:42:34'),
('332572d4ad38d68b120d473f8b', '{\"language\":\"en-gb\",\"currency\":\"INR\"}', '2023-02-03 12:37:18'),
('33937bcd9bf9d292328f7728d1', '{\"language\":\"en-gb\",\"currency\":\"INR\"}', '2023-02-07 04:29:21'),
('33be6a7c719ce843a93bd39601', '{\"language\":\"en-gb\",\"currency\":\"INR\"}', '2023-02-06 04:42:34'),
('358dd7be2ceaed6fba23009bee', '{\"language\":\"en-gb\",\"currency\":\"INR\"}', '2023-02-03 12:36:28'),
('35935dcaf549cb59d7d0c1792f', '{\"language\":\"en-gb\",\"currency\":\"INR\"}', '2023-02-03 12:40:30'),
('36be1f60c4fea3e28fe2832856', '{\"language\":\"en-gb\",\"currency\":\"INR\"}', '2023-02-06 04:42:33'),
('3955df2bcf07f053333e58363c', '{\"language\":\"en-gb\",\"currency\":\"INR\"}', '2023-02-03 12:40:33'),
('3af7fadcd74a8707d2719e75c2', '{\"language\":\"en-gb\",\"currency\":\"INR\"}', '2023-02-03 12:37:23'),
('40165eab8f9056d1ab36eed99e', '{\"language\":\"en-gb\",\"currency\":\"INR\"}', '2023-02-04 04:40:56'),
('411fad2d3e354b96fad951aef7', '{\"language\":\"en-gb\",\"currency\":\"INR\"}', '2023-02-06 04:42:30'),
('41e2350d3a96ec5fcc87020f02', '{\"language\":\"en-gb\",\"currency\":\"INR\"}', '2023-02-03 13:07:02'),
('4299a476ae78449fa43c34ac87', '{\"language\":\"en-gb\",\"currency\":\"INR\"}', '2023-02-06 04:42:25'),
('46e7680c2a8aff61279e8a635c', '{\"language\":\"en-gb\",\"currency\":\"INR\"}', '2023-02-06 17:03:06'),
('483f8fb2ead5f27ae506799493', '{\"language\":\"en-gb\",\"currency\":\"INR\"}', '2023-02-03 12:37:18'),
('48654d6b21b4a43f8684378bf4', '{\"language\":\"en-gb\",\"currency\":\"INR\"}', '2023-02-03 12:36:29'),
('4b9686edc334c5c86c68731498', '{\"language\":\"en-gb\",\"currency\":\"INR\"}', '2023-02-06 04:42:07'),
('4cac0250e770cb7f7939889ed8', '{\"language\":\"en-gb\",\"currency\":\"INR\"}', '2023-02-03 12:41:29'),
('539a6f1331155f1d3072e23a52', '{\"language\":\"en-gb\",\"currency\":\"INR\"}', '2023-02-06 04:42:16'),
('556ed047f256a844f79dd182a0', '{\"language\":\"en-gb\",\"currency\":\"INR\"}', '2023-02-03 12:36:26'),
('559ead8e2fea8565fe54285334', '{\"language\":\"en-gb\",\"currency\":\"INR\"}', '2023-02-03 12:37:11'),
('561f351f972a708d2955c85936', '{\"language\":\"en-gb\",\"currency\":\"INR\"}', '2023-02-03 12:36:27'),
('5aebc3e9ca3d7618ff15bc3763', '{\"language\":\"en-gb\",\"currency\":\"INR\"}', '2023-02-03 12:36:26'),
('5d3549dbbacc2c0c51d12452e4', '{\"language\":\"en-gb\",\"currency\":\"INR\"}', '2023-02-07 06:20:36'),
('60e036044e75511fd9cbf7dc9b', '{\"language\":\"en-gb\",\"currency\":\"INR\"}', '2023-02-03 12:38:10'),
('61575a634772d58719fe47f0ef', '{\"language\":\"en-gb\",\"currency\":\"INR\"}', '2023-02-06 04:42:33'),
('61745d3cacce188ec38a867c90', '{\"language\":\"en-gb\",\"currency\":\"INR\"}', '2023-02-06 17:45:36'),
('675483e592f3ed559420c1f6ff', '{\"language\":\"en-gb\",\"currency\":\"INR\"}', '2023-02-06 04:42:33'),
('697fd4a9b8f080f4e6e7cefa38', '{\"language\":\"en-gb\",\"currency\":\"INR\"}', '2023-02-03 12:37:12'),
('73deb23ba238913ab54dd848de', '{\"language\":\"en-gb\",\"currency\":\"INR\"}', '2023-02-03 17:22:04'),
('74fcefa4ad1ea2de7c04b359f5', '{\"language\":\"en-gb\",\"currency\":\"INR\"}', '2023-02-03 12:41:31'),
('750e4731608607c31a8a2bddb3', '{\"language\":\"en-gb\",\"currency\":\"INR\"}', '2023-02-03 12:36:57'),
('75d9c6c709969ae3d02bb7ea2b', '{\"language\":\"en-gb\",\"currency\":\"INR\"}', '2023-02-06 04:42:30'),
('7903dcec9a0b821a9fcc922e14', '{\"language\":\"en-gb\",\"currency\":\"INR\"}', '2023-02-03 12:36:26'),
('7a8e92dce90aa2eb3c1ed88451', '{\"language\":\"en-gb\",\"currency\":\"INR\"}', '2023-02-04 16:35:41'),
('7c15e2f72cc54199c9e2e33270', '{\"language\":\"en-gb\",\"currency\":\"INR\"}', '2023-02-03 12:37:24'),
('7e1fb61f4f4a3152b5b42dac9c', '{\"language\":\"en-gb\",\"currency\":\"INR\"}', '2023-02-03 12:36:19'),
('812fe4868b1d13fffe6ba502e9', '{\"language\":\"en-gb\",\"currency\":\"INR\"}', '2023-02-03 12:40:32'),
('84a5e4bcc2f2e2bc8e5831bfae', '{\"language\":\"en-gb\",\"currency\":\"INR\"}', '2023-02-03 13:30:12'),
('8cb517eeab453e60f80ce09345', '{\"language\":\"en-gb\",\"currency\":\"INR\"}', '2023-02-06 04:42:17'),
('8cb57010c9626cc2b2c653f998', '{\"language\":\"en-gb\",\"currency\":\"INR\"}', '2023-02-03 12:37:25'),
('8d0a0ef4b18a49e2c405fb45ad', '{\"language\":\"en-gb\",\"currency\":\"INR\"}', '2023-02-03 12:37:13'),
('9068006aa9e95e45237d5a34f9', '{\"language\":\"en-gb\",\"currency\":\"INR\"}', '2023-02-06 04:42:16'),
('907ea8503185fd496b7f877222', '{\"language\":\"en-gb\",\"currency\":\"INR\"}', '2023-02-03 12:37:11'),
('96889d3a8369dcf626bbade990', '{\"language\":\"en-gb\",\"currency\":\"INR\"}', '2023-02-03 12:40:33'),
('96f9a04e323ceb24c418c96937', '{\"language\":\"en-gb\",\"currency\":\"INR\"}', '2023-02-06 05:43:15'),
('989704798a4e2b902ad2903256', '{\"language\":\"en-gb\",\"currency\":\"INR\"}', '2023-02-03 12:38:09'),
('99143293ae831f1071bf50600f', '{\"language\":\"en-gb\",\"currency\":\"INR\"}', '2023-02-03 12:37:14'),
('9b127e775dbd66525d4e448aca', '{\"language\":\"en-gb\",\"currency\":\"INR\"}', '2023-02-03 12:37:11'),
('a0b5f4e97983fc0c371c5cd1e3', '{\"language\":\"en-gb\",\"currency\":\"INR\"}', '2023-02-06 17:02:45'),
('a38bcdc702ae57f2b1e637868a', '{\"language\":\"en-gb\",\"currency\":\"INR\"}', '2023-02-06 04:42:31'),
('ab84cc69b2177cdd0f4ee5dfcf', '{\"language\":\"en-gb\",\"currency\":\"INR\",\"user_id\":\"1\",\"user_token\":\"1424ieDmtq1Abh81zhgHc1He6t2oZb1w\"}', '2023-02-03 12:38:02'),
('ab8bd1cef975a0eb7e1919c2c2', '{\"language\":\"en-gb\",\"currency\":\"INR\"}', '2023-02-03 12:37:17'),
('b3a2191915c60ce13a6d3f716f', '{\"language\":\"en-gb\",\"currency\":\"INR\"}', '2023-02-03 12:37:25'),
('ba2acd8b9aafe01f9f8819ae14', '{\"language\":\"en-gb\",\"currency\":\"INR\"}', '2023-02-06 04:42:17'),
('bbc9fc0a6b463c808cade4cdb4', '{\"language\":\"en-gb\",\"currency\":\"INR\"}', '2023-02-03 12:37:12'),
('bc65d9b26b29eb3eaa3485f6a0', '{\"language\":\"en-gb\",\"currency\":\"INR\"}', '2023-02-03 12:37:11'),
('bc9b21749dd208493d2551bc75', '{\"language\":\"en-gb\",\"currency\":\"INR\"}', '2023-02-03 12:40:32'),
('be3a62dd7b189a320951eb50a3', '{\"language\":\"en-gb\",\"currency\":\"INR\"}', '2023-02-06 19:06:55'),
('bfe54d23dbc45d8ffcbab24cf4', '{\"language\":\"en-gb\",\"currency\":\"INR\"}', '2023-02-03 12:37:17'),
('c036b40405daa409de51428e52', '{\"language\":\"en-gb\",\"currency\":\"INR\"}', '2023-02-06 04:42:16'),
('c05991d34aad56334f50df63e0', '{\"language\":\"en-gb\",\"currency\":\"INR\"}', '2023-02-06 04:42:25'),
('c07079d7b11194f49f8605d4c0', '{\"language\":\"en-gb\",\"currency\":\"INR\"}', '2023-02-03 13:30:11'),
('c584f774662ce09df3e533d0e4', '{\"language\":\"en-gb\",\"currency\":\"INR\"}', '2023-02-06 04:42:31'),
('c5ead959f09de62064f560b03c', '{\"language\":\"en-gb\",\"currency\":\"INR\"}', '2023-02-06 04:42:06'),
('c82815a1765a78542add285d6c', '{\"language\":\"en-gb\",\"currency\":\"INR\"}', '2023-02-03 12:37:14'),
('c8eb636b1ee6f94199c4f300b1', '{\"language\":\"en-gb\",\"currency\":\"INR\"}', '2023-02-03 13:17:53'),
('ca3e301dc69fc1acc512b70ac5', '{\"language\":\"en-gb\",\"currency\":\"INR\"}', '2023-02-03 12:43:18'),
('cb94d426d8a6791a907b131e48', '{\"language\":\"en-gb\",\"currency\":\"INR\"}', '2023-02-03 12:37:21'),
('cef71f9d50a4bbbfb29b432ad1', '{\"language\":\"en-gb\",\"currency\":\"INR\"}', '2023-02-03 12:37:13'),
('cefa051c304d7fc4d7ee131dc6', '{\"language\":\"en-gb\",\"currency\":\"INR\"}', '2023-02-06 04:42:16'),
('d2d5214d09e63286b81bf40f18', '{\"language\":\"en-gb\",\"currency\":\"INR\"}', '2023-02-03 12:43:10'),
('d7bf990433863cf6d005160dd6', '{\"language\":\"en-gb\",\"currency\":\"INR\"}', '2023-02-03 12:37:13'),
('dc54e746e3528d2f95cc159d79', '{\"language\":\"en-gb\",\"currency\":\"INR\"}', '2023-02-03 12:37:12'),
('dda8ceeaebccc367ad438526b7', '{\"language\":\"en-gb\",\"currency\":\"INR\"}', '2023-02-04 06:20:50'),
('e2f92c7e1b5e0f80fae0d56a34', '{\"language\":\"en-gb\",\"currency\":\"INR\"}', '2023-02-06 04:42:05'),
('e4ca60ed2e3f5261f8699cc78c', '{\"language\":\"en-gb\",\"currency\":\"INR\"}', '2023-02-06 04:42:16'),
('e8090e1796bfffedd7a23e26aa', '{\"language\":\"en-gb\",\"currency\":\"INR\"}', '2023-02-06 04:41:58'),
('eea1db85bdc4aa6dc007f2fba4', '{\"language\":\"en-gb\",\"currency\":\"INR\"}', '2023-02-03 12:37:21'),
('f37eb09aad3524c6f532f8ccba', '{\"language\":\"en-gb\",\"currency\":\"INR\"}', '2023-02-06 04:42:30'),
('f457a9938eec5001f80cf62abd', '{\"language\":\"en-gb\",\"currency\":\"INR\"}', '2023-02-03 12:37:12'),
('f4d3fc0a5ef42bb31640634883', '{\"language\":\"en-gb\",\"currency\":\"INR\"}', '2023-02-03 12:36:26'),
('f4e8b97a055dad0d10e1539587', '{\"language\":\"en-gb\",\"currency\":\"INR\"}', '2023-02-06 04:42:16'),
('f9fa02186215fb90a5d0981caa', '{\"language\":\"en-gb\",\"currency\":\"INR\"}', '2023-02-03 12:40:33'),
('fffe2a52292b7b053845b19876', '{\"language\":\"en-gb\",\"currency\":\"INR\"}', '2023-02-04 11:47:49');

-- --------------------------------------------------------

--
-- Table structure for table `oc_setting`
--

CREATE TABLE `oc_setting` (
  `setting_id` int(11) NOT NULL,
  `store_id` int(11) NOT NULL DEFAULT '0',
  `code` varchar(128) NOT NULL,
  `key` varchar(128) NOT NULL,
  `value` text NOT NULL,
  `serialized` tinyint(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `oc_setting`
--

INSERT INTO `oc_setting` (`setting_id`, `store_id`, `code`, `key`, `value`, `serialized`) VALUES
(4, 0, 'voucher', 'total_voucher_sort_order', '8', 0),
(5, 0, 'voucher', 'total_voucher_status', '1', 0),
(6, 0, 'voucher', 'total_voucher_sort_order', '8', 0),
(7, 0, 'voucher', 'total_voucher_status', '1', 0),
(4550, 0, 'config', 'config_password', '1', 0),
(4551, 0, 'config', 'config_shared', '0', 0),
(4552, 0, 'config', 'config_encryption', 'rMiFyO5u1JbDatyfVI4PREajHS81ZLa1rJJJdjrPKbY50iHlDdY1igSrqF07hU9ISXrd9SJzJ0BRaNDLRzJm8k5Ft8ZKv4DWbCLWl3IkiDUwxTyiB69TkxLxuNM6WdM5xngOF3oVbT27mv5deMag1A7ts8rqPFiQufnrbT5uLLZBdizmaGDRk0Jhg6nyhnbAMutEKPiZ8eePm5HTWpKpb644ugE6uiv5SIlvNmkLjeZ64Y2XcL0EbHV0PIKdmP1EAbZS4RE0XVURkprfGASQ5TxjtAXCuDmKwI74BUR14P9GBgeO5aYrzUcLxosFdbT9FiaeNKg677bQmzVUqNYqcYFzkEmOTKQYmjbkbHkbTJQIecF2hfJ1ID52zlmfIhkwx87mBhQeM9OweOb1DozZM5Q9apvUjyKimrWVp4n9ca0VattW4UeKQq1pacZLcqCP7RwWczhOsyskf706FDfsIceuaWtHkhmzuKPdggHTo17WCwyOMBm5GH7GIp0Ow3xnMROGG1DIsb8v7eV6mxpavKn0LAtPJPlVTlYkAjst5YbcJD6tXuBkXtn7UgeonaubD2cO0cHc4Ec2rjn7Wo8iJ3ZuVlDTd5Gq5utyXrOPpN709npGSNYVc2KoKGHyKDLIBSG6A2R0FtCMqIvRCy73pcwKI4oV7Y1ox6tptWLDYJBodTS1Pks16dS9SpJYqUbdfUu6TxuJKbgatp2afobuBpP1mJv8zviCI3z6kRIxeMIVzQKiEjzY1lFHknrEcbZwsRn55gmKfb7XINtf8i0yQMe3gSHIOHD83oRszUIsVesHJ0V8Oke9AwtQJ5PMBYQkvkgvUmdw7umYN9TjxlG3Za1ZREcDQvNjLToxuJ7m0QFza32LeDsVwSSdaHt6hHNtreK6N6TWbKGbJP4ypGi3yrkBfh1E6u34OPq8RWLWugygPMLIVzbzULLzAleFc3KyRQCrM7mM36vzvqUhSp6RmDLw60S74MxmxoZ02JNMZlQVmlhA6ntjk3wV3jIT02xL', 0),
(4548, 0, 'config', 'config_compression', '0', 0),
(4549, 0, 'config', 'config_secure', '0', 0),
(4488, 0, 'config', 'config_zone_id', '1485', 0),
(4489, 0, 'config', 'config_timezone', 'UTC', 0),
(4490, 0, 'config', 'config_language', 'en-gb', 0),
(4491, 0, 'config', 'config_admin_language', 'en-gb', 0),
(4492, 0, 'config', 'config_currency', 'INR', 0),
(4493, 0, 'config', 'config_currency_auto', '1', 0),
(4494, 0, 'config', 'config_length_class_id', '1', 0),
(4495, 0, 'config', 'config_weight_class_id', '1', 0),
(4496, 0, 'config', 'config_product_count', '1', 0),
(4497, 0, 'config', 'config_limit_admin', '20', 0),
(4498, 0, 'config', 'config_review_status', '1', 0),
(4499, 0, 'config', 'config_review_guest', '1', 0),
(4500, 0, 'config', 'config_voucher_min', '1', 0),
(4501, 0, 'config', 'config_voucher_max', '1000', 0),
(4502, 0, 'config', 'config_tax', '1', 0),
(4503, 0, 'config', 'config_tax_default', 'shipping', 0),
(4504, 0, 'config', 'config_tax_customer', 'shipping', 0),
(4505, 0, 'config', 'config_customer_online', '0', 0),
(4506, 0, 'config', 'config_customer_activity', '0', 0),
(4507, 0, 'config', 'config_customer_search', '0', 0),
(4508, 0, 'config', 'config_customer_group_id', '1', 0),
(4509, 0, 'config', 'config_customer_group_display', '[\"1\"]', 1),
(4510, 0, 'config', 'config_customer_price', '0', 0),
(4511, 0, 'config', 'config_login_attempts', '5', 0),
(4512, 0, 'config', 'config_account_id', '3', 0),
(4513, 0, 'config', 'config_invoice_prefix', 'INV-2023-00', 0),
(4514, 0, 'config', 'config_cart_weight', '1', 0),
(4515, 0, 'config', 'config_checkout_guest', '1', 0),
(4516, 0, 'config', 'config_checkout_id', '0', 0),
(4517, 0, 'config', 'config_order_status_id', '1', 0),
(4518, 0, 'config', 'config_processing_status', '[\"5\",\"1\",\"2\",\"12\",\"3\"]', 1),
(4519, 0, 'config', 'config_complete_status', '[\"5\",\"3\"]', 1),
(4520, 0, 'config', 'config_fraud_status_id', '7', 0),
(4521, 0, 'config', 'config_api_id', '45', 0),
(4522, 0, 'config', 'config_stock_display', '0', 0),
(4523, 0, 'config', 'config_stock_warning', '0', 0),
(4524, 0, 'config', 'config_stock_checkout', '0', 0),
(4525, 0, 'config', 'config_affiliate_group_id', '1', 0),
(4526, 0, 'config', 'config_affiliate_approval', '0', 0),
(4527, 0, 'config', 'config_affiliate_auto', '0', 0),
(4528, 0, 'config', 'config_affiliate_commission', '5', 0),
(4529, 0, 'config', 'config_affiliate_id', '4', 0),
(4530, 0, 'config', 'config_return_id', '0', 0),
(4531, 0, 'config', 'config_return_status_id', '2', 0),
(4532, 0, 'config', 'config_captcha', '', 0),
(4533, 0, 'config', 'config_captcha_page', '[\"review\",\"return\",\"contact\"]', 1),
(4534, 0, 'config', 'config_logo', 'catalog/Logo.png', 0),
(4535, 0, 'config', 'config_icon', 'catalog/cart.png', 0),
(4536, 0, 'config', 'config_mail_engine', 'mail', 0),
(4537, 0, 'config', 'config_mail_parameter', '', 0),
(4538, 0, 'config', 'config_mail_smtp_hostname', '', 0),
(4539, 0, 'config', 'config_mail_smtp_username', '', 0),
(4540, 0, 'config', 'config_mail_smtp_password', '', 0),
(4541, 0, 'config', 'config_mail_smtp_port', '25', 0),
(4542, 0, 'config', 'config_mail_smtp_timeout', '5', 0),
(4543, 0, 'config', 'config_mail_alert', '[\"order\"]', 1),
(4544, 0, 'config', 'config_mail_alert_email', '', 0),
(4545, 0, 'config', 'config_maintenance', '0', 0),
(4546, 0, 'config', 'config_seo_url', '0', 0),
(4547, 0, 'config', 'config_robots', 'abot\r\ndbot\r\nebot\r\nhbot\r\nkbot\r\nlbot\r\nmbot\r\nnbot\r\nobot\r\npbot\r\nrbot\r\nsbot\r\ntbot\r\nvbot\r\nybot\r\nzbot\r\nbot.\r\nbot/\r\n_bot\r\n.bot\r\n/bot\r\n-bot\r\n:bot\r\n(bot\r\ncrawl\r\nslurp\r\nspider\r\nseek\r\naccoona\r\nacoon\r\nadressendeutschland\r\nah-ha.com\r\nahoy\r\naltavista\r\nananzi\r\nanthill\r\nappie\r\narachnophilia\r\narale\r\naraneo\r\naranha\r\narchitext\r\naretha\r\narks\r\nasterias\r\natlocal\r\natn\r\natomz\r\naugurfind\r\nbackrub\r\nbannana_bot\r\nbaypup\r\nbdfetch\r\nbig brother\r\nbiglotron\r\nbjaaland\r\nblackwidow\r\nblaiz\r\nblog\r\nblo.\r\nbloodhound\r\nboitho\r\nbooch\r\nbradley\r\nbutterfly\r\ncalif\r\ncassandra\r\nccubee\r\ncfetch\r\ncharlotte\r\nchurl\r\ncienciaficcion\r\ncmc\r\ncollective\r\ncomagent\r\ncombine\r\ncomputingsite\r\ncsci\r\ncurl\r\ncusco\r\ndaumoa\r\ndeepindex\r\ndelorie\r\ndepspid\r\ndeweb\r\ndie blinde kuh\r\ndigger\r\nditto\r\ndmoz\r\ndocomo\r\ndownload express\r\ndtaagent\r\ndwcp\r\nebiness\r\nebingbong\r\ne-collector\r\nejupiter\r\nemacs-w3 search engine\r\nesther\r\nevliya celebi\r\nezresult\r\nfalcon\r\nfelix ide\r\nferret\r\nfetchrover\r\nfido\r\nfindlinks\r\nfireball\r\nfish search\r\nfouineur\r\nfunnelweb\r\ngazz\r\ngcreep\r\ngenieknows\r\ngetterroboplus\r\ngeturl\r\nglx\r\ngoforit\r\ngolem\r\ngrabber\r\ngrapnel\r\ngralon\r\ngriffon\r\ngromit\r\ngrub\r\ngulliver\r\nhamahakki\r\nharvest\r\nhavindex\r\nhelix\r\nheritrix\r\nhku www octopus\r\nhomerweb\r\nhtdig\r\nhtml index\r\nhtml_analyzer\r\nhtmlgobble\r\nhubater\r\nhyper-decontextualizer\r\nia_archiver\r\nibm_planetwide\r\nichiro\r\niconsurf\r\niltrovatore\r\nimage.kapsi.net\r\nimagelock\r\nincywincy\r\nindexer\r\ninfobee\r\ninformant\r\ningrid\r\ninktomisearch.com\r\ninspector web\r\nintelliagent\r\ninternet shinchakubin\r\nip3000\r\niron33\r\nisraeli-search\r\nivia\r\njack\r\njakarta\r\njavabee\r\njetbot\r\njumpstation\r\nkatipo\r\nkdd-explorer\r\nkilroy\r\nknowledge\r\nkototoi\r\nkretrieve\r\nlabelgrabber\r\nlachesis\r\nlarbin\r\nlegs\r\nlibwww\r\nlinkalarm\r\nlink validator\r\nlinkscan\r\nlockon\r\nlwp\r\nlycos\r\nmagpie\r\nmantraagent\r\nmapoftheinternet\r\nmarvin/\r\nmattie\r\nmediafox\r\nmediapartners\r\nmercator\r\nmerzscope\r\nmicrosoft url control\r\nminirank\r\nmiva\r\nmj12\r\nmnogosearch\r\nmoget\r\nmonster\r\nmoose\r\nmotor\r\nmultitext\r\nmuncher\r\nmuscatferret\r\nmwd.search\r\nmyweb\r\nnajdi\r\nnameprotect\r\nnationaldirectory\r\nnazilla\r\nncsa beta\r\nnec-meshexplorer\r\nnederland.zoek\r\nnetcarta webmap engine\r\nnetmechanic\r\nnetresearchserver\r\nnetscoop\r\nnewscan-online\r\nnhse\r\nnokia6682/\r\nnomad\r\nnoyona\r\nnutch\r\nnzexplorer\r\nobjectssearch\r\noccam\r\nomni\r\nopen text\r\nopenfind\r\nopenintelligencedata\r\norb search\r\nosis-project\r\npack rat\r\npageboy\r\npagebull\r\npage_verifier\r\npanscient\r\nparasite\r\npartnersite\r\npatric\r\npear.\r\npegasus\r\nperegrinator\r\npgp key agent\r\nphantom\r\nphpdig\r\npicosearch\r\npiltdownman\r\npimptrain\r\npinpoint\r\npioneer\r\npiranha\r\nplumtreewebaccessor\r\npogodak\r\npoirot\r\npompos\r\npoppelsdorf\r\npoppi\r\npopular iconoclast\r\npsycheclone\r\npublisher\r\npython\r\nrambler\r\nraven search\r\nroach\r\nroad runner\r\nroadhouse\r\nrobbie\r\nrobofox\r\nrobozilla\r\nrules\r\nsalty\r\nsbider\r\nscooter\r\nscoutjet\r\nscrubby\r\nsearch.\r\nsearchprocess\r\nsemanticdiscovery\r\nsenrigan\r\nsg-scout\r\nshai\'hulud\r\nshark\r\nshopwiki\r\nsidewinder\r\nsift\r\nsilk\r\nsimmany\r\nsite searcher\r\nsite valet\r\nsitetech-rover\r\nskymob.com\r\nsleek\r\nsmartwit\r\nsna-\r\nsnappy\r\nsnooper\r\nsohu\r\nspeedfind\r\nsphere\r\nsphider\r\nspinner\r\nspyder\r\nsteeler/\r\nsuke\r\nsuntek\r\nsupersnooper\r\nsurfnomore\r\nsven\r\nsygol\r\nszukacz\r\ntach black widow\r\ntarantula\r\ntempleton\r\n/teoma\r\nt-h-u-n-d-e-r-s-t-o-n-e\r\ntheophrastus\r\ntitan\r\ntitin\r\ntkwww\r\ntoutatis\r\nt-rex\r\ntutorgig\r\ntwiceler\r\ntwisted\r\nucsd\r\nudmsearch\r\nurl check\r\nupdated\r\nvagabondo\r\nvalkyrie\r\nverticrawl\r\nvictoria\r\nvision-search\r\nvolcano\r\nvoyager/\r\nvoyager-hc\r\nw3c_validator\r\nw3m2\r\nw3mir\r\nwalker\r\nwallpaper\r\nwanderer\r\nwauuu\r\nwavefire\r\nweb core\r\nweb hopper\r\nweb wombat\r\nwebbandit\r\nwebcatcher\r\nwebcopy\r\nwebfoot\r\nweblayers\r\nweblinker\r\nweblog monitor\r\nwebmirror\r\nwebmonkey\r\nwebquest\r\nwebreaper\r\nwebsitepulse\r\nwebsnarf\r\nwebstolperer\r\nwebvac\r\nwebwalk\r\nwebwatch\r\nwebwombat\r\nwebzinger\r\nwhizbang\r\nwhowhere\r\nwild ferret\r\nworldlight\r\nwwwc\r\nwwwster\r\nxenu\r\nxget\r\nxift\r\nxirq\r\nyandex\r\nyanga\r\nyeti\r\nyodao\r\nzao\r\nzippp\r\nzyborg', 0),
(95, 0, 'payment_free_checkout', 'payment_free_checkout_status', '1', 0),
(96, 0, 'payment_free_checkout', 'payment_free_checkout_order_status_id', '1', 0),
(97, 0, 'payment_free_checkout', 'payment_free_checkout_sort_order', '1', 0),
(98, 0, 'payment_cod', 'payment_cod_sort_order', '5', 0),
(99, 0, 'payment_cod', 'payment_cod_total', '0.01', 0),
(100, 0, 'payment_cod', 'payment_cod_order_status_id', '1', 0),
(101, 0, 'payment_cod', 'payment_cod_geo_zone_id', '0', 0),
(102, 0, 'payment_cod', 'payment_cod_status', '1', 0),
(103, 0, 'shipping_flat', 'shipping_flat_sort_order', '1', 0),
(104, 0, 'shipping_flat', 'shipping_flat_status', '1', 0),
(105, 0, 'shipping_flat', 'shipping_flat_geo_zone_id', '0', 0),
(106, 0, 'shipping_flat', 'shipping_flat_tax_class_id', '9', 0),
(107, 0, 'shipping_flat', 'shipping_flat_cost', '5.00', 0),
(108, 0, 'total_shipping', 'total_shipping_sort_order', '3', 0),
(109, 0, 'total_sub_total', 'total_sub_total_sort_order', '1', 0),
(110, 0, 'total_sub_total', 'total_sub_total_status', '1', 0),
(111, 0, 'total_tax', 'total_tax_status', '1', 0),
(112, 0, 'total_total', 'total_total_sort_order', '9', 0),
(113, 0, 'total_total', 'total_total_status', '1', 0),
(114, 0, 'total_tax', 'total_tax_sort_order', '5', 0),
(115, 0, 'total_credit', 'total_credit_sort_order', '7', 0),
(116, 0, 'total_credit', 'total_credit_status', '1', 0),
(117, 0, 'total_reward', 'total_reward_sort_order', '2', 0),
(118, 0, 'total_reward', 'total_reward_status', '1', 0),
(119, 0, 'total_shipping', 'total_shipping_status', '1', 0),
(120, 0, 'total_shipping', 'total_shipping_estimator', '1', 0),
(121, 0, 'total_coupon', 'total_coupon_sort_order', '4', 0),
(122, 0, 'total_coupon', 'total_coupon_status', '1', 0),
(123, 0, 'module_category', 'module_category_status', '1', 0),
(124, 0, 'module_account', 'module_account_status', '1', 0),
(4466, 0, 'theme_default', 'theme_default_image_cart_height', '90', 0),
(149, 0, 'dashboard_activity', 'dashboard_activity_status', '1', 0),
(150, 0, 'dashboard_activity', 'dashboard_activity_sort_order', '7', 0),
(151, 0, 'dashboard_sale', 'dashboard_sale_status', '1', 0),
(152, 0, 'dashboard_sale', 'dashboard_sale_width', '3', 0),
(153, 0, 'dashboard_chart', 'dashboard_chart_status', '1', 0),
(154, 0, 'dashboard_chart', 'dashboard_chart_width', '6', 0),
(155, 0, 'dashboard_customer', 'dashboard_customer_status', '1', 0),
(156, 0, 'dashboard_customer', 'dashboard_customer_width', '3', 0),
(157, 0, 'dashboard_map', 'dashboard_map_status', '1', 0),
(158, 0, 'dashboard_map', 'dashboard_map_width', '6', 0),
(159, 0, 'dashboard_online', 'dashboard_online_status', '1', 0),
(160, 0, 'dashboard_online', 'dashboard_online_width', '3', 0),
(161, 0, 'dashboard_order', 'dashboard_order_sort_order', '1', 0),
(162, 0, 'dashboard_order', 'dashboard_order_status', '1', 0),
(163, 0, 'dashboard_order', 'dashboard_order_width', '3', 0),
(164, 0, 'dashboard_sale', 'dashboard_sale_sort_order', '2', 0),
(165, 0, 'dashboard_customer', 'dashboard_customer_sort_order', '3', 0),
(166, 0, 'dashboard_online', 'dashboard_online_sort_order', '4', 0),
(167, 0, 'dashboard_map', 'dashboard_map_sort_order', '5', 0),
(168, 0, 'dashboard_chart', 'dashboard_chart_sort_order', '6', 0),
(169, 0, 'dashboard_recent', 'dashboard_recent_status', '1', 0),
(170, 0, 'dashboard_recent', 'dashboard_recent_sort_order', '8', 0),
(171, 0, 'dashboard_activity', 'dashboard_activity_width', '4', 0),
(172, 0, 'dashboard_recent', 'dashboard_recent_width', '8', 0),
(173, 0, 'report_customer_activity', 'report_customer_activity_status', '1', 0),
(174, 0, 'report_customer_activity', 'report_customer_activity_sort_order', '1', 0),
(175, 0, 'report_customer_order', 'report_customer_order_status', '1', 0),
(176, 0, 'report_customer_order', 'report_customer_order_sort_order', '2', 0),
(177, 0, 'report_customer_reward', 'report_customer_reward_status', '1', 0),
(178, 0, 'report_customer_reward', 'report_customer_reward_sort_order', '3', 0),
(179, 0, 'report_customer_search', 'report_customer_search_sort_order', '3', 0),
(180, 0, 'report_customer_search', 'report_customer_search_status', '1', 0),
(181, 0, 'report_customer_transaction', 'report_customer_transaction_status', '1', 0),
(182, 0, 'report_customer_transaction', 'report_customer_transaction_status_sort_order', '4', 0),
(183, 0, 'report_sale_tax', 'report_sale_tax_status', '1', 0),
(184, 0, 'report_sale_tax', 'report_sale_tax_sort_order', '5', 0),
(185, 0, 'report_sale_shipping', 'report_sale_shipping_status', '1', 0),
(186, 0, 'report_sale_shipping', 'report_sale_shipping_sort_order', '6', 0),
(187, 0, 'report_sale_return', 'report_sale_return_status', '1', 0),
(188, 0, 'report_sale_return', 'report_sale_return_sort_order', '7', 0),
(189, 0, 'report_sale_order', 'report_sale_order_status', '1', 0),
(190, 0, 'report_sale_order', 'report_sale_order_sort_order', '8', 0),
(191, 0, 'report_sale_coupon', 'report_sale_coupon_status', '1', 0),
(192, 0, 'report_sale_coupon', 'report_sale_coupon_sort_order', '9', 0),
(193, 0, 'report_product_viewed', 'report_product_viewed_status', '1', 0),
(194, 0, 'report_product_viewed', 'report_product_viewed_sort_order', '10', 0),
(195, 0, 'report_product_purchased', 'report_product_purchased_status', '1', 0),
(196, 0, 'report_product_purchased', 'report_product_purchased_sort_order', '11', 0),
(197, 0, 'report_marketing', 'report_marketing_status', '1', 0),
(198, 0, 'report_marketing', 'report_marketing_sort_order', '12', 0),
(1953, 0, 'developer', 'developer_sass', '0', 0),
(1952, 0, 'developer', 'developer_theme', '0', 0),
(280, 0, 'module_filter', 'module_filter_status', '1', 0),
(4465, 0, 'theme_default', 'theme_default_image_cart_width', '90', 0),
(4464, 0, 'theme_default', 'theme_default_image_wishlist_height', '370', 0),
(4463, 0, 'theme_default', 'theme_default_image_wishlist_width', '370', 0),
(4461, 0, 'theme_default', 'theme_default_image_compare_width', '90', 0),
(4462, 0, 'theme_default', 'theme_default_image_compare_height', '90', 0),
(4460, 0, 'theme_default', 'theme_default_image_related_height', '350', 0),
(4459, 0, 'theme_default', 'theme_default_image_related_width', '350', 0),
(4458, 0, 'theme_default', 'theme_default_image_additional_height', '90', 0),
(4457, 0, 'theme_default', 'theme_default_image_additional_width', '90', 0),
(4456, 0, 'theme_default', 'theme_default_image_product_height', '370', 0),
(4455, 0, 'theme_default', 'theme_default_image_product_width', '370', 0),
(4454, 0, 'theme_default', 'theme_default_image_popup_height', '1000', 0),
(4453, 0, 'theme_default', 'theme_default_image_popup_width', '1000', 0),
(4451, 0, 'theme_default', 'theme_default_image_thumb_width', '370', 0),
(4487, 0, 'config', 'config_country_id', '99', 0),
(4485, 0, 'config', 'config_open', '', 0),
(4486, 0, 'config', 'config_comment', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, is sed do the text dummy  dumm eiusmod is toi the tempor incididunt u dolore mag', 0),
(4484, 0, 'config', 'config_image', 'catalog/opencart-logo.png', 0),
(4483, 0, 'config', 'config_fax', '', 0),
(4482, 0, 'config', 'config_telephone', '+91 1234567890', 0),
(4480, 0, 'config', 'config_geocode', '', 0),
(4479, 0, 'config', 'config_address', '151, Demo Store\r\nUnited States', 0),
(4478, 0, 'config', 'config_owner', 'Your Name', 0),
(4477, 0, 'config', 'config_name', 'Your Store', 0),
(4476, 0, 'config', 'config_layout_id', '4', 0),
(4475, 0, 'config', 'config_theme', 'default', 0),
(4474, 0, 'config', 'config_meta_keyword', '', 0),
(4473, 0, 'config', 'config_meta_description', 'My Store', 0),
(4472, 0, 'config', 'config_meta_title', 'Narita Fashion', 0),
(4452, 0, 'theme_default', 'theme_default_image_thumb_height', '370', 0),
(4450, 0, 'theme_default', 'theme_default_image_category_height', '250', 0),
(4449, 0, 'theme_default', 'theme_default_image_category_width', '1218', 0),
(4448, 0, 'theme_default', 'theme_default_product_description_length', '100', 0),
(4447, 0, 'theme_default', 'theme_default_product_limit', '6', 0),
(4446, 0, 'theme_default', 'theme_default_status', '1', 0),
(4445, 0, 'theme_default', 'theme_default_directory', 'naritafashion', 0),
(4467, 0, 'theme_default', 'theme_default_image_location_width', '174', 0),
(4468, 0, 'theme_default', 'theme_default_image_location_height', '66', 0),
(4481, 0, 'config', 'config_email', 'info@example.com', 0),
(4553, 0, 'config', 'config_file_max_size', '300000', 0),
(4554, 0, 'config', 'config_file_ext_allowed', 'zip\r\ntxt\r\npng\r\njpe\r\njpeg\r\njpg\r\ngif\r\nbmp\r\nico\r\ntiff\r\ntif\r\nsvg\r\nsvgz\r\nzip\r\nrar\r\nmsi\r\ncab\r\nmp3\r\nqt\r\nmov\r\npdf\r\npsd\r\nai\r\neps\r\nps\r\ndoc', 0),
(4555, 0, 'config', 'config_file_mime_allowed', 'text/plain\r\nimage/png\r\nimage/jpeg\r\nimage/gif\r\nimage/bmp\r\nimage/tiff\r\nimage/svg+xml\r\napplication/zip\r\n&quot;application/zip&quot;\r\napplication/x-zip\r\n&quot;application/x-zip&quot;\r\napplication/x-zip-compressed\r\n&quot;application/x-zip-compressed&quot;\r\napplication/rar\r\n&quot;application/rar&quot;\r\napplication/x-rar\r\n&quot;application/x-rar&quot;\r\napplication/x-rar-compressed\r\n&quot;application/x-rar-compressed&quot;\r\napplication/octet-stream\r\n&quot;application/octet-stream&quot;\r\naudio/mpeg\r\nvideo/quicktime\r\napplication/pdf', 0),
(4556, 0, 'config', 'config_error_display', '1', 0),
(4557, 0, 'config', 'config_error_log', '1', 0),
(4558, 0, 'config', 'config_error_filename', 'error.log', 0);

-- --------------------------------------------------------

--
-- Table structure for table `oc_shipping_courier`
--

CREATE TABLE `oc_shipping_courier` (
  `shipping_courier_id` int(11) NOT NULL,
  `shipping_courier_code` varchar(255) NOT NULL DEFAULT '',
  `shipping_courier_name` varchar(255) NOT NULL DEFAULT ''
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `oc_shipping_courier`
--

INSERT INTO `oc_shipping_courier` (`shipping_courier_id`, `shipping_courier_code`, `shipping_courier_name`) VALUES
(1, 'dhl', 'DHL'),
(2, 'fedex', 'Fedex'),
(3, 'ups', 'UPS'),
(4, 'royal-mail', 'Royal Mail'),
(5, 'usps', 'United States Postal Service'),
(6, 'auspost', 'Australia Post');

-- --------------------------------------------------------

--
-- Table structure for table `oc_statistics`
--

CREATE TABLE `oc_statistics` (
  `statistics_id` int(11) NOT NULL,
  `code` varchar(64) NOT NULL,
  `value` decimal(15,4) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `oc_statistics`
--

INSERT INTO `oc_statistics` (`statistics_id`, `code`, `value`) VALUES
(1, 'order_sale', '15561.0000'),
(2, 'order_processing', '0.0000'),
(3, 'order_complete', '0.0000'),
(4, 'order_other', '0.0000'),
(5, 'returns', '0.0000'),
(6, 'product', '0.0000'),
(7, 'review', '13.0000');

-- --------------------------------------------------------

--
-- Table structure for table `oc_stock_status`
--

CREATE TABLE `oc_stock_status` (
  `stock_status_id` int(11) NOT NULL,
  `language_id` int(11) NOT NULL,
  `name` varchar(32) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `oc_stock_status`
--

INSERT INTO `oc_stock_status` (`stock_status_id`, `language_id`, `name`) VALUES
(7, 1, 'In Stock'),
(8, 1, 'Pre-Order'),
(5, 1, 'Out Of Stock'),
(6, 1, '2-3 Days'),
(7, 2, 'In Stock'),
(8, 2, 'Pre-Order'),
(5, 2, 'Out Of Stock'),
(6, 2, '2-3 Days');

-- --------------------------------------------------------

--
-- Table structure for table `oc_store`
--

CREATE TABLE `oc_store` (
  `store_id` int(11) NOT NULL,
  `name` varchar(64) NOT NULL,
  `url` varchar(255) NOT NULL,
  `ssl` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `oc_subscribe`
--

CREATE TABLE `oc_subscribe` (
  `id` int(10) UNSIGNED NOT NULL,
  `email_id` varchar(225) NOT NULL,
  `name` varchar(225) NOT NULL,
  `date` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `oc_subscribe`
--

INSERT INTO `oc_subscribe` (`id`, `email_id`, `name`, `date`) VALUES
(28, 'demoesandfe@gmail.com', 'demoesandfe@gmail.com', '2023-01-07'),
(29, 'demo@gmail.com', 'demo@gmail.com', '2023-01-12');

-- --------------------------------------------------------

--
-- Table structure for table `oc_tax_class`
--

CREATE TABLE `oc_tax_class` (
  `tax_class_id` int(11) NOT NULL,
  `title` varchar(32) NOT NULL,
  `description` varchar(255) NOT NULL,
  `date_added` datetime NOT NULL,
  `date_modified` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `oc_tax_class`
--

INSERT INTO `oc_tax_class` (`tax_class_id`, `title`, `description`, `date_added`, `date_modified`) VALUES
(9, 'Taxable Goods', 'Taxed goods', '2009-01-06 23:21:53', '2011-09-23 14:07:50'),
(10, 'Downloadable Products', 'Downloadable', '2011-09-21 22:19:39', '2011-09-22 10:27:36');

-- --------------------------------------------------------

--
-- Table structure for table `oc_tax_rate`
--

CREATE TABLE `oc_tax_rate` (
  `tax_rate_id` int(11) NOT NULL,
  `geo_zone_id` int(11) NOT NULL DEFAULT '0',
  `name` varchar(32) NOT NULL,
  `rate` decimal(15,4) NOT NULL DEFAULT '0.0000',
  `type` char(1) NOT NULL,
  `date_added` datetime NOT NULL,
  `date_modified` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `oc_tax_rate`
--

INSERT INTO `oc_tax_rate` (`tax_rate_id`, `geo_zone_id`, `name`, `rate`, `type`, `date_added`, `date_modified`) VALUES
(86, 3, 'VAT (20%)', '20.0000', 'P', '2011-03-09 21:17:10', '2011-09-22 22:24:29'),
(87, 3, 'Eco Tax (-2.00)', '2.0000', 'F', '2011-09-21 21:49:23', '2011-09-23 00:40:19');

-- --------------------------------------------------------

--
-- Table structure for table `oc_tax_rate_to_customer_group`
--

CREATE TABLE `oc_tax_rate_to_customer_group` (
  `tax_rate_id` int(11) NOT NULL,
  `customer_group_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `oc_tax_rate_to_customer_group`
--

INSERT INTO `oc_tax_rate_to_customer_group` (`tax_rate_id`, `customer_group_id`) VALUES
(86, 1),
(87, 1);

-- --------------------------------------------------------

--
-- Table structure for table `oc_tax_rule`
--

CREATE TABLE `oc_tax_rule` (
  `tax_rule_id` int(11) NOT NULL,
  `tax_class_id` int(11) NOT NULL,
  `tax_rate_id` int(11) NOT NULL,
  `based` varchar(10) NOT NULL,
  `priority` int(11) NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `oc_tax_rule`
--

INSERT INTO `oc_tax_rule` (`tax_rule_id`, `tax_class_id`, `tax_rate_id`, `based`, `priority`) VALUES
(121, 10, 86, 'payment', 1),
(120, 10, 87, 'store', 0),
(128, 9, 86, 'shipping', 1),
(127, 9, 87, 'shipping', 2);

-- --------------------------------------------------------

--
-- Table structure for table `oc_theme`
--

CREATE TABLE `oc_theme` (
  `theme_id` int(11) NOT NULL,
  `store_id` int(11) NOT NULL,
  `theme` varchar(64) NOT NULL,
  `route` varchar(64) NOT NULL,
  `code` mediumtext NOT NULL,
  `date_added` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `oc_themeoption`
--

CREATE TABLE `oc_themeoption` (
  `id` int(11) NOT NULL,
  `primarycolor` varchar(20) DEFAULT NULL,
  `secondary_color` varchar(20) DEFAULT NULL,
  `third_color` varchar(20) DEFAULT NULL,
  `icon_color` varchar(20) DEFAULT NULL,
  `icon_responsivecolor` varchar(20) DEFAULT NULL,
  `tophomebg_color` varchar(20) DEFAULT NULL,
  `breadcrumb_color` varchar(20) DEFAULT NULL,
  `breadcrumb_image` varchar(500) DEFAULT NULL,
  `loader` varchar(20) DEFAULT NULL,
  `btn_color` varchar(20) DEFAULT NULL,
  `btn_txtcolor` varchar(20) DEFAULT NULL,
  `btn_hover_color` varchar(20) DEFAULT NULL,
  `btn_hover_txtcolor` varchar(20) DEFAULT NULL,
  `custom_btn_color` varchar(20) DEFAULT NULL,
  `custom_btn_txtcolor` varchar(20) DEFAULT NULL,
  `custom_btn_hover_color` varchar(20) DEFAULT NULL,
  `custom_btn_hover_txtcolor` varchar(20) DEFAULT NULL,
  `header_bgcolor` varchar(20) DEFAULT NULL,
  `header_top_textcolor` varchar(20) DEFAULT NULL,
  `header_main_bgcolor` varchar(20) DEFAULT NULL,
  `header_textcolor` varchar(20) DEFAULT NULL,
  `header_text_hovercolor` varchar(20) DEFAULT NULL,
  `product_iconcolor` varchar(20) DEFAULT NULL,
  `product_icon_hovercolor` varchar(20) DEFAULT NULL,
  `footerbg_image` varchar(500) DEFAULT NULL,
  `footer_bgcolor` varchar(20) DEFAULT NULL,
  `footer_titlecolor` varchar(20) DEFAULT NULL,
  `footer_textcolor` varchar(20) DEFAULT NULL,
  `footer_text_hovercolor` varchar(20) DEFAULT NULL,
  `subcategory_type` varchar(20) DEFAULT NULL,
  `category_counter` tinyint(1) NOT NULL DEFAULT '1',
  `product_counter` tinyint(1) NOT NULL DEFAULT '1',
  `dev_mode` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `oc_themeoption`
--

INSERT INTO `oc_themeoption` (`id`, `primarycolor`, `secondary_color`, `third_color`, `icon_color`, `icon_responsivecolor`, `tophomebg_color`, `breadcrumb_color`, `breadcrumb_image`, `loader`, `btn_color`, `btn_txtcolor`, `btn_hover_color`, `btn_hover_txtcolor`, `custom_btn_color`, `custom_btn_txtcolor`, `custom_btn_hover_color`, `custom_btn_hover_txtcolor`, `header_bgcolor`, `header_top_textcolor`, `header_main_bgcolor`, `header_textcolor`, `header_text_hovercolor`, `product_iconcolor`, `product_icon_hovercolor`, `footerbg_image`, `footer_bgcolor`, `footer_titlecolor`, `footer_textcolor`, `footer_text_hovercolor`, `subcategory_type`, `category_counter`, `product_counter`, `dev_mode`) VALUES
(1, '#000000', '#b33131', '', '#333333', '#232323', '', '#fafafa', '', 'loader_2', '#b33131', '#ffffff', '#232323', '#ffffff', '#232323', '#ffffff', '#b33131', '#ffffff', '#1a2930', '#ffffff', '#ffffff', '#232323', '#b33131', '#232323', '#ffffff', '', '#1a2930', '#ffffff', '#c1c1c1', '#b33131', 'grid', 1, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `oc_translation`
--

CREATE TABLE `oc_translation` (
  `translation_id` int(11) NOT NULL,
  `store_id` int(11) NOT NULL,
  `language_id` int(11) NOT NULL,
  `route` varchar(64) NOT NULL,
  `key` varchar(64) NOT NULL,
  `value` text NOT NULL,
  `date_added` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `oc_upload`
--

CREATE TABLE `oc_upload` (
  `upload_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `filename` varchar(255) NOT NULL,
  `code` varchar(255) NOT NULL,
  `date_added` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `oc_upload`
--

INSERT INTO `oc_upload` (`upload_id`, `name`, `filename`, `code`, `date_added`) VALUES
(1, '1-1.jpg', '1-1.jpg.xD1GzgFc8ajX9jSbLcE1h0Gw8CpMne2g', '701fd7194ad1398b44aa0f02e5cb630d9b1ff886', '2019-07-25 10:08:47'),
(2, 'preview.jpg', 'preview.jpg.jzBiCeg0FlWnVRYHMWwdeWmCKcjylaA2', '15c3a4cc157fb088f5346d071d56f66ebe0a6112', '2019-09-28 08:52:11'),
(3, 'Gallery-image.png', 'Gallery-image.png.JqRgz0we2DszTqlWnY0726F3cmuEOlxB', 'aed445af7ab3ee7132fdf7717a24def055a655ad', '2019-09-28 08:53:28');

-- --------------------------------------------------------

--
-- Table structure for table `oc_user`
--

CREATE TABLE `oc_user` (
  `user_id` int(11) NOT NULL,
  `user_group_id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(40) NOT NULL,
  `salt` varchar(9) NOT NULL,
  `firstname` varchar(32) NOT NULL,
  `lastname` varchar(32) NOT NULL,
  `email` varchar(96) NOT NULL,
  `image` varchar(255) NOT NULL,
  `code` varchar(40) NOT NULL,
  `ip` varchar(40) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `date_added` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;


-- --------------------------------------------------------

--
-- Table structure for table `oc_user_group`
--

CREATE TABLE `oc_user_group` (
  `user_group_id` int(11) NOT NULL,
  `name` varchar(64) NOT NULL,
  `permission` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `oc_user_group`
--

INSERT INTO `oc_user_group` (`user_group_id`, `name`, `permission`) VALUES
(1, 'Administrator', '{\"access\":[\"catalog\\/attribute\",\"catalog\\/attribute_group\",\"catalog\\/category\",\"catalog\\/download\",\"catalog\\/filter\",\"catalog\\/information\",\"catalog\\/manufacturer\",\"catalog\\/option\",\"catalog\\/product\",\"catalog\\/recurring\",\"catalog\\/review\",\"common\\/column_left\",\"common\\/developer\",\"common\\/filemanager\",\"common\\/profile\",\"common\\/security\",\"common\\/themeoption\",\"customer\\/custom_field\",\"customer\\/customer\",\"customer\\/customer_approval\",\"customer\\/customer_group\",\"design\\/banner\",\"design\\/layout\",\"design\\/seo_url\",\"design\\/theme\",\"design\\/translation\",\"event\\/language\",\"event\\/statistics\",\"event\\/theme\",\"extension\\/advertise\\/google\",\"extension\\/analytics\\/google\",\"extension\\/captcha\\/basic\",\"extension\\/captcha\\/google\",\"extension\\/dashboard\\/activity\",\"extension\\/dashboard\\/chart\",\"extension\\/dashboard\\/customer\",\"extension\\/dashboard\\/map\",\"extension\\/dashboard\\/online\",\"extension\\/dashboard\\/order\",\"extension\\/dashboard\\/recent\",\"extension\\/dashboard\\/sale\",\"extension\\/extension\\/advertise\",\"extension\\/extension\\/analytics\",\"extension\\/extension\\/captcha\",\"extension\\/extension\\/dashboard\",\"extension\\/extension\\/feed\",\"extension\\/extension\\/fraud\",\"extension\\/extension\\/menu\",\"extension\\/extension\\/module\",\"extension\\/extension\\/payment\",\"extension\\/extension\\/promotion\",\"extension\\/extension\\/report\",\"extension\\/extension\\/shipping\",\"extension\\/extension\\/theme\",\"extension\\/extension\\/total\",\"extension\\/feed\\/google_base\",\"extension\\/feed\\/google_sitemap\",\"extension\\/feed\\/openbaypro\",\"extension\\/fraud\\/fraudlabspro\",\"extension\\/fraud\\/ip\",\"extension\\/fraud\\/maxmind\",\"extension\\/module\\/account\",\"extension\\/module\\/amazon_login\",\"extension\\/module\\/amazon_pay\",\"extension\\/module\\/banner\",\"extension\\/module\\/bestseller\",\"extension\\/module\\/blogger\",\"extension\\/module\\/carousel\",\"extension\\/module\\/category\",\"extension\\/module\\/divido_calculator\",\"extension\\/module\\/ebay_listing\",\"extension\\/module\\/featured\",\"extension\\/module\\/filter\",\"extension\\/module\\/google_hangouts\",\"extension\\/module\\/html\",\"extension\\/module\\/information\",\"extension\\/module\\/ishibannerblock\",\"extension\\/module\\/ishifourbannerblock\",\"extension\\/module\\/ishiheaderlinkblock\",\"extension\\/module\\/ishilinklist\",\"extension\\/module\\/ishimanufacturerblock\",\"extension\\/module\\/ishiparallaxblock\",\"extension\\/module\\/ishipaymentblock\",\"extension\\/module\\/ishiproductsblock\",\"extension\\/module\\/ishiservicesblock\",\"extension\\/module\\/ishislider\",\"extension\\/module\\/ishisocialfollow\",\"extension\\/module\\/ishispecialblock\",\"extension\\/module\\/ishispecialdeals\",\"extension\\/module\\/ishitestimonialsblock\",\"extension\\/module\\/klarna_checkout_module\",\"extension\\/module\\/latest\",\"extension\\/module\\/laybuy_layout\",\"extension\\/module\\/newslettersubscribe\",\"extension\\/module\\/paypal_smart_button\",\"extension\\/module\\/pilibaba_button\",\"extension\\/module\\/pp_braintree_button\",\"extension\\/module\\/sagepay_direct_cards\",\"extension\\/module\\/sagepay_server_cards\",\"extension\\/module\\/slideshow\",\"extension\\/module\\/special\",\"extension\\/module\\/store\",\"extension\\/openbay\\/amazon\",\"extension\\/openbay\\/amazon_listing\",\"extension\\/openbay\\/amazon_product\",\"extension\\/openbay\\/amazonus\",\"extension\\/openbay\\/amazonus_listing\",\"extension\\/openbay\\/amazonus_product\",\"extension\\/openbay\\/ebay\",\"extension\\/openbay\\/ebay_profile\",\"extension\\/openbay\\/ebay_template\",\"extension\\/openbay\\/etsy\",\"extension\\/openbay\\/etsy_product\",\"extension\\/openbay\\/etsy_shipping\",\"extension\\/openbay\\/etsy_shop\",\"extension\\/openbay\\/fba\",\"extension\\/payment\\/alipay\",\"extension\\/payment\\/alipay_cross\",\"extension\\/payment\\/amazon_login_pay\",\"extension\\/payment\\/authorizenet_aim\",\"extension\\/payment\\/authorizenet_sim\",\"extension\\/payment\\/bank_transfer\",\"extension\\/payment\\/bluepay_hosted\",\"extension\\/payment\\/bluepay_redirect\",\"extension\\/payment\\/cardconnect\",\"extension\\/payment\\/cardinity\",\"extension\\/payment\\/cheque\",\"extension\\/payment\\/cod\",\"extension\\/payment\\/divido\",\"extension\\/payment\\/eway\",\"extension\\/payment\\/firstdata\",\"extension\\/payment\\/firstdata_remote\",\"extension\\/payment\\/free_checkout\",\"extension\\/payment\\/g2apay\",\"extension\\/payment\\/globalpay\",\"extension\\/payment\\/globalpay_remote\",\"extension\\/payment\\/klarna_account\",\"extension\\/payment\\/klarna_checkout\",\"extension\\/payment\\/klarna_invoice\",\"extension\\/payment\\/laybuy\",\"extension\\/payment\\/liqpay\",\"extension\\/payment\\/nochex\",\"extension\\/payment\\/paymate\",\"extension\\/payment\\/paypal\",\"extension\\/payment\\/paypoint\",\"extension\\/payment\\/payza\",\"extension\\/payment\\/perpetual_payments\",\"extension\\/payment\\/pilibaba\",\"extension\\/payment\\/pp_braintree\",\"extension\\/payment\\/realex\",\"extension\\/payment\\/realex_remote\",\"extension\\/payment\\/sagepay_direct\",\"extension\\/payment\\/sagepay_server\",\"extension\\/payment\\/sagepay_us\",\"extension\\/payment\\/securetrading_pp\",\"extension\\/payment\\/securetrading_ws\",\"extension\\/payment\\/skrill\",\"extension\\/payment\\/squareup\",\"extension\\/payment\\/twocheckout\",\"extension\\/payment\\/web_payment_software\",\"extension\\/payment\\/wechat_pay\",\"extension\\/payment\\/worldpay\",\"extension\\/report\\/customer_activity\",\"extension\\/report\\/customer_order\",\"extension\\/report\\/customer_reward\",\"extension\\/report\\/customer_search\",\"extension\\/report\\/customer_transaction\",\"extension\\/report\\/marketing\",\"extension\\/report\\/product_purchased\",\"extension\\/report\\/product_viewed\",\"extension\\/report\\/sale_coupon\",\"extension\\/report\\/sale_order\",\"extension\\/report\\/sale_return\",\"extension\\/report\\/sale_shipping\",\"extension\\/report\\/sale_tax\",\"extension\\/shipping\\/auspost\",\"extension\\/shipping\\/ec_ship\",\"extension\\/shipping\\/fedex\",\"extension\\/shipping\\/flat\",\"extension\\/shipping\\/free\",\"extension\\/shipping\\/item\",\"extension\\/shipping\\/parcelforce_48\",\"extension\\/shipping\\/pickup\",\"extension\\/shipping\\/royal_mail\",\"extension\\/shipping\\/ups\",\"extension\\/shipping\\/usps\",\"extension\\/shipping\\/weight\",\"extension\\/theme\\/default\",\"extension\\/total\\/coupon\",\"extension\\/total\\/credit\",\"extension\\/total\\/handling\",\"extension\\/total\\/klarna_fee\",\"extension\\/total\\/low_order_fee\",\"extension\\/total\\/reward\",\"extension\\/total\\/shipping\",\"extension\\/total\\/sub_total\",\"extension\\/total\\/tax\",\"extension\\/total\\/total\",\"extension\\/total\\/voucher\",\"localisation\\/country\",\"localisation\\/currency\",\"localisation\\/geo_zone\",\"localisation\\/language\",\"localisation\\/length_class\",\"localisation\\/location\",\"localisation\\/order_status\",\"localisation\\/return_action\",\"localisation\\/return_reason\",\"localisation\\/return_status\",\"localisation\\/stock_status\",\"localisation\\/tax_class\",\"localisation\\/tax_rate\",\"localisation\\/weight_class\",\"localisation\\/zone\",\"mail\\/affiliate\",\"mail\\/customer\",\"mail\\/forgotten\",\"mail\\/return\",\"mail\\/reward\",\"mail\\/transaction\",\"marketing\\/contact\",\"marketing\\/coupon\",\"marketing\\/marketing\",\"marketplace\\/api\",\"marketplace\\/event\",\"marketplace\\/extension\",\"marketplace\\/install\",\"marketplace\\/installer\",\"marketplace\\/marketplace\",\"marketplace\\/modification\",\"marketplace\\/openbay\",\"report\\/online\",\"report\\/report\",\"report\\/statistics\",\"sale\\/order\",\"sale\\/recurring\",\"sale\\/return\",\"sale\\/voucher\",\"sale\\/voucher_theme\",\"setting\\/setting\",\"setting\\/store\",\"startup\\/error\",\"startup\\/event\",\"startup\\/login\",\"startup\\/permission\",\"startup\\/router\",\"startup\\/sass\",\"startup\\/startup\",\"tool\\/backup\",\"tool\\/log\",\"tool\\/upload\",\"user\\/api\",\"user\\/user\",\"user\\/user_permission\",\"extension\\/module\\/ishifivebannerblock\",\"extension\\/module\\/ishioffersblock\",\"extension\\/module\\/ishislider\",\"extension\\/module\\/ishitwobannerblock\",\"extension\\/module\\/ishionebannerblock\",\"extension\\/module\\/ishionebannerblock\",\"extension\\/module\\/ishionebannerblock\",\"extension\\/module\\/ishisinglebannerblock\",\"extension\\/module\\/ishifeaturecategoryblock\",\"extension\\/module\\/ishicategoryblock\",\"extension\\/module\\/ishionebannerblock\",\"extension\\/module\\/ishitwobannerblock\",\"extension\\/module\\/ishithreebannerblock\",\"extension\\/module\\/ishitwobannerblock\",\"extension\\/module\\/ishionebannerblock\",\"extension\\/module\\/html\",\"extension\\/module\\/ishifeaturedblock\",\"extension\\/module\\/ishicategoryblock\",\"extension\\/module\\/ishifaqblock\",\"extension\\/module\\/ishistoryblock\",\"extension\\/module\\/ishispecialblock\",\"extension\\/module\\/ishispecificationblock\",\"extension\\/module\\/ishicategoryblock\",\"extension\\/module\\/ishitestimonialsblock\",\"extension\\/module\\/ishicontactinfoblock\",\"extension\\/module\\/slider\",\"extension\\/module\\/categoryblock\",\"extension\\/module\\/bannerblock\",\"extension\\/module\\/fivebannerblock\",\"extension\\/module\\/socialfollow\",\"extension\\/module\\/servicesblock\",\"extension\\/module\\/offerblock\",\"extension\\/module\\/productsblock\",\"extension\\/module\\/specialblock\",\"extension\\/module\\/featuredblock\",\"extension\\/module\\/instagramblock\",\"extension\\/module\\/featuredcollectionblock\",\"extension\\/module\\/ishiproductsblock\",\"extension\\/module\\/bestsellerblock\",\"extension\\/module\\/productservicesblock\",\"extension\\/module\\/discountblock\",\"extension\\/module\\/offersblock\",\"extension\\/module\\/offersblock\",\"extension\\/module\\/blogger\",\"extension\\/module\\/linklist\",\"extension\\/module\\/ishilinklist\",\"extension\\/module\\/linklist\",\"extension\\/module\\/linklist\",\"extension\\/payment\\/paypal\",\"extension\\/module\\/franchiseenquiryblock\",\"extension\\/module\\/careerblock\"],\"modify\":[\"catalog\\/attribute\",\"catalog\\/attribute_group\",\"catalog\\/category\",\"catalog\\/download\",\"catalog\\/filter\",\"catalog\\/information\",\"catalog\\/manufacturer\",\"catalog\\/option\",\"catalog\\/product\",\"catalog\\/recurring\",\"catalog\\/review\",\"common\\/column_left\",\"common\\/developer\",\"common\\/filemanager\",\"common\\/profile\",\"common\\/security\",\"common\\/themeoption\",\"customer\\/custom_field\",\"customer\\/customer\",\"customer\\/customer_approval\",\"customer\\/customer_group\",\"design\\/banner\",\"design\\/layout\",\"design\\/seo_url\",\"design\\/theme\",\"design\\/translation\",\"event\\/language\",\"event\\/statistics\",\"event\\/theme\",\"extension\\/advertise\\/google\",\"extension\\/analytics\\/google\",\"extension\\/captcha\\/basic\",\"extension\\/captcha\\/google\",\"extension\\/dashboard\\/activity\",\"extension\\/dashboard\\/chart\",\"extension\\/dashboard\\/customer\",\"extension\\/dashboard\\/map\",\"extension\\/dashboard\\/online\",\"extension\\/dashboard\\/order\",\"extension\\/dashboard\\/recent\",\"extension\\/dashboard\\/sale\",\"extension\\/extension\\/advertise\",\"extension\\/extension\\/analytics\",\"extension\\/extension\\/captcha\",\"extension\\/extension\\/dashboard\",\"extension\\/extension\\/feed\",\"extension\\/extension\\/fraud\",\"extension\\/extension\\/menu\",\"extension\\/extension\\/module\",\"extension\\/extension\\/payment\",\"extension\\/extension\\/promotion\",\"extension\\/extension\\/report\",\"extension\\/extension\\/shipping\",\"extension\\/extension\\/theme\",\"extension\\/extension\\/total\",\"extension\\/feed\\/google_base\",\"extension\\/feed\\/google_sitemap\",\"extension\\/feed\\/openbaypro\",\"extension\\/fraud\\/fraudlabspro\",\"extension\\/fraud\\/ip\",\"extension\\/fraud\\/maxmind\",\"extension\\/module\\/account\",\"extension\\/module\\/amazon_login\",\"extension\\/module\\/amazon_pay\",\"extension\\/module\\/banner\",\"extension\\/module\\/bestseller\",\"extension\\/module\\/blogger\",\"extension\\/module\\/carousel\",\"extension\\/module\\/category\",\"extension\\/module\\/divido_calculator\",\"extension\\/module\\/ebay_listing\",\"extension\\/module\\/featured\",\"extension\\/module\\/filter\",\"extension\\/module\\/google_hangouts\",\"extension\\/module\\/html\",\"extension\\/module\\/information\",\"extension\\/module\\/ishibannerblock\",\"extension\\/module\\/ishifourbannerblock\",\"extension\\/module\\/ishiheaderlinkblock\",\"extension\\/module\\/ishilinklist\",\"extension\\/module\\/ishimanufacturerblock\",\"extension\\/module\\/ishiparallaxblock\",\"extension\\/module\\/ishipaymentblock\",\"extension\\/module\\/ishiproductsblock\",\"extension\\/module\\/ishiservicesblock\",\"extension\\/module\\/ishislider\",\"extension\\/module\\/ishisocialfollow\",\"extension\\/module\\/ishispecialblock\",\"extension\\/module\\/ishispecialdeals\",\"extension\\/module\\/ishitestimonialsblock\",\"extension\\/module\\/klarna_checkout_module\",\"extension\\/module\\/latest\",\"extension\\/module\\/laybuy_layout\",\"extension\\/module\\/newslettersubscribe\",\"extension\\/module\\/paypal_smart_button\",\"extension\\/module\\/pilibaba_button\",\"extension\\/module\\/pp_braintree_button\",\"extension\\/module\\/sagepay_direct_cards\",\"extension\\/module\\/sagepay_server_cards\",\"extension\\/module\\/slideshow\",\"extension\\/module\\/special\",\"extension\\/module\\/store\",\"extension\\/openbay\\/amazon\",\"extension\\/openbay\\/amazon_listing\",\"extension\\/openbay\\/amazon_product\",\"extension\\/openbay\\/amazonus\",\"extension\\/openbay\\/amazonus_listing\",\"extension\\/openbay\\/amazonus_product\",\"extension\\/openbay\\/ebay\",\"extension\\/openbay\\/ebay_profile\",\"extension\\/openbay\\/ebay_template\",\"extension\\/openbay\\/etsy\",\"extension\\/openbay\\/etsy_product\",\"extension\\/openbay\\/etsy_shipping\",\"extension\\/openbay\\/etsy_shop\",\"extension\\/openbay\\/fba\",\"extension\\/payment\\/alipay\",\"extension\\/payment\\/alipay_cross\",\"extension\\/payment\\/amazon_login_pay\",\"extension\\/payment\\/authorizenet_aim\",\"extension\\/payment\\/authorizenet_sim\",\"extension\\/payment\\/bank_transfer\",\"extension\\/payment\\/bluepay_hosted\",\"extension\\/payment\\/bluepay_redirect\",\"extension\\/payment\\/cardconnect\",\"extension\\/payment\\/cardinity\",\"extension\\/payment\\/cheque\",\"extension\\/payment\\/cod\",\"extension\\/payment\\/divido\",\"extension\\/payment\\/eway\",\"extension\\/payment\\/firstdata\",\"extension\\/payment\\/firstdata_remote\",\"extension\\/payment\\/free_checkout\",\"extension\\/payment\\/g2apay\",\"extension\\/payment\\/globalpay\",\"extension\\/payment\\/globalpay_remote\",\"extension\\/payment\\/klarna_account\",\"extension\\/payment\\/klarna_checkout\",\"extension\\/payment\\/klarna_invoice\",\"extension\\/payment\\/laybuy\",\"extension\\/payment\\/liqpay\",\"extension\\/payment\\/nochex\",\"extension\\/payment\\/paymate\",\"extension\\/payment\\/paypal\",\"extension\\/payment\\/paypoint\",\"extension\\/payment\\/payza\",\"extension\\/payment\\/perpetual_payments\",\"extension\\/payment\\/pilibaba\",\"extension\\/payment\\/pp_braintree\",\"extension\\/payment\\/realex\",\"extension\\/payment\\/realex_remote\",\"extension\\/payment\\/sagepay_direct\",\"extension\\/payment\\/sagepay_server\",\"extension\\/payment\\/sagepay_us\",\"extension\\/payment\\/securetrading_pp\",\"extension\\/payment\\/securetrading_ws\",\"extension\\/payment\\/skrill\",\"extension\\/payment\\/squareup\",\"extension\\/payment\\/twocheckout\",\"extension\\/payment\\/web_payment_software\",\"extension\\/payment\\/wechat_pay\",\"extension\\/payment\\/worldpay\",\"extension\\/report\\/customer_activity\",\"extension\\/report\\/customer_order\",\"extension\\/report\\/customer_reward\",\"extension\\/report\\/customer_search\",\"extension\\/report\\/customer_transaction\",\"extension\\/report\\/marketing\",\"extension\\/report\\/product_purchased\",\"extension\\/report\\/product_viewed\",\"extension\\/report\\/sale_coupon\",\"extension\\/report\\/sale_order\",\"extension\\/report\\/sale_return\",\"extension\\/report\\/sale_shipping\",\"extension\\/report\\/sale_tax\",\"extension\\/shipping\\/auspost\",\"extension\\/shipping\\/ec_ship\",\"extension\\/shipping\\/fedex\",\"extension\\/shipping\\/flat\",\"extension\\/shipping\\/free\",\"extension\\/shipping\\/item\",\"extension\\/shipping\\/parcelforce_48\",\"extension\\/shipping\\/pickup\",\"extension\\/shipping\\/royal_mail\",\"extension\\/shipping\\/ups\",\"extension\\/shipping\\/usps\",\"extension\\/shipping\\/weight\",\"extension\\/theme\\/default\",\"extension\\/total\\/coupon\",\"extension\\/total\\/credit\",\"extension\\/total\\/handling\",\"extension\\/total\\/klarna_fee\",\"extension\\/total\\/low_order_fee\",\"extension\\/total\\/reward\",\"extension\\/total\\/shipping\",\"extension\\/total\\/sub_total\",\"extension\\/total\\/tax\",\"extension\\/total\\/total\",\"extension\\/total\\/voucher\",\"localisation\\/country\",\"localisation\\/currency\",\"localisation\\/geo_zone\",\"localisation\\/language\",\"localisation\\/length_class\",\"localisation\\/location\",\"localisation\\/order_status\",\"localisation\\/return_action\",\"localisation\\/return_reason\",\"localisation\\/return_status\",\"localisation\\/stock_status\",\"localisation\\/tax_class\",\"localisation\\/tax_rate\",\"localisation\\/weight_class\",\"localisation\\/zone\",\"mail\\/affiliate\",\"mail\\/customer\",\"mail\\/forgotten\",\"mail\\/return\",\"mail\\/reward\",\"mail\\/transaction\",\"marketing\\/contact\",\"marketing\\/coupon\",\"marketing\\/marketing\",\"marketplace\\/api\",\"marketplace\\/event\",\"marketplace\\/extension\",\"marketplace\\/install\",\"marketplace\\/installer\",\"marketplace\\/marketplace\",\"marketplace\\/modification\",\"marketplace\\/openbay\",\"report\\/online\",\"report\\/report\",\"report\\/statistics\",\"sale\\/order\",\"sale\\/recurring\",\"sale\\/return\",\"sale\\/voucher\",\"sale\\/voucher_theme\",\"setting\\/setting\",\"setting\\/store\",\"startup\\/error\",\"startup\\/event\",\"startup\\/login\",\"startup\\/permission\",\"startup\\/router\",\"startup\\/sass\",\"startup\\/startup\",\"tool\\/backup\",\"tool\\/log\",\"tool\\/upload\",\"user\\/api\",\"user\\/user\",\"user\\/user_permission\",\"extension\\/module\\/ishifivebannerblock\",\"extension\\/module\\/ishioffersblock\",\"extension\\/module\\/ishislider\",\"extension\\/module\\/ishitwobannerblock\",\"extension\\/module\\/ishionebannerblock\",\"extension\\/module\\/ishionebannerblock\",\"extension\\/module\\/ishionebannerblock\",\"extension\\/module\\/ishisinglebannerblock\",\"extension\\/module\\/ishifeaturecategoryblock\",\"extension\\/module\\/ishicategoryblock\",\"extension\\/module\\/ishionebannerblock\",\"extension\\/module\\/ishitwobannerblock\",\"extension\\/module\\/ishithreebannerblock\",\"extension\\/module\\/ishitwobannerblock\",\"extension\\/module\\/ishionebannerblock\",\"extension\\/module\\/html\",\"extension\\/module\\/ishifeaturedblock\",\"extension\\/module\\/ishicategoryblock\",\"extension\\/module\\/ishifaqblock\",\"extension\\/module\\/ishistoryblock\",\"extension\\/module\\/ishispecialblock\",\"extension\\/module\\/ishispecificationblock\",\"extension\\/module\\/ishicategoryblock\",\"extension\\/module\\/ishitestimonialsblock\",\"extension\\/module\\/ishicontactinfoblock\",\"extension\\/module\\/slider\",\"extension\\/module\\/categoryblock\",\"extension\\/module\\/bannerblock\",\"extension\\/module\\/fivebannerblock\",\"extension\\/module\\/socialfollow\",\"extension\\/module\\/servicesblock\",\"extension\\/module\\/offerblock\",\"extension\\/module\\/productsblock\",\"extension\\/module\\/specialblock\",\"extension\\/module\\/featuredblock\",\"extension\\/module\\/instagramblock\",\"extension\\/module\\/featuredcollectionblock\",\"extension\\/module\\/ishiproductsblock\",\"extension\\/module\\/bestsellerblock\",\"extension\\/module\\/productservicesblock\",\"extension\\/module\\/discountblock\",\"extension\\/module\\/offersblock\",\"extension\\/module\\/offersblock\",\"extension\\/module\\/blogger\",\"extension\\/module\\/linklist\",\"extension\\/module\\/ishilinklist\",\"extension\\/module\\/linklist\",\"extension\\/module\\/linklist\",\"extension\\/payment\\/paypal\",\"extension\\/module\\/franchiseenquiryblock\",\"extension\\/module\\/careerblock\"]}'),
(10, 'Demonstration', '');

-- --------------------------------------------------------

--
-- Table structure for table `oc_voucher`
--

CREATE TABLE `oc_voucher` (
  `voucher_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `code` varchar(10) NOT NULL,
  `from_name` varchar(64) NOT NULL,
  `from_email` varchar(96) NOT NULL,
  `to_name` varchar(64) NOT NULL,
  `to_email` varchar(96) NOT NULL,
  `voucher_theme_id` int(11) NOT NULL,
  `message` text NOT NULL,
  `amount` decimal(15,4) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `date_added` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `oc_voucher_history`
--

CREATE TABLE `oc_voucher_history` (
  `voucher_history_id` int(11) NOT NULL,
  `voucher_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `amount` decimal(15,4) NOT NULL,
  `date_added` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `oc_voucher_theme`
--

CREATE TABLE `oc_voucher_theme` (
  `voucher_theme_id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `oc_voucher_theme`
--

INSERT INTO `oc_voucher_theme` (`voucher_theme_id`, `image`) VALUES
(8, 'catalog/demo/canon_eos_5d_2.jpg'),
(7, 'catalog/demo/gift-voucher-birthday.jpg'),
(6, 'catalog/demo/apple_logo.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `oc_voucher_theme_description`
--

CREATE TABLE `oc_voucher_theme_description` (
  `voucher_theme_id` int(11) NOT NULL,
  `language_id` int(11) NOT NULL,
  `name` varchar(32) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `oc_voucher_theme_description`
--

INSERT INTO `oc_voucher_theme_description` (`voucher_theme_id`, `language_id`, `name`) VALUES
(6, 1, 'Christmas'),
(7, 1, 'Birthday'),
(8, 1, 'General'),
(6, 2, 'Christmas'),
(7, 2, 'Birthday'),
(8, 2, 'General');

-- --------------------------------------------------------

--
-- Table structure for table `oc_weight_class`
--

CREATE TABLE `oc_weight_class` (
  `weight_class_id` int(11) NOT NULL,
  `value` decimal(15,8) NOT NULL DEFAULT '0.00000000'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `oc_weight_class`
--

INSERT INTO `oc_weight_class` (`weight_class_id`, `value`) VALUES
(1, '1.00000000'),
(2, '1000.00000000'),
(5, '2.20460000'),
(6, '35.27400000');

-- --------------------------------------------------------

--
-- Table structure for table `oc_weight_class_description`
--

CREATE TABLE `oc_weight_class_description` (
  `weight_class_id` int(11) NOT NULL,
  `language_id` int(11) NOT NULL,
  `title` varchar(32) NOT NULL,
  `unit` varchar(4) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `oc_weight_class_description`
--

INSERT INTO `oc_weight_class_description` (`weight_class_id`, `language_id`, `title`, `unit`) VALUES
(1, 1, 'Kilogram', 'kg'),
(2, 1, 'Gram', 'g'),
(5, 1, 'Pound ', 'lb'),
(6, 1, 'Ounce', 'oz'),
(1, 2, 'Kilogram', 'kg'),
(2, 2, 'Gram', 'g'),
(5, 2, 'Pound ', 'lb'),
(6, 2, 'Ounce', 'oz');

-- --------------------------------------------------------

--
-- Table structure for table `oc_zone`
--

CREATE TABLE `oc_zone` (
  `zone_id` int(11) NOT NULL,
  `country_id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `code` varchar(32) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `oc_zone`
--

INSERT INTO `oc_zone` (`zone_id`, `country_id`, `name`, `code`, `status`) VALUES
(1, 1, 'Badakhshan', 'BDS', 1),
(2, 1, 'Badghis', 'BDG', 1),
(3, 1, 'Baghlan', 'BGL', 1),
(4, 1, 'Balkh', 'BAL', 1),
(5, 1, 'Bamian', 'BAM', 1),
(6, 1, 'Farah', 'FRA', 1),
(7, 1, 'Faryab', 'FYB', 1),
(8, 1, 'Ghazni', 'GHA', 1),
(9, 1, 'Ghowr', 'GHO', 1),
(10, 1, 'Helmand', 'HEL', 1),
(11, 1, 'Herat', 'HER', 1),
(12, 1, 'Jowzjan', 'JOW', 1),
(13, 1, 'Kabul', 'KAB', 1),
(14, 1, 'Kandahar', 'KAN', 1),
(15, 1, 'Kapisa', 'KAP', 1),
(16, 1, 'Khost', 'KHO', 1),
(17, 1, 'Konar', 'KNR', 1),
(18, 1, 'Kondoz', 'KDZ', 1),
(19, 1, 'Laghman', 'LAG', 1),
(20, 1, 'Lowgar', 'LOW', 1),
(21, 1, 'Nangrahar', 'NAN', 1),
(22, 1, 'Nimruz', 'NIM', 1),
(23, 1, 'Nurestan', 'NUR', 1),
(24, 1, 'Oruzgan', 'ORU', 1),
(25, 1, 'Paktia', 'PIA', 1),
(26, 1, 'Paktika', 'PKA', 1),
(27, 1, 'Parwan', 'PAR', 1),
(28, 1, 'Samangan', 'SAM', 1),
(29, 1, 'Sar-e Pol', 'SAR', 1),
(30, 1, 'Takhar', 'TAK', 1),
(31, 1, 'Wardak', 'WAR', 1),
(32, 1, 'Zabol', 'ZAB', 1),
(33, 2, 'Berat', 'BR', 1),
(34, 2, 'Bulqize', 'BU', 1),
(35, 2, 'Delvine', 'DL', 1),
(36, 2, 'Devoll', 'DV', 1),
(37, 2, 'Diber', 'DI', 1),
(38, 2, 'Durres', 'DR', 1),
(39, 2, 'Elbasan', 'EL', 1),
(40, 2, 'Kolonje', 'ER', 1),
(41, 2, 'Fier', 'FR', 1),
(42, 2, 'Gjirokaster', 'GJ', 1),
(43, 2, 'Gramsh', 'GR', 1),
(44, 2, 'Has', 'HA', 1),
(45, 2, 'Kavaje', 'KA', 1),
(46, 2, 'Kurbin', 'KB', 1),
(47, 2, 'Kucove', 'KC', 1),
(48, 2, 'Korce', 'KO', 1),
(49, 2, 'Kruje', 'KR', 1),
(50, 2, 'Kukes', 'KU', 1),
(51, 2, 'Librazhd', 'LB', 1),
(52, 2, 'Lezhe', 'LE', 1),
(53, 2, 'Lushnje', 'LU', 1),
(54, 2, 'Malesi e Madhe', 'MM', 1),
(55, 2, 'Mallakaster', 'MK', 1),
(56, 2, 'Mat', 'MT', 1),
(57, 2, 'Mirdite', 'MR', 1),
(58, 2, 'Peqin', 'PQ', 1),
(59, 2, 'Permet', 'PR', 1),
(60, 2, 'Pogradec', 'PG', 1),
(61, 2, 'Puke', 'PU', 1),
(62, 2, 'Shkoder', 'SH', 1),
(63, 2, 'Skrapar', 'SK', 1),
(64, 2, 'Sarande', 'SR', 1),
(65, 2, 'Tepelene', 'TE', 1),
(66, 2, 'Tropoje', 'TP', 1),
(67, 2, 'Tirane', 'TR', 1),
(68, 2, 'Vlore', 'VL', 1),
(69, 3, 'Adrar', 'ADR', 1),
(70, 3, 'Ain Defla', 'ADE', 1),
(71, 3, 'Ain Temouchent', 'ATE', 1),
(72, 3, 'Alger', 'ALG', 1),
(73, 3, 'Annaba', 'ANN', 1),
(74, 3, 'Batna', 'BAT', 1),
(75, 3, 'Bechar', 'BEC', 1),
(76, 3, 'Bejaia', 'BEJ', 1),
(77, 3, 'Biskra', 'BIS', 1),
(78, 3, 'Blida', 'BLI', 1),
(79, 3, 'Bordj Bou Arreridj', 'BBA', 1),
(80, 3, 'Bouira', 'BOA', 1),
(81, 3, 'Boumerdes', 'BMD', 1),
(82, 3, 'Chlef', 'CHL', 1),
(83, 3, 'Constantine', 'CON', 1),
(84, 3, 'Djelfa', 'DJE', 1),
(85, 3, 'El Bayadh', 'EBA', 1),
(86, 3, 'El Oued', 'EOU', 1),
(87, 3, 'El Tarf', 'ETA', 1),
(88, 3, 'Ghardaia', 'GHA', 1),
(89, 3, 'Guelma', 'GUE', 1),
(90, 3, 'Illizi', 'ILL', 1),
(91, 3, 'Jijel', 'JIJ', 1),
(92, 3, 'Khenchela', 'KHE', 1),
(93, 3, 'Laghouat', 'LAG', 1),
(94, 3, 'Muaskar', 'MUA', 1),
(95, 3, 'Medea', 'MED', 1),
(96, 3, 'Mila', 'MIL', 1),
(97, 3, 'Mostaganem', 'MOS', 1),
(98, 3, 'M\'Sila', 'MSI', 1),
(99, 3, 'Naama', 'NAA', 1),
(100, 3, 'Oran', 'ORA', 1),
(101, 3, 'Ouargla', 'OUA', 1),
(102, 3, 'Oum el-Bouaghi', 'OEB', 1),
(103, 3, 'Relizane', 'REL', 1),
(104, 3, 'Saida', 'SAI', 1),
(105, 3, 'Setif', 'SET', 1),
(106, 3, 'Sidi Bel Abbes', 'SBA', 1),
(107, 3, 'Skikda', 'SKI', 1),
(108, 3, 'Souk Ahras', 'SAH', 1),
(109, 3, 'Tamanghasset', 'TAM', 1),
(110, 3, 'Tebessa', 'TEB', 1),
(111, 3, 'Tiaret', 'TIA', 1),
(112, 3, 'Tindouf', 'TIN', 1),
(113, 3, 'Tipaza', 'TIP', 1),
(114, 3, 'Tissemsilt', 'TIS', 1),
(115, 3, 'Tizi Ouzou', 'TOU', 1),
(116, 3, 'Tlemcen', 'TLE', 1),
(117, 4, 'Eastern', 'E', 1),
(118, 4, 'Manu\'a', 'M', 1),
(119, 4, 'Rose Island', 'R', 1),
(120, 4, 'Swains Island', 'S', 1),
(121, 4, 'Western', 'W', 1),
(122, 5, 'Andorra la Vella', 'ALV', 1),
(123, 5, 'Canillo', 'CAN', 1),
(124, 5, 'Encamp', 'ENC', 1),
(125, 5, 'Escaldes-Engordany', 'ESE', 1),
(126, 5, 'La Massana', 'LMA', 1),
(127, 5, 'Ordino', 'ORD', 1),
(128, 5, 'Sant Julia de Loria', 'SJL', 1),
(129, 6, 'Bengo', 'BGO', 1),
(130, 6, 'Benguela', 'BGU', 1),
(131, 6, 'Bie', 'BIE', 1),
(132, 6, 'Cabinda', 'CAB', 1),
(133, 6, 'Cuando-Cubango', 'CCU', 1),
(134, 6, 'Cuanza Norte', 'CNO', 1),
(135, 6, 'Cuanza Sul', 'CUS', 1),
(136, 6, 'Cunene', 'CNN', 1),
(137, 6, 'Huambo', 'HUA', 1),
(138, 6, 'Huila', 'HUI', 1),
(139, 6, 'Luanda', 'LUA', 1),
(140, 6, 'Lunda Norte', 'LNO', 1),
(141, 6, 'Lunda Sul', 'LSU', 1),
(142, 6, 'Malange', 'MAL', 1),
(143, 6, 'Moxico', 'MOX', 1),
(144, 6, 'Namibe', 'NAM', 1),
(145, 6, 'Uige', 'UIG', 1),
(146, 6, 'Zaire', 'ZAI', 1),
(147, 9, 'Saint George', 'ASG', 1),
(148, 9, 'Saint John', 'ASJ', 1),
(149, 9, 'Saint Mary', 'ASM', 1),
(150, 9, 'Saint Paul', 'ASL', 1),
(151, 9, 'Saint Peter', 'ASR', 1),
(152, 9, 'Saint Philip', 'ASH', 1),
(153, 9, 'Barbuda', 'BAR', 1),
(154, 9, 'Redonda', 'RED', 1),
(155, 10, 'Antartida e Islas del Atlantico', 'AN', 1),
(156, 10, 'Buenos Aires', 'BA', 1),
(157, 10, 'Catamarca', 'CA', 1),
(158, 10, 'Chaco', 'CH', 1),
(159, 10, 'Chubut', 'CU', 1),
(160, 10, 'Cordoba', 'CO', 1),
(161, 10, 'Corrientes', 'CR', 1),
(162, 10, 'Distrito Federal', 'DF', 1),
(163, 10, 'Entre Rios', 'ER', 1),
(164, 10, 'Formosa', 'FO', 1),
(165, 10, 'Jujuy', 'JU', 1),
(166, 10, 'La Pampa', 'LP', 1),
(167, 10, 'La Rioja', 'LR', 1),
(168, 10, 'Mendoza', 'ME', 1),
(169, 10, 'Misiones', 'MI', 1),
(170, 10, 'Neuquen', 'NE', 1),
(171, 10, 'Rio Negro', 'RN', 1),
(172, 10, 'Salta', 'SA', 1),
(173, 10, 'San Juan', 'SJ', 1),
(174, 10, 'San Luis', 'SL', 1),
(175, 10, 'Santa Cruz', 'SC', 1),
(176, 10, 'Santa Fe', 'SF', 1),
(177, 10, 'Santiago del Estero', 'SD', 1),
(178, 10, 'Tierra del Fuego', 'TF', 1),
(179, 10, 'Tucuman', 'TU', 1),
(180, 11, 'Aragatsotn', 'AGT', 1),
(181, 11, 'Ararat', 'ARR', 1),
(182, 11, 'Armavir', 'ARM', 1),
(183, 11, 'Geghark\'unik\'', 'GEG', 1),
(184, 11, 'Kotayk\'', 'KOT', 1),
(185, 11, 'Lorri', 'LOR', 1),
(186, 11, 'Shirak', 'SHI', 1),
(187, 11, 'Syunik\'', 'SYU', 1),
(188, 11, 'Tavush', 'TAV', 1),
(189, 11, 'Vayots\' Dzor', 'VAY', 1),
(190, 11, 'Yerevan', 'YER', 1),
(191, 13, 'Australian Capital Territory', 'ACT', 1),
(192, 13, 'New South Wales', 'NSW', 1),
(193, 13, 'Northern Territory', 'NT', 1),
(194, 13, 'Queensland', 'QLD', 1),
(195, 13, 'South Australia', 'SA', 1),
(196, 13, 'Tasmania', 'TAS', 1),
(197, 13, 'Victoria', 'VIC', 1),
(198, 13, 'Western Australia', 'WA', 1),
(199, 14, 'Burgenland', 'BUR', 1),
(200, 14, 'Kärnten', 'KAR', 1),
(201, 14, 'Niederösterreich', 'NOS', 1),
(202, 14, 'Oberösterreich', 'OOS', 1),
(203, 14, 'Salzburg', 'SAL', 1),
(204, 14, 'Steiermark', 'STE', 1),
(205, 14, 'Tirol', 'TIR', 1),
(206, 14, 'Vorarlberg', 'VOR', 1),
(207, 14, 'Wien', 'WIE', 1),
(208, 15, 'Ali Bayramli', 'AB', 1),
(209, 15, 'Abseron', 'ABS', 1),
(210, 15, 'AgcabAdi', 'AGC', 1),
(211, 15, 'Agdam', 'AGM', 1),
(212, 15, 'Agdas', 'AGS', 1),
(213, 15, 'Agstafa', 'AGA', 1),
(214, 15, 'Agsu', 'AGU', 1),
(215, 15, 'Astara', 'AST', 1),
(216, 15, 'Baki', 'BA', 1),
(217, 15, 'BabAk', 'BAB', 1),
(218, 15, 'BalakAn', 'BAL', 1),
(219, 15, 'BArdA', 'BAR', 1),
(220, 15, 'Beylaqan', 'BEY', 1),
(221, 15, 'Bilasuvar', 'BIL', 1),
(222, 15, 'Cabrayil', 'CAB', 1),
(223, 15, 'Calilabab', 'CAL', 1),
(224, 15, 'Culfa', 'CUL', 1),
(225, 15, 'Daskasan', 'DAS', 1),
(226, 15, 'Davaci', 'DAV', 1),
(227, 15, 'Fuzuli', 'FUZ', 1),
(228, 15, 'Ganca', 'GA', 1),
(229, 15, 'Gadabay', 'GAD', 1),
(230, 15, 'Goranboy', 'GOR', 1),
(231, 15, 'Goycay', 'GOY', 1),
(232, 15, 'Haciqabul', 'HAC', 1),
(233, 15, 'Imisli', 'IMI', 1),
(234, 15, 'Ismayilli', 'ISM', 1),
(235, 15, 'Kalbacar', 'KAL', 1),
(236, 15, 'Kurdamir', 'KUR', 1),
(237, 15, 'Lankaran', 'LA', 1),
(238, 15, 'Lacin', 'LAC', 1),
(239, 15, 'Lankaran', 'LAN', 1),
(240, 15, 'Lerik', 'LER', 1),
(241, 15, 'Masalli', 'MAS', 1),
(242, 15, 'Mingacevir', 'MI', 1),
(243, 15, 'Naftalan', 'NA', 1),
(244, 15, 'Neftcala', 'NEF', 1),
(245, 15, 'Oguz', 'OGU', 1),
(246, 15, 'Ordubad', 'ORD', 1),
(247, 15, 'Qabala', 'QAB', 1),
(248, 15, 'Qax', 'QAX', 1),
(249, 15, 'Qazax', 'QAZ', 1),
(250, 15, 'Qobustan', 'QOB', 1),
(251, 15, 'Quba', 'QBA', 1),
(252, 15, 'Qubadli', 'QBI', 1),
(253, 15, 'Qusar', 'QUS', 1),
(254, 15, 'Saki', 'SA', 1),
(255, 15, 'Saatli', 'SAT', 1),
(256, 15, 'Sabirabad', 'SAB', 1),
(257, 15, 'Sadarak', 'SAD', 1),
(258, 15, 'Sahbuz', 'SAH', 1),
(259, 15, 'Saki', 'SAK', 1),
(260, 15, 'Salyan', 'SAL', 1),
(261, 15, 'Sumqayit', 'SM', 1),
(262, 15, 'Samaxi', 'SMI', 1),
(263, 15, 'Samkir', 'SKR', 1),
(264, 15, 'Samux', 'SMX', 1),
(265, 15, 'Sarur', 'SAR', 1),
(266, 15, 'Siyazan', 'SIY', 1),
(267, 15, 'Susa', 'SS', 1),
(268, 15, 'Susa', 'SUS', 1),
(269, 15, 'Tartar', 'TAR', 1),
(270, 15, 'Tovuz', 'TOV', 1),
(271, 15, 'Ucar', 'UCA', 1),
(272, 15, 'Xankandi', 'XA', 1),
(273, 15, 'Xacmaz', 'XAC', 1),
(274, 15, 'Xanlar', 'XAN', 1),
(275, 15, 'Xizi', 'XIZ', 1),
(276, 15, 'Xocali', 'XCI', 1),
(277, 15, 'Xocavand', 'XVD', 1),
(278, 15, 'Yardimli', 'YAR', 1),
(279, 15, 'Yevlax', 'YEV', 1),
(280, 15, 'Zangilan', 'ZAN', 1),
(281, 15, 'Zaqatala', 'ZAQ', 1),
(282, 15, 'Zardab', 'ZAR', 1),
(283, 15, 'Naxcivan', 'NX', 1),
(284, 16, 'Acklins', 'ACK', 1),
(285, 16, 'Berry Islands', 'BER', 1),
(286, 16, 'Bimini', 'BIM', 1),
(287, 16, 'Black Point', 'BLK', 1),
(288, 16, 'Cat Island', 'CAT', 1),
(289, 16, 'Central Abaco', 'CAB', 1),
(290, 16, 'Central Andros', 'CAN', 1),
(291, 16, 'Central Eleuthera', 'CEL', 1),
(292, 16, 'City of Freeport', 'FRE', 1),
(293, 16, 'Crooked Island', 'CRO', 1),
(294, 16, 'East Grand Bahama', 'EGB', 1),
(295, 16, 'Exuma', 'EXU', 1),
(296, 16, 'Grand Cay', 'GRD', 1),
(297, 16, 'Harbour Island', 'HAR', 1),
(298, 16, 'Hope Town', 'HOP', 1),
(299, 16, 'Inagua', 'INA', 1),
(300, 16, 'Long Island', 'LNG', 1),
(301, 16, 'Mangrove Cay', 'MAN', 1),
(302, 16, 'Mayaguana', 'MAY', 1),
(303, 16, 'Moore\'s Island', 'MOO', 1),
(304, 16, 'North Abaco', 'NAB', 1),
(305, 16, 'North Andros', 'NAN', 1),
(306, 16, 'North Eleuthera', 'NEL', 1),
(307, 16, 'Ragged Island', 'RAG', 1),
(308, 16, 'Rum Cay', 'RUM', 1),
(309, 16, 'San Salvador', 'SAL', 1),
(310, 16, 'South Abaco', 'SAB', 1),
(311, 16, 'South Andros', 'SAN', 1),
(312, 16, 'South Eleuthera', 'SEL', 1),
(313, 16, 'Spanish Wells', 'SWE', 1),
(314, 16, 'West Grand Bahama', 'WGB', 1),
(315, 17, 'Capital', 'CAP', 1),
(316, 17, 'Central', 'CEN', 1),
(317, 17, 'Muharraq', 'MUH', 1),
(318, 17, 'Northern', 'NOR', 1),
(319, 17, 'Southern', 'SOU', 1),
(320, 18, 'Barisal', 'BAR', 1),
(321, 18, 'Chittagong', 'CHI', 1),
(322, 18, 'Dhaka', 'DHA', 1),
(323, 18, 'Khulna', 'KHU', 1),
(324, 18, 'Rajshahi', 'RAJ', 1),
(325, 18, 'Sylhet', 'SYL', 1),
(326, 19, 'Christ Church', 'CC', 1),
(327, 19, 'Saint Andrew', 'AND', 1),
(328, 19, 'Saint George', 'GEO', 1),
(329, 19, 'Saint James', 'JAM', 1),
(330, 19, 'Saint John', 'JOH', 1),
(331, 19, 'Saint Joseph', 'JOS', 1),
(332, 19, 'Saint Lucy', 'LUC', 1),
(333, 19, 'Saint Michael', 'MIC', 1),
(334, 19, 'Saint Peter', 'PET', 1),
(335, 19, 'Saint Philip', 'PHI', 1),
(336, 19, 'Saint Thomas', 'THO', 1),
(337, 20, 'Brestskaya (Brest)', 'BR', 1),
(338, 20, 'Homyel\'skaya (Homyel\')', 'HO', 1),
(339, 20, 'Horad Minsk', 'HM', 1),
(340, 20, 'Hrodzyenskaya (Hrodna)', 'HR', 1),
(341, 20, 'Mahilyowskaya (Mahilyow)', 'MA', 1),
(342, 20, 'Minskaya', 'MI', 1),
(343, 20, 'Vitsyebskaya (Vitsyebsk)', 'VI', 1),
(344, 21, 'Antwerpen', 'VAN', 1),
(345, 21, 'Brabant Wallon', 'WBR', 1),
(346, 21, 'Hainaut', 'WHT', 1),
(347, 21, 'Liège', 'WLG', 1),
(348, 21, 'Limburg', 'VLI', 1),
(349, 21, 'Luxembourg', 'WLX', 1),
(350, 21, 'Namur', 'WNA', 1),
(351, 21, 'Oost-Vlaanderen', 'VOV', 1),
(352, 21, 'Vlaams Brabant', 'VBR', 1),
(353, 21, 'West-Vlaanderen', 'VWV', 1),
(354, 22, 'Belize', 'BZ', 1),
(355, 22, 'Cayo', 'CY', 1),
(356, 22, 'Corozal', 'CR', 1),
(357, 22, 'Orange Walk', 'OW', 1),
(358, 22, 'Stann Creek', 'SC', 1),
(359, 22, 'Toledo', 'TO', 1),
(360, 23, 'Alibori', 'AL', 1),
(361, 23, 'Atakora', 'AK', 1),
(362, 23, 'Atlantique', 'AQ', 1),
(363, 23, 'Borgou', 'BO', 1),
(364, 23, 'Collines', 'CO', 1),
(365, 23, 'Donga', 'DO', 1),
(366, 23, 'Kouffo', 'KO', 1),
(367, 23, 'Littoral', 'LI', 1),
(368, 23, 'Mono', 'MO', 1),
(369, 23, 'Oueme', 'OU', 1),
(370, 23, 'Plateau', 'PL', 1),
(371, 23, 'Zou', 'ZO', 1),
(372, 24, 'Devonshire', 'DS', 1),
(373, 24, 'Hamilton City', 'HC', 1),
(374, 24, 'Hamilton', 'HA', 1),
(375, 24, 'Paget', 'PG', 1),
(376, 24, 'Pembroke', 'PB', 1),
(377, 24, 'Saint George City', 'GC', 1),
(378, 24, 'Saint George\'s', 'SG', 1),
(379, 24, 'Sandys', 'SA', 1),
(380, 24, 'Smith\'s', 'SM', 1),
(381, 24, 'Southampton', 'SH', 1),
(382, 24, 'Warwick', 'WA', 1),
(383, 25, 'Bumthang', 'BUM', 1),
(384, 25, 'Chukha', 'CHU', 1),
(385, 25, 'Dagana', 'DAG', 1),
(386, 25, 'Gasa', 'GAS', 1),
(387, 25, 'Haa', 'HAA', 1),
(388, 25, 'Lhuntse', 'LHU', 1),
(389, 25, 'Mongar', 'MON', 1),
(390, 25, 'Paro', 'PAR', 1),
(391, 25, 'Pemagatshel', 'PEM', 1),
(392, 25, 'Punakha', 'PUN', 1),
(393, 25, 'Samdrup Jongkhar', 'SJO', 1),
(394, 25, 'Samtse', 'SAT', 1),
(395, 25, 'Sarpang', 'SAR', 1),
(396, 25, 'Thimphu', 'THI', 1),
(397, 25, 'Trashigang', 'TRG', 1),
(398, 25, 'Trashiyangste', 'TRY', 1),
(399, 25, 'Trongsa', 'TRO', 1),
(400, 25, 'Tsirang', 'TSI', 1),
(401, 25, 'Wangdue Phodrang', 'WPH', 1),
(402, 25, 'Zhemgang', 'ZHE', 1),
(403, 26, 'Beni', 'BEN', 1),
(404, 26, 'Chuquisaca', 'CHU', 1),
(405, 26, 'Cochabamba', 'COC', 1),
(406, 26, 'La Paz', 'LPZ', 1),
(407, 26, 'Oruro', 'ORU', 1),
(408, 26, 'Pando', 'PAN', 1),
(409, 26, 'Potosi', 'POT', 1),
(410, 26, 'Santa Cruz', 'SCZ', 1),
(411, 26, 'Tarija', 'TAR', 1),
(412, 27, 'Brcko district', 'BRO', 1),
(413, 27, 'Unsko-Sanski Kanton', 'FUS', 1),
(414, 27, 'Posavski Kanton', 'FPO', 1),
(415, 27, 'Tuzlanski Kanton', 'FTU', 1),
(416, 27, 'Zenicko-Dobojski Kanton', 'FZE', 1),
(417, 27, 'Bosanskopodrinjski Kanton', 'FBP', 1),
(418, 27, 'Srednjebosanski Kanton', 'FSB', 1),
(419, 27, 'Hercegovacko-neretvanski Kanton', 'FHN', 1),
(420, 27, 'Zapadnohercegovacka Zupanija', 'FZH', 1),
(421, 27, 'Kanton Sarajevo', 'FSA', 1),
(422, 27, 'Zapadnobosanska', 'FZA', 1),
(423, 27, 'Banja Luka', 'SBL', 1),
(424, 27, 'Doboj', 'SDO', 1),
(425, 27, 'Bijeljina', 'SBI', 1),
(426, 27, 'Vlasenica', 'SVL', 1),
(427, 27, 'Sarajevo-Romanija or Sokolac', 'SSR', 1),
(428, 27, 'Foca', 'SFO', 1),
(429, 27, 'Trebinje', 'STR', 1),
(430, 28, 'Central', 'CE', 1),
(431, 28, 'Ghanzi', 'GH', 1),
(432, 28, 'Kgalagadi', 'KD', 1),
(433, 28, 'Kgatleng', 'KT', 1),
(434, 28, 'Kweneng', 'KW', 1),
(435, 28, 'Ngamiland', 'NG', 1),
(436, 28, 'North East', 'NE', 1),
(437, 28, 'North West', 'NW', 1),
(438, 28, 'South East', 'SE', 1),
(439, 28, 'Southern', 'SO', 1),
(440, 30, 'Acre', 'AC', 1),
(441, 30, 'Alagoas', 'AL', 1),
(442, 30, 'Amapá', 'AP', 1),
(443, 30, 'Amazonas', 'AM', 1),
(444, 30, 'Bahia', 'BA', 1),
(445, 30, 'Ceará', 'CE', 1),
(446, 30, 'Distrito Federal', 'DF', 1),
(447, 30, 'Espírito Santo', 'ES', 1),
(448, 30, 'Goiás', 'GO', 1),
(449, 30, 'Maranhão', 'MA', 1),
(450, 30, 'Mato Grosso', 'MT', 1),
(451, 30, 'Mato Grosso do Sul', 'MS', 1),
(452, 30, 'Minas Gerais', 'MG', 1),
(453, 30, 'Pará', 'PA', 1),
(454, 30, 'Paraíba', 'PB', 1),
(455, 30, 'Paraná', 'PR', 1),
(456, 30, 'Pernambuco', 'PE', 1),
(457, 30, 'Piauí', 'PI', 1),
(458, 30, 'Rio de Janeiro', 'RJ', 1),
(459, 30, 'Rio Grande do Norte', 'RN', 1),
(460, 30, 'Rio Grande do Sul', 'RS', 1),
(461, 30, 'Rondônia', 'RO', 1),
(462, 30, 'Roraima', 'RR', 1),
(463, 30, 'Santa Catarina', 'SC', 1),
(464, 30, 'São Paulo', 'SP', 1),
(465, 30, 'Sergipe', 'SE', 1),
(466, 30, 'Tocantins', 'TO', 1),
(467, 31, 'Peros Banhos', 'PB', 1),
(468, 31, 'Salomon Islands', 'SI', 1),
(469, 31, 'Nelsons Island', 'NI', 1),
(470, 31, 'Three Brothers', 'TB', 1),
(471, 31, 'Eagle Islands', 'EA', 1),
(472, 31, 'Danger Island', 'DI', 1),
(473, 31, 'Egmont Islands', 'EG', 1),
(474, 31, 'Diego Garcia', 'DG', 1),
(475, 32, 'Belait', 'BEL', 1),
(476, 32, 'Brunei and Muara', 'BRM', 1),
(477, 32, 'Temburong', 'TEM', 1),
(478, 32, 'Tutong', 'TUT', 1),
(479, 33, 'Blagoevgrad', '', 1),
(480, 33, 'Burgas', '', 1),
(481, 33, 'Dobrich', '', 1),
(482, 33, 'Gabrovo', '', 1),
(483, 33, 'Haskovo', '', 1),
(484, 33, 'Kardjali', '', 1),
(485, 33, 'Kyustendil', '', 1),
(486, 33, 'Lovech', '', 1),
(487, 33, 'Montana', '', 1),
(488, 33, 'Pazardjik', '', 1),
(489, 33, 'Pernik', '', 1),
(490, 33, 'Pleven', '', 1),
(491, 33, 'Plovdiv', '', 1),
(492, 33, 'Razgrad', '', 1),
(493, 33, 'Shumen', '', 1),
(494, 33, 'Silistra', '', 1),
(495, 33, 'Sliven', '', 1),
(496, 33, 'Smolyan', '', 1),
(497, 33, 'Sofia', '', 1),
(498, 33, 'Sofia - town', '', 1),
(499, 33, 'Stara Zagora', '', 1),
(500, 33, 'Targovishte', '', 1),
(501, 33, 'Varna', '', 1),
(502, 33, 'Veliko Tarnovo', '', 1),
(503, 33, 'Vidin', '', 1),
(504, 33, 'Vratza', '', 1),
(505, 33, 'Yambol', '', 1),
(506, 34, 'Bale', 'BAL', 1),
(507, 34, 'Bam', 'BAM', 1),
(508, 34, 'Banwa', 'BAN', 1),
(509, 34, 'Bazega', 'BAZ', 1),
(510, 34, 'Bougouriba', 'BOR', 1),
(511, 34, 'Boulgou', 'BLG', 1),
(512, 34, 'Boulkiemde', 'BOK', 1),
(513, 34, 'Comoe', 'COM', 1),
(514, 34, 'Ganzourgou', 'GAN', 1),
(515, 34, 'Gnagna', 'GNA', 1),
(516, 34, 'Gourma', 'GOU', 1),
(517, 34, 'Houet', 'HOU', 1),
(518, 34, 'Ioba', 'IOA', 1),
(519, 34, 'Kadiogo', 'KAD', 1),
(520, 34, 'Kenedougou', 'KEN', 1),
(521, 34, 'Komondjari', 'KOD', 1),
(522, 34, 'Kompienga', 'KOP', 1),
(523, 34, 'Kossi', 'KOS', 1),
(524, 34, 'Koulpelogo', 'KOL', 1),
(525, 34, 'Kouritenga', 'KOT', 1),
(526, 34, 'Kourweogo', 'KOW', 1),
(527, 34, 'Leraba', 'LER', 1),
(528, 34, 'Loroum', 'LOR', 1),
(529, 34, 'Mouhoun', 'MOU', 1),
(530, 34, 'Nahouri', 'NAH', 1),
(531, 34, 'Namentenga', 'NAM', 1),
(532, 34, 'Nayala', 'NAY', 1),
(533, 34, 'Noumbiel', 'NOU', 1),
(534, 34, 'Oubritenga', 'OUB', 1),
(535, 34, 'Oudalan', 'OUD', 1),
(536, 34, 'Passore', 'PAS', 1),
(537, 34, 'Poni', 'PON', 1),
(538, 34, 'Sanguie', 'SAG', 1),
(539, 34, 'Sanmatenga', 'SAM', 1),
(540, 34, 'Seno', 'SEN', 1),
(541, 34, 'Sissili', 'SIS', 1),
(542, 34, 'Soum', 'SOM', 1),
(543, 34, 'Sourou', 'SOR', 1),
(544, 34, 'Tapoa', 'TAP', 1),
(545, 34, 'Tuy', 'TUY', 1),
(546, 34, 'Yagha', 'YAG', 1),
(547, 34, 'Yatenga', 'YAT', 1),
(548, 34, 'Ziro', 'ZIR', 1),
(549, 34, 'Zondoma', 'ZOD', 1),
(550, 34, 'Zoundweogo', 'ZOW', 1),
(551, 35, 'Bubanza', 'BB', 1),
(552, 35, 'Bujumbura', 'BJ', 1),
(553, 35, 'Bururi', 'BR', 1),
(554, 35, 'Cankuzo', 'CA', 1),
(555, 35, 'Cibitoke', 'CI', 1),
(556, 35, 'Gitega', 'GI', 1),
(557, 35, 'Karuzi', 'KR', 1),
(558, 35, 'Kayanza', 'KY', 1),
(559, 35, 'Kirundo', 'KI', 1),
(560, 35, 'Makamba', 'MA', 1),
(561, 35, 'Muramvya', 'MU', 1),
(562, 35, 'Muyinga', 'MY', 1),
(563, 35, 'Mwaro', 'MW', 1),
(564, 35, 'Ngozi', 'NG', 1),
(565, 35, 'Rutana', 'RT', 1),
(566, 35, 'Ruyigi', 'RY', 1),
(567, 36, 'Phnom Penh', 'PP', 1),
(568, 36, 'Preah Seihanu (Kompong Som or Sihanoukville)', 'PS', 1),
(569, 36, 'Pailin', 'PA', 1),
(570, 36, 'Keb', 'KB', 1),
(571, 36, 'Banteay Meanchey', 'BM', 1),
(572, 36, 'Battambang', 'BA', 1),
(573, 36, 'Kampong Cham', 'KM', 1),
(574, 36, 'Kampong Chhnang', 'KN', 1),
(575, 36, 'Kampong Speu', 'KU', 1),
(576, 36, 'Kampong Som', 'KO', 1),
(577, 36, 'Kampong Thom', 'KT', 1),
(578, 36, 'Kampot', 'KP', 1),
(579, 36, 'Kandal', 'KL', 1),
(580, 36, 'Kaoh Kong', 'KK', 1),
(581, 36, 'Kratie', 'KR', 1),
(582, 36, 'Mondul Kiri', 'MK', 1),
(583, 36, 'Oddar Meancheay', 'OM', 1),
(584, 36, 'Pursat', 'PU', 1),
(585, 36, 'Preah Vihear', 'PR', 1),
(586, 36, 'Prey Veng', 'PG', 1),
(587, 36, 'Ratanak Kiri', 'RK', 1),
(588, 36, 'Siemreap', 'SI', 1),
(589, 36, 'Stung Treng', 'ST', 1),
(590, 36, 'Svay Rieng', 'SR', 1),
(591, 36, 'Takeo', 'TK', 1),
(592, 37, 'Adamawa (Adamaoua)', 'ADA', 1),
(593, 37, 'Centre', 'CEN', 1),
(594, 37, 'East (Est)', 'EST', 1),
(595, 37, 'Extreme North (Extreme-Nord)', 'EXN', 1),
(596, 37, 'Littoral', 'LIT', 1),
(597, 37, 'North (Nord)', 'NOR', 1),
(598, 37, 'Northwest (Nord-Ouest)', 'NOT', 1),
(599, 37, 'West (Ouest)', 'OUE', 1),
(600, 37, 'South (Sud)', 'SUD', 1),
(601, 37, 'Southwest (Sud-Ouest).', 'SOU', 1),
(602, 38, 'Alberta', 'AB', 1),
(603, 38, 'British Columbia', 'BC', 1),
(604, 38, 'Manitoba', 'MB', 1),
(605, 38, 'New Brunswick', 'NB', 1),
(606, 38, 'Newfoundland and Labrador', 'NL', 1),
(607, 38, 'Northwest Territories', 'NT', 1),
(608, 38, 'Nova Scotia', 'NS', 1),
(609, 38, 'Nunavut', 'NU', 1),
(610, 38, 'Ontario', 'ON', 1),
(611, 38, 'Prince Edward Island', 'PE', 1),
(612, 38, 'Qu&eacute;bec', 'QC', 1),
(613, 38, 'Saskatchewan', 'SK', 1),
(614, 38, 'Yukon Territory', 'YT', 1),
(615, 39, 'Boa Vista', 'BV', 1),
(616, 39, 'Brava', 'BR', 1),
(617, 39, 'Calheta de Sao Miguel', 'CS', 1),
(618, 39, 'Maio', 'MA', 1),
(619, 39, 'Mosteiros', 'MO', 1),
(620, 39, 'Paul', 'PA', 1),
(621, 39, 'Porto Novo', 'PN', 1),
(622, 39, 'Praia', 'PR', 1),
(623, 39, 'Ribeira Grande', 'RG', 1),
(624, 39, 'Sal', 'SL', 1),
(625, 39, 'Santa Catarina', 'CA', 1),
(626, 39, 'Santa Cruz', 'CR', 1),
(627, 39, 'Sao Domingos', 'SD', 1),
(628, 39, 'Sao Filipe', 'SF', 1),
(629, 39, 'Sao Nicolau', 'SN', 1),
(630, 39, 'Sao Vicente', 'SV', 1),
(631, 39, 'Tarrafal', 'TA', 1),
(632, 40, 'Creek', 'CR', 1),
(633, 40, 'Eastern', 'EA', 1),
(634, 40, 'Midland', 'ML', 1),
(635, 40, 'South Town', 'ST', 1),
(636, 40, 'Spot Bay', 'SP', 1),
(637, 40, 'Stake Bay', 'SK', 1),
(638, 40, 'West End', 'WD', 1),
(639, 40, 'Western', 'WN', 1),
(640, 41, 'Bamingui-Bangoran', 'BBA', 1),
(641, 41, 'Basse-Kotto', 'BKO', 1),
(642, 41, 'Haute-Kotto', 'HKO', 1),
(643, 41, 'Haut-Mbomou', 'HMB', 1),
(644, 41, 'Kemo', 'KEM', 1),
(645, 41, 'Lobaye', 'LOB', 1),
(646, 41, 'Mambere-KadeÔ', 'MKD', 1),
(647, 41, 'Mbomou', 'MBO', 1),
(648, 41, 'Nana-Mambere', 'NMM', 1),
(649, 41, 'Ombella-M\'Poko', 'OMP', 1),
(650, 41, 'Ouaka', 'OUK', 1),
(651, 41, 'Ouham', 'OUH', 1),
(652, 41, 'Ouham-Pende', 'OPE', 1),
(653, 41, 'Vakaga', 'VAK', 1),
(654, 41, 'Nana-Grebizi', 'NGR', 1),
(655, 41, 'Sangha-Mbaere', 'SMB', 1),
(656, 41, 'Bangui', 'BAN', 1),
(657, 42, 'Batha', 'BA', 1),
(658, 42, 'Biltine', 'BI', 1),
(659, 42, 'Borkou-Ennedi-Tibesti', 'BE', 1),
(660, 42, 'Chari-Baguirmi', 'CB', 1),
(661, 42, 'Guera', 'GU', 1),
(662, 42, 'Kanem', 'KA', 1),
(663, 42, 'Lac', 'LA', 1),
(664, 42, 'Logone Occidental', 'LC', 1),
(665, 42, 'Logone Oriental', 'LR', 1),
(666, 42, 'Mayo-Kebbi', 'MK', 1),
(667, 42, 'Moyen-Chari', 'MC', 1),
(668, 42, 'Ouaddai', 'OU', 1),
(669, 42, 'Salamat', 'SA', 1),
(670, 42, 'Tandjile', 'TA', 1),
(671, 43, 'Aisen del General Carlos Ibanez', 'AI', 1),
(672, 43, 'Antofagasta', 'AN', 1),
(673, 43, 'Araucania', 'AR', 1),
(674, 43, 'Atacama', 'AT', 1),
(675, 43, 'Bio-Bio', 'BI', 1),
(676, 43, 'Coquimbo', 'CO', 1),
(677, 43, 'Libertador General Bernardo O\'Higgins', 'LI', 1),
(678, 43, 'Los Lagos', 'LL', 1),
(679, 43, 'Magallanes y de la Antartica Chilena', 'MA', 1),
(680, 43, 'Maule', 'ML', 1),
(681, 43, 'Region Metropolitana', 'RM', 1),
(682, 43, 'Tarapaca', 'TA', 1),
(683, 43, 'Valparaiso', 'VS', 1),
(684, 44, 'Anhui', 'AN', 1),
(685, 44, 'Beijing', 'BE', 1),
(686, 44, 'Chongqing', 'CH', 1),
(687, 44, 'Fujian', 'FU', 1),
(688, 44, 'Gansu', 'GA', 1),
(689, 44, 'Guangdong', 'GU', 1),
(690, 44, 'Guangxi', 'GX', 1),
(691, 44, 'Guizhou', 'GZ', 1),
(692, 44, 'Hainan', 'HA', 1),
(693, 44, 'Hebei', 'HB', 1),
(694, 44, 'Heilongjiang', 'HL', 1),
(695, 44, 'Henan', 'HE', 1),
(696, 44, 'Hong Kong', 'HK', 1),
(697, 44, 'Hubei', 'HU', 1),
(698, 44, 'Hunan', 'HN', 1),
(699, 44, 'Inner Mongolia', 'IM', 1),
(700, 44, 'Jiangsu', 'JI', 1),
(701, 44, 'Jiangxi', 'JX', 1),
(702, 44, 'Jilin', 'JL', 1),
(703, 44, 'Liaoning', 'LI', 1),
(704, 44, 'Macau', 'MA', 1),
(705, 44, 'Ningxia', 'NI', 1),
(706, 44, 'Shaanxi', 'SH', 1),
(707, 44, 'Shandong', 'SA', 1),
(708, 44, 'Shanghai', 'SG', 1),
(709, 44, 'Shanxi', 'SX', 1),
(710, 44, 'Sichuan', 'SI', 1),
(711, 44, 'Tianjin', 'TI', 1),
(712, 44, 'Xinjiang', 'XI', 1),
(713, 44, 'Yunnan', 'YU', 1),
(714, 44, 'Zhejiang', 'ZH', 1),
(715, 46, 'Direction Island', 'D', 1),
(716, 46, 'Home Island', 'H', 1),
(717, 46, 'Horsburgh Island', 'O', 1),
(718, 46, 'South Island', 'S', 1),
(719, 46, 'West Island', 'W', 1),
(720, 47, 'Amazonas', 'AMZ', 1),
(721, 47, 'Antioquia', 'ANT', 1),
(722, 47, 'Arauca', 'ARA', 1),
(723, 47, 'Atlantico', 'ATL', 1),
(724, 47, 'Bogota D.C.', 'BDC', 1),
(725, 47, 'Bolivar', 'BOL', 1),
(726, 47, 'Boyaca', 'BOY', 1),
(727, 47, 'Caldas', 'CAL', 1),
(728, 47, 'Caqueta', 'CAQ', 1),
(729, 47, 'Casanare', 'CAS', 1),
(730, 47, 'Cauca', 'CAU', 1),
(731, 47, 'Cesar', 'CES', 1),
(732, 47, 'Choco', 'CHO', 1),
(733, 47, 'Cordoba', 'COR', 1),
(734, 47, 'Cundinamarca', 'CAM', 1),
(735, 47, 'Guainia', 'GNA', 1),
(736, 47, 'Guajira', 'GJR', 1),
(737, 47, 'Guaviare', 'GVR', 1),
(738, 47, 'Huila', 'HUI', 1),
(739, 47, 'Magdalena', 'MAG', 1),
(740, 47, 'Meta', 'MET', 1),
(741, 47, 'Narino', 'NAR', 1),
(742, 47, 'Norte de Santander', 'NDS', 1),
(743, 47, 'Putumayo', 'PUT', 1),
(744, 47, 'Quindio', 'QUI', 1),
(745, 47, 'Risaralda', 'RIS', 1),
(746, 47, 'San Andres y Providencia', 'SAP', 1),
(747, 47, 'Santander', 'SAN', 1),
(748, 47, 'Sucre', 'SUC', 1),
(749, 47, 'Tolima', 'TOL', 1),
(750, 47, 'Valle del Cauca', 'VDC', 1),
(751, 47, 'Vaupes', 'VAU', 1),
(752, 47, 'Vichada', 'VIC', 1),
(753, 48, 'Grande Comore', 'G', 1),
(754, 48, 'Anjouan', 'A', 1),
(755, 48, 'Moheli', 'M', 1),
(756, 49, 'Bouenza', 'BO', 1),
(757, 49, 'Brazzaville', 'BR', 1),
(758, 49, 'Cuvette', 'CU', 1),
(759, 49, 'Cuvette-Ouest', 'CO', 1),
(760, 49, 'Kouilou', 'KO', 1),
(761, 49, 'Lekoumou', 'LE', 1),
(762, 49, 'Likouala', 'LI', 1),
(763, 49, 'Niari', 'NI', 1),
(764, 49, 'Plateaux', 'PL', 1),
(765, 49, 'Pool', 'PO', 1),
(766, 49, 'Sangha', 'SA', 1),
(767, 50, 'Pukapuka', 'PU', 1),
(768, 50, 'Rakahanga', 'RK', 1),
(769, 50, 'Manihiki', 'MK', 1),
(770, 50, 'Penrhyn', 'PE', 1),
(771, 50, 'Nassau Island', 'NI', 1),
(772, 50, 'Surwarrow', 'SU', 1),
(773, 50, 'Palmerston', 'PA', 1),
(774, 50, 'Aitutaki', 'AI', 1),
(775, 50, 'Manuae', 'MA', 1),
(776, 50, 'Takutea', 'TA', 1),
(777, 50, 'Mitiaro', 'MT', 1),
(778, 50, 'Atiu', 'AT', 1),
(779, 50, 'Mauke', 'MU', 1),
(780, 50, 'Rarotonga', 'RR', 1),
(781, 50, 'Mangaia', 'MG', 1),
(782, 51, 'Alajuela', 'AL', 1),
(783, 51, 'Cartago', 'CA', 1),
(784, 51, 'Guanacaste', 'GU', 1),
(785, 51, 'Heredia', 'HE', 1),
(786, 51, 'Limon', 'LI', 1),
(787, 51, 'Puntarenas', 'PU', 1),
(788, 51, 'San Jose', 'SJ', 1),
(789, 52, 'Abengourou', 'ABE', 1),
(790, 52, 'Abidjan', 'ABI', 1),
(791, 52, 'Aboisso', 'ABO', 1),
(792, 52, 'Adiake', 'ADI', 1),
(793, 52, 'Adzope', 'ADZ', 1),
(794, 52, 'Agboville', 'AGB', 1),
(795, 52, 'Agnibilekrou', 'AGN', 1),
(796, 52, 'Alepe', 'ALE', 1),
(797, 52, 'Bocanda', 'BOC', 1),
(798, 52, 'Bangolo', 'BAN', 1),
(799, 52, 'Beoumi', 'BEO', 1),
(800, 52, 'Biankouma', 'BIA', 1),
(801, 52, 'Bondoukou', 'BDK', 1),
(802, 52, 'Bongouanou', 'BGN', 1),
(803, 52, 'Bouafle', 'BFL', 1),
(804, 52, 'Bouake', 'BKE', 1),
(805, 52, 'Bouna', 'BNA', 1),
(806, 52, 'Boundiali', 'BDL', 1),
(807, 52, 'Dabakala', 'DKL', 1),
(808, 52, 'Dabou', 'DBU', 1),
(809, 52, 'Daloa', 'DAL', 1),
(810, 52, 'Danane', 'DAN', 1),
(811, 52, 'Daoukro', 'DAO', 1),
(812, 52, 'Dimbokro', 'DIM', 1),
(813, 52, 'Divo', 'DIV', 1),
(814, 52, 'Duekoue', 'DUE', 1),
(815, 52, 'Ferkessedougou', 'FER', 1),
(816, 52, 'Gagnoa', 'GAG', 1),
(817, 52, 'Grand-Bassam', 'GBA', 1),
(818, 52, 'Grand-Lahou', 'GLA', 1),
(819, 52, 'Guiglo', 'GUI', 1),
(820, 52, 'Issia', 'ISS', 1),
(821, 52, 'Jacqueville', 'JAC', 1),
(822, 52, 'Katiola', 'KAT', 1),
(823, 52, 'Korhogo', 'KOR', 1),
(824, 52, 'Lakota', 'LAK', 1),
(825, 52, 'Man', 'MAN', 1),
(826, 52, 'Mankono', 'MKN', 1),
(827, 52, 'Mbahiakro', 'MBA', 1),
(828, 52, 'Odienne', 'ODI', 1),
(829, 52, 'Oume', 'OUM', 1),
(830, 52, 'Sakassou', 'SAK', 1),
(831, 52, 'San-Pedro', 'SPE', 1),
(832, 52, 'Sassandra', 'SAS', 1),
(833, 52, 'Seguela', 'SEG', 1),
(834, 52, 'Sinfra', 'SIN', 1),
(835, 52, 'Soubre', 'SOU', 1),
(836, 52, 'Tabou', 'TAB', 1),
(837, 52, 'Tanda', 'TAN', 1),
(838, 52, 'Tiebissou', 'TIE', 1),
(839, 52, 'Tingrela', 'TIN', 1),
(840, 52, 'Tiassale', 'TIA', 1),
(841, 52, 'Touba', 'TBA', 1),
(842, 52, 'Toulepleu', 'TLP', 1),
(843, 52, 'Toumodi', 'TMD', 1),
(844, 52, 'Vavoua', 'VAV', 1),
(845, 52, 'Yamoussoukro', 'YAM', 1),
(846, 52, 'Zuenoula', 'ZUE', 1),
(847, 53, 'Bjelovarsko-bilogorska', 'BB', 1),
(848, 53, 'Grad Zagreb', 'GZ', 1),
(849, 53, 'Dubrovačko-neretvanska', 'DN', 1),
(850, 53, 'Istarska', 'IS', 1),
(851, 53, 'Karlovačka', 'KA', 1),
(852, 53, 'Koprivničko-križevačka', 'KK', 1),
(853, 53, 'Krapinsko-zagorska', 'KZ', 1),
(854, 53, 'Ličko-senjska', 'LS', 1),
(855, 53, 'Međimurska', 'ME', 1),
(856, 53, 'Osječko-baranjska', 'OB', 1),
(857, 53, 'Požeško-slavonska', 'PS', 1),
(858, 53, 'Primorsko-goranska', 'PG', 1),
(859, 53, 'Šibensko-kninska', 'SK', 1),
(860, 53, 'Sisačko-moslavačka', 'SM', 1),
(861, 53, 'Brodsko-posavska', 'BP', 1),
(862, 53, 'Splitsko-dalmatinska', 'SD', 1),
(863, 53, 'Varaždinska', 'VA', 1),
(864, 53, 'Virovitičko-podravska', 'VP', 1),
(865, 53, 'Vukovarsko-srijemska', 'VS', 1),
(866, 53, 'Zadarska', 'ZA', 1),
(867, 53, 'Zagrebačka', 'ZG', 1),
(868, 54, 'Camaguey', 'CA', 1),
(869, 54, 'Ciego de Avila', 'CD', 1),
(870, 54, 'Cienfuegos', 'CI', 1),
(871, 54, 'Ciudad de La Habana', 'CH', 1),
(872, 54, 'Granma', 'GR', 1),
(873, 54, 'Guantanamo', 'GU', 1),
(874, 54, 'Holguin', 'HO', 1),
(875, 54, 'Isla de la Juventud', 'IJ', 1),
(876, 54, 'La Habana', 'LH', 1),
(877, 54, 'Las Tunas', 'LT', 1),
(878, 54, 'Matanzas', 'MA', 1),
(879, 54, 'Pinar del Rio', 'PR', 1),
(880, 54, 'Sancti Spiritus', 'SS', 1),
(881, 54, 'Santiago de Cuba', 'SC', 1),
(882, 54, 'Villa Clara', 'VC', 1),
(883, 55, 'Famagusta', 'F', 1),
(884, 55, 'Kyrenia', 'K', 1),
(885, 55, 'Larnaca', 'A', 1),
(886, 55, 'Limassol', 'I', 1),
(887, 55, 'Nicosia', 'N', 1),
(888, 55, 'Paphos', 'P', 1),
(889, 56, 'Ústecký', 'U', 1),
(890, 56, 'Jihočeský', 'C', 1),
(891, 56, 'Jihomoravský', 'B', 1),
(892, 56, 'Karlovarský', 'K', 1),
(893, 56, 'Královehradecký', 'H', 1),
(894, 56, 'Liberecký', 'L', 1),
(895, 56, 'Moravskoslezský', 'T', 1),
(896, 56, 'Olomoucký', 'M', 1),
(897, 56, 'Pardubický', 'E', 1),
(898, 56, 'Plzeňský', 'P', 1),
(899, 56, 'Praha', 'A', 1),
(900, 56, 'Středočeský', 'S', 1),
(901, 56, 'Vysočina', 'J', 1),
(902, 56, 'Zlínský', 'Z', 1),
(903, 57, 'Arhus', 'AR', 1),
(904, 57, 'Bornholm', 'BH', 1),
(905, 57, 'Copenhagen', 'CO', 1),
(906, 57, 'Faroe Islands', 'FO', 1),
(907, 57, 'Frederiksborg', 'FR', 1),
(908, 57, 'Fyn', 'FY', 1),
(909, 57, 'Kobenhavn', 'KO', 1),
(910, 57, 'Nordjylland', 'NO', 1),
(911, 57, 'Ribe', 'RI', 1),
(912, 57, 'Ringkobing', 'RK', 1),
(913, 57, 'Roskilde', 'RO', 1),
(914, 57, 'Sonderjylland', 'SO', 1),
(915, 57, 'Storstrom', 'ST', 1),
(916, 57, 'Vejle', 'VK', 1),
(917, 57, 'Vestj&aelig;lland', 'VJ', 1),
(918, 57, 'Viborg', 'VB', 1),
(919, 58, '\'Ali Sabih', 'S', 1),
(920, 58, 'Dikhil', 'K', 1),
(921, 58, 'Djibouti', 'J', 1),
(922, 58, 'Obock', 'O', 1),
(923, 58, 'Tadjoura', 'T', 1),
(924, 59, 'Saint Andrew Parish', 'AND', 1),
(925, 59, 'Saint David Parish', 'DAV', 1),
(926, 59, 'Saint George Parish', 'GEO', 1),
(927, 59, 'Saint John Parish', 'JOH', 1),
(928, 59, 'Saint Joseph Parish', 'JOS', 1),
(929, 59, 'Saint Luke Parish', 'LUK', 1),
(930, 59, 'Saint Mark Parish', 'MAR', 1),
(931, 59, 'Saint Patrick Parish', 'PAT', 1),
(932, 59, 'Saint Paul Parish', 'PAU', 1),
(933, 59, 'Saint Peter Parish', 'PET', 1),
(934, 60, 'Distrito Nacional', 'DN', 1),
(935, 60, 'Azua', 'AZ', 1),
(936, 60, 'Baoruco', 'BC', 1),
(937, 60, 'Barahona', 'BH', 1),
(938, 60, 'Dajabon', 'DJ', 1),
(939, 60, 'Duarte', 'DU', 1),
(940, 60, 'Elias Pina', 'EL', 1),
(941, 60, 'El Seybo', 'SY', 1),
(942, 60, 'Espaillat', 'ET', 1),
(943, 60, 'Hato Mayor', 'HM', 1),
(944, 60, 'Independencia', 'IN', 1),
(945, 60, 'La Altagracia', 'AL', 1),
(946, 60, 'La Romana', 'RO', 1),
(947, 60, 'La Vega', 'VE', 1),
(948, 60, 'Maria Trinidad Sanchez', 'MT', 1),
(949, 60, 'Monsenor Nouel', 'MN', 1),
(950, 60, 'Monte Cristi', 'MC', 1),
(951, 60, 'Monte Plata', 'MP', 1),
(952, 60, 'Pedernales', 'PD', 1),
(953, 60, 'Peravia (Bani)', 'PR', 1),
(954, 60, 'Puerto Plata', 'PP', 1),
(955, 60, 'Salcedo', 'SL', 1),
(956, 60, 'Samana', 'SM', 1),
(957, 60, 'Sanchez Ramirez', 'SH', 1),
(958, 60, 'San Cristobal', 'SC', 1),
(959, 60, 'San Jose de Ocoa', 'JO', 1),
(960, 60, 'San Juan', 'SJ', 1),
(961, 60, 'San Pedro de Macoris', 'PM', 1),
(962, 60, 'Santiago', 'SA', 1),
(963, 60, 'Santiago Rodriguez', 'ST', 1),
(964, 60, 'Santo Domingo', 'SD', 1),
(965, 60, 'Valverde', 'VA', 1),
(966, 61, 'Aileu', 'AL', 1),
(967, 61, 'Ainaro', 'AN', 1),
(968, 61, 'Baucau', 'BA', 1),
(969, 61, 'Bobonaro', 'BO', 1),
(970, 61, 'Cova Lima', 'CO', 1),
(971, 61, 'Dili', 'DI', 1),
(972, 61, 'Ermera', 'ER', 1),
(973, 61, 'Lautem', 'LA', 1),
(974, 61, 'Liquica', 'LI', 1),
(975, 61, 'Manatuto', 'MT', 1),
(976, 61, 'Manufahi', 'MF', 1),
(977, 61, 'Oecussi', 'OE', 1),
(978, 61, 'Viqueque', 'VI', 1),
(979, 62, 'Azuay', 'AZU', 1),
(980, 62, 'Bolivar', 'BOL', 1),
(981, 62, 'Ca&ntilde;ar', 'CAN', 1),
(982, 62, 'Carchi', 'CAR', 1),
(983, 62, 'Chimborazo', 'CHI', 1),
(984, 62, 'Cotopaxi', 'COT', 1),
(985, 62, 'El Oro', 'EOR', 1),
(986, 62, 'Esmeraldas', 'ESM', 1),
(987, 62, 'Gal&aacute;pagos', 'GPS', 1),
(988, 62, 'Guayas', 'GUA', 1),
(989, 62, 'Imbabura', 'IMB', 1),
(990, 62, 'Loja', 'LOJ', 1),
(991, 62, 'Los Rios', 'LRO', 1),
(992, 62, 'Manab&iacute;', 'MAN', 1),
(993, 62, 'Morona Santiago', 'MSA', 1),
(994, 62, 'Napo', 'NAP', 1),
(995, 62, 'Orellana', 'ORE', 1),
(996, 62, 'Pastaza', 'PAS', 1),
(997, 62, 'Pichincha', 'PIC', 1),
(998, 62, 'Sucumb&iacute;os', 'SUC', 1),
(999, 62, 'Tungurahua', 'TUN', 1),
(1000, 62, 'Zamora Chinchipe', 'ZCH', 1),
(1001, 63, 'Ad Daqahliyah', 'DHY', 1),
(1002, 63, 'Al Bahr al Ahmar', 'BAM', 1),
(1003, 63, 'Al Buhayrah', 'BHY', 1),
(1004, 63, 'Al Fayyum', 'FYM', 1),
(1005, 63, 'Al Gharbiyah', 'GBY', 1),
(1006, 63, 'Al Iskandariyah', 'IDR', 1),
(1007, 63, 'Al Isma\'iliyah', 'IML', 1),
(1008, 63, 'Al Jizah', 'JZH', 1),
(1009, 63, 'Al Minufiyah', 'MFY', 1),
(1010, 63, 'Al Minya', 'MNY', 1),
(1011, 63, 'Al Qahirah', 'QHR', 1),
(1012, 63, 'Al Qalyubiyah', 'QLY', 1),
(1013, 63, 'Al Wadi al Jadid', 'WJD', 1),
(1014, 63, 'Ash Sharqiyah', 'SHQ', 1),
(1015, 63, 'As Suways', 'SWY', 1),
(1016, 63, 'Aswan', 'ASW', 1),
(1017, 63, 'Asyut', 'ASY', 1),
(1018, 63, 'Bani Suwayf', 'BSW', 1),
(1019, 63, 'Bur Sa\'id', 'BSD', 1),
(1020, 63, 'Dumyat', 'DMY', 1),
(1021, 63, 'Janub Sina\'', 'JNS', 1),
(1022, 63, 'Kafr ash Shaykh', 'KSH', 1),
(1023, 63, 'Matruh', 'MAT', 1),
(1024, 63, 'Qina', 'QIN', 1),
(1025, 63, 'Shamal Sina\'', 'SHS', 1),
(1026, 63, 'Suhaj', 'SUH', 1),
(1027, 64, 'Ahuachapan', 'AH', 1),
(1028, 64, 'Cabanas', 'CA', 1),
(1029, 64, 'Chalatenango', 'CH', 1),
(1030, 64, 'Cuscatlan', 'CU', 1),
(1031, 64, 'La Libertad', 'LB', 1),
(1032, 64, 'La Paz', 'PZ', 1),
(1033, 64, 'La Union', 'UN', 1),
(1034, 64, 'Morazan', 'MO', 1),
(1035, 64, 'San Miguel', 'SM', 1),
(1036, 64, 'San Salvador', 'SS', 1),
(1037, 64, 'San Vicente', 'SV', 1),
(1038, 64, 'Santa Ana', 'SA', 1),
(1039, 64, 'Sonsonate', 'SO', 1),
(1040, 64, 'Usulutan', 'US', 1),
(1041, 65, 'Provincia Annobon', 'AN', 1),
(1042, 65, 'Provincia Bioko Norte', 'BN', 1),
(1043, 65, 'Provincia Bioko Sur', 'BS', 1),
(1044, 65, 'Provincia Centro Sur', 'CS', 1),
(1045, 65, 'Provincia Kie-Ntem', 'KN', 1),
(1046, 65, 'Provincia Litoral', 'LI', 1),
(1047, 65, 'Provincia Wele-Nzas', 'WN', 1),
(1048, 66, 'Central (Maekel)', 'MA', 1),
(1049, 66, 'Anseba (Keren)', 'KE', 1),
(1050, 66, 'Southern Red Sea (Debub-Keih-Bahri)', 'DK', 1),
(1051, 66, 'Northern Red Sea (Semien-Keih-Bahri)', 'SK', 1),
(1052, 66, 'Southern (Debub)', 'DE', 1),
(1053, 66, 'Gash-Barka (Barentu)', 'BR', 1),
(1054, 67, 'Harjumaa (Tallinn)', 'HA', 1),
(1055, 67, 'Hiiumaa (Kardla)', 'HI', 1),
(1056, 67, 'Ida-Virumaa (Johvi)', 'IV', 1),
(1057, 67, 'Jarvamaa (Paide)', 'JA', 1),
(1058, 67, 'Jogevamaa (Jogeva)', 'JO', 1),
(1059, 67, 'Laane-Virumaa (Rakvere)', 'LV', 1),
(1060, 67, 'Laanemaa (Haapsalu)', 'LA', 1),
(1061, 67, 'Parnumaa (Parnu)', 'PA', 1),
(1062, 67, 'Polvamaa (Polva)', 'PO', 1),
(1063, 67, 'Raplamaa (Rapla)', 'RA', 1),
(1064, 67, 'Saaremaa (Kuessaare)', 'SA', 1),
(1065, 67, 'Tartumaa (Tartu)', 'TA', 1),
(1066, 67, 'Valgamaa (Valga)', 'VA', 1),
(1067, 67, 'Viljandimaa (Viljandi)', 'VI', 1),
(1068, 67, 'Vorumaa (Voru)', 'VO', 1),
(1069, 68, 'Afar', 'AF', 1),
(1070, 68, 'Amhara', 'AH', 1),
(1071, 68, 'Benishangul-Gumaz', 'BG', 1),
(1072, 68, 'Gambela', 'GB', 1),
(1073, 68, 'Hariai', 'HR', 1),
(1074, 68, 'Oromia', 'OR', 1),
(1075, 68, 'Somali', 'SM', 1),
(1076, 68, 'Southern Nations - Nationalities and Peoples Region', 'SN', 1),
(1077, 68, 'Tigray', 'TG', 1),
(1078, 68, 'Addis Ababa', 'AA', 1),
(1079, 68, 'Dire Dawa', 'DD', 1),
(1080, 71, 'Central Division', 'C', 1),
(1081, 71, 'Northern Division', 'N', 1),
(1082, 71, 'Eastern Division', 'E', 1),
(1083, 71, 'Western Division', 'W', 1),
(1084, 71, 'Rotuma', 'R', 1),
(1085, 72, 'Ahvenanmaan lääni', 'AL', 1),
(1086, 72, 'Etelä-Suomen lääni', 'ES', 1),
(1087, 72, 'Itä-Suomen lääni', 'IS', 1),
(1088, 72, 'Länsi-Suomen lääni', 'LS', 1),
(1089, 72, 'Lapin lääni', 'LA', 1),
(1090, 72, 'Oulun lääni', 'OU', 1),
(1114, 74, 'Ain', '01', 1),
(1115, 74, 'Aisne', '02', 1),
(1116, 74, 'Allier', '03', 1),
(1117, 74, 'Alpes de Haute Provence', '04', 1),
(1118, 74, 'Hautes-Alpes', '05', 1),
(1119, 74, 'Alpes Maritimes', '06', 1),
(1120, 74, 'Ard&egrave;che', '07', 1),
(1121, 74, 'Ardennes', '08', 1),
(1122, 74, 'Ari&egrave;ge', '09', 1),
(1123, 74, 'Aube', '10', 1),
(1124, 74, 'Aude', '11', 1),
(1125, 74, 'Aveyron', '12', 1),
(1126, 74, 'Bouches du Rh&ocirc;ne', '13', 1),
(1127, 74, 'Calvados', '14', 1),
(1128, 74, 'Cantal', '15', 1),
(1129, 74, 'Charente', '16', 1),
(1130, 74, 'Charente Maritime', '17', 1),
(1131, 74, 'Cher', '18', 1),
(1132, 74, 'Corr&egrave;ze', '19', 1),
(1133, 74, 'Corse du Sud', '2A', 1),
(1134, 74, 'Haute Corse', '2B', 1),
(1135, 74, 'C&ocirc;te d&#039;or', '21', 1),
(1136, 74, 'C&ocirc;tes d&#039;Armor', '22', 1),
(1137, 74, 'Creuse', '23', 1),
(1138, 74, 'Dordogne', '24', 1),
(1139, 74, 'Doubs', '25', 1),
(1140, 74, 'Dr&ocirc;me', '26', 1),
(1141, 74, 'Eure', '27', 1),
(1142, 74, 'Eure et Loir', '28', 1),
(1143, 74, 'Finist&egrave;re', '29', 1),
(1144, 74, 'Gard', '30', 1),
(1145, 74, 'Haute Garonne', '31', 1),
(1146, 74, 'Gers', '32', 1),
(1147, 74, 'Gironde', '33', 1),
(1148, 74, 'H&eacute;rault', '34', 1),
(1149, 74, 'Ille et Vilaine', '35', 1),
(1150, 74, 'Indre', '36', 1),
(1151, 74, 'Indre et Loire', '37', 1),
(1152, 74, 'Is&eacute;re', '38', 1),
(1153, 74, 'Jura', '39', 1),
(1154, 74, 'Landes', '40', 1),
(1155, 74, 'Loir et Cher', '41', 1),
(1156, 74, 'Loire', '42', 1),
(1157, 74, 'Haute Loire', '43', 1),
(1158, 74, 'Loire Atlantique', '44', 1),
(1159, 74, 'Loiret', '45', 1),
(1160, 74, 'Lot', '46', 1),
(1161, 74, 'Lot et Garonne', '47', 1),
(1162, 74, 'Loz&egrave;re', '48', 1),
(1163, 74, 'Maine et Loire', '49', 1),
(1164, 74, 'Manche', '50', 1),
(1165, 74, 'Marne', '51', 1),
(1166, 74, 'Haute Marne', '52', 1),
(1167, 74, 'Mayenne', '53', 1),
(1168, 74, 'Meurthe et Moselle', '54', 1),
(1169, 74, 'Meuse', '55', 1),
(1170, 74, 'Morbihan', '56', 1),
(1171, 74, 'Moselle', '57', 1),
(1172, 74, 'Ni&egrave;vre', '58', 1),
(1173, 74, 'Nord', '59', 1),
(1174, 74, 'Oise', '60', 1),
(1175, 74, 'Orne', '61', 1),
(1176, 74, 'Pas de Calais', '62', 1),
(1177, 74, 'Puy de D&ocirc;me', '63', 1),
(1178, 74, 'Pyr&eacute;n&eacute;es Atlantiques', '64', 1),
(1179, 74, 'Hautes Pyr&eacute;n&eacute;es', '65', 1),
(1180, 74, 'Pyr&eacute;n&eacute;es Orientales', '66', 1),
(1181, 74, 'Bas Rhin', '67', 1),
(1182, 74, 'Haut Rhin', '68', 1),
(1183, 74, 'Rh&ocirc;ne', '69', 1),
(1184, 74, 'Haute Sa&ocirc;ne', '70', 1),
(1185, 74, 'Sa&ocirc;ne et Loire', '71', 1),
(1186, 74, 'Sarthe', '72', 1),
(1187, 74, 'Savoie', '73', 1),
(1188, 74, 'Haute Savoie', '74', 1),
(1189, 74, 'Paris', '75', 1),
(1190, 74, 'Seine Maritime', '76', 1),
(1191, 74, 'Seine et Marne', '77', 1),
(1192, 74, 'Yvelines', '78', 1),
(1193, 74, 'Deux S&egrave;vres', '79', 1),
(1194, 74, 'Somme', '80', 1),
(1195, 74, 'Tarn', '81', 1),
(1196, 74, 'Tarn et Garonne', '82', 1),
(1197, 74, 'Var', '83', 1),
(1198, 74, 'Vaucluse', '84', 1),
(1199, 74, 'Vend&eacute;e', '85', 1),
(1200, 74, 'Vienne', '86', 1),
(1201, 74, 'Haute Vienne', '87', 1),
(1202, 74, 'Vosges', '88', 1),
(1203, 74, 'Yonne', '89', 1),
(1204, 74, 'Territoire de Belfort', '90', 1),
(1205, 74, 'Essonne', '91', 1),
(1206, 74, 'Hauts de Seine', '92', 1),
(1207, 74, 'Seine St-Denis', '93', 1),
(1208, 74, 'Val de Marne', '94', 1),
(1209, 74, 'Val d\'Oise', '95', 1),
(1210, 76, 'Archipel des Marquises', 'M', 1),
(1211, 76, 'Archipel des Tuamotu', 'T', 1),
(1212, 76, 'Archipel des Tubuai', 'I', 1),
(1213, 76, 'Iles du Vent', 'V', 1),
(1214, 76, 'Iles Sous-le-Vent', 'S', 1),
(1215, 77, 'Iles Crozet', 'C', 1),
(1216, 77, 'Iles Kerguelen', 'K', 1),
(1217, 77, 'Ile Amsterdam', 'A', 1),
(1218, 77, 'Ile Saint-Paul', 'P', 1),
(1219, 77, 'Adelie Land', 'D', 1),
(1220, 78, 'Estuaire', 'ES', 1),
(1221, 78, 'Haut-Ogooue', 'HO', 1),
(1222, 78, 'Moyen-Ogooue', 'MO', 1),
(1223, 78, 'Ngounie', 'NG', 1),
(1224, 78, 'Nyanga', 'NY', 1),
(1225, 78, 'Ogooue-Ivindo', 'OI', 1),
(1226, 78, 'Ogooue-Lolo', 'OL', 1),
(1227, 78, 'Ogooue-Maritime', 'OM', 1),
(1228, 78, 'Woleu-Ntem', 'WN', 1),
(1229, 79, 'Banjul', 'BJ', 1),
(1230, 79, 'Basse', 'BS', 1),
(1231, 79, 'Brikama', 'BR', 1),
(1232, 79, 'Janjangbure', 'JA', 1),
(1233, 79, 'Kanifeng', 'KA', 1),
(1234, 79, 'Kerewan', 'KE', 1),
(1235, 79, 'Kuntaur', 'KU', 1),
(1236, 79, 'Mansakonko', 'MA', 1),
(1237, 79, 'Lower River', 'LR', 1),
(1238, 79, 'Central River', 'CR', 1),
(1239, 79, 'North Bank', 'NB', 1),
(1240, 79, 'Upper River', 'UR', 1),
(1241, 79, 'Western', 'WE', 1),
(1242, 80, 'Abkhazia', 'AB', 1),
(1243, 80, 'Ajaria', 'AJ', 1),
(1244, 80, 'Tbilisi', 'TB', 1),
(1245, 80, 'Guria', 'GU', 1),
(1246, 80, 'Imereti', 'IM', 1),
(1247, 80, 'Kakheti', 'KA', 1),
(1248, 80, 'Kvemo Kartli', 'KK', 1),
(1249, 80, 'Mtskheta-Mtianeti', 'MM', 1),
(1250, 80, 'Racha Lechkhumi and Kvemo Svanet', 'RL', 1),
(1251, 80, 'Samegrelo-Zemo Svaneti', 'SZ', 1),
(1252, 80, 'Samtskhe-Javakheti', 'SJ', 1),
(1253, 80, 'Shida Kartli', 'SK', 1),
(1254, 81, 'Baden-Württemberg', 'BAW', 1),
(1255, 81, 'Bayern', 'BAY', 1),
(1256, 81, 'Berlin', 'BER', 1),
(1257, 81, 'Brandenburg', 'BRG', 1),
(1258, 81, 'Bremen', 'BRE', 1),
(1259, 81, 'Hamburg', 'HAM', 1),
(1260, 81, 'Hessen', 'HES', 1),
(1261, 81, 'Mecklenburg-Vorpommern', 'MEC', 1),
(1262, 81, 'Niedersachsen', 'NDS', 1),
(1263, 81, 'Nordrhein-Westfalen', 'NRW', 1),
(1264, 81, 'Rheinland-Pfalz', 'RHE', 1),
(1265, 81, 'Saarland', 'SAR', 1),
(1266, 81, 'Sachsen', 'SAS', 1),
(1267, 81, 'Sachsen-Anhalt', 'SAC', 1),
(1268, 81, 'Schleswig-Holstein', 'SCN', 1),
(1269, 81, 'Thüringen', 'THE', 1),
(1270, 82, 'Ashanti Region', 'AS', 1),
(1271, 82, 'Brong-Ahafo Region', 'BA', 1),
(1272, 82, 'Central Region', 'CE', 1),
(1273, 82, 'Eastern Region', 'EA', 1),
(1274, 82, 'Greater Accra Region', 'GA', 1),
(1275, 82, 'Northern Region', 'NO', 1),
(1276, 82, 'Upper East Region', 'UE', 1),
(1277, 82, 'Upper West Region', 'UW', 1),
(1278, 82, 'Volta Region', 'VO', 1),
(1279, 82, 'Western Region', 'WE', 1),
(1280, 84, 'Attica', 'AT', 1),
(1281, 84, 'Central Greece', 'CN', 1),
(1282, 84, 'Central Macedonia', 'CM', 1),
(1283, 84, 'Crete', 'CR', 1),
(1284, 84, 'East Macedonia and Thrace', 'EM', 1),
(1285, 84, 'Epirus', 'EP', 1),
(1286, 84, 'Ionian Islands', 'II', 1),
(1287, 84, 'North Aegean', 'NA', 1),
(1288, 84, 'Peloponnesos', 'PP', 1),
(1289, 84, 'South Aegean', 'SA', 1),
(1290, 84, 'Thessaly', 'TH', 1),
(1291, 84, 'West Greece', 'WG', 1),
(1292, 84, 'West Macedonia', 'WM', 1),
(1293, 85, 'Avannaa', 'A', 1),
(1294, 85, 'Tunu', 'T', 1),
(1295, 85, 'Kitaa', 'K', 1),
(1296, 86, 'Saint Andrew', 'A', 1),
(1297, 86, 'Saint David', 'D', 1),
(1298, 86, 'Saint George', 'G', 1),
(1299, 86, 'Saint John', 'J', 1),
(1300, 86, 'Saint Mark', 'M', 1),
(1301, 86, 'Saint Patrick', 'P', 1),
(1302, 86, 'Carriacou', 'C', 1),
(1303, 86, 'Petit Martinique', 'Q', 1),
(1304, 89, 'Alta Verapaz', 'AV', 1),
(1305, 89, 'Baja Verapaz', 'BV', 1),
(1306, 89, 'Chimaltenango', 'CM', 1),
(1307, 89, 'Chiquimula', 'CQ', 1),
(1308, 89, 'El Peten', 'PE', 1),
(1309, 89, 'El Progreso', 'PR', 1),
(1310, 89, 'El Quiche', 'QC', 1),
(1311, 89, 'Escuintla', 'ES', 1),
(1312, 89, 'Guatemala', 'GU', 1),
(1313, 89, 'Huehuetenango', 'HU', 1),
(1314, 89, 'Izabal', 'IZ', 1),
(1315, 89, 'Jalapa', 'JA', 1),
(1316, 89, 'Jutiapa', 'JU', 1),
(1317, 89, 'Quetzaltenango', 'QZ', 1),
(1318, 89, 'Retalhuleu', 'RE', 1),
(1319, 89, 'Sacatepequez', 'ST', 1),
(1320, 89, 'San Marcos', 'SM', 1),
(1321, 89, 'Santa Rosa', 'SR', 1),
(1322, 89, 'Solola', 'SO', 1),
(1323, 89, 'Suchitepequez', 'SU', 1),
(1324, 89, 'Totonicapan', 'TO', 1),
(1325, 89, 'Zacapa', 'ZA', 1),
(1326, 90, 'Conakry', 'CNK', 1),
(1327, 90, 'Beyla', 'BYL', 1),
(1328, 90, 'Boffa', 'BFA', 1),
(1329, 90, 'Boke', 'BOK', 1),
(1330, 90, 'Coyah', 'COY', 1),
(1331, 90, 'Dabola', 'DBL', 1),
(1332, 90, 'Dalaba', 'DLB', 1),
(1333, 90, 'Dinguiraye', 'DGR', 1),
(1334, 90, 'Dubreka', 'DBR', 1),
(1335, 90, 'Faranah', 'FRN', 1),
(1336, 90, 'Forecariah', 'FRC', 1),
(1337, 90, 'Fria', 'FRI', 1),
(1338, 90, 'Gaoual', 'GAO', 1),
(1339, 90, 'Gueckedou', 'GCD', 1),
(1340, 90, 'Kankan', 'KNK', 1),
(1341, 90, 'Kerouane', 'KRN', 1),
(1342, 90, 'Kindia', 'KND', 1),
(1343, 90, 'Kissidougou', 'KSD', 1),
(1344, 90, 'Koubia', 'KBA', 1),
(1345, 90, 'Koundara', 'KDA', 1),
(1346, 90, 'Kouroussa', 'KRA', 1),
(1347, 90, 'Labe', 'LAB', 1),
(1348, 90, 'Lelouma', 'LLM', 1),
(1349, 90, 'Lola', 'LOL', 1),
(1350, 90, 'Macenta', 'MCT', 1),
(1351, 90, 'Mali', 'MAL', 1),
(1352, 90, 'Mamou', 'MAM', 1),
(1353, 90, 'Mandiana', 'MAN', 1),
(1354, 90, 'Nzerekore', 'NZR', 1),
(1355, 90, 'Pita', 'PIT', 1),
(1356, 90, 'Siguiri', 'SIG', 1),
(1357, 90, 'Telimele', 'TLM', 1),
(1358, 90, 'Tougue', 'TOG', 1),
(1359, 90, 'Yomou', 'YOM', 1),
(1360, 91, 'Bafata Region', 'BF', 1),
(1361, 91, 'Biombo Region', 'BB', 1),
(1362, 91, 'Bissau Region', 'BS', 1),
(1363, 91, 'Bolama Region', 'BL', 1),
(1364, 91, 'Cacheu Region', 'CA', 1),
(1365, 91, 'Gabu Region', 'GA', 1),
(1366, 91, 'Oio Region', 'OI', 1),
(1367, 91, 'Quinara Region', 'QU', 1),
(1368, 91, 'Tombali Region', 'TO', 1),
(1369, 92, 'Barima-Waini', 'BW', 1),
(1370, 92, 'Cuyuni-Mazaruni', 'CM', 1),
(1371, 92, 'Demerara-Mahaica', 'DM', 1),
(1372, 92, 'East Berbice-Corentyne', 'EC', 1),
(1373, 92, 'Essequibo Islands-West Demerara', 'EW', 1),
(1374, 92, 'Mahaica-Berbice', 'MB', 1),
(1375, 92, 'Pomeroon-Supenaam', 'PM', 1),
(1376, 92, 'Potaro-Siparuni', 'PI', 1),
(1377, 92, 'Upper Demerara-Berbice', 'UD', 1),
(1378, 92, 'Upper Takutu-Upper Essequibo', 'UT', 1),
(1379, 93, 'Artibonite', 'AR', 1),
(1380, 93, 'Centre', 'CE', 1),
(1381, 93, 'Grand\'Anse', 'GA', 1),
(1382, 93, 'Nord', 'ND', 1),
(1383, 93, 'Nord-Est', 'NE', 1),
(1384, 93, 'Nord-Ouest', 'NO', 1),
(1385, 93, 'Ouest', 'OU', 1),
(1386, 93, 'Sud', 'SD', 1),
(1387, 93, 'Sud-Est', 'SE', 1),
(1388, 94, 'Flat Island', 'F', 1),
(1389, 94, 'McDonald Island', 'M', 1),
(1390, 94, 'Shag Island', 'S', 1),
(1391, 94, 'Heard Island', 'H', 1),
(1392, 95, 'Atlantida', 'AT', 1),
(1393, 95, 'Choluteca', 'CH', 1),
(1394, 95, 'Colon', 'CL', 1),
(1395, 95, 'Comayagua', 'CM', 1),
(1396, 95, 'Copan', 'CP', 1),
(1397, 95, 'Cortes', 'CR', 1),
(1398, 95, 'El Paraiso', 'PA', 1),
(1399, 95, 'Francisco Morazan', 'FM', 1),
(1400, 95, 'Gracias a Dios', 'GD', 1),
(1401, 95, 'Intibuca', 'IN', 1),
(1402, 95, 'Islas de la Bahia (Bay Islands)', 'IB', 1),
(1403, 95, 'La Paz', 'PZ', 1),
(1404, 95, 'Lempira', 'LE', 1),
(1405, 95, 'Ocotepeque', 'OC', 1),
(1406, 95, 'Olancho', 'OL', 1),
(1407, 95, 'Santa Barbara', 'SB', 1),
(1408, 95, 'Valle', 'VA', 1),
(1409, 95, 'Yoro', 'YO', 1),
(1410, 96, 'Central and Western Hong Kong Island', 'HCW', 1),
(1411, 96, 'Eastern Hong Kong Island', 'HEA', 1),
(1412, 96, 'Southern Hong Kong Island', 'HSO', 1),
(1413, 96, 'Wan Chai Hong Kong Island', 'HWC', 1),
(1414, 96, 'Kowloon City Kowloon', 'KKC', 1),
(1415, 96, 'Kwun Tong Kowloon', 'KKT', 1),
(1416, 96, 'Sham Shui Po Kowloon', 'KSS', 1),
(1417, 96, 'Wong Tai Sin Kowloon', 'KWT', 1),
(1418, 96, 'Yau Tsim Mong Kowloon', 'KYT', 1),
(1419, 96, 'Islands New Territories', 'NIS', 1),
(1420, 96, 'Kwai Tsing New Territories', 'NKT', 1),
(1421, 96, 'North New Territories', 'NNO', 1),
(1422, 96, 'Sai Kung New Territories', 'NSK', 1),
(1423, 96, 'Sha Tin New Territories', 'NST', 1),
(1424, 96, 'Tai Po New Territories', 'NTP', 1),
(1425, 96, 'Tsuen Wan New Territories', 'NTW', 1),
(1426, 96, 'Tuen Mun New Territories', 'NTM', 1),
(1427, 96, 'Yuen Long New Territories', 'NYL', 1),
(1467, 98, 'Austurland', 'AL', 1),
(1468, 98, 'Hofuoborgarsvaeoi', 'HF', 1),
(1469, 98, 'Norourland eystra', 'NE', 1),
(1470, 98, 'Norourland vestra', 'NV', 1),
(1471, 98, 'Suourland', 'SL', 1),
(1472, 98, 'Suournes', 'SN', 1),
(1473, 98, 'Vestfiroir', 'VF', 1),
(1474, 98, 'Vesturland', 'VL', 1),
(1475, 99, 'Andaman and Nicobar Islands', 'AN', 1),
(1476, 99, 'Andhra Pradesh', 'AP', 1),
(1477, 99, 'Arunachal Pradesh', 'AR', 1),
(1478, 99, 'Assam', 'AS', 1),
(1479, 99, 'Bihar', 'BI', 1),
(1480, 99, 'Chandigarh', 'CH', 1),
(1481, 99, 'Dadra and Nagar Haveli', 'DA', 1),
(1482, 99, 'Daman and Diu', 'DM', 1),
(1483, 99, 'Delhi', 'DE', 1),
(1484, 99, 'Goa', 'GO', 1),
(1485, 99, 'Gujarat', 'GU', 1),
(1486, 99, 'Haryana', 'HA', 1),
(1487, 99, 'Himachal Pradesh', 'HP', 1),
(1488, 99, 'Jammu and Kashmir', 'JA', 1),
(1489, 99, 'Karnataka', 'KA', 1),
(1490, 99, 'Kerala', 'KE', 1),
(1491, 99, 'Lakshadweep Islands', 'LI', 1),
(1492, 99, 'Madhya Pradesh', 'MP', 1),
(1493, 99, 'Maharashtra', 'MA', 1),
(1494, 99, 'Manipur', 'MN', 1),
(1495, 99, 'Meghalaya', 'ME', 1),
(1496, 99, 'Mizoram', 'MI', 1),
(1497, 99, 'Nagaland', 'NA', 1),
(1498, 99, 'Orissa', 'OR', 1),
(1499, 99, 'Puducherry', 'PO', 1),
(1500, 99, 'Punjab', 'PU', 1),
(1501, 99, 'Rajasthan', 'RA', 1),
(1502, 99, 'Sikkim', 'SI', 1),
(1503, 99, 'Tamil Nadu', 'TN', 1),
(1504, 99, 'Tripura', 'TR', 1),
(1505, 99, 'Uttar Pradesh', 'UP', 1),
(1506, 99, 'West Bengal', 'WB', 1),
(1507, 100, 'Aceh', 'AC', 1),
(1508, 100, 'Bali', 'BA', 1),
(1509, 100, 'Banten', 'BT', 1),
(1510, 100, 'Bengkulu', 'BE', 1),
(1511, 100, 'Kalimantan Utara', 'BD', 1),
(1512, 100, 'Gorontalo', 'GO', 1),
(1513, 100, 'Jakarta', 'JK', 1),
(1514, 100, 'Jambi', 'JA', 1),
(1515, 100, 'Jawa Barat', 'JB', 1),
(1516, 100, 'Jawa Tengah', 'JT', 1),
(1517, 100, 'Jawa Timur', 'JI', 1),
(1518, 100, 'Kalimantan Barat', 'KB', 1),
(1519, 100, 'Kalimantan Selatan', 'KS', 1),
(1520, 100, 'Kalimantan Tengah', 'KT', 1),
(1521, 100, 'Kalimantan Timur', 'KI', 1),
(1522, 100, 'Kepulauan Bangka Belitung', 'BB', 1),
(1523, 100, 'Lampung', 'LA', 1),
(1524, 100, 'Maluku', 'MA', 1),
(1525, 100, 'Maluku Utara', 'MU', 1),
(1526, 100, 'Nusa Tenggara Barat', 'NB', 1),
(1527, 100, 'Nusa Tenggara Timur', 'NT', 1),
(1528, 100, 'Papua', 'PA', 1),
(1529, 100, 'Riau', 'RI', 1),
(1530, 100, 'Sulawesi Selatan', 'SN', 1),
(1531, 100, 'Sulawesi Tengah', 'ST', 1),
(1532, 100, 'Sulawesi Tenggara', 'SG', 1),
(1533, 100, 'Sulawesi Utara', 'SA', 1),
(1534, 100, 'Sumatera Barat', 'SB', 1),
(1535, 100, 'Sumatera Selatan', 'SS', 1),
(1536, 100, 'Sumatera Utara', 'SU', 1),
(1537, 100, 'Yogyakarta', 'YO', 1),
(1538, 101, 'Tehran', 'TEH', 1),
(1539, 101, 'Qom', 'QOM', 1),
(1540, 101, 'Markazi', 'MKZ', 1),
(1541, 101, 'Qazvin', 'QAZ', 1),
(1542, 101, 'Gilan', 'GIL', 1),
(1543, 101, 'Ardabil', 'ARD', 1),
(1544, 101, 'Zanjan', 'ZAN', 1),
(1545, 101, 'East Azarbaijan', 'EAZ', 1),
(1546, 101, 'West Azarbaijan', 'WEZ', 1),
(1547, 101, 'Kurdistan', 'KRD', 1),
(1548, 101, 'Hamadan', 'HMD', 1),
(1549, 101, 'Kermanshah', 'KRM', 1),
(1550, 101, 'Ilam', 'ILM', 1),
(1551, 101, 'Lorestan', 'LRS', 1),
(1552, 101, 'Khuzestan', 'KZT', 1),
(1553, 101, 'Chahar Mahaal and Bakhtiari', 'CMB', 1),
(1554, 101, 'Kohkiluyeh and Buyer Ahmad', 'KBA', 1),
(1555, 101, 'Bushehr', 'BSH', 1),
(1556, 101, 'Fars', 'FAR', 1),
(1557, 101, 'Hormozgan', 'HRM', 1),
(1558, 101, 'Sistan and Baluchistan', 'SBL', 1),
(1559, 101, 'Kerman', 'KRB', 1),
(1560, 101, 'Yazd', 'YZD', 1),
(1561, 101, 'Esfahan', 'EFH', 1),
(1562, 101, 'Semnan', 'SMN', 1),
(1563, 101, 'Mazandaran', 'MZD', 1),
(1564, 101, 'Golestan', 'GLS', 1),
(1565, 101, 'North Khorasan', 'NKH', 1),
(1566, 101, 'Razavi Khorasan', 'RKH', 1),
(1567, 101, 'South Khorasan', 'SKH', 1),
(1568, 102, 'Baghdad', 'BD', 1),
(1569, 102, 'Salah ad Din', 'SD', 1),
(1570, 102, 'Diyala', 'DY', 1),
(1571, 102, 'Wasit', 'WS', 1),
(1572, 102, 'Maysan', 'MY', 1),
(1573, 102, 'Al Basrah', 'BA', 1),
(1574, 102, 'Dhi Qar', 'DQ', 1),
(1575, 102, 'Al Muthanna', 'MU', 1),
(1576, 102, 'Al Qadisyah', 'QA', 1),
(1577, 102, 'Babil', 'BB', 1),
(1578, 102, 'Al Karbala', 'KB', 1),
(1579, 102, 'An Najaf', 'NJ', 1),
(1580, 102, 'Al Anbar', 'AB', 1),
(1581, 102, 'Ninawa', 'NN', 1),
(1582, 102, 'Dahuk', 'DH', 1),
(1583, 102, 'Arbil', 'AL', 1),
(1584, 102, 'At Ta\'mim', 'TM', 1),
(1585, 102, 'As Sulaymaniyah', 'SL', 1),
(1586, 103, 'Carlow', 'CA', 1),
(1587, 103, 'Cavan', 'CV', 1),
(1588, 103, 'Clare', 'CL', 1),
(1589, 103, 'Cork', 'CO', 1),
(1590, 103, 'Donegal', 'DO', 1),
(1591, 103, 'Dublin', 'DU', 1),
(1592, 103, 'Galway', 'GA', 1),
(1593, 103, 'Kerry', 'KE', 1),
(1594, 103, 'Kildare', 'KI', 1),
(1595, 103, 'Kilkenny', 'KL', 1),
(1596, 103, 'Laois', 'LA', 1),
(1597, 103, 'Leitrim', 'LE', 1);
INSERT INTO `oc_zone` (`zone_id`, `country_id`, `name`, `code`, `status`) VALUES
(1598, 103, 'Limerick', 'LI', 1),
(1599, 103, 'Longford', 'LO', 1),
(1600, 103, 'Louth', 'LU', 1),
(1601, 103, 'Mayo', 'MA', 1),
(1602, 103, 'Meath', 'ME', 1),
(1603, 103, 'Monaghan', 'MO', 1),
(1604, 103, 'Offaly', 'OF', 1),
(1605, 103, 'Roscommon', 'RO', 1),
(1606, 103, 'Sligo', 'SL', 1),
(1607, 103, 'Tipperary', 'TI', 1),
(1608, 103, 'Waterford', 'WA', 1),
(1609, 103, 'Westmeath', 'WE', 1),
(1610, 103, 'Wexford', 'WX', 1),
(1611, 103, 'Wicklow', 'WI', 1),
(1612, 104, 'Be\'er Sheva', 'BS', 1),
(1613, 104, 'Bika\'at Hayarden', 'BH', 1),
(1614, 104, 'Eilat and Arava', 'EA', 1),
(1615, 104, 'Galil', 'GA', 1),
(1616, 104, 'Haifa', 'HA', 1),
(1617, 104, 'Jehuda Mountains', 'JM', 1),
(1618, 104, 'Jerusalem', 'JE', 1),
(1619, 104, 'Negev', 'NE', 1),
(1620, 104, 'Semaria', 'SE', 1),
(1621, 104, 'Sharon', 'SH', 1),
(1622, 104, 'Tel Aviv (Gosh Dan)', 'TA', 1),
(3860, 105, 'Caltanissetta', 'CL', 1),
(3842, 105, 'Agrigento', 'AG', 1),
(3843, 105, 'Alessandria', 'AL', 1),
(3844, 105, 'Ancona', 'AN', 1),
(3845, 105, 'Aosta', 'AO', 1),
(3846, 105, 'Arezzo', 'AR', 1),
(3847, 105, 'Ascoli Piceno', 'AP', 1),
(3848, 105, 'Asti', 'AT', 1),
(3849, 105, 'Avellino', 'AV', 1),
(3850, 105, 'Bari', 'BA', 1),
(3851, 105, 'Belluno', 'BL', 1),
(3852, 105, 'Benevento', 'BN', 1),
(3853, 105, 'Bergamo', 'BG', 1),
(3854, 105, 'Biella', 'BI', 1),
(3855, 105, 'Bologna', 'BO', 1),
(3856, 105, 'Bolzano', 'BZ', 1),
(3857, 105, 'Brescia', 'BS', 1),
(3858, 105, 'Brindisi', 'BR', 1),
(3859, 105, 'Cagliari', 'CA', 1),
(1643, 106, 'Clarendon Parish', 'CLA', 1),
(1644, 106, 'Hanover Parish', 'HAN', 1),
(1645, 106, 'Kingston Parish', 'KIN', 1),
(1646, 106, 'Manchester Parish', 'MAN', 1),
(1647, 106, 'Portland Parish', 'POR', 1),
(1648, 106, 'Saint Andrew Parish', 'AND', 1),
(1649, 106, 'Saint Ann Parish', 'ANN', 1),
(1650, 106, 'Saint Catherine Parish', 'CAT', 1),
(1651, 106, 'Saint Elizabeth Parish', 'ELI', 1),
(1652, 106, 'Saint James Parish', 'JAM', 1),
(1653, 106, 'Saint Mary Parish', 'MAR', 1),
(1654, 106, 'Saint Thomas Parish', 'THO', 1),
(1655, 106, 'Trelawny Parish', 'TRL', 1),
(1656, 106, 'Westmoreland Parish', 'WML', 1),
(1657, 107, 'Aichi', 'AI', 1),
(1658, 107, 'Akita', 'AK', 1),
(1659, 107, 'Aomori', 'AO', 1),
(1660, 107, 'Chiba', 'CH', 1),
(1661, 107, 'Ehime', 'EH', 1),
(1662, 107, 'Fukui', 'FK', 1),
(1663, 107, 'Fukuoka', 'FU', 1),
(1664, 107, 'Fukushima', 'FS', 1),
(1665, 107, 'Gifu', 'GI', 1),
(1666, 107, 'Gumma', 'GU', 1),
(1667, 107, 'Hiroshima', 'HI', 1),
(1668, 107, 'Hokkaido', 'HO', 1),
(1669, 107, 'Hyogo', 'HY', 1),
(1670, 107, 'Ibaraki', 'IB', 1),
(1671, 107, 'Ishikawa', 'IS', 1),
(1672, 107, 'Iwate', 'IW', 1),
(1673, 107, 'Kagawa', 'KA', 1),
(1674, 107, 'Kagoshima', 'KG', 1),
(1675, 107, 'Kanagawa', 'KN', 1),
(1676, 107, 'Kochi', 'KO', 1),
(1677, 107, 'Kumamoto', 'KU', 1),
(1678, 107, 'Kyoto', 'KY', 1),
(1679, 107, 'Mie', 'MI', 1),
(1680, 107, 'Miyagi', 'MY', 1),
(1681, 107, 'Miyazaki', 'MZ', 1),
(1682, 107, 'Nagano', 'NA', 1),
(1683, 107, 'Nagasaki', 'NG', 1),
(1684, 107, 'Nara', 'NR', 1),
(1685, 107, 'Niigata', 'NI', 1),
(1686, 107, 'Oita', 'OI', 1),
(1687, 107, 'Okayama', 'OK', 1),
(1688, 107, 'Okinawa', 'ON', 1),
(1689, 107, 'Osaka', 'OS', 1),
(1690, 107, 'Saga', 'SA', 1),
(1691, 107, 'Saitama', 'SI', 1),
(1692, 107, 'Shiga', 'SH', 1),
(1693, 107, 'Shimane', 'SM', 1),
(1694, 107, 'Shizuoka', 'SZ', 1),
(1695, 107, 'Tochigi', 'TO', 1),
(1696, 107, 'Tokushima', 'TS', 1),
(1697, 107, 'Tokyo', 'TK', 1),
(1698, 107, 'Tottori', 'TT', 1),
(1699, 107, 'Toyama', 'TY', 1),
(1700, 107, 'Wakayama', 'WA', 1),
(1701, 107, 'Yamagata', 'YA', 1),
(1702, 107, 'Yamaguchi', 'YM', 1),
(1703, 107, 'Yamanashi', 'YN', 1),
(1704, 108, '\'Amman', 'AM', 1),
(1705, 108, 'Ajlun', 'AJ', 1),
(1706, 108, 'Al \'Aqabah', 'AA', 1),
(1707, 108, 'Al Balqa\'', 'AB', 1),
(1708, 108, 'Al Karak', 'AK', 1),
(1709, 108, 'Al Mafraq', 'AL', 1),
(1710, 108, 'At Tafilah', 'AT', 1),
(1711, 108, 'Az Zarqa\'', 'AZ', 1),
(1712, 108, 'Irbid', 'IR', 1),
(1713, 108, 'Jarash', 'JA', 1),
(1714, 108, 'Ma\'an', 'MA', 1),
(1715, 108, 'Madaba', 'MD', 1),
(1716, 109, 'Almaty', 'AL', 1),
(1717, 109, 'Almaty City', 'AC', 1),
(1718, 109, 'Aqmola', 'AM', 1),
(1719, 109, 'Aqtobe', 'AQ', 1),
(1720, 109, 'Astana City', 'AS', 1),
(1721, 109, 'Atyrau', 'AT', 1),
(1722, 109, 'Batys Qazaqstan', 'BA', 1),
(1723, 109, 'Bayqongyr City', 'BY', 1),
(1724, 109, 'Mangghystau', 'MA', 1),
(1725, 109, 'Ongtustik Qazaqstan', 'ON', 1),
(1726, 109, 'Pavlodar', 'PA', 1),
(1727, 109, 'Qaraghandy', 'QA', 1),
(1728, 109, 'Qostanay', 'QO', 1),
(1729, 109, 'Qyzylorda', 'QY', 1),
(1730, 109, 'Shyghys Qazaqstan', 'SH', 1),
(1731, 109, 'Soltustik Qazaqstan', 'SO', 1),
(1732, 109, 'Zhambyl', 'ZH', 1),
(1733, 110, 'Central', 'CE', 1),
(1734, 110, 'Coast', 'CO', 1),
(1735, 110, 'Eastern', 'EA', 1),
(1736, 110, 'Nairobi Area', 'NA', 1),
(1737, 110, 'North Eastern', 'NE', 1),
(1738, 110, 'Nyanza', 'NY', 1),
(1739, 110, 'Rift Valley', 'RV', 1),
(1740, 110, 'Western', 'WE', 1),
(1741, 111, 'Abaiang', 'AG', 1),
(1742, 111, 'Abemama', 'AM', 1),
(1743, 111, 'Aranuka', 'AK', 1),
(1744, 111, 'Arorae', 'AO', 1),
(1745, 111, 'Banaba', 'BA', 1),
(1746, 111, 'Beru', 'BE', 1),
(1747, 111, 'Butaritari', 'bT', 1),
(1748, 111, 'Kanton', 'KA', 1),
(1749, 111, 'Kiritimati', 'KR', 1),
(1750, 111, 'Kuria', 'KU', 1),
(1751, 111, 'Maiana', 'MI', 1),
(1752, 111, 'Makin', 'MN', 1),
(1753, 111, 'Marakei', 'ME', 1),
(1754, 111, 'Nikunau', 'NI', 1),
(1755, 111, 'Nonouti', 'NO', 1),
(1756, 111, 'Onotoa', 'ON', 1),
(1757, 111, 'Tabiteuea', 'TT', 1),
(1758, 111, 'Tabuaeran', 'TR', 1),
(1759, 111, 'Tamana', 'TM', 1),
(1760, 111, 'Tarawa', 'TW', 1),
(1761, 111, 'Teraina', 'TE', 1),
(1762, 112, 'Chagang-do', 'CHA', 1),
(1763, 112, 'Hamgyong-bukto', 'HAB', 1),
(1764, 112, 'Hamgyong-namdo', 'HAN', 1),
(1765, 112, 'Hwanghae-bukto', 'HWB', 1),
(1766, 112, 'Hwanghae-namdo', 'HWN', 1),
(1767, 112, 'Kangwon-do', 'KAN', 1),
(1768, 112, 'P\'yongan-bukto', 'PYB', 1),
(1769, 112, 'P\'yongan-namdo', 'PYN', 1),
(1770, 112, 'Ryanggang-do (Yanggang-do)', 'YAN', 1),
(1771, 112, 'Rason Directly Governed City', 'NAJ', 1),
(1772, 112, 'P\'yongyang Special City', 'PYO', 1),
(1773, 113, 'Ch\'ungch\'ong-bukto', 'CO', 1),
(1774, 113, 'Ch\'ungch\'ong-namdo', 'CH', 1),
(1775, 113, 'Cheju-do', 'CD', 1),
(1776, 113, 'Cholla-bukto', 'CB', 1),
(1777, 113, 'Cholla-namdo', 'CN', 1),
(1778, 113, 'Inch\'on-gwangyoksi', 'IG', 1),
(1779, 113, 'Kangwon-do', 'KA', 1),
(1780, 113, 'Kwangju-gwangyoksi', 'KG', 1),
(1781, 113, 'Kyonggi-do', 'KD', 1),
(1782, 113, 'Kyongsang-bukto', 'KB', 1),
(1783, 113, 'Kyongsang-namdo', 'KN', 1),
(1784, 113, 'Pusan-gwangyoksi', 'PG', 1),
(1785, 113, 'Soul-t\'ukpyolsi', 'SO', 1),
(1786, 113, 'Taegu-gwangyoksi', 'TA', 1),
(1787, 113, 'Taejon-gwangyoksi', 'TG', 1),
(1788, 114, 'Al \'Asimah', 'AL', 1),
(1789, 114, 'Al Ahmadi', 'AA', 1),
(1790, 114, 'Al Farwaniyah', 'AF', 1),
(1791, 114, 'Al Jahra\'', 'AJ', 1),
(1792, 114, 'Hawalli', 'HA', 1),
(1793, 115, 'Bishkek', 'GB', 1),
(1794, 115, 'Batken', 'B', 1),
(1795, 115, 'Chu', 'C', 1),
(1796, 115, 'Jalal-Abad', 'J', 1),
(1797, 115, 'Naryn', 'N', 1),
(1798, 115, 'Osh', 'O', 1),
(1799, 115, 'Talas', 'T', 1),
(1800, 115, 'Ysyk-Kol', 'Y', 1),
(1801, 116, 'Vientiane', 'VT', 1),
(1802, 116, 'Attapu', 'AT', 1),
(1803, 116, 'Bokeo', 'BK', 1),
(1804, 116, 'Bolikhamxai', 'BL', 1),
(1805, 116, 'Champasak', 'CH', 1),
(1806, 116, 'Houaphan', 'HO', 1),
(1807, 116, 'Khammouan', 'KH', 1),
(1808, 116, 'Louang Namtha', 'LM', 1),
(1809, 116, 'Louangphabang', 'LP', 1),
(1810, 116, 'Oudomxai', 'OU', 1),
(1811, 116, 'Phongsali', 'PH', 1),
(1812, 116, 'Salavan', 'SL', 1),
(1813, 116, 'Savannakhet', 'SV', 1),
(1814, 116, 'Vientiane', 'VI', 1),
(1815, 116, 'Xaignabouli', 'XA', 1),
(1816, 116, 'Xekong', 'XE', 1),
(1817, 116, 'Xiangkhoang', 'XI', 1),
(1818, 116, 'Xaisomboun', 'XN', 1),
(1852, 119, 'Berea', 'BE', 1),
(1853, 119, 'Butha-Buthe', 'BB', 1),
(1854, 119, 'Leribe', 'LE', 1),
(1855, 119, 'Mafeteng', 'MF', 1),
(1856, 119, 'Maseru', 'MS', 1),
(1857, 119, 'Mohale\'s Hoek', 'MH', 1),
(1858, 119, 'Mokhotlong', 'MK', 1),
(1859, 119, 'Qacha\'s Nek', 'QN', 1),
(1860, 119, 'Quthing', 'QT', 1),
(1861, 119, 'Thaba-Tseka', 'TT', 1),
(1862, 120, 'Bomi', 'BI', 1),
(1863, 120, 'Bong', 'BG', 1),
(1864, 120, 'Grand Bassa', 'GB', 1),
(1865, 120, 'Grand Cape Mount', 'CM', 1),
(1866, 120, 'Grand Gedeh', 'GG', 1),
(1867, 120, 'Grand Kru', 'GK', 1),
(1868, 120, 'Lofa', 'LO', 1),
(1869, 120, 'Margibi', 'MG', 1),
(1870, 120, 'Maryland', 'ML', 1),
(1871, 120, 'Montserrado', 'MS', 1),
(1872, 120, 'Nimba', 'NB', 1),
(1873, 120, 'River Cess', 'RC', 1),
(1874, 120, 'Sinoe', 'SN', 1),
(1875, 121, 'Ajdabiya', 'AJ', 1),
(1876, 121, 'Al \'Aziziyah', 'AZ', 1),
(1877, 121, 'Al Fatih', 'FA', 1),
(1878, 121, 'Al Jabal al Akhdar', 'JA', 1),
(1879, 121, 'Al Jufrah', 'JU', 1),
(1880, 121, 'Al Khums', 'KH', 1),
(1881, 121, 'Al Kufrah', 'KU', 1),
(1882, 121, 'An Nuqat al Khams', 'NK', 1),
(1883, 121, 'Ash Shati\'', 'AS', 1),
(1884, 121, 'Awbari', 'AW', 1),
(1885, 121, 'Az Zawiyah', 'ZA', 1),
(1886, 121, 'Banghazi', 'BA', 1),
(1887, 121, 'Darnah', 'DA', 1),
(1888, 121, 'Ghadamis', 'GD', 1),
(1889, 121, 'Gharyan', 'GY', 1),
(1890, 121, 'Misratah', 'MI', 1),
(1891, 121, 'Murzuq', 'MZ', 1),
(1892, 121, 'Sabha', 'SB', 1),
(1893, 121, 'Sawfajjin', 'SW', 1),
(1894, 121, 'Surt', 'SU', 1),
(1895, 121, 'Tarabulus (Tripoli)', 'TL', 1),
(1896, 121, 'Tarhunah', 'TH', 1),
(1897, 121, 'Tubruq', 'TU', 1),
(1898, 121, 'Yafran', 'YA', 1),
(1899, 121, 'Zlitan', 'ZL', 1),
(1900, 122, 'Vaduz', 'V', 1),
(1901, 122, 'Schaan', 'A', 1),
(1902, 122, 'Balzers', 'B', 1),
(1903, 122, 'Triesen', 'N', 1),
(1904, 122, 'Eschen', 'E', 1),
(1905, 122, 'Mauren', 'M', 1),
(1906, 122, 'Triesenberg', 'T', 1),
(1907, 122, 'Ruggell', 'R', 1),
(1908, 122, 'Gamprin', 'G', 1),
(1909, 122, 'Schellenberg', 'L', 1),
(1910, 122, 'Planken', 'P', 1),
(1911, 123, 'Alytus', 'AL', 1),
(1912, 123, 'Kaunas', 'KA', 1),
(1913, 123, 'Klaipeda', 'KL', 1),
(1914, 123, 'Marijampole', 'MA', 1),
(1915, 123, 'Panevezys', 'PA', 1),
(1916, 123, 'Siauliai', 'SI', 1),
(1917, 123, 'Taurage', 'TA', 1),
(1918, 123, 'Telsiai', 'TE', 1),
(1919, 123, 'Utena', 'UT', 1),
(1920, 123, 'Vilnius', 'VI', 1),
(1921, 124, 'Diekirch', 'DD', 1),
(1922, 124, 'Clervaux', 'DC', 1),
(1923, 124, 'Redange', 'DR', 1),
(1924, 124, 'Vianden', 'DV', 1),
(1925, 124, 'Wiltz', 'DW', 1),
(1926, 124, 'Grevenmacher', 'GG', 1),
(1927, 124, 'Echternach', 'GE', 1),
(1928, 124, 'Remich', 'GR', 1),
(1929, 124, 'Luxembourg', 'LL', 1),
(1930, 124, 'Capellen', 'LC', 1),
(1931, 124, 'Esch-sur-Alzette', 'LE', 1),
(1932, 124, 'Mersch', 'LM', 1),
(1933, 125, 'Our Lady Fatima Parish', 'OLF', 1),
(1934, 125, 'St. Anthony Parish', 'ANT', 1),
(1935, 125, 'St. Lazarus Parish', 'LAZ', 1),
(1936, 125, 'Cathedral Parish', 'CAT', 1),
(1937, 125, 'St. Lawrence Parish', 'LAW', 1),
(1938, 127, 'Antananarivo', 'AN', 1),
(1939, 127, 'Antsiranana', 'AS', 1),
(1940, 127, 'Fianarantsoa', 'FN', 1),
(1941, 127, 'Mahajanga', 'MJ', 1),
(1942, 127, 'Toamasina', 'TM', 1),
(1943, 127, 'Toliara', 'TL', 1),
(1944, 128, 'Balaka', 'BLK', 1),
(1945, 128, 'Blantyre', 'BLT', 1),
(1946, 128, 'Chikwawa', 'CKW', 1),
(1947, 128, 'Chiradzulu', 'CRD', 1),
(1948, 128, 'Chitipa', 'CTP', 1),
(1949, 128, 'Dedza', 'DDZ', 1),
(1950, 128, 'Dowa', 'DWA', 1),
(1951, 128, 'Karonga', 'KRG', 1),
(1952, 128, 'Kasungu', 'KSG', 1),
(1953, 128, 'Likoma', 'LKM', 1),
(1954, 128, 'Lilongwe', 'LLG', 1),
(1955, 128, 'Machinga', 'MCG', 1),
(1956, 128, 'Mangochi', 'MGC', 1),
(1957, 128, 'Mchinji', 'MCH', 1),
(1958, 128, 'Mulanje', 'MLJ', 1),
(1959, 128, 'Mwanza', 'MWZ', 1),
(1960, 128, 'Mzimba', 'MZM', 1),
(1961, 128, 'Ntcheu', 'NTU', 1),
(1962, 128, 'Nkhata Bay', 'NKB', 1),
(1963, 128, 'Nkhotakota', 'NKH', 1),
(1964, 128, 'Nsanje', 'NSJ', 1),
(1965, 128, 'Ntchisi', 'NTI', 1),
(1966, 128, 'Phalombe', 'PHL', 1),
(1967, 128, 'Rumphi', 'RMP', 1),
(1968, 128, 'Salima', 'SLM', 1),
(1969, 128, 'Thyolo', 'THY', 1),
(1970, 128, 'Zomba', 'ZBA', 1),
(1971, 129, 'Johor', 'MY-01', 1),
(1972, 129, 'Kedah', 'MY-02', 1),
(1973, 129, 'Kelantan', 'MY-03', 1),
(1974, 129, 'Labuan', 'MY-15', 1),
(1975, 129, 'Melaka', 'MY-04', 1),
(1976, 129, 'Negeri Sembilan', 'MY-05', 1),
(1977, 129, 'Pahang', 'MY-06', 1),
(1978, 129, 'Perak', 'MY-08', 1),
(1979, 129, 'Perlis', 'MY-09', 1),
(1980, 129, 'Pulau Pinang', 'MY-07', 1),
(1981, 129, 'Sabah', 'MY-12', 1),
(1982, 129, 'Sarawak', 'MY-13', 1),
(1983, 129, 'Selangor', 'MY-10', 1),
(1984, 129, 'Terengganu', 'MY-11', 1),
(1985, 129, 'Kuala Lumpur', 'MY-14', 1),
(4035, 129, 'Putrajaya', 'MY-16', 1),
(1986, 130, 'Thiladhunmathi Uthuru', 'THU', 1),
(1987, 130, 'Thiladhunmathi Dhekunu', 'THD', 1),
(1988, 130, 'Miladhunmadulu Uthuru', 'MLU', 1),
(1989, 130, 'Miladhunmadulu Dhekunu', 'MLD', 1),
(1990, 130, 'Maalhosmadulu Uthuru', 'MAU', 1),
(1991, 130, 'Maalhosmadulu Dhekunu', 'MAD', 1),
(1992, 130, 'Faadhippolhu', 'FAA', 1),
(1993, 130, 'Male Atoll', 'MAA', 1),
(1994, 130, 'Ari Atoll Uthuru', 'AAU', 1),
(1995, 130, 'Ari Atoll Dheknu', 'AAD', 1),
(1996, 130, 'Felidhe Atoll', 'FEA', 1),
(1997, 130, 'Mulaku Atoll', 'MUA', 1),
(1998, 130, 'Nilandhe Atoll Uthuru', 'NAU', 1),
(1999, 130, 'Nilandhe Atoll Dhekunu', 'NAD', 1),
(2000, 130, 'Kolhumadulu', 'KLH', 1),
(2001, 130, 'Hadhdhunmathi', 'HDH', 1),
(2002, 130, 'Huvadhu Atoll Uthuru', 'HAU', 1),
(2003, 130, 'Huvadhu Atoll Dhekunu', 'HAD', 1),
(2004, 130, 'Fua Mulaku', 'FMU', 1),
(2005, 130, 'Addu', 'ADD', 1),
(2006, 131, 'Gao', 'GA', 1),
(2007, 131, 'Kayes', 'KY', 1),
(2008, 131, 'Kidal', 'KD', 1),
(2009, 131, 'Koulikoro', 'KL', 1),
(2010, 131, 'Mopti', 'MP', 1),
(2011, 131, 'Segou', 'SG', 1),
(2012, 131, 'Sikasso', 'SK', 1),
(2013, 131, 'Tombouctou', 'TB', 1),
(2014, 131, 'Bamako Capital District', 'CD', 1),
(2015, 132, 'Attard', 'ATT', 1),
(2016, 132, 'Balzan', 'BAL', 1),
(2017, 132, 'Birgu', 'BGU', 1),
(2018, 132, 'Birkirkara', 'BKK', 1),
(2019, 132, 'Birzebbuga', 'BRZ', 1),
(2020, 132, 'Bormla', 'BOR', 1),
(2021, 132, 'Dingli', 'DIN', 1),
(2022, 132, 'Fgura', 'FGU', 1),
(2023, 132, 'Floriana', 'FLO', 1),
(2024, 132, 'Gudja', 'GDJ', 1),
(2025, 132, 'Gzira', 'GZR', 1),
(2026, 132, 'Gargur', 'GRG', 1),
(2027, 132, 'Gaxaq', 'GXQ', 1),
(2028, 132, 'Hamrun', 'HMR', 1),
(2029, 132, 'Iklin', 'IKL', 1),
(2030, 132, 'Isla', 'ISL', 1),
(2031, 132, 'Kalkara', 'KLK', 1),
(2032, 132, 'Kirkop', 'KRK', 1),
(2033, 132, 'Lija', 'LIJ', 1),
(2034, 132, 'Luqa', 'LUQ', 1),
(2035, 132, 'Marsa', 'MRS', 1),
(2036, 132, 'Marsaskala', 'MKL', 1),
(2037, 132, 'Marsaxlokk', 'MXL', 1),
(2038, 132, 'Mdina', 'MDN', 1),
(2039, 132, 'Melliea', 'MEL', 1),
(2040, 132, 'Mgarr', 'MGR', 1),
(2041, 132, 'Mosta', 'MST', 1),
(2042, 132, 'Mqabba', 'MQA', 1),
(2043, 132, 'Msida', 'MSI', 1),
(2044, 132, 'Mtarfa', 'MTF', 1),
(2045, 132, 'Naxxar', 'NAX', 1),
(2046, 132, 'Paola', 'PAO', 1),
(2047, 132, 'Pembroke', 'PEM', 1),
(2048, 132, 'Pieta', 'PIE', 1),
(2049, 132, 'Qormi', 'QOR', 1),
(2050, 132, 'Qrendi', 'QRE', 1),
(2051, 132, 'Rabat', 'RAB', 1),
(2052, 132, 'Safi', 'SAF', 1),
(2053, 132, 'San Giljan', 'SGI', 1),
(2054, 132, 'Santa Lucija', 'SLU', 1),
(2055, 132, 'San Pawl il-Bahar', 'SPB', 1),
(2056, 132, 'San Gwann', 'SGW', 1),
(2057, 132, 'Santa Venera', 'SVE', 1),
(2058, 132, 'Siggiewi', 'SIG', 1),
(2059, 132, 'Sliema', 'SLM', 1),
(2060, 132, 'Swieqi', 'SWQ', 1),
(2061, 132, 'Ta Xbiex', 'TXB', 1),
(2062, 132, 'Tarxien', 'TRX', 1),
(2063, 132, 'Valletta', 'VLT', 1),
(2064, 132, 'Xgajra', 'XGJ', 1),
(2065, 132, 'Zabbar', 'ZBR', 1),
(2066, 132, 'Zebbug', 'ZBG', 1),
(2067, 132, 'Zejtun', 'ZJT', 1),
(2068, 132, 'Zurrieq', 'ZRQ', 1),
(2069, 132, 'Fontana', 'FNT', 1),
(2070, 132, 'Ghajnsielem', 'GHJ', 1),
(2071, 132, 'Gharb', 'GHR', 1),
(2072, 132, 'Ghasri', 'GHS', 1),
(2073, 132, 'Kercem', 'KRC', 1),
(2074, 132, 'Munxar', 'MUN', 1),
(2075, 132, 'Nadur', 'NAD', 1),
(2076, 132, 'Qala', 'QAL', 1),
(2077, 132, 'Victoria', 'VIC', 1),
(2078, 132, 'San Lawrenz', 'SLA', 1),
(2079, 132, 'Sannat', 'SNT', 1),
(2080, 132, 'Xagra', 'ZAG', 1),
(2081, 132, 'Xewkija', 'XEW', 1),
(2082, 132, 'Zebbug', 'ZEB', 1),
(2083, 133, 'Ailinginae', 'ALG', 1),
(2084, 133, 'Ailinglaplap', 'ALL', 1),
(2085, 133, 'Ailuk', 'ALK', 1),
(2086, 133, 'Arno', 'ARN', 1),
(2087, 133, 'Aur', 'AUR', 1),
(2088, 133, 'Bikar', 'BKR', 1),
(2089, 133, 'Bikini', 'BKN', 1),
(2090, 133, 'Bokak', 'BKK', 1),
(2091, 133, 'Ebon', 'EBN', 1),
(2092, 133, 'Enewetak', 'ENT', 1),
(2093, 133, 'Erikub', 'EKB', 1),
(2094, 133, 'Jabat', 'JBT', 1),
(2095, 133, 'Jaluit', 'JLT', 1),
(2096, 133, 'Jemo', 'JEM', 1),
(2097, 133, 'Kili', 'KIL', 1),
(2098, 133, 'Kwajalein', 'KWJ', 1),
(2099, 133, 'Lae', 'LAE', 1),
(2100, 133, 'Lib', 'LIB', 1),
(2101, 133, 'Likiep', 'LKP', 1),
(2102, 133, 'Majuro', 'MJR', 1),
(2103, 133, 'Maloelap', 'MLP', 1),
(2104, 133, 'Mejit', 'MJT', 1),
(2105, 133, 'Mili', 'MIL', 1),
(2106, 133, 'Namorik', 'NMK', 1),
(2107, 133, 'Namu', 'NAM', 1),
(2108, 133, 'Rongelap', 'RGL', 1),
(2109, 133, 'Rongrik', 'RGK', 1),
(2110, 133, 'Toke', 'TOK', 1),
(2111, 133, 'Ujae', 'UJA', 1),
(2112, 133, 'Ujelang', 'UJL', 1),
(2113, 133, 'Utirik', 'UTK', 1),
(2114, 133, 'Wotho', 'WTH', 1),
(2115, 133, 'Wotje', 'WTJ', 1),
(2116, 135, 'Adrar', 'AD', 1),
(2117, 135, 'Assaba', 'AS', 1),
(2118, 135, 'Brakna', 'BR', 1),
(2119, 135, 'Dakhlet Nouadhibou', 'DN', 1),
(2120, 135, 'Gorgol', 'GO', 1),
(2121, 135, 'Guidimaka', 'GM', 1),
(2122, 135, 'Hodh Ech Chargui', 'HC', 1),
(2123, 135, 'Hodh El Gharbi', 'HG', 1),
(2124, 135, 'Inchiri', 'IN', 1),
(2125, 135, 'Tagant', 'TA', 1),
(2126, 135, 'Tiris Zemmour', 'TZ', 1),
(2127, 135, 'Trarza', 'TR', 1),
(2128, 135, 'Nouakchott', 'NO', 1),
(2129, 136, 'Beau Bassin-Rose Hill', 'BR', 1),
(2130, 136, 'Curepipe', 'CU', 1),
(2131, 136, 'Port Louis', 'PU', 1),
(2132, 136, 'Quatre Bornes', 'QB', 1),
(2133, 136, 'Vacoas-Phoenix', 'VP', 1),
(2134, 136, 'Agalega Islands', 'AG', 1),
(2135, 136, 'Cargados Carajos Shoals (Saint Brandon Islands)', 'CC', 1),
(2136, 136, 'Rodrigues', 'RO', 1),
(2137, 136, 'Black River', 'BL', 1),
(2138, 136, 'Flacq', 'FL', 1),
(2139, 136, 'Grand Port', 'GP', 1),
(2140, 136, 'Moka', 'MO', 1),
(2141, 136, 'Pamplemousses', 'PA', 1),
(2142, 136, 'Plaines Wilhems', 'PW', 1),
(2143, 136, 'Port Louis', 'PL', 1),
(2144, 136, 'Riviere du Rempart', 'RR', 1),
(2145, 136, 'Savanne', 'SA', 1),
(2146, 138, 'Baja California Norte', 'BN', 1),
(2147, 138, 'Baja California Sur', 'BS', 1),
(2148, 138, 'Campeche', 'CA', 1),
(2149, 138, 'Chiapas', 'CI', 1),
(2150, 138, 'Chihuahua', 'CH', 1),
(2151, 138, 'Coahuila de Zaragoza', 'CZ', 1),
(2152, 138, 'Colima', 'CL', 1),
(2153, 138, 'Distrito Federal', 'DF', 1),
(2154, 138, 'Durango', 'DU', 1),
(2155, 138, 'Guanajuato', 'GA', 1),
(2156, 138, 'Guerrero', 'GE', 1),
(2157, 138, 'Hidalgo', 'HI', 1),
(2158, 138, 'Jalisco', 'JA', 1),
(2159, 138, 'Mexico', 'ME', 1),
(2160, 138, 'Michoacan de Ocampo', 'MI', 1),
(2161, 138, 'Morelos', 'MO', 1),
(2162, 138, 'Nayarit', 'NA', 1),
(2163, 138, 'Nuevo Leon', 'NL', 1),
(2164, 138, 'Oaxaca', 'OA', 1),
(2165, 138, 'Puebla', 'PU', 1),
(2166, 138, 'Queretaro de Arteaga', 'QA', 1),
(2167, 138, 'Quintana Roo', 'QR', 1),
(2168, 138, 'San Luis Potosi', 'SA', 1),
(2169, 138, 'Sinaloa', 'SI', 1),
(2170, 138, 'Sonora', 'SO', 1),
(2171, 138, 'Tabasco', 'TB', 1),
(2172, 138, 'Tamaulipas', 'TM', 1),
(2173, 138, 'Tlaxcala', 'TL', 1),
(2174, 138, 'Veracruz-Llave', 'VE', 1),
(2175, 138, 'Yucatan', 'YU', 1),
(2176, 138, 'Zacatecas', 'ZA', 1),
(2177, 139, 'Chuuk', 'C', 1),
(2178, 139, 'Kosrae', 'K', 1),
(2179, 139, 'Pohnpei', 'P', 1),
(2180, 139, 'Yap', 'Y', 1),
(2181, 140, 'Gagauzia', 'GA', 1),
(2182, 140, 'Chisinau', 'CU', 1),
(2183, 140, 'Balti', 'BA', 1),
(2184, 140, 'Cahul', 'CA', 1),
(2185, 140, 'Edinet', 'ED', 1),
(2186, 140, 'Lapusna', 'LA', 1),
(2187, 140, 'Orhei', 'OR', 1),
(2188, 140, 'Soroca', 'SO', 1),
(2189, 140, 'Tighina', 'TI', 1),
(2190, 140, 'Ungheni', 'UN', 1),
(2191, 140, 'St‚nga Nistrului', 'SN', 1),
(2192, 141, 'Fontvieille', 'FV', 1),
(2193, 141, 'La Condamine', 'LC', 1),
(2194, 141, 'Monaco-Ville', 'MV', 1),
(2195, 141, 'Monte-Carlo', 'MC', 1),
(2196, 142, 'Ulanbaatar', '1', 1),
(2197, 142, 'Orhon', '035', 1),
(2198, 142, 'Darhan uul', '037', 1),
(2199, 142, 'Hentiy', '039', 1),
(2200, 142, 'Hovsgol', '041', 1),
(2201, 142, 'Hovd', '043', 1),
(2202, 142, 'Uvs', '046', 1),
(2203, 142, 'Tov', '047', 1),
(2204, 142, 'Selenge', '049', 1),
(2205, 142, 'Suhbaatar', '051', 1),
(2206, 142, 'Omnogovi', '053', 1),
(2207, 142, 'Ovorhangay', '055', 1),
(2208, 142, 'Dzavhan', '057', 1),
(2209, 142, 'DundgovL', '059', 1),
(2210, 142, 'Dornod', '061', 1),
(2211, 142, 'Dornogov', '063', 1),
(2212, 142, 'Govi-Sumber', '064', 1),
(2213, 142, 'Govi-Altay', '065', 1),
(2214, 142, 'Bulgan', '067', 1),
(2215, 142, 'Bayanhongor', '069', 1),
(2216, 142, 'Bayan-Olgiy', '071', 1),
(2217, 142, 'Arhangay', '073', 1),
(2218, 143, 'Saint Anthony', 'A', 1),
(2219, 143, 'Saint Georges', 'G', 1),
(2220, 143, 'Saint Peter', 'P', 1),
(2221, 144, 'Agadir', 'AGD', 1),
(2222, 144, 'Al Hoceima', 'HOC', 1),
(2223, 144, 'Azilal', 'AZI', 1),
(2224, 144, 'Beni Mellal', 'BME', 1),
(2225, 144, 'Ben Slimane', 'BSL', 1),
(2226, 144, 'Boulemane', 'BLM', 1),
(2227, 144, 'Casablanca', 'CBL', 1),
(2228, 144, 'Chaouen', 'CHA', 1),
(2229, 144, 'El Jadida', 'EJA', 1),
(2230, 144, 'El Kelaa des Sraghna', 'EKS', 1),
(2231, 144, 'Er Rachidia', 'ERA', 1),
(2232, 144, 'Essaouira', 'ESS', 1),
(2233, 144, 'Fes', 'FES', 1),
(2234, 144, 'Figuig', 'FIG', 1),
(2235, 144, 'Guelmim', 'GLM', 1),
(2236, 144, 'Ifrane', 'IFR', 1),
(2237, 144, 'Kenitra', 'KEN', 1),
(2238, 144, 'Khemisset', 'KHM', 1),
(2239, 144, 'Khenifra', 'KHN', 1),
(2240, 144, 'Khouribga', 'KHO', 1),
(2241, 144, 'Laayoune', 'LYN', 1),
(2242, 144, 'Larache', 'LAR', 1),
(2243, 144, 'Marrakech', 'MRK', 1),
(2244, 144, 'Meknes', 'MKN', 1),
(2245, 144, 'Nador', 'NAD', 1),
(2246, 144, 'Ouarzazate', 'ORZ', 1),
(2247, 144, 'Oujda', 'OUJ', 1),
(2248, 144, 'Rabat-Sale', 'RSA', 1),
(2249, 144, 'Safi', 'SAF', 1),
(2250, 144, 'Settat', 'SET', 1),
(2251, 144, 'Sidi Kacem', 'SKA', 1),
(2252, 144, 'Tangier', 'TGR', 1),
(2253, 144, 'Tan-Tan', 'TAN', 1),
(2254, 144, 'Taounate', 'TAO', 1),
(2255, 144, 'Taroudannt', 'TRD', 1),
(2256, 144, 'Tata', 'TAT', 1),
(2257, 144, 'Taza', 'TAZ', 1),
(2258, 144, 'Tetouan', 'TET', 1),
(2259, 144, 'Tiznit', 'TIZ', 1),
(2260, 144, 'Ad Dakhla', 'ADK', 1),
(2261, 144, 'Boujdour', 'BJD', 1),
(2262, 144, 'Es Smara', 'ESM', 1),
(2263, 145, 'Cabo Delgado', 'CD', 1),
(2264, 145, 'Gaza', 'GZ', 1),
(2265, 145, 'Inhambane', 'IN', 1),
(2266, 145, 'Manica', 'MN', 1),
(2267, 145, 'Maputo (city)', 'MC', 1),
(2268, 145, 'Maputo', 'MP', 1),
(2269, 145, 'Nampula', 'NA', 1),
(2270, 145, 'Niassa', 'NI', 1),
(2271, 145, 'Sofala', 'SO', 1),
(2272, 145, 'Tete', 'TE', 1),
(2273, 145, 'Zambezia', 'ZA', 1),
(2274, 146, 'Ayeyarwady', 'AY', 1),
(2275, 146, 'Bago', 'BG', 1),
(2276, 146, 'Magway', 'MG', 1),
(2277, 146, 'Mandalay', 'MD', 1),
(2278, 146, 'Sagaing', 'SG', 1),
(2279, 146, 'Tanintharyi', 'TN', 1),
(2280, 146, 'Yangon', 'YG', 1),
(2281, 146, 'Chin State', 'CH', 1),
(2282, 146, 'Kachin State', 'KC', 1),
(2283, 146, 'Kayah State', 'KH', 1),
(2284, 146, 'Kayin State', 'KN', 1),
(2285, 146, 'Mon State', 'MN', 1),
(2286, 146, 'Rakhine State', 'RK', 1),
(2287, 146, 'Shan State', 'SH', 1),
(2288, 147, 'Caprivi', 'CA', 1),
(2289, 147, 'Erongo', 'ER', 1),
(2290, 147, 'Hardap', 'HA', 1),
(2291, 147, 'Karas', 'KR', 1),
(2292, 147, 'Kavango', 'KV', 1),
(2293, 147, 'Khomas', 'KH', 1),
(2294, 147, 'Kunene', 'KU', 1),
(2295, 147, 'Ohangwena', 'OW', 1),
(2296, 147, 'Omaheke', 'OK', 1),
(2297, 147, 'Omusati', 'OT', 1),
(2298, 147, 'Oshana', 'ON', 1),
(2299, 147, 'Oshikoto', 'OO', 1),
(2300, 147, 'Otjozondjupa', 'OJ', 1),
(2301, 148, 'Aiwo', 'AO', 1),
(2302, 148, 'Anabar', 'AA', 1),
(2303, 148, 'Anetan', 'AT', 1),
(2304, 148, 'Anibare', 'AI', 1),
(2305, 148, 'Baiti', 'BA', 1),
(2306, 148, 'Boe', 'BO', 1),
(2307, 148, 'Buada', 'BU', 1),
(2308, 148, 'Denigomodu', 'DE', 1),
(2309, 148, 'Ewa', 'EW', 1),
(2310, 148, 'Ijuw', 'IJ', 1),
(2311, 148, 'Meneng', 'ME', 1),
(2312, 148, 'Nibok', 'NI', 1),
(2313, 148, 'Uaboe', 'UA', 1),
(2314, 148, 'Yaren', 'YA', 1),
(2315, 149, 'Bagmati', 'BA', 1),
(2316, 149, 'Bheri', 'BH', 1),
(2317, 149, 'Dhawalagiri', 'DH', 1),
(2318, 149, 'Gandaki', 'GA', 1),
(2319, 149, 'Janakpur', 'JA', 1),
(2320, 149, 'Karnali', 'KA', 1),
(2321, 149, 'Kosi', 'KO', 1),
(2322, 149, 'Lumbini', 'LU', 1),
(2323, 149, 'Mahakali', 'MA', 1),
(2324, 149, 'Mechi', 'ME', 1),
(2325, 149, 'Narayani', 'NA', 1),
(2326, 149, 'Rapti', 'RA', 1),
(2327, 149, 'Sagarmatha', 'SA', 1),
(2328, 149, 'Seti', 'SE', 1),
(2329, 150, 'Drenthe', 'DR', 1),
(2330, 150, 'Flevoland', 'FL', 1),
(2331, 150, 'Friesland', 'FR', 1),
(2332, 150, 'Gelderland', 'GE', 1),
(2333, 150, 'Groningen', 'GR', 1),
(2334, 150, 'Limburg', 'LI', 1),
(2335, 150, 'Noord-Brabant', 'NB', 1),
(2336, 150, 'Noord-Holland', 'NH', 1),
(2337, 150, 'Overijssel', 'OV', 1),
(2338, 150, 'Utrecht', 'UT', 1),
(2339, 150, 'Zeeland', 'ZE', 1),
(2340, 150, 'Zuid-Holland', 'ZH', 1),
(2341, 152, 'Iles Loyaute', 'L', 1),
(2342, 152, 'Nord', 'N', 1),
(2343, 152, 'Sud', 'S', 1),
(2344, 153, 'Auckland', 'AUK', 1),
(2345, 153, 'Bay of Plenty', 'BOP', 1),
(2346, 153, 'Canterbury', 'CAN', 1),
(2347, 153, 'Coromandel', 'COR', 1),
(2348, 153, 'Gisborne', 'GIS', 1),
(2349, 153, 'Fiordland', 'FIO', 1),
(2350, 153, 'Hawke\'s Bay', 'HKB', 1),
(2351, 153, 'Marlborough', 'MBH', 1),
(2352, 153, 'Manawatu-Wanganui', 'MWT', 1),
(2353, 153, 'Mt Cook-Mackenzie', 'MCM', 1),
(2354, 153, 'Nelson', 'NSN', 1),
(2355, 153, 'Northland', 'NTL', 1),
(2356, 153, 'Otago', 'OTA', 1),
(2357, 153, 'Southland', 'STL', 1),
(2358, 153, 'Taranaki', 'TKI', 1),
(2359, 153, 'Wellington', 'WGN', 1),
(2360, 153, 'Waikato', 'WKO', 1),
(2361, 153, 'Wairarapa', 'WAI', 1),
(2362, 153, 'West Coast', 'WTC', 1),
(2363, 154, 'Atlantico Norte', 'AN', 1),
(2364, 154, 'Atlantico Sur', 'AS', 1),
(2365, 154, 'Boaco', 'BO', 1),
(2366, 154, 'Carazo', 'CA', 1),
(2367, 154, 'Chinandega', 'CI', 1),
(2368, 154, 'Chontales', 'CO', 1),
(2369, 154, 'Esteli', 'ES', 1),
(2370, 154, 'Granada', 'GR', 1),
(2371, 154, 'Jinotega', 'JI', 1),
(2372, 154, 'Leon', 'LE', 1),
(2373, 154, 'Madriz', 'MD', 1),
(2374, 154, 'Managua', 'MN', 1),
(2375, 154, 'Masaya', 'MS', 1),
(2376, 154, 'Matagalpa', 'MT', 1),
(2377, 154, 'Nuevo Segovia', 'NS', 1),
(2378, 154, 'Rio San Juan', 'RS', 1),
(2379, 154, 'Rivas', 'RI', 1),
(2380, 155, 'Agadez', 'AG', 1),
(2381, 155, 'Diffa', 'DF', 1),
(2382, 155, 'Dosso', 'DS', 1),
(2383, 155, 'Maradi', 'MA', 1),
(2384, 155, 'Niamey', 'NM', 1),
(2385, 155, 'Tahoua', 'TH', 1),
(2386, 155, 'Tillaberi', 'TL', 1),
(2387, 155, 'Zinder', 'ZD', 1),
(2388, 156, 'Abia', 'AB', 1),
(2389, 156, 'Abuja Federal Capital Territory', 'CT', 1),
(2390, 156, 'Adamawa', 'AD', 1),
(2391, 156, 'Akwa Ibom', 'AK', 1),
(2392, 156, 'Anambra', 'AN', 1),
(2393, 156, 'Bauchi', 'BC', 1),
(2394, 156, 'Bayelsa', 'BY', 1),
(2395, 156, 'Benue', 'BN', 1),
(2396, 156, 'Borno', 'BO', 1),
(2397, 156, 'Cross River', 'CR', 1),
(2398, 156, 'Delta', 'DE', 1),
(2399, 156, 'Ebonyi', 'EB', 1),
(2400, 156, 'Edo', 'ED', 1),
(2401, 156, 'Ekiti', 'EK', 1),
(2402, 156, 'Enugu', 'EN', 1),
(2403, 156, 'Gombe', 'GO', 1),
(2404, 156, 'Imo', 'IM', 1),
(2405, 156, 'Jigawa', 'JI', 1),
(2406, 156, 'Kaduna', 'KD', 1),
(2407, 156, 'Kano', 'KN', 1),
(2408, 156, 'Katsina', 'KT', 1),
(2409, 156, 'Kebbi', 'KE', 1),
(2410, 156, 'Kogi', 'KO', 1),
(2411, 156, 'Kwara', 'KW', 1),
(2412, 156, 'Lagos', 'LA', 1),
(2413, 156, 'Nassarawa', 'NA', 1),
(2414, 156, 'Niger', 'NI', 1),
(2415, 156, 'Ogun', 'OG', 1),
(2416, 156, 'Ondo', 'ONG', 1),
(2417, 156, 'Osun', 'OS', 1),
(2418, 156, 'Oyo', 'OY', 1),
(2419, 156, 'Plateau', 'PL', 1),
(2420, 156, 'Rivers', 'RI', 1),
(2421, 156, 'Sokoto', 'SO', 1),
(2422, 156, 'Taraba', 'TA', 1),
(2423, 156, 'Yobe', 'YO', 1),
(2424, 156, 'Zamfara', 'ZA', 1),
(2425, 159, 'Northern Islands', 'N', 1),
(2426, 159, 'Rota', 'R', 1),
(2427, 159, 'Saipan', 'S', 1),
(2428, 159, 'Tinian', 'T', 1),
(2429, 160, 'Akershus', 'AK', 1),
(2430, 160, 'Aust-Agder', 'AA', 1),
(2431, 160, 'Buskerud', 'BU', 1),
(2432, 160, 'Finnmark', 'FM', 1),
(2433, 160, 'Hedmark', 'HM', 1),
(2434, 160, 'Hordaland', 'HL', 1),
(2435, 160, 'More og Romdal', 'MR', 1),
(2436, 160, 'Nord-Trondelag', 'NT', 1),
(2437, 160, 'Nordland', 'NL', 1),
(2438, 160, 'Ostfold', 'OF', 1),
(2439, 160, 'Oppland', 'OP', 1),
(2440, 160, 'Oslo', 'OL', 1),
(2441, 160, 'Rogaland', 'RL', 1),
(2442, 160, 'Sor-Trondelag', 'ST', 1),
(2443, 160, 'Sogn og Fjordane', 'SJ', 1),
(2444, 160, 'Svalbard', 'SV', 1),
(2445, 160, 'Telemark', 'TM', 1),
(2446, 160, 'Troms', 'TR', 1),
(2447, 160, 'Vest-Agder', 'VA', 1),
(2448, 160, 'Vestfold', 'VF', 1),
(2449, 161, 'Ad Dakhiliyah', 'DA', 1),
(2450, 161, 'Al Batinah', 'BA', 1),
(2451, 161, 'Al Wusta', 'WU', 1),
(2452, 161, 'Ash Sharqiyah', 'SH', 1),
(2453, 161, 'Az Zahirah', 'ZA', 1),
(2454, 161, 'Masqat', 'MA', 1),
(2455, 161, 'Musandam', 'MU', 1),
(2456, 161, 'Zufar', 'ZU', 1),
(2457, 162, 'Balochistan', 'B', 1),
(2458, 162, 'Federally Administered Tribal Areas', 'T', 1),
(2459, 162, 'Islamabad Capital Territory', 'I', 1),
(2460, 162, 'North-West Frontier', 'N', 1),
(2461, 162, 'Punjab', 'P', 1),
(2462, 162, 'Sindh', 'S', 1),
(2463, 163, 'Aimeliik', 'AM', 1),
(2464, 163, 'Airai', 'AR', 1),
(2465, 163, 'Angaur', 'AN', 1),
(2466, 163, 'Hatohobei', 'HA', 1),
(2467, 163, 'Kayangel', 'KA', 1),
(2468, 163, 'Koror', 'KO', 1),
(2469, 163, 'Melekeok', 'ME', 1),
(2470, 163, 'Ngaraard', 'NA', 1),
(2471, 163, 'Ngarchelong', 'NG', 1),
(2472, 163, 'Ngardmau', 'ND', 1),
(2473, 163, 'Ngatpang', 'NT', 1),
(2474, 163, 'Ngchesar', 'NC', 1),
(2475, 163, 'Ngeremlengui', 'NR', 1),
(2476, 163, 'Ngiwal', 'NW', 1),
(2477, 163, 'Peleliu', 'PE', 1),
(2478, 163, 'Sonsorol', 'SO', 1),
(2479, 164, 'Bocas del Toro', 'BT', 1),
(2480, 164, 'Chiriqui', 'CH', 1),
(2481, 164, 'Cocle', 'CC', 1),
(2482, 164, 'Colon', 'CL', 1),
(2483, 164, 'Darien', 'DA', 1),
(2484, 164, 'Herrera', 'HE', 1),
(2485, 164, 'Los Santos', 'LS', 1),
(2486, 164, 'Panama', 'PA', 1),
(2487, 164, 'San Blas', 'SB', 1),
(2488, 164, 'Veraguas', 'VG', 1),
(2489, 165, 'Bougainville', 'BV', 1),
(2490, 165, 'Central', 'CE', 1),
(2491, 165, 'Chimbu', 'CH', 1),
(2492, 165, 'Eastern Highlands', 'EH', 1),
(2493, 165, 'East New Britain', 'EB', 1),
(2494, 165, 'East Sepik', 'ES', 1),
(2495, 165, 'Enga', 'EN', 1),
(2496, 165, 'Gulf', 'GU', 1),
(2497, 165, 'Madang', 'MD', 1),
(2498, 165, 'Manus', 'MN', 1),
(2499, 165, 'Milne Bay', 'MB', 1),
(2500, 165, 'Morobe', 'MR', 1),
(2501, 165, 'National Capital', 'NC', 1),
(2502, 165, 'New Ireland', 'NI', 1),
(2503, 165, 'Northern', 'NO', 1),
(2504, 165, 'Sandaun', 'SA', 1),
(2505, 165, 'Southern Highlands', 'SH', 1),
(2506, 165, 'Western', 'WE', 1),
(2507, 165, 'Western Highlands', 'WH', 1),
(2508, 165, 'West New Britain', 'WB', 1),
(2509, 166, 'Alto Paraguay', 'AG', 1),
(2510, 166, 'Alto Parana', 'AN', 1),
(2511, 166, 'Amambay', 'AM', 1),
(2512, 166, 'Asuncion', 'AS', 1),
(2513, 166, 'Boqueron', 'BO', 1),
(2514, 166, 'Caaguazu', 'CG', 1),
(2515, 166, 'Caazapa', 'CZ', 1),
(2516, 166, 'Canindeyu', 'CN', 1),
(2517, 166, 'Central', 'CE', 1),
(2518, 166, 'Concepcion', 'CC', 1),
(2519, 166, 'Cordillera', 'CD', 1),
(2520, 166, 'Guaira', 'GU', 1),
(2521, 166, 'Itapua', 'IT', 1),
(2522, 166, 'Misiones', 'MI', 1),
(2523, 166, 'Neembucu', 'NE', 1),
(2524, 166, 'Paraguari', 'PA', 1),
(2525, 166, 'Presidente Hayes', 'PH', 1),
(2526, 166, 'San Pedro', 'SP', 1),
(2527, 167, 'Amazonas', 'AM', 1),
(2528, 167, 'Ancash', 'AN', 1),
(2529, 167, 'Apurimac', 'AP', 1),
(2530, 167, 'Arequipa', 'AR', 1),
(2531, 167, 'Ayacucho', 'AY', 1),
(2532, 167, 'Cajamarca', 'CJ', 1),
(2533, 167, 'Callao', 'CL', 1),
(2534, 167, 'Cusco', 'CU', 1),
(2535, 167, 'Huancavelica', 'HV', 1),
(2536, 167, 'Huanuco', 'HO', 1),
(2537, 167, 'Ica', 'IC', 1),
(2538, 167, 'Junin', 'JU', 1),
(2539, 167, 'La Libertad', 'LD', 1),
(2540, 167, 'Lambayeque', 'LY', 1),
(2541, 167, 'Lima', 'LI', 1),
(2542, 167, 'Loreto', 'LO', 1),
(2543, 167, 'Madre de Dios', 'MD', 1),
(2544, 167, 'Moquegua', 'MO', 1),
(2545, 167, 'Pasco', 'PA', 1),
(2546, 167, 'Piura', 'PI', 1),
(2547, 167, 'Puno', 'PU', 1),
(2548, 167, 'San Martin', 'SM', 1),
(2549, 167, 'Tacna', 'TA', 1),
(2550, 167, 'Tumbes', 'TU', 1),
(2551, 167, 'Ucayali', 'UC', 1),
(2552, 168, 'Abra', 'ABR', 1),
(2553, 168, 'Agusan del Norte', 'ANO', 1),
(2554, 168, 'Agusan del Sur', 'ASU', 1),
(2555, 168, 'Aklan', 'AKL', 1),
(2556, 168, 'Albay', 'ALB', 1),
(2557, 168, 'Antique', 'ANT', 1),
(2558, 168, 'Apayao', 'APY', 1),
(2559, 168, 'Aurora', 'AUR', 1),
(2560, 168, 'Basilan', 'BAS', 1),
(2561, 168, 'Bataan', 'BTA', 1),
(2562, 168, 'Batanes', 'BTE', 1),
(2563, 168, 'Batangas', 'BTG', 1),
(2564, 168, 'Biliran', 'BLR', 1),
(2565, 168, 'Benguet', 'BEN', 1),
(2566, 168, 'Bohol', 'BOL', 1),
(2567, 168, 'Bukidnon', 'BUK', 1),
(2568, 168, 'Bulacan', 'BUL', 1),
(2569, 168, 'Cagayan', 'CAG', 1),
(2570, 168, 'Camarines Norte', 'CNO', 1),
(2571, 168, 'Camarines Sur', 'CSU', 1),
(2572, 168, 'Camiguin', 'CAM', 1),
(2573, 168, 'Capiz', 'CAP', 1),
(2574, 168, 'Catanduanes', 'CAT', 1),
(2575, 168, 'Cavite', 'CAV', 1),
(2576, 168, 'Cebu', 'CEB', 1),
(2577, 168, 'Compostela', 'CMP', 1),
(2578, 168, 'Davao del Norte', 'DNO', 1),
(2579, 168, 'Davao del Sur', 'DSU', 1),
(2580, 168, 'Davao Oriental', 'DOR', 1),
(2581, 168, 'Eastern Samar', 'ESA', 1),
(2582, 168, 'Guimaras', 'GUI', 1),
(2583, 168, 'Ifugao', 'IFU', 1),
(2584, 168, 'Ilocos Norte', 'INO', 1),
(2585, 168, 'Ilocos Sur', 'ISU', 1),
(2586, 168, 'Iloilo', 'ILO', 1),
(2587, 168, 'Isabela', 'ISA', 1),
(2588, 168, 'Kalinga', 'KAL', 1),
(2589, 168, 'Laguna', 'LAG', 1),
(2590, 168, 'Lanao del Norte', 'LNO', 1),
(2591, 168, 'Lanao del Sur', 'LSU', 1),
(2592, 168, 'La Union', 'UNI', 1),
(2593, 168, 'Leyte', 'LEY', 1),
(2594, 168, 'Maguindanao', 'MAG', 1),
(2595, 168, 'Marinduque', 'MRN', 1),
(2596, 168, 'Masbate', 'MSB', 1),
(2597, 168, 'Mindoro Occidental', 'MIC', 1),
(2598, 168, 'Mindoro Oriental', 'MIR', 1),
(2599, 168, 'Misamis Occidental', 'MSC', 1),
(2600, 168, 'Misamis Oriental', 'MOR', 1),
(2601, 168, 'Mountain', 'MOP', 1),
(2602, 168, 'Negros Occidental', 'NOC', 1),
(2603, 168, 'Negros Oriental', 'NOR', 1),
(2604, 168, 'North Cotabato', 'NCT', 1),
(2605, 168, 'Northern Samar', 'NSM', 1),
(2606, 168, 'Nueva Ecija', 'NEC', 1),
(2607, 168, 'Nueva Vizcaya', 'NVZ', 1),
(2608, 168, 'Palawan', 'PLW', 1),
(2609, 168, 'Pampanga', 'PMP', 1),
(2610, 168, 'Pangasinan', 'PNG', 1),
(2611, 168, 'Quezon', 'QZN', 1),
(2612, 168, 'Quirino', 'QRN', 1),
(2613, 168, 'Rizal', 'RIZ', 1),
(2614, 168, 'Romblon', 'ROM', 1),
(2615, 168, 'Samar', 'SMR', 1),
(2616, 168, 'Sarangani', 'SRG', 1),
(2617, 168, 'Siquijor', 'SQJ', 1),
(2618, 168, 'Sorsogon', 'SRS', 1),
(2619, 168, 'South Cotabato', 'SCO', 1),
(2620, 168, 'Southern Leyte', 'SLE', 1),
(2621, 168, 'Sultan Kudarat', 'SKU', 1),
(2622, 168, 'Sulu', 'SLU', 1),
(2623, 168, 'Surigao del Norte', 'SNO', 1),
(2624, 168, 'Surigao del Sur', 'SSU', 1),
(2625, 168, 'Tarlac', 'TAR', 1),
(2626, 168, 'Tawi-Tawi', 'TAW', 1),
(2627, 168, 'Zambales', 'ZBL', 1),
(2628, 168, 'Zamboanga del Norte', 'ZNO', 1),
(2629, 168, 'Zamboanga del Sur', 'ZSU', 1),
(2630, 168, 'Zamboanga Sibugay', 'ZSI', 1),
(2631, 170, 'Dolnoslaskie', 'DO', 1),
(2632, 170, 'Kujawsko-Pomorskie', 'KP', 1),
(2633, 170, 'Lodzkie', 'LO', 1),
(2634, 170, 'Lubelskie', 'LL', 1),
(2635, 170, 'Lubuskie', 'LU', 1),
(2636, 170, 'Malopolskie', 'ML', 1),
(2637, 170, 'Mazowieckie', 'MZ', 1),
(2638, 170, 'Opolskie', 'OP', 1),
(2639, 170, 'Podkarpackie', 'PP', 1),
(2640, 170, 'Podlaskie', 'PL', 1),
(2641, 170, 'Pomorskie', 'PM', 1),
(2642, 170, 'Slaskie', 'SL', 1),
(2643, 170, 'Swietokrzyskie', 'SW', 1),
(2644, 170, 'Warminsko-Mazurskie', 'WM', 1),
(2645, 170, 'Wielkopolskie', 'WP', 1),
(2646, 170, 'Zachodniopomorskie', 'ZA', 1),
(2647, 198, 'Saint Pierre', 'P', 1),
(2648, 198, 'Miquelon', 'M', 1),
(2649, 171, 'A&ccedil;ores', 'AC', 1),
(2650, 171, 'Aveiro', 'AV', 1),
(2651, 171, 'Beja', 'BE', 1),
(2652, 171, 'Braga', 'BR', 1),
(2653, 171, 'Bragan&ccedil;a', 'BA', 1),
(2654, 171, 'Castelo Branco', 'CB', 1),
(2655, 171, 'Coimbra', 'CO', 1),
(2656, 171, '&Eacute;vora', 'EV', 1),
(2657, 171, 'Faro', 'FA', 1),
(2658, 171, 'Guarda', 'GU', 1),
(2659, 171, 'Leiria', 'LE', 1),
(2660, 171, 'Lisboa', 'LI', 1),
(2661, 171, 'Madeira', 'ME', 1),
(2662, 171, 'Portalegre', 'PO', 1),
(2663, 171, 'Porto', 'PR', 1),
(2664, 171, 'Santar&eacute;m', 'SA', 1),
(2665, 171, 'Set&uacute;bal', 'SE', 1),
(2666, 171, 'Viana do Castelo', 'VC', 1),
(2667, 171, 'Vila Real', 'VR', 1),
(2668, 171, 'Viseu', 'VI', 1),
(2669, 173, 'Ad Dawhah', 'DW', 1),
(2670, 173, 'Al Ghuwayriyah', 'GW', 1),
(2671, 173, 'Al Jumayliyah', 'JM', 1),
(2672, 173, 'Al Khawr', 'KR', 1),
(2673, 173, 'Al Wakrah', 'WK', 1),
(2674, 173, 'Ar Rayyan', 'RN', 1),
(2675, 173, 'Jarayan al Batinah', 'JB', 1),
(2676, 173, 'Madinat ash Shamal', 'MS', 1),
(2677, 173, 'Umm Sa\'id', 'UD', 1),
(2678, 173, 'Umm Salal', 'UL', 1),
(2679, 175, 'Alba', 'AB', 1),
(2680, 175, 'Arad', 'AR', 1),
(2681, 175, 'Arges', 'AG', 1),
(2682, 175, 'Bacau', 'BC', 1),
(2683, 175, 'Bihor', 'BH', 1),
(2684, 175, 'Bistrita-Nasaud', 'BN', 1),
(2685, 175, 'Botosani', 'BT', 1),
(2686, 175, 'Brasov', 'BV', 1),
(2687, 175, 'Braila', 'BR', 1),
(2688, 175, 'Bucuresti', 'B', 1),
(2689, 175, 'Buzau', 'BZ', 1),
(2690, 175, 'Caras-Severin', 'CS', 1),
(2691, 175, 'Calarasi', 'CL', 1),
(2692, 175, 'Cluj', 'CJ', 1),
(2693, 175, 'Constanta', 'CT', 1),
(2694, 175, 'Covasna', 'CV', 1),
(2695, 175, 'Dimbovita', 'DB', 1),
(2696, 175, 'Dolj', 'DJ', 1),
(2697, 175, 'Galati', 'GL', 1),
(2698, 175, 'Giurgiu', 'GR', 1),
(2699, 175, 'Gorj', 'GJ', 1),
(2700, 175, 'Harghita', 'HR', 1),
(2701, 175, 'Hunedoara', 'HD', 1),
(2702, 175, 'Ialomita', 'IL', 1),
(2703, 175, 'Iasi', 'IS', 1),
(2704, 175, 'Ilfov', 'IF', 1),
(2705, 175, 'Maramures', 'MM', 1),
(2706, 175, 'Mehedinti', 'MH', 1),
(2707, 175, 'Mures', 'MS', 1),
(2708, 175, 'Neamt', 'NT', 1),
(2709, 175, 'Olt', 'OT', 1),
(2710, 175, 'Prahova', 'PH', 1),
(2711, 175, 'Satu-Mare', 'SM', 1),
(2712, 175, 'Salaj', 'SJ', 1),
(2713, 175, 'Sibiu', 'SB', 1),
(2714, 175, 'Suceava', 'SV', 1),
(2715, 175, 'Teleorman', 'TR', 1),
(2716, 175, 'Timis', 'TM', 1),
(2717, 175, 'Tulcea', 'TL', 1),
(2718, 175, 'Vaslui', 'VS', 1),
(2719, 175, 'Valcea', 'VL', 1),
(2720, 175, 'Vrancea', 'VN', 1),
(2721, 176, 'Abakan', 'AB', 1),
(2722, 176, 'Aginskoye', 'AG', 1),
(2723, 176, 'Anadyr', 'AN', 1),
(2724, 176, 'Arkahangelsk', 'AR', 1),
(2725, 176, 'Astrakhan', 'AS', 1),
(2726, 176, 'Barnaul', 'BA', 1),
(2727, 176, 'Belgorod', 'BE', 1),
(2728, 176, 'Birobidzhan', 'BI', 1),
(2729, 176, 'Blagoveshchensk', 'BL', 1),
(2730, 176, 'Bryansk', 'BR', 1),
(2731, 176, 'Cheboksary', 'CH', 1),
(2732, 176, 'Chelyabinsk', 'CL', 1),
(2733, 176, 'Cherkessk', 'CR', 1),
(2734, 176, 'Chita', 'CI', 1),
(2735, 176, 'Dudinka', 'DU', 1),
(2736, 176, 'Elista', 'EL', 1),
(2738, 176, 'Gorno-Altaysk', 'GA', 1),
(2739, 176, 'Groznyy', 'GR', 1),
(2740, 176, 'Irkutsk', 'IR', 1),
(2741, 176, 'Ivanovo', 'IV', 1),
(2742, 176, 'Izhevsk', 'IZ', 1),
(2743, 176, 'Kalinigrad', 'KA', 1),
(2744, 176, 'Kaluga', 'KL', 1),
(2745, 176, 'Kasnodar', 'KS', 1),
(2746, 176, 'Kazan', 'KZ', 1),
(2747, 176, 'Kemerovo', 'KE', 1),
(2748, 176, 'Khabarovsk', 'KH', 1),
(2749, 176, 'Khanty-Mansiysk', 'KM', 1),
(2750, 176, 'Kostroma', 'KO', 1),
(2751, 176, 'Krasnodar', 'KR', 1),
(2752, 176, 'Krasnoyarsk', 'KN', 1),
(2753, 176, 'Kudymkar', 'KU', 1),
(2754, 176, 'Kurgan', 'KG', 1),
(2755, 176, 'Kursk', 'KK', 1),
(2756, 176, 'Kyzyl', 'KY', 1),
(2757, 176, 'Lipetsk', 'LI', 1),
(2758, 176, 'Magadan', 'MA', 1),
(2759, 176, 'Makhachkala', 'MK', 1),
(2760, 176, 'Maykop', 'MY', 1),
(2761, 176, 'Moscow', 'MO', 1),
(2762, 176, 'Murmansk', 'MU', 1),
(2763, 176, 'Nalchik', 'NA', 1),
(2764, 176, 'Naryan Mar', 'NR', 1),
(2765, 176, 'Nazran', 'NZ', 1),
(2766, 176, 'Nizhniy Novgorod', 'NI', 1),
(2767, 176, 'Novgorod', 'NO', 1),
(2768, 176, 'Novosibirsk', 'NV', 1),
(2769, 176, 'Omsk', 'OM', 1),
(2770, 176, 'Orel', 'OR', 1),
(2771, 176, 'Orenburg', 'OE', 1),
(2772, 176, 'Palana', 'PA', 1),
(2773, 176, 'Penza', 'PE', 1),
(2774, 176, 'Perm', 'PR', 1),
(2775, 176, 'Petropavlovsk-Kamchatskiy', 'PK', 1),
(2776, 176, 'Petrozavodsk', 'PT', 1),
(2777, 176, 'Pskov', 'PS', 1),
(2778, 176, 'Rostov-na-Donu', 'RO', 1),
(2779, 176, 'Ryazan', 'RY', 1),
(2780, 176, 'Salekhard', 'SL', 1),
(2781, 176, 'Samara', 'SA', 1),
(2782, 176, 'Saransk', 'SR', 1),
(2783, 176, 'Saratov', 'SV', 1),
(2784, 176, 'Smolensk', 'SM', 1),
(2785, 176, 'St. Petersburg', 'SP', 1),
(2786, 176, 'Stavropol', 'ST', 1),
(2787, 176, 'Syktyvkar', 'SY', 1),
(2788, 176, 'Tambov', 'TA', 1),
(2789, 176, 'Tomsk', 'TO', 1),
(2790, 176, 'Tula', 'TU', 1),
(2791, 176, 'Tura', 'TR', 1),
(2792, 176, 'Tver', 'TV', 1),
(2793, 176, 'Tyumen', 'TY', 1),
(2794, 176, 'Ufa', 'UF', 1),
(2795, 176, 'Ul\'yanovsk', 'UL', 1),
(2796, 176, 'Ulan-Ude', 'UU', 1),
(2797, 176, 'Ust\'-Ordynskiy', 'US', 1),
(2798, 176, 'Vladikavkaz', 'VL', 1),
(2799, 176, 'Vladimir', 'VA', 1),
(2800, 176, 'Vladivostok', 'VV', 1),
(2801, 176, 'Volgograd', 'VG', 1),
(2802, 176, 'Vologda', 'VD', 1),
(2803, 176, 'Voronezh', 'VO', 1),
(2804, 176, 'Vyatka', 'VY', 1),
(2805, 176, 'Yakutsk', 'YA', 1),
(2806, 176, 'Yaroslavl', 'YR', 1),
(2807, 176, 'Yekaterinburg', 'YE', 1),
(2808, 176, 'Yoshkar-Ola', 'YO', 1),
(2809, 177, 'Butare', 'BU', 1),
(2810, 177, 'Byumba', 'BY', 1),
(2811, 177, 'Cyangugu', 'CY', 1),
(2812, 177, 'Gikongoro', 'GK', 1),
(2813, 177, 'Gisenyi', 'GS', 1),
(2814, 177, 'Gitarama', 'GT', 1),
(2815, 177, 'Kibungo', 'KG', 1),
(2816, 177, 'Kibuye', 'KY', 1),
(2817, 177, 'Kigali Rurale', 'KR', 1),
(2818, 177, 'Kigali-ville', 'KV', 1),
(2819, 177, 'Ruhengeri', 'RU', 1),
(2820, 177, 'Umutara', 'UM', 1),
(2821, 178, 'Christ Church Nichola Town', 'CCN', 1),
(2822, 178, 'Saint Anne Sandy Point', 'SAS', 1),
(2823, 178, 'Saint George Basseterre', 'SGB', 1),
(2824, 178, 'Saint George Gingerland', 'SGG', 1),
(2825, 178, 'Saint James Windward', 'SJW', 1),
(2826, 178, 'Saint John Capesterre', 'SJC', 1),
(2827, 178, 'Saint John Figtree', 'SJF', 1),
(2828, 178, 'Saint Mary Cayon', 'SMC', 1),
(2829, 178, 'Saint Paul Capesterre', 'CAP', 1),
(2830, 178, 'Saint Paul Charlestown', 'CHA', 1),
(2831, 178, 'Saint Peter Basseterre', 'SPB', 1),
(2832, 178, 'Saint Thomas Lowland', 'STL', 1),
(2833, 178, 'Saint Thomas Middle Island', 'STM', 1),
(2834, 178, 'Trinity Palmetto Point', 'TPP', 1),
(2835, 179, 'Anse-la-Raye', 'AR', 1),
(2836, 179, 'Castries', 'CA', 1),
(2837, 179, 'Choiseul', 'CH', 1),
(2838, 179, 'Dauphin', 'DA', 1),
(2839, 179, 'Dennery', 'DE', 1),
(2840, 179, 'Gros-Islet', 'GI', 1),
(2841, 179, 'Laborie', 'LA', 1),
(2842, 179, 'Micoud', 'MI', 1),
(2843, 179, 'Praslin', 'PR', 1),
(2844, 179, 'Soufriere', 'SO', 1),
(2845, 179, 'Vieux-Fort', 'VF', 1),
(2846, 180, 'Charlotte', 'C', 1),
(2847, 180, 'Grenadines', 'R', 1),
(2848, 180, 'Saint Andrew', 'A', 1),
(2849, 180, 'Saint David', 'D', 1),
(2850, 180, 'Saint George', 'G', 1),
(2851, 180, 'Saint Patrick', 'P', 1),
(2852, 181, 'A\'ana', 'AN', 1),
(2853, 181, 'Aiga-i-le-Tai', 'AI', 1),
(2854, 181, 'Atua', 'AT', 1),
(2855, 181, 'Fa\'asaleleaga', 'FA', 1),
(2856, 181, 'Gaga\'emauga', 'GE', 1),
(2857, 181, 'Gagaifomauga', 'GF', 1),
(2858, 181, 'Palauli', 'PA', 1),
(2859, 181, 'Satupa\'itea', 'SA', 1),
(2860, 181, 'Tuamasaga', 'TU', 1),
(2861, 181, 'Va\'a-o-Fonoti', 'VF', 1),
(2862, 181, 'Vaisigano', 'VS', 1),
(2863, 182, 'Acquaviva', 'AC', 1),
(2864, 182, 'Borgo Maggiore', 'BM', 1),
(2865, 182, 'Chiesanuova', 'CH', 1),
(2866, 182, 'Domagnano', 'DO', 1),
(2867, 182, 'Faetano', 'FA', 1),
(2868, 182, 'Fiorentino', 'FI', 1),
(2869, 182, 'Montegiardino', 'MO', 1),
(2870, 182, 'Citta di San Marino', 'SM', 1),
(2871, 182, 'Serravalle', 'SE', 1),
(2872, 183, 'Sao Tome', 'S', 1),
(2873, 183, 'Principe', 'P', 1),
(2874, 184, 'Al Bahah', 'BH', 1),
(2875, 184, 'Al Hudud ash Shamaliyah', 'HS', 1),
(2876, 184, 'Al Jawf', 'JF', 1),
(2877, 184, 'Al Madinah', 'MD', 1),
(2878, 184, 'Al Qasim', 'QS', 1),
(2879, 184, 'Ar Riyad', 'RD', 1),
(2880, 184, 'Ash Sharqiyah (Eastern)', 'AQ', 1),
(2881, 184, '\'Asir', 'AS', 1),
(2882, 184, 'Ha\'il', 'HL', 1),
(2883, 184, 'Jizan', 'JZ', 1),
(2884, 184, 'Makkah', 'ML', 1),
(2885, 184, 'Najran', 'NR', 1),
(2886, 184, 'Tabuk', 'TB', 1),
(2887, 185, 'Dakar', 'DA', 1),
(2888, 185, 'Diourbel', 'DI', 1),
(2889, 185, 'Fatick', 'FA', 1),
(2890, 185, 'Kaolack', 'KA', 1),
(2891, 185, 'Kolda', 'KO', 1),
(2892, 185, 'Louga', 'LO', 1),
(2893, 185, 'Matam', 'MA', 1),
(2894, 185, 'Saint-Louis', 'SL', 1),
(2895, 185, 'Tambacounda', 'TA', 1),
(2896, 185, 'Thies', 'TH', 1),
(2897, 185, 'Ziguinchor', 'ZI', 1),
(2898, 186, 'Anse aux Pins', 'AP', 1),
(2899, 186, 'Anse Boileau', 'AB', 1),
(2900, 186, 'Anse Etoile', 'AE', 1),
(2901, 186, 'Anse Louis', 'AL', 1),
(2902, 186, 'Anse Royale', 'AR', 1),
(2903, 186, 'Baie Lazare', 'BL', 1),
(2904, 186, 'Baie Sainte Anne', 'BS', 1),
(2905, 186, 'Beau Vallon', 'BV', 1),
(2906, 186, 'Bel Air', 'BA', 1),
(2907, 186, 'Bel Ombre', 'BO', 1),
(2908, 186, 'Cascade', 'CA', 1),
(2909, 186, 'Glacis', 'GL', 1),
(2910, 186, 'Grand\' Anse (on Mahe)', 'GM', 1),
(2911, 186, 'Grand\' Anse (on Praslin)', 'GP', 1),
(2912, 186, 'La Digue', 'DG', 1),
(2913, 186, 'La Riviere Anglaise', 'RA', 1),
(2914, 186, 'Mont Buxton', 'MB', 1),
(2915, 186, 'Mont Fleuri', 'MF', 1),
(2916, 186, 'Plaisance', 'PL', 1),
(2917, 186, 'Pointe La Rue', 'PR', 1),
(2918, 186, 'Port Glaud', 'PG', 1),
(2919, 186, 'Saint Louis', 'SL', 1),
(2920, 186, 'Takamaka', 'TA', 1),
(2921, 187, 'Eastern', 'E', 1),
(2922, 187, 'Northern', 'N', 1),
(2923, 187, 'Southern', 'S', 1),
(2924, 187, 'Western', 'W', 1),
(2925, 189, 'Banskobystrický', 'BA', 1),
(2926, 189, 'Bratislavský', 'BR', 1),
(2927, 189, 'Košický', 'KO', 1),
(2928, 189, 'Nitriansky', 'NI', 1),
(2929, 189, 'Prešovský', 'PR', 1),
(2930, 189, 'Trenčiansky', 'TC', 1),
(2931, 189, 'Trnavský', 'TV', 1),
(2932, 189, 'Žilinský', 'ZI', 1),
(2933, 191, 'Central', 'CE', 1),
(2934, 191, 'Choiseul', 'CH', 1),
(2935, 191, 'Guadalcanal', 'GC', 1),
(2936, 191, 'Honiara', 'HO', 1),
(2937, 191, 'Isabel', 'IS', 1),
(2938, 191, 'Makira', 'MK', 1),
(2939, 191, 'Malaita', 'ML', 1),
(2940, 191, 'Rennell and Bellona', 'RB', 1),
(2941, 191, 'Temotu', 'TM', 1),
(2942, 191, 'Western', 'WE', 1),
(2943, 192, 'Awdal', 'AW', 1),
(2944, 192, 'Bakool', 'BK', 1),
(2945, 192, 'Banaadir', 'BN', 1),
(2946, 192, 'Bari', 'BR', 1),
(2947, 192, 'Bay', 'BY', 1),
(2948, 192, 'Galguduud', 'GA', 1),
(2949, 192, 'Gedo', 'GE', 1),
(2950, 192, 'Hiiraan', 'HI', 1),
(2951, 192, 'Jubbada Dhexe', 'JD', 1),
(2952, 192, 'Jubbada Hoose', 'JH', 1),
(2953, 192, 'Mudug', 'MU', 1),
(2954, 192, 'Nugaal', 'NU', 1),
(2955, 192, 'Sanaag', 'SA', 1),
(2956, 192, 'Shabeellaha Dhexe', 'SD', 1),
(2957, 192, 'Shabeellaha Hoose', 'SH', 1),
(2958, 192, 'Sool', 'SL', 1),
(2959, 192, 'Togdheer', 'TO', 1),
(2960, 192, 'Woqooyi Galbeed', 'WG', 1),
(2961, 193, 'Eastern Cape', 'EC', 1),
(2962, 193, 'Free State', 'FS', 1),
(2963, 193, 'Gauteng', 'GT', 1),
(2964, 193, 'KwaZulu-Natal', 'KN', 1),
(2965, 193, 'Limpopo', 'LP', 1),
(2966, 193, 'Mpumalanga', 'MP', 1),
(2967, 193, 'North West', 'NW', 1),
(2968, 193, 'Northern Cape', 'NC', 1),
(2969, 193, 'Western Cape', 'WC', 1),
(2970, 195, 'La Coru&ntilde;a', 'CA', 1),
(2971, 195, '&Aacute;lava', 'AL', 1),
(2972, 195, 'Albacete', 'AB', 1),
(2973, 195, 'Alicante', 'AC', 1),
(2974, 195, 'Almeria', 'AM', 1),
(2975, 195, 'Asturias', 'AS', 1),
(2976, 195, '&Aacute;vila', 'AV', 1),
(2977, 195, 'Badajoz', 'BJ', 1),
(2978, 195, 'Baleares', 'IB', 1),
(2979, 195, 'Barcelona', 'BA', 1),
(2980, 195, 'Burgos', 'BU', 1),
(2981, 195, 'C&aacute;ceres', 'CC', 1),
(2982, 195, 'C&aacute;diz', 'CZ', 1),
(2983, 195, 'Cantabria', 'CT', 1),
(2984, 195, 'Castell&oacute;n', 'CL', 1),
(2985, 195, 'Ceuta', 'CE', 1),
(2986, 195, 'Ciudad Real', 'CR', 1),
(2987, 195, 'C&oacute;rdoba', 'CD', 1),
(2988, 195, 'Cuenca', 'CU', 1),
(2989, 195, 'Girona', 'GI', 1),
(2990, 195, 'Granada', 'GD', 1),
(2991, 195, 'Guadalajara', 'GJ', 1),
(2992, 195, 'Guip&uacute;zcoa', 'GP', 1),
(2993, 195, 'Huelva', 'HL', 1),
(2994, 195, 'Huesca', 'HS', 1),
(2995, 195, 'Ja&eacute;n', 'JN', 1),
(2996, 195, 'La Rioja', 'RJ', 1),
(2997, 195, 'Las Palmas', 'PM', 1),
(2998, 195, 'Leon', 'LE', 1),
(2999, 195, 'Lleida', 'LL', 1),
(3000, 195, 'Lugo', 'LG', 1),
(3001, 195, 'Madrid', 'MD', 1),
(3002, 195, 'Malaga', 'MA', 1),
(3003, 195, 'Melilla', 'ML', 1),
(3004, 195, 'Murcia', 'MU', 1),
(3005, 195, 'Navarra', 'NV', 1),
(3006, 195, 'Ourense', 'OU', 1),
(3007, 195, 'Palencia', 'PL', 1),
(3008, 195, 'Pontevedra', 'PO', 1),
(3009, 195, 'Salamanca', 'SL', 1),
(3010, 195, 'Santa Cruz de Tenerife', 'SC', 1),
(3011, 195, 'Segovia', 'SG', 1),
(3012, 195, 'Sevilla', 'SV', 1),
(3013, 195, 'Soria', 'SO', 1),
(3014, 195, 'Tarragona', 'TA', 1),
(3015, 195, 'Teruel', 'TE', 1),
(3016, 195, 'Toledo', 'TO', 1),
(3017, 195, 'Valencia', 'VC', 1),
(3018, 195, 'Valladolid', 'VD', 1),
(3019, 195, 'Vizcaya', 'VZ', 1),
(3020, 195, 'Zamora', 'ZM', 1),
(3021, 195, 'Zaragoza', 'ZR', 1),
(3022, 196, 'Central', 'CE', 1),
(3023, 196, 'Eastern', 'EA', 1),
(3024, 196, 'North Central', 'NC', 1),
(3025, 196, 'Northern', 'NO', 1),
(3026, 196, 'North Western', 'NW', 1),
(3027, 196, 'Sabaragamuwa', 'SA', 1),
(3028, 196, 'Southern', 'SO', 1),
(3029, 196, 'Uva', 'UV', 1),
(3030, 196, 'Western', 'WE', 1),
(3032, 197, 'Saint Helena', 'S', 1),
(3034, 199, 'A\'ali an Nil', 'ANL', 1),
(3035, 199, 'Al Bahr al Ahmar', 'BAM', 1),
(3036, 199, 'Al Buhayrat', 'BRT', 1),
(3037, 199, 'Al Jazirah', 'JZR', 1),
(3038, 199, 'Al Khartum', 'KRT', 1),
(3039, 199, 'Al Qadarif', 'QDR', 1),
(3040, 199, 'Al Wahdah', 'WDH', 1),
(3041, 199, 'An Nil al Abyad', 'ANB', 1),
(3042, 199, 'An Nil al Azraq', 'ANZ', 1),
(3043, 199, 'Ash Shamaliyah', 'ASH', 1),
(3044, 199, 'Bahr al Jabal', 'BJA', 1),
(3045, 199, 'Gharb al Istiwa\'iyah', 'GIS', 1),
(3046, 199, 'Gharb Bahr al Ghazal', 'GBG', 1),
(3047, 199, 'Gharb Darfur', 'GDA', 1),
(3048, 199, 'Gharb Kurdufan', 'GKU', 1),
(3049, 199, 'Janub Darfur', 'JDA', 1),
(3050, 199, 'Janub Kurdufan', 'JKU', 1),
(3051, 199, 'Junqali', 'JQL', 1),
(3052, 199, 'Kassala', 'KSL', 1),
(3053, 199, 'Nahr an Nil', 'NNL', 1),
(3054, 199, 'Shamal Bahr al Ghazal', 'SBG', 1),
(3055, 199, 'Shamal Darfur', 'SDA', 1),
(3056, 199, 'Shamal Kurdufan', 'SKU', 1),
(3057, 199, 'Sharq al Istiwa\'iyah', 'SIS', 1),
(3058, 199, 'Sinnar', 'SNR', 1),
(3059, 199, 'Warab', 'WRB', 1),
(3060, 200, 'Brokopondo', 'BR', 1),
(3061, 200, 'Commewijne', 'CM', 1),
(3062, 200, 'Coronie', 'CR', 1),
(3063, 200, 'Marowijne', 'MA', 1),
(3064, 200, 'Nickerie', 'NI', 1),
(3065, 200, 'Para', 'PA', 1),
(3066, 200, 'Paramaribo', 'PM', 1),
(3067, 200, 'Saramacca', 'SA', 1),
(3068, 200, 'Sipaliwini', 'SI', 1),
(3069, 200, 'Wanica', 'WA', 1),
(3070, 202, 'Hhohho', 'H', 1),
(3071, 202, 'Lubombo', 'L', 1),
(3072, 202, 'Manzini', 'M', 1),
(3073, 202, 'Shishelweni', 'S', 1),
(3074, 203, 'Blekinge', 'K', 1),
(3075, 203, 'Dalarna', 'W', 1),
(3076, 203, 'Gävleborg', 'X', 1),
(3077, 203, 'Gotland', 'I', 1),
(3078, 203, 'Halland', 'N', 1),
(3079, 203, 'Jämtland', 'Z', 1),
(3080, 203, 'Jönköping', 'F', 1),
(3081, 203, 'Kalmar', 'H', 1),
(3082, 203, 'Kronoberg', 'G', 1),
(3083, 203, 'Norrbotten', 'BD', 1),
(3084, 203, 'Örebro', 'T', 1),
(3085, 203, 'Östergötland', 'E', 1),
(3086, 203, 'Sk&aring;ne', 'M', 1),
(3087, 203, 'Södermanland', 'D', 1),
(3088, 203, 'Stockholm', 'AB', 1),
(3089, 203, 'Uppsala', 'C', 1),
(3090, 203, 'Värmland', 'S', 1),
(3091, 203, 'Västerbotten', 'AC', 1),
(3092, 203, 'Västernorrland', 'Y', 1),
(3093, 203, 'Västmanland', 'U', 1),
(3094, 203, 'Västra Götaland', 'O', 1),
(3095, 204, 'Aargau', 'AG', 1),
(3096, 204, 'Appenzell Ausserrhoden', 'AR', 1),
(3097, 204, 'Appenzell Innerrhoden', 'AI', 1),
(3098, 204, 'Basel-Stadt', 'BS', 1),
(3099, 204, 'Basel-Landschaft', 'BL', 1),
(3100, 204, 'Bern', 'BE', 1),
(3101, 204, 'Fribourg', 'FR', 1),
(3102, 204, 'Gen&egrave;ve', 'GE', 1),
(3103, 204, 'Glarus', 'GL', 1),
(3104, 204, 'Graubünden', 'GR', 1),
(3105, 204, 'Jura', 'JU', 1),
(3106, 204, 'Luzern', 'LU', 1),
(3107, 204, 'Neuch&acirc;tel', 'NE', 1),
(3108, 204, 'Nidwald', 'NW', 1),
(3109, 204, 'Obwald', 'OW', 1),
(3110, 204, 'St. Gallen', 'SG', 1),
(3111, 204, 'Schaffhausen', 'SH', 1),
(3112, 204, 'Schwyz', 'SZ', 1),
(3113, 204, 'Solothurn', 'SO', 1),
(3114, 204, 'Thurgau', 'TG', 1),
(3115, 204, 'Ticino', 'TI', 1),
(3116, 204, 'Uri', 'UR', 1),
(3117, 204, 'Valais', 'VS', 1),
(3118, 204, 'Vaud', 'VD', 1),
(3119, 204, 'Zug', 'ZG', 1),
(3120, 204, 'Zürich', 'ZH', 1),
(3121, 205, 'Al Hasakah', 'HA', 1),
(3122, 205, 'Al Ladhiqiyah', 'LA', 1),
(3123, 205, 'Al Qunaytirah', 'QU', 1),
(3124, 205, 'Ar Raqqah', 'RQ', 1),
(3125, 205, 'As Suwayda', 'SU', 1),
(3126, 205, 'Dara', 'DA', 1),
(3127, 205, 'Dayr az Zawr', 'DZ', 1),
(3128, 205, 'Dimashq', 'DI', 1),
(3129, 205, 'Halab', 'HL', 1),
(3130, 205, 'Hamah', 'HM', 1),
(3131, 205, 'Hims', 'HI', 1),
(3132, 205, 'Idlib', 'ID', 1),
(3133, 205, 'Rif Dimashq', 'RD', 1),
(3134, 205, 'Tartus', 'TA', 1),
(3135, 206, 'Chang-hua', 'CH', 1),
(3136, 206, 'Chia-i', 'CI', 1);
INSERT INTO `oc_zone` (`zone_id`, `country_id`, `name`, `code`, `status`) VALUES
(3137, 206, 'Hsin-chu', 'HS', 1),
(3138, 206, 'Hua-lien', 'HL', 1),
(3139, 206, 'I-lan', 'IL', 1),
(3140, 206, 'Kao-hsiung county', 'KH', 1),
(3141, 206, 'Kin-men', 'KM', 1),
(3142, 206, 'Lien-chiang', 'LC', 1),
(3143, 206, 'Miao-li', 'ML', 1),
(3144, 206, 'Nan-t\'ou', 'NT', 1),
(3145, 206, 'P\'eng-hu', 'PH', 1),
(3146, 206, 'P\'ing-tung', 'PT', 1),
(3147, 206, 'T\'ai-chung', 'TG', 1),
(3148, 206, 'T\'ai-nan', 'TA', 1),
(3149, 206, 'T\'ai-pei county', 'TP', 1),
(3150, 206, 'T\'ai-tung', 'TT', 1),
(3151, 206, 'T\'ao-yuan', 'TY', 1),
(3152, 206, 'Yun-lin', 'YL', 1),
(3153, 206, 'Chia-i city', 'CC', 1),
(3154, 206, 'Chi-lung', 'CL', 1),
(3155, 206, 'Hsin-chu', 'HC', 1),
(3156, 206, 'T\'ai-chung', 'TH', 1),
(3157, 206, 'T\'ai-nan', 'TN', 1),
(3158, 206, 'Kao-hsiung city', 'KC', 1),
(3159, 206, 'T\'ai-pei city', 'TC', 1),
(3160, 207, 'Gorno-Badakhstan', 'GB', 1),
(3161, 207, 'Khatlon', 'KT', 1),
(3162, 207, 'Sughd', 'SU', 1),
(3163, 208, 'Arusha', 'AR', 1),
(3164, 208, 'Dar es Salaam', 'DS', 1),
(3165, 208, 'Dodoma', 'DO', 1),
(3166, 208, 'Iringa', 'IR', 1),
(3167, 208, 'Kagera', 'KA', 1),
(3168, 208, 'Kigoma', 'KI', 1),
(3169, 208, 'Kilimanjaro', 'KJ', 1),
(3170, 208, 'Lindi', 'LN', 1),
(3171, 208, 'Manyara', 'MY', 1),
(3172, 208, 'Mara', 'MR', 1),
(3173, 208, 'Mbeya', 'MB', 1),
(3174, 208, 'Morogoro', 'MO', 1),
(3175, 208, 'Mtwara', 'MT', 1),
(3176, 208, 'Mwanza', 'MW', 1),
(3177, 208, 'Pemba North', 'PN', 1),
(3178, 208, 'Pemba South', 'PS', 1),
(3179, 208, 'Pwani', 'PW', 1),
(3180, 208, 'Rukwa', 'RK', 1),
(3181, 208, 'Ruvuma', 'RV', 1),
(3182, 208, 'Shinyanga', 'SH', 1),
(3183, 208, 'Singida', 'SI', 1),
(3184, 208, 'Tabora', 'TB', 1),
(3185, 208, 'Tanga', 'TN', 1),
(3186, 208, 'Zanzibar Central/South', 'ZC', 1),
(3187, 208, 'Zanzibar North', 'ZN', 1),
(3188, 208, 'Zanzibar Urban/West', 'ZU', 1),
(3189, 209, 'Amnat Charoen', 'Amnat Charoen', 1),
(3190, 209, 'Ang Thong', 'Ang Thong', 1),
(3191, 209, 'Ayutthaya', 'Ayutthaya', 1),
(3192, 209, 'Bangkok', 'Bangkok', 1),
(3193, 209, 'Buriram', 'Buriram', 1),
(3194, 209, 'Chachoengsao', 'Chachoengsao', 1),
(3195, 209, 'Chai Nat', 'Chai Nat', 1),
(3196, 209, 'Chaiyaphum', 'Chaiyaphum', 1),
(3197, 209, 'Chanthaburi', 'Chanthaburi', 1),
(3198, 209, 'Chiang Mai', 'Chiang Mai', 1),
(3199, 209, 'Chiang Rai', 'Chiang Rai', 1),
(3200, 209, 'Chon Buri', 'Chon Buri', 1),
(3201, 209, 'Chumphon', 'Chumphon', 1),
(3202, 209, 'Kalasin', 'Kalasin', 1),
(3203, 209, 'Kamphaeng Phet', 'Kamphaeng Phet', 1),
(3204, 209, 'Kanchanaburi', 'Kanchanaburi', 1),
(3205, 209, 'Khon Kaen', 'Khon Kaen', 1),
(3206, 209, 'Krabi', 'Krabi', 1),
(3207, 209, 'Lampang', 'Lampang', 1),
(3208, 209, 'Lamphun', 'Lamphun', 1),
(3209, 209, 'Loei', 'Loei', 1),
(3210, 209, 'Lop Buri', 'Lop Buri', 1),
(3211, 209, 'Mae Hong Son', 'Mae Hong Son', 1),
(3212, 209, 'Maha Sarakham', 'Maha Sarakham', 1),
(3213, 209, 'Mukdahan', 'Mukdahan', 1),
(3214, 209, 'Nakhon Nayok', 'Nakhon Nayok', 1),
(3215, 209, 'Nakhon Pathom', 'Nakhon Pathom', 1),
(3216, 209, 'Nakhon Phanom', 'Nakhon Phanom', 1),
(3217, 209, 'Nakhon Ratchasima', 'Nakhon Ratchasima', 1),
(3218, 209, 'Nakhon Sawan', 'Nakhon Sawan', 1),
(3219, 209, 'Nakhon Si Thammarat', 'Nakhon Si Thammarat', 1),
(3220, 209, 'Nan', 'Nan', 1),
(3221, 209, 'Narathiwat', 'Narathiwat', 1),
(3222, 209, 'Nong Bua Lamphu', 'Nong Bua Lamphu', 1),
(3223, 209, 'Nong Khai', 'Nong Khai', 1),
(3224, 209, 'Nonthaburi', 'Nonthaburi', 1),
(3225, 209, 'Pathum Thani', 'Pathum Thani', 1),
(3226, 209, 'Pattani', 'Pattani', 1),
(3227, 209, 'Phangnga', 'Phangnga', 1),
(3228, 209, 'Phatthalung', 'Phatthalung', 1),
(3229, 209, 'Phayao', 'Phayao', 1),
(3230, 209, 'Phetchabun', 'Phetchabun', 1),
(3231, 209, 'Phetchaburi', 'Phetchaburi', 1),
(3232, 209, 'Phichit', 'Phichit', 1),
(3233, 209, 'Phitsanulok', 'Phitsanulok', 1),
(3234, 209, 'Phrae', 'Phrae', 1),
(3235, 209, 'Phuket', 'Phuket', 1),
(3236, 209, 'Prachin Buri', 'Prachin Buri', 1),
(3237, 209, 'Prachuap Khiri Khan', 'Prachuap Khiri Khan', 1),
(3238, 209, 'Ranong', 'Ranong', 1),
(3239, 209, 'Ratchaburi', 'Ratchaburi', 1),
(3240, 209, 'Rayong', 'Rayong', 1),
(3241, 209, 'Roi Et', 'Roi Et', 1),
(3242, 209, 'Sa Kaeo', 'Sa Kaeo', 1),
(3243, 209, 'Sakon Nakhon', 'Sakon Nakhon', 1),
(3244, 209, 'Samut Prakan', 'Samut Prakan', 1),
(3245, 209, 'Samut Sakhon', 'Samut Sakhon', 1),
(3246, 209, 'Samut Songkhram', 'Samut Songkhram', 1),
(3247, 209, 'Sara Buri', 'Sara Buri', 1),
(3248, 209, 'Satun', 'Satun', 1),
(3249, 209, 'Sing Buri', 'Sing Buri', 1),
(3250, 209, 'Sisaket', 'Sisaket', 1),
(3251, 209, 'Songkhla', 'Songkhla', 1),
(3252, 209, 'Sukhothai', 'Sukhothai', 1),
(3253, 209, 'Suphan Buri', 'Suphan Buri', 1),
(3254, 209, 'Surat Thani', 'Surat Thani', 1),
(3255, 209, 'Surin', 'Surin', 1),
(3256, 209, 'Tak', 'Tak', 1),
(3257, 209, 'Trang', 'Trang', 1),
(3258, 209, 'Trat', 'Trat', 1),
(3259, 209, 'Ubon Ratchathani', 'Ubon Ratchathani', 1),
(3260, 209, 'Udon Thani', 'Udon Thani', 1),
(3261, 209, 'Uthai Thani', 'Uthai Thani', 1),
(3262, 209, 'Uttaradit', 'Uttaradit', 1),
(3263, 209, 'Yala', 'Yala', 1),
(3264, 209, 'Yasothon', 'Yasothon', 1),
(3265, 210, 'Kara', 'K', 1),
(3266, 210, 'Plateaux', 'P', 1),
(3267, 210, 'Savanes', 'S', 1),
(3268, 210, 'Centrale', 'C', 1),
(3269, 210, 'Maritime', 'M', 1),
(3270, 211, 'Atafu', 'A', 1),
(3271, 211, 'Fakaofo', 'F', 1),
(3272, 211, 'Nukunonu', 'N', 1),
(3273, 212, 'Ha\'apai', 'H', 1),
(3274, 212, 'Tongatapu', 'T', 1),
(3275, 212, 'Vava\'u', 'V', 1),
(3276, 213, 'Couva/Tabaquite/Talparo', 'CT', 1),
(3277, 213, 'Diego Martin', 'DM', 1),
(3278, 213, 'Mayaro/Rio Claro', 'MR', 1),
(3279, 213, 'Penal/Debe', 'PD', 1),
(3280, 213, 'Princes Town', 'PT', 1),
(3281, 213, 'Sangre Grande', 'SG', 1),
(3282, 213, 'San Juan/Laventille', 'SL', 1),
(3283, 213, 'Siparia', 'SI', 1),
(3284, 213, 'Tunapuna/Piarco', 'TP', 1),
(3285, 213, 'Port of Spain', 'PS', 1),
(3286, 213, 'San Fernando', 'SF', 1),
(3287, 213, 'Arima', 'AR', 1),
(3288, 213, 'Point Fortin', 'PF', 1),
(3289, 213, 'Chaguanas', 'CH', 1),
(3290, 213, 'Tobago', 'TO', 1),
(3291, 214, 'Ariana', 'AR', 1),
(3292, 214, 'Beja', 'BJ', 1),
(3293, 214, 'Ben Arous', 'BA', 1),
(3294, 214, 'Bizerte', 'BI', 1),
(3295, 214, 'Gabes', 'GB', 1),
(3296, 214, 'Gafsa', 'GF', 1),
(3297, 214, 'Jendouba', 'JE', 1),
(3298, 214, 'Kairouan', 'KR', 1),
(3299, 214, 'Kasserine', 'KS', 1),
(3300, 214, 'Kebili', 'KB', 1),
(3301, 214, 'Kef', 'KF', 1),
(3302, 214, 'Mahdia', 'MH', 1),
(3303, 214, 'Manouba', 'MN', 1),
(3304, 214, 'Medenine', 'ME', 1),
(3305, 214, 'Monastir', 'MO', 1),
(3306, 214, 'Nabeul', 'NA', 1),
(3307, 214, 'Sfax', 'SF', 1),
(3308, 214, 'Sidi', 'SD', 1),
(3309, 214, 'Siliana', 'SL', 1),
(3310, 214, 'Sousse', 'SO', 1),
(3311, 214, 'Tataouine', 'TA', 1),
(3312, 214, 'Tozeur', 'TO', 1),
(3313, 214, 'Tunis', 'TU', 1),
(3314, 214, 'Zaghouan', 'ZA', 1),
(3315, 215, 'Adana', 'ADA', 1),
(3316, 215, 'Adıyaman', 'ADI', 1),
(3317, 215, 'Afyonkarahisar', 'AFY', 1),
(3318, 215, 'Ağrı', 'AGR', 1),
(3319, 215, 'Aksaray', 'AKS', 1),
(3320, 215, 'Amasya', 'AMA', 1),
(3321, 215, 'Ankara', 'ANK', 1),
(3322, 215, 'Antalya', 'ANT', 1),
(3323, 215, 'Ardahan', 'ARD', 1),
(3324, 215, 'Artvin', 'ART', 1),
(3325, 215, 'Aydın', 'AYI', 1),
(3326, 215, 'Balıkesir', 'BAL', 1),
(3327, 215, 'Bartın', 'BAR', 1),
(3328, 215, 'Batman', 'BAT', 1),
(3329, 215, 'Bayburt', 'BAY', 1),
(3330, 215, 'Bilecik', 'BIL', 1),
(3331, 215, 'Bingöl', 'BIN', 1),
(3332, 215, 'Bitlis', 'BIT', 1),
(3333, 215, 'Bolu', 'BOL', 1),
(3334, 215, 'Burdur', 'BRD', 1),
(3335, 215, 'Bursa', 'BRS', 1),
(3336, 215, 'Çanakkale', 'CKL', 1),
(3337, 215, 'Çankırı', 'CKR', 1),
(3338, 215, 'Çorum', 'COR', 1),
(3339, 215, 'Denizli', 'DEN', 1),
(3340, 215, 'Diyarbakır', 'DIY', 1),
(3341, 215, 'Düzce', 'DUZ', 1),
(3342, 215, 'Edirne', 'EDI', 1),
(3343, 215, 'Elazığ', 'ELA', 1),
(3344, 215, 'Erzincan', 'EZC', 1),
(3345, 215, 'Erzurum', 'EZR', 1),
(3346, 215, 'Eskişehir', 'ESK', 1),
(3347, 215, 'Gaziantep', 'GAZ', 1),
(3348, 215, 'Giresun', 'GIR', 1),
(3349, 215, 'Gümüşhane', 'GMS', 1),
(3350, 215, 'Hakkari', 'HKR', 1),
(3351, 215, 'Hatay', 'HTY', 1),
(3352, 215, 'Iğdır', 'IGD', 1),
(3353, 215, 'Isparta', 'ISP', 1),
(3354, 215, 'İstanbul', 'IST', 1),
(3355, 215, 'İzmir', 'IZM', 1),
(3356, 215, 'Kahramanmaraş', 'KAH', 1),
(3357, 215, 'Karabük', 'KRB', 1),
(3358, 215, 'Karaman', 'KRM', 1),
(3359, 215, 'Kars', 'KRS', 1),
(3360, 215, 'Kastamonu', 'KAS', 1),
(3361, 215, 'Kayseri', 'KAY', 1),
(3362, 215, 'Kilis', 'KLS', 1),
(3363, 215, 'Kırıkkale', 'KRK', 1),
(3364, 215, 'Kırklareli', 'KLR', 1),
(3365, 215, 'Kırşehir', 'KRH', 1),
(3366, 215, 'Kocaeli', 'KOC', 1),
(3367, 215, 'Konya', 'KON', 1),
(3368, 215, 'Kütahya', 'KUT', 1),
(3369, 215, 'Malatya', 'MAL', 1),
(3370, 215, 'Manisa', 'MAN', 1),
(3371, 215, 'Mardin', 'MAR', 1),
(3372, 215, 'Mersin', 'MER', 1),
(3373, 215, 'Muğla', 'MUG', 1),
(3374, 215, 'Muş', 'MUS', 1),
(3375, 215, 'Nevşehir', 'NEV', 1),
(3376, 215, 'Niğde', 'NIG', 1),
(3377, 215, 'Ordu', 'ORD', 1),
(3378, 215, 'Osmaniye', 'OSM', 1),
(3379, 215, 'Rize', 'RIZ', 1),
(3380, 215, 'Sakarya', 'SAK', 1),
(3381, 215, 'Samsun', 'SAM', 1),
(3382, 215, 'Şanlıurfa', 'SAN', 1),
(3383, 215, 'Siirt', 'SII', 1),
(3384, 215, 'Sinop', 'SIN', 1),
(3385, 215, 'Şırnak', 'SIR', 1),
(3386, 215, 'Sivas', 'SIV', 1),
(3387, 215, 'Tekirdağ', 'TEL', 1),
(3388, 215, 'Tokat', 'TOK', 1),
(3389, 215, 'Trabzon', 'TRA', 1),
(3390, 215, 'Tunceli', 'TUN', 1),
(3391, 215, 'Uşak', 'USK', 1),
(3392, 215, 'Van', 'VAN', 1),
(3393, 215, 'Yalova', 'YAL', 1),
(3394, 215, 'Yozgat', 'YOZ', 1),
(3395, 215, 'Zonguldak', 'ZON', 1),
(3396, 216, 'Ahal Welayaty', 'A', 1),
(3397, 216, 'Balkan Welayaty', 'B', 1),
(3398, 216, 'Dashhowuz Welayaty', 'D', 1),
(3399, 216, 'Lebap Welayaty', 'L', 1),
(3400, 216, 'Mary Welayaty', 'M', 1),
(3401, 217, 'Ambergris Cays', 'AC', 1),
(3402, 217, 'Dellis Cay', 'DC', 1),
(3403, 217, 'French Cay', 'FC', 1),
(3404, 217, 'Little Water Cay', 'LW', 1),
(3405, 217, 'Parrot Cay', 'RC', 1),
(3406, 217, 'Pine Cay', 'PN', 1),
(3407, 217, 'Salt Cay', 'SL', 1),
(3408, 217, 'Grand Turk', 'GT', 1),
(3409, 217, 'South Caicos', 'SC', 1),
(3410, 217, 'East Caicos', 'EC', 1),
(3411, 217, 'Middle Caicos', 'MC', 1),
(3412, 217, 'North Caicos', 'NC', 1),
(3413, 217, 'Providenciales', 'PR', 1),
(3414, 217, 'West Caicos', 'WC', 1),
(3415, 218, 'Nanumanga', 'NMG', 1),
(3416, 218, 'Niulakita', 'NLK', 1),
(3417, 218, 'Niutao', 'NTO', 1),
(3418, 218, 'Funafuti', 'FUN', 1),
(3419, 218, 'Nanumea', 'NME', 1),
(3420, 218, 'Nui', 'NUI', 1),
(3421, 218, 'Nukufetau', 'NFT', 1),
(3422, 218, 'Nukulaelae', 'NLL', 1),
(3423, 218, 'Vaitupu', 'VAI', 1),
(3424, 219, 'Kalangala', 'KAL', 1),
(3425, 219, 'Kampala', 'KMP', 1),
(3426, 219, 'Kayunga', 'KAY', 1),
(3427, 219, 'Kiboga', 'KIB', 1),
(3428, 219, 'Luwero', 'LUW', 1),
(3429, 219, 'Masaka', 'MAS', 1),
(3430, 219, 'Mpigi', 'MPI', 1),
(3431, 219, 'Mubende', 'MUB', 1),
(3432, 219, 'Mukono', 'MUK', 1),
(3433, 219, 'Nakasongola', 'NKS', 1),
(3434, 219, 'Rakai', 'RAK', 1),
(3435, 219, 'Sembabule', 'SEM', 1),
(3436, 219, 'Wakiso', 'WAK', 1),
(3437, 219, 'Bugiri', 'BUG', 1),
(3438, 219, 'Busia', 'BUS', 1),
(3439, 219, 'Iganga', 'IGA', 1),
(3440, 219, 'Jinja', 'JIN', 1),
(3441, 219, 'Kaberamaido', 'KAB', 1),
(3442, 219, 'Kamuli', 'KML', 1),
(3443, 219, 'Kapchorwa', 'KPC', 1),
(3444, 219, 'Katakwi', 'KTK', 1),
(3445, 219, 'Kumi', 'KUM', 1),
(3446, 219, 'Mayuge', 'MAY', 1),
(3447, 219, 'Mbale', 'MBA', 1),
(3448, 219, 'Pallisa', 'PAL', 1),
(3449, 219, 'Sironko', 'SIR', 1),
(3450, 219, 'Soroti', 'SOR', 1),
(3451, 219, 'Tororo', 'TOR', 1),
(3452, 219, 'Adjumani', 'ADJ', 1),
(3453, 219, 'Apac', 'APC', 1),
(3454, 219, 'Arua', 'ARU', 1),
(3455, 219, 'Gulu', 'GUL', 1),
(3456, 219, 'Kitgum', 'KIT', 1),
(3457, 219, 'Kotido', 'KOT', 1),
(3458, 219, 'Lira', 'LIR', 1),
(3459, 219, 'Moroto', 'MRT', 1),
(3460, 219, 'Moyo', 'MOY', 1),
(3461, 219, 'Nakapiripirit', 'NAK', 1),
(3462, 219, 'Nebbi', 'NEB', 1),
(3463, 219, 'Pader', 'PAD', 1),
(3464, 219, 'Yumbe', 'YUM', 1),
(3465, 219, 'Bundibugyo', 'BUN', 1),
(3466, 219, 'Bushenyi', 'BSH', 1),
(3467, 219, 'Hoima', 'HOI', 1),
(3468, 219, 'Kabale', 'KBL', 1),
(3469, 219, 'Kabarole', 'KAR', 1),
(3470, 219, 'Kamwenge', 'KAM', 1),
(3471, 219, 'Kanungu', 'KAN', 1),
(3472, 219, 'Kasese', 'KAS', 1),
(3473, 219, 'Kibaale', 'KBA', 1),
(3474, 219, 'Kisoro', 'KIS', 1),
(3475, 219, 'Kyenjojo', 'KYE', 1),
(3476, 219, 'Masindi', 'MSN', 1),
(3477, 219, 'Mbarara', 'MBR', 1),
(3478, 219, 'Ntungamo', 'NTU', 1),
(3479, 219, 'Rukungiri', 'RUK', 1),
(3480, 220, 'Cherkas\'ka Oblast\'', '71', 1),
(3481, 220, 'Chernihivs\'ka Oblast\'', '74', 1),
(3482, 220, 'Chernivets\'ka Oblast\'', '77', 1),
(3483, 220, 'Crimea', '43', 1),
(3484, 220, 'Dnipropetrovs\'ka Oblast\'', '12', 1),
(3485, 220, 'Donets\'ka Oblast\'', '14', 1),
(3486, 220, 'Ivano-Frankivs\'ka Oblast\'', '26', 1),
(3487, 220, 'Khersons\'ka Oblast\'', '65', 1),
(3488, 220, 'Khmel\'nyts\'ka Oblast\'', '68', 1),
(3489, 220, 'Kirovohrads\'ka Oblast\'', '35', 1),
(3490, 220, 'Kyiv', '30', 1),
(3491, 220, 'Kyivs\'ka Oblast\'', '32', 1),
(3492, 220, 'Luhans\'ka Oblast\'', '09', 1),
(3493, 220, 'L\'vivs\'ka Oblast\'', '46', 1),
(3494, 220, 'Mykolayivs\'ka Oblast\'', '48', 1),
(3495, 220, 'Odes\'ka Oblast\'', '51', 1),
(3496, 220, 'Poltavs\'ka Oblast\'', '53', 1),
(3497, 220, 'Rivnens\'ka Oblast\'', '56', 1),
(3498, 220, 'Sevastopol\'', '40', 1),
(3499, 220, 'Sums\'ka Oblast\'', '59', 1),
(3500, 220, 'Ternopil\'s\'ka Oblast\'', '61', 1),
(3501, 220, 'Vinnyts\'ka Oblast\'', '05', 1),
(3502, 220, 'Volyns\'ka Oblast\'', '07', 1),
(3503, 220, 'Zakarpats\'ka Oblast\'', '21', 1),
(3504, 220, 'Zaporiz\'ka Oblast\'', '23', 1),
(3505, 220, 'Zhytomyrs\'ka oblast\'', '18', 1),
(3506, 221, 'AbÅ« ZÌ§aby', 'AZ', 1),
(3507, 221, 'â€˜AjmÄn', 'AJ', 1),
(3508, 221, 'Al Fujayrah', 'FU', 1),
(3509, 221, 'Ash ShÄriqah', 'SH', 1),
(3510, 221, 'Dubai', 'DU', 1),
(3511, 221, 'Raâ€™s al Khaymah', 'RK', 1),
(3512, 221, 'Umm al Qaywayn', 'UQ', 1),
(3513, 222, 'Aberdeen', 'ABN', 1),
(3514, 222, 'Aberdeenshire', 'ABNS', 1),
(3515, 222, 'Anglesey', 'ANG', 1),
(3516, 222, 'Angus', 'AGS', 1),
(3517, 222, 'Argyll and Bute', 'ARY', 1),
(3518, 222, 'Bedfordshire', 'BEDS', 1),
(3519, 222, 'Berkshire', 'BERKS', 1),
(3520, 222, 'Blaenau Gwent', 'BLA', 1),
(3521, 222, 'Bridgend', 'BRI', 1),
(3522, 222, 'Bristol', 'BSTL', 1),
(3523, 222, 'Buckinghamshire', 'BUCKS', 1),
(3524, 222, 'Caerphilly', 'CAE', 1),
(3525, 222, 'Cambridgeshire', 'CAMBS', 1),
(3526, 222, 'Cardiff', 'CDF', 1),
(3527, 222, 'Carmarthenshire', 'CARM', 1),
(3528, 222, 'Ceredigion', 'CDGN', 1),
(3529, 222, 'Cheshire', 'CHES', 1),
(3530, 222, 'Clackmannanshire', 'CLACK', 1),
(3531, 222, 'Conwy', 'CON', 1),
(3532, 222, 'Cornwall', 'CORN', 1),
(3533, 222, 'Denbighshire', 'DNBG', 1),
(3534, 222, 'Derbyshire', 'DERBY', 1),
(3535, 222, 'Devon', 'DVN', 1),
(3536, 222, 'Dorset', 'DOR', 1),
(3537, 222, 'Dumfries and Galloway', 'DGL', 1),
(3538, 222, 'Dundee', 'DUND', 1),
(3539, 222, 'Durham', 'DHM', 1),
(3540, 222, 'East Ayrshire', 'ARYE', 1),
(3541, 222, 'East Dunbartonshire', 'DUNBE', 1),
(3542, 222, 'East Lothian', 'LOTE', 1),
(3543, 222, 'East Renfrewshire', 'RENE', 1),
(3544, 222, 'East Riding of Yorkshire', 'ERYS', 1),
(3545, 222, 'East Sussex', 'SXE', 1),
(3546, 222, 'Edinburgh', 'EDIN', 1),
(3547, 222, 'Essex', 'ESX', 1),
(3548, 222, 'Falkirk', 'FALK', 1),
(3549, 222, 'Fife', 'FFE', 1),
(3550, 222, 'Flintshire', 'FLINT', 1),
(3551, 222, 'Glasgow', 'GLAS', 1),
(3552, 222, 'Gloucestershire', 'GLOS', 1),
(3553, 222, 'Greater London', 'LDN', 1),
(3554, 222, 'Greater Manchester', 'MCH', 1),
(3555, 222, 'Gwynedd', 'GDD', 1),
(3556, 222, 'Hampshire', 'HANTS', 1),
(3557, 222, 'Herefordshire', 'HWR', 1),
(3558, 222, 'Hertfordshire', 'HERTS', 1),
(3559, 222, 'Highlands', 'HLD', 1),
(3560, 222, 'Inverclyde', 'IVER', 1),
(3561, 222, 'Isle of Wight', 'IOW', 1),
(3562, 222, 'Kent', 'KNT', 1),
(3563, 222, 'Lancashire', 'LANCS', 1),
(3564, 222, 'Leicestershire', 'LEICS', 1),
(3565, 222, 'Lincolnshire', 'LINCS', 1),
(3566, 222, 'Merseyside', 'MSY', 1),
(3567, 222, 'Merthyr Tydfil', 'MERT', 1),
(3568, 222, 'Midlothian', 'MLOT', 1),
(3569, 222, 'Monmouthshire', 'MMOUTH', 1),
(3570, 222, 'Moray', 'MORAY', 1),
(3571, 222, 'Neath Port Talbot', 'NPRTAL', 1),
(3572, 222, 'Newport', 'NEWPT', 1),
(3573, 222, 'Norfolk', 'NOR', 1),
(3574, 222, 'North Ayrshire', 'ARYN', 1),
(3575, 222, 'North Lanarkshire', 'LANN', 1),
(3576, 222, 'North Yorkshire', 'YSN', 1),
(3577, 222, 'Northamptonshire', 'NHM', 1),
(3578, 222, 'Northumberland', 'NLD', 1),
(3579, 222, 'Nottinghamshire', 'NOT', 1),
(3580, 222, 'Orkney Islands', 'ORK', 1),
(3581, 222, 'Oxfordshire', 'OFE', 1),
(3582, 222, 'Pembrokeshire', 'PEM', 1),
(3583, 222, 'Perth and Kinross', 'PERTH', 1),
(3584, 222, 'Powys', 'PWS', 1),
(3585, 222, 'Renfrewshire', 'REN', 1),
(3586, 222, 'Rhondda Cynon Taff', 'RHON', 1),
(3587, 222, 'Rutland', 'RUT', 1),
(3588, 222, 'Scottish Borders', 'BOR', 1),
(3589, 222, 'Shetland Islands', 'SHET', 1),
(3590, 222, 'Shropshire', 'SPE', 1),
(3591, 222, 'Somerset', 'SOM', 1),
(3592, 222, 'South Ayrshire', 'ARYS', 1),
(3593, 222, 'South Lanarkshire', 'LANS', 1),
(3594, 222, 'South Yorkshire', 'YSS', 1),
(3595, 222, 'Staffordshire', 'SFD', 1),
(3596, 222, 'Stirling', 'STIR', 1),
(3597, 222, 'Suffolk', 'SFK', 1),
(3598, 222, 'Surrey', 'SRY', 1),
(3599, 222, 'Swansea', 'SWAN', 1),
(3600, 222, 'Torfaen', 'TORF', 1),
(3601, 222, 'Tyne and Wear', 'TWR', 1),
(3602, 222, 'Vale of Glamorgan', 'VGLAM', 1),
(3603, 222, 'Warwickshire', 'WARKS', 1),
(3604, 222, 'West Dunbartonshire', 'WDUN', 1),
(3605, 222, 'West Lothian', 'WLOT', 1),
(3606, 222, 'West Midlands', 'WMD', 1),
(3607, 222, 'West Sussex', 'SXW', 1),
(3608, 222, 'West Yorkshire', 'YSW', 1),
(3609, 222, 'Western Isles', 'WIL', 1),
(3610, 222, 'Wiltshire', 'WLT', 1),
(3611, 222, 'Worcestershire', 'WORCS', 1),
(3612, 222, 'Wrexham', 'WRX', 1),
(3613, 223, 'Alabama', 'AL', 1),
(3614, 223, 'Alaska', 'AK', 1),
(3615, 223, 'American Samoa', 'AS', 1),
(3616, 223, 'Arizona', 'AZ', 1),
(3617, 223, 'Arkansas', 'AR', 1),
(3618, 223, 'Armed Forces Africa', 'AF', 1),
(3619, 223, 'Armed Forces Americas', 'AA', 1),
(3620, 223, 'Armed Forces Canada', 'AC', 1),
(3621, 223, 'Armed Forces Europe', 'AE', 1),
(3622, 223, 'Armed Forces Middle East', 'AM', 1),
(3623, 223, 'Armed Forces Pacific', 'AP', 1),
(3624, 223, 'California', 'CA', 1),
(3625, 223, 'Colorado', 'CO', 1),
(3626, 223, 'Connecticut', 'CT', 1),
(3627, 223, 'Delaware', 'DE', 1),
(3628, 223, 'District of Columbia', 'DC', 1),
(3629, 223, 'Federated States Of Micronesia', 'FM', 1),
(3630, 223, 'Florida', 'FL', 1),
(3631, 223, 'Georgia', 'GA', 1),
(3632, 223, 'Guam', 'GU', 1),
(3633, 223, 'Hawaii', 'HI', 1),
(3634, 223, 'Idaho', 'ID', 1),
(3635, 223, 'Illinois', 'IL', 1),
(3636, 223, 'Indiana', 'IN', 1),
(3637, 223, 'Iowa', 'IA', 1),
(3638, 223, 'Kansas', 'KS', 1),
(3639, 223, 'Kentucky', 'KY', 1),
(3640, 223, 'Louisiana', 'LA', 1),
(3641, 223, 'Maine', 'ME', 1),
(3642, 223, 'Marshall Islands', 'MH', 1),
(3643, 223, 'Maryland', 'MD', 1),
(3644, 223, 'Massachusetts', 'MA', 1),
(3645, 223, 'Michigan', 'MI', 1),
(3646, 223, 'Minnesota', 'MN', 1),
(3647, 223, 'Mississippi', 'MS', 1),
(3648, 223, 'Missouri', 'MO', 1),
(3649, 223, 'Montana', 'MT', 1),
(3650, 223, 'Nebraska', 'NE', 1),
(3651, 223, 'Nevada', 'NV', 1),
(3652, 223, 'New Hampshire', 'NH', 1),
(3653, 223, 'New Jersey', 'NJ', 1),
(3654, 223, 'New Mexico', 'NM', 1),
(3655, 223, 'New York', 'NY', 1),
(3656, 223, 'North Carolina', 'NC', 1),
(3657, 223, 'North Dakota', 'ND', 1),
(3658, 223, 'Northern Mariana Islands', 'MP', 1),
(3659, 223, 'Ohio', 'OH', 1),
(3660, 223, 'Oklahoma', 'OK', 1),
(3661, 223, 'Oregon', 'OR', 1),
(3662, 223, 'Palau', 'PW', 1),
(3663, 223, 'Pennsylvania', 'PA', 1),
(3664, 223, 'Puerto Rico', 'PR', 1),
(3665, 223, 'Rhode Island', 'RI', 1),
(3666, 223, 'South Carolina', 'SC', 1),
(3667, 223, 'South Dakota', 'SD', 1),
(3668, 223, 'Tennessee', 'TN', 1),
(3669, 223, 'Texas', 'TX', 1),
(3670, 223, 'Utah', 'UT', 1),
(3671, 223, 'Vermont', 'VT', 1),
(3672, 223, 'Virgin Islands', 'VI', 1),
(3673, 223, 'Virginia', 'VA', 1),
(3674, 223, 'Washington', 'WA', 1),
(3675, 223, 'West Virginia', 'WV', 1),
(3676, 223, 'Wisconsin', 'WI', 1),
(3677, 223, 'Wyoming', 'WY', 1),
(3678, 224, 'Baker Island', 'BI', 1),
(3679, 224, 'Howland Island', 'HI', 1),
(3680, 224, 'Jarvis Island', 'JI', 1),
(3681, 224, 'Johnston Atoll', 'JA', 1),
(3682, 224, 'Kingman Reef', 'KR', 1),
(3683, 224, 'Midway Atoll', 'MA', 1),
(3684, 224, 'Navassa Island', 'NI', 1),
(3685, 224, 'Palmyra Atoll', 'PA', 1),
(3686, 224, 'Wake Island', 'WI', 1),
(3687, 225, 'Artigas', 'AR', 1),
(3688, 225, 'Canelones', 'CA', 1),
(3689, 225, 'Cerro Largo', 'CL', 1),
(3690, 225, 'Colonia', 'CO', 1),
(3691, 225, 'Durazno', 'DU', 1),
(3692, 225, 'Flores', 'FS', 1),
(3693, 225, 'Florida', 'FA', 1),
(3694, 225, 'Lavalleja', 'LA', 1),
(3695, 225, 'Maldonado', 'MA', 1),
(3696, 225, 'Montevideo', 'MO', 1),
(3697, 225, 'Paysandu', 'PA', 1),
(3698, 225, 'Rio Negro', 'RN', 1),
(3699, 225, 'Rivera', 'RV', 1),
(3700, 225, 'Rocha', 'RO', 1),
(3701, 225, 'Salto', 'SL', 1),
(3702, 225, 'San Jose', 'SJ', 1),
(3703, 225, 'Soriano', 'SO', 1),
(3704, 225, 'Tacuarembo', 'TA', 1),
(3705, 225, 'Treinta y Tres', 'TT', 1),
(3706, 226, 'Andijon', 'AN', 1),
(3707, 226, 'Buxoro', 'BU', 1),
(3708, 226, 'Farg\'ona', 'FA', 1),
(3709, 226, 'Jizzax', 'JI', 1),
(3710, 226, 'Namangan', 'NG', 1),
(3711, 226, 'Navoiy', 'NW', 1),
(3712, 226, 'Qashqadaryo', 'QA', 1),
(3713, 226, 'Qoraqalpog\'iston Republikasi', 'QR', 1),
(3714, 226, 'Samarqand', 'SA', 1),
(3715, 226, 'Sirdaryo', 'SI', 1),
(3716, 226, 'Surxondaryo', 'SU', 1),
(3717, 226, 'Toshkent City', 'TK', 1),
(3718, 226, 'Toshkent Region', 'TO', 1),
(3719, 226, 'Xorazm', 'XO', 1),
(3720, 227, 'Malampa', 'MA', 1),
(3721, 227, 'Penama', 'PE', 1),
(3722, 227, 'Sanma', 'SA', 1),
(3723, 227, 'Shefa', 'SH', 1),
(3724, 227, 'Tafea', 'TA', 1),
(3725, 227, 'Torba', 'TO', 1),
(3726, 229, 'Amazonas', 'AM', 1),
(3727, 229, 'Anzoategui', 'AN', 1),
(3728, 229, 'Apure', 'AP', 1),
(3729, 229, 'Aragua', 'AR', 1),
(3730, 229, 'Barinas', 'BA', 1),
(3731, 229, 'Bolivar', 'BO', 1),
(3732, 229, 'Carabobo', 'CA', 1),
(3733, 229, 'Cojedes', 'CO', 1),
(3734, 229, 'Delta Amacuro', 'DA', 1),
(3735, 229, 'Dependencias Federales', 'DF', 1),
(3736, 229, 'Distrito Federal', 'DI', 1),
(3737, 229, 'Falcon', 'FA', 1),
(3738, 229, 'Guarico', 'GU', 1),
(3739, 229, 'Lara', 'LA', 1),
(3740, 229, 'Merida', 'ME', 1),
(3741, 229, 'Miranda', 'MI', 1),
(3742, 229, 'Monagas', 'MO', 1),
(3743, 229, 'Nueva Esparta', 'NE', 1),
(3744, 229, 'Portuguesa', 'PO', 1),
(3745, 229, 'Sucre', 'SU', 1),
(3746, 229, 'Tachira', 'TA', 1),
(3747, 229, 'Trujillo', 'TR', 1),
(3748, 229, 'Vargas', 'VA', 1),
(3749, 229, 'Yaracuy', 'YA', 1),
(3750, 229, 'Zulia', 'ZU', 1),
(3751, 230, 'An Giang', 'AG', 1),
(3752, 230, 'Bac Giang', 'BG', 1),
(3753, 230, 'Bac Kan', 'BK', 1),
(3754, 230, 'Bac Lieu', 'BL', 1),
(3755, 230, 'Bac Ninh', 'BC', 1),
(3756, 230, 'Ba Ria-Vung Tau', 'BR', 1),
(3757, 230, 'Ben Tre', 'BN', 1),
(3758, 230, 'Binh Dinh', 'BH', 1),
(3759, 230, 'Binh Duong', 'BU', 1),
(3760, 230, 'Binh Phuoc', 'BP', 1),
(3761, 230, 'Binh Thuan', 'BT', 1),
(3762, 230, 'Ca Mau', 'CM', 1),
(3763, 230, 'Can Tho', 'CT', 1),
(3764, 230, 'Cao Bang', 'CB', 1),
(3765, 230, 'Dak Lak', 'DL', 1),
(3766, 230, 'Dak Nong', 'DG', 1),
(3767, 230, 'Da Nang', 'DN', 1),
(3768, 230, 'Dien Bien', 'DB', 1),
(3769, 230, 'Dong Nai', 'DI', 1),
(3770, 230, 'Dong Thap', 'DT', 1),
(3771, 230, 'Gia Lai', 'GL', 1),
(3772, 230, 'Ha Giang', 'HG', 1),
(3773, 230, 'Hai Duong', 'HD', 1),
(3774, 230, 'Hai Phong', 'HP', 1),
(3775, 230, 'Ha Nam', 'HM', 1),
(3776, 230, 'Ha Noi', 'HI', 1),
(3777, 230, 'Ha Tay', 'HT', 1),
(3778, 230, 'Ha Tinh', 'HH', 1),
(3779, 230, 'Hoa Binh', 'HB', 1),
(3780, 230, 'Ho Chi Minh City', 'HC', 1),
(3781, 230, 'Hau Giang', 'HU', 1),
(3782, 230, 'Hung Yen', 'HY', 1),
(3783, 232, 'Saint Croix', 'C', 1),
(3784, 232, 'Saint John', 'J', 1),
(3785, 232, 'Saint Thomas', 'T', 1),
(3786, 233, 'Alo', 'A', 1),
(3787, 233, 'Sigave', 'S', 1),
(3788, 233, 'Wallis', 'W', 1),
(3789, 235, 'Abyan', 'AB', 1),
(3790, 235, 'Adan', 'AD', 1),
(3791, 235, 'Amran', 'AM', 1),
(3792, 235, 'Al Bayda', 'BA', 1),
(3793, 235, 'Ad Dali', 'DA', 1),
(3794, 235, 'Dhamar', 'DH', 1),
(3795, 235, 'Hadramawt', 'HD', 1),
(3796, 235, 'Hajjah', 'HJ', 1),
(3797, 235, 'Al Hudaydah', 'HU', 1),
(3798, 235, 'Ibb', 'IB', 1),
(3799, 235, 'Al Jawf', 'JA', 1),
(3800, 235, 'Lahij', 'LA', 1),
(3801, 235, 'Ma\'rib', 'MA', 1),
(3802, 235, 'Al Mahrah', 'MR', 1),
(3803, 235, 'Al Mahwit', 'MW', 1),
(3804, 235, 'Sa\'dah', 'SD', 1),
(3805, 235, 'San\'a', 'SN', 1),
(3806, 235, 'Shabwah', 'SH', 1),
(3807, 235, 'Ta\'izz', 'TA', 1),
(3812, 237, 'Bas-Congo', 'BC', 1),
(3813, 237, 'Bandundu', 'BN', 1),
(3814, 237, 'Equateur', 'EQ', 1),
(3815, 237, 'Katanga', 'KA', 1),
(3816, 237, 'Kasai-Oriental', 'KE', 1),
(3817, 237, 'Kinshasa', 'KN', 1),
(3818, 237, 'Kasai-Occidental', 'KW', 1),
(3819, 237, 'Maniema', 'MA', 1),
(3820, 237, 'Nord-Kivu', 'NK', 1),
(3821, 237, 'Orientale', 'OR', 1),
(3822, 237, 'Sud-Kivu', 'SK', 1),
(3823, 238, 'Central', 'CE', 1),
(3824, 238, 'Copperbelt', 'CB', 1),
(3825, 238, 'Eastern', 'EA', 1),
(3826, 238, 'Luapula', 'LP', 1),
(3827, 238, 'Lusaka', 'LK', 1),
(3828, 238, 'Northern', 'NO', 1),
(3829, 238, 'North-Western', 'NW', 1),
(3830, 238, 'Southern', 'SO', 1),
(3831, 238, 'Western', 'WE', 1),
(3832, 239, 'Bulawayo', 'BU', 1),
(3833, 239, 'Harare', 'HA', 1),
(3834, 239, 'Manicaland', 'ML', 1),
(3835, 239, 'Mashonaland Central', 'MC', 1),
(3836, 239, 'Mashonaland East', 'ME', 1),
(3837, 239, 'Mashonaland West', 'MW', 1),
(3838, 239, 'Masvingo', 'MV', 1),
(3839, 239, 'Matabeleland North', 'MN', 1),
(3840, 239, 'Matabeleland South', 'MS', 1),
(3841, 239, 'Midlands', 'MD', 1),
(3861, 105, 'Campobasso', 'CB', 1),
(3863, 105, 'Caserta', 'CE', 1),
(3864, 105, 'Catania', 'CT', 1),
(3865, 105, 'Catanzaro', 'CZ', 1),
(3866, 105, 'Chieti', 'CH', 1),
(3867, 105, 'Como', 'CO', 1),
(3868, 105, 'Cosenza', 'CS', 1),
(3869, 105, 'Cremona', 'CR', 1),
(3870, 105, 'Crotone', 'KR', 1),
(3871, 105, 'Cuneo', 'CN', 1),
(3872, 105, 'Enna', 'EN', 1),
(3873, 105, 'Ferrara', 'FE', 1),
(3874, 105, 'Firenze', 'FI', 1),
(3875, 105, 'Foggia', 'FG', 1),
(3876, 105, 'Forli-Cesena', 'FC', 1),
(3877, 105, 'Frosinone', 'FR', 1),
(3878, 105, 'Genova', 'GE', 1),
(3879, 105, 'Gorizia', 'GO', 1),
(3880, 105, 'Grosseto', 'GR', 1),
(3881, 105, 'Imperia', 'IM', 1),
(3882, 105, 'Isernia', 'IS', 1),
(3883, 105, 'L&#39;Aquila', 'AQ', 1),
(3884, 105, 'La Spezia', 'SP', 1),
(3885, 105, 'Latina', 'LT', 1),
(3886, 105, 'Lecce', 'LE', 1),
(3887, 105, 'Lecco', 'LC', 1),
(3888, 105, 'Livorno', 'LI', 1),
(3889, 105, 'Lodi', 'LO', 1),
(3890, 105, 'Lucca', 'LU', 1),
(3891, 105, 'Macerata', 'MC', 1),
(3892, 105, 'Mantova', 'MN', 1),
(3893, 105, 'Massa-Carrara', 'MS', 1),
(3894, 105, 'Matera', 'MT', 1),
(3896, 105, 'Messina', 'ME', 1),
(3897, 105, 'Milano', 'MI', 1),
(3898, 105, 'Modena', 'MO', 1),
(3899, 105, 'Napoli', 'NA', 1),
(3900, 105, 'Novara', 'NO', 1),
(3901, 105, 'Nuoro', 'NU', 1),
(3904, 105, 'Oristano', 'OR', 1),
(3905, 105, 'Padova', 'PD', 1),
(3906, 105, 'Palermo', 'PA', 1),
(3907, 105, 'Parma', 'PR', 1),
(3908, 105, 'Pavia', 'PV', 1),
(3909, 105, 'Perugia', 'PG', 1),
(3910, 105, 'Pesaro e Urbino', 'PU', 1),
(3911, 105, 'Pescara', 'PE', 1),
(3912, 105, 'Piacenza', 'PC', 1),
(3913, 105, 'Pisa', 'PI', 1),
(3914, 105, 'Pistoia', 'PT', 1),
(3915, 105, 'Pordenone', 'PN', 1),
(3916, 105, 'Potenza', 'PZ', 1),
(3917, 105, 'Prato', 'PO', 1),
(3918, 105, 'Ragusa', 'RG', 1),
(3919, 105, 'Ravenna', 'RA', 1),
(3920, 105, 'Reggio Calabria', 'RC', 1),
(3921, 105, 'Reggio Emilia', 'RE', 1),
(3922, 105, 'Rieti', 'RI', 1),
(3923, 105, 'Rimini', 'RN', 1),
(3924, 105, 'Roma', 'RM', 1),
(3925, 105, 'Rovigo', 'RO', 1),
(3926, 105, 'Salerno', 'SA', 1),
(3927, 105, 'Sassari', 'SS', 1),
(3928, 105, 'Savona', 'SV', 1),
(3929, 105, 'Siena', 'SI', 1),
(3930, 105, 'Siracusa', 'SR', 1),
(3931, 105, 'Sondrio', 'SO', 1),
(3932, 105, 'Taranto', 'TA', 1),
(3933, 105, 'Teramo', 'TE', 1),
(3934, 105, 'Terni', 'TR', 1),
(3935, 105, 'Torino', 'TO', 1),
(3936, 105, 'Trapani', 'TP', 1),
(3937, 105, 'Trento', 'TN', 1),
(3938, 105, 'Treviso', 'TV', 1),
(3939, 105, 'Trieste', 'TS', 1),
(3940, 105, 'Udine', 'UD', 1),
(3941, 105, 'Varese', 'VA', 1),
(3942, 105, 'Venezia', 'VE', 1),
(3943, 105, 'Verbano-Cusio-Ossola', 'VB', 1),
(3944, 105, 'Vercelli', 'VC', 1),
(3945, 105, 'Verona', 'VR', 1),
(3946, 105, 'Vibo Valentia', 'VV', 1),
(3947, 105, 'Vicenza', 'VI', 1),
(3948, 105, 'Viterbo', 'VT', 1),
(3949, 222, 'County Antrim', 'ANT', 1),
(3950, 222, 'County Armagh', 'ARM', 1),
(3951, 222, 'County Down', 'DOW', 1),
(3952, 222, 'County Fermanagh', 'FER', 1),
(3953, 222, 'County Londonderry', 'LDY', 1),
(3954, 222, 'County Tyrone', 'TYR', 1),
(3955, 222, 'Cumbria', 'CMA', 1),
(3956, 190, 'Pomurska', '1', 1),
(3957, 190, 'Podravska', '2', 1),
(3958, 190, 'Koroška', '3', 1),
(3959, 190, 'Savinjska', '4', 1),
(3960, 190, 'Zasavska', '5', 1),
(3961, 190, 'Spodnjeposavska', '6', 1),
(3962, 190, 'Jugovzhodna Slovenija', '7', 1),
(3963, 190, 'Osrednjeslovenska', '8', 1),
(3964, 190, 'Gorenjska', '9', 1),
(3965, 190, 'Notranjsko-kraška', '10', 1),
(3966, 190, 'Goriška', '11', 1),
(3967, 190, 'Obalno-kraška', '12', 1),
(3968, 33, 'Ruse', '', 1),
(3969, 101, 'Alborz', 'ALB', 1),
(3970, 21, 'Brussels-Capital Region', 'BRU', 1),
(3971, 138, 'Aguascalientes', 'AG', 1),
(3973, 242, 'Andrijevica', '01', 1),
(3974, 242, 'Bar', '02', 1),
(3975, 242, 'Berane', '03', 1),
(3976, 242, 'Bijelo Polje', '04', 1),
(3977, 242, 'Budva', '05', 1),
(3978, 242, 'Cetinje', '06', 1),
(3979, 242, 'Danilovgrad', '07', 1),
(3980, 242, 'Herceg-Novi', '08', 1),
(3981, 242, 'Kolašin', '09', 1),
(3982, 242, 'Kotor', '10', 1),
(3983, 242, 'Mojkovac', '11', 1),
(3984, 242, 'Nikšić', '12', 1),
(3985, 242, 'Plav', '13', 1),
(3986, 242, 'Pljevlja', '14', 1),
(3987, 242, 'Plužine', '15', 1),
(3988, 242, 'Podgorica', '16', 1),
(3989, 242, 'Rožaje', '17', 1),
(3990, 242, 'Šavnik', '18', 1),
(3991, 242, 'Tivat', '19', 1),
(3992, 242, 'Ulcinj', '20', 1),
(3993, 242, 'Žabljak', '21', 1),
(3994, 243, 'Belgrade', '00', 1),
(3995, 243, 'North Bačka', '01', 1),
(3996, 243, 'Central Banat', '02', 1),
(3997, 243, 'North Banat', '03', 1),
(3998, 243, 'South Banat', '04', 1),
(3999, 243, 'West Bačka', '05', 1),
(4000, 243, 'South Bačka', '06', 1),
(4001, 243, 'Srem', '07', 1),
(4002, 243, 'Mačva', '08', 1),
(4003, 243, 'Kolubara', '09', 1),
(4004, 243, 'Podunavlje', '10', 1),
(4005, 243, 'Braničevo', '11', 1),
(4006, 243, 'Šumadija', '12', 1),
(4007, 243, 'Pomoravlje', '13', 1),
(4008, 243, 'Bor', '14', 1),
(4009, 243, 'Zaječar', '15', 1),
(4010, 243, 'Zlatibor', '16', 1),
(4011, 243, 'Moravica', '17', 1),
(4012, 243, 'Raška', '18', 1),
(4013, 243, 'Rasina', '19', 1),
(4014, 243, 'Nišava', '20', 1),
(4015, 243, 'Toplica', '21', 1),
(4016, 243, 'Pirot', '22', 1),
(4017, 243, 'Jablanica', '23', 1),
(4018, 243, 'Pčinja', '24', 1),
(4020, 245, 'Bonaire', 'BO', 1),
(4021, 245, 'Saba', 'SA', 1),
(4022, 245, 'Sint Eustatius', 'SE', 1),
(4023, 248, 'Central Equatoria', 'EC', 1),
(4024, 248, 'Eastern Equatoria', 'EE', 1),
(4025, 248, 'Jonglei', 'JG', 1),
(4026, 248, 'Lakes', 'LK', 1),
(4027, 248, 'Northern Bahr el-Ghazal', 'BN', 1),
(4028, 248, 'Unity', 'UY', 1),
(4029, 248, 'Upper Nile', 'NU', 1),
(4030, 248, 'Warrap', 'WR', 1),
(4031, 248, 'Western Bahr el-Ghazal', 'BW', 1),
(4032, 248, 'Western Equatoria', 'EW', 1),
(4036, 117, 'Ainaži, Salacgrīvas novads', '0661405', 1),
(4037, 117, 'Aizkraukle, Aizkraukles novads', '0320201', 1),
(4038, 117, 'Aizkraukles novads', '0320200', 1),
(4039, 117, 'Aizpute, Aizputes novads', '0640605', 1),
(4040, 117, 'Aizputes novads', '0640600', 1),
(4041, 117, 'Aknīste, Aknīstes novads', '0560805', 1),
(4042, 117, 'Aknīstes novads', '0560800', 1),
(4043, 117, 'Aloja, Alojas novads', '0661007', 1),
(4044, 117, 'Alojas novads', '0661000', 1),
(4045, 117, 'Alsungas novads', '0624200', 1),
(4046, 117, 'Alūksne, Alūksnes novads', '0360201', 1),
(4047, 117, 'Alūksnes novads', '0360200', 1),
(4048, 117, 'Amatas novads', '0424701', 1),
(4049, 117, 'Ape, Apes novads', '0360805', 1),
(4050, 117, 'Apes novads', '0360800', 1),
(4051, 117, 'Auce, Auces novads', '0460805', 1),
(4052, 117, 'Auces novads', '0460800', 1),
(4053, 117, 'Ādažu novads', '0804400', 1),
(4054, 117, 'Babītes novads', '0804900', 1),
(4055, 117, 'Baldone, Baldones novads', '0800605', 1),
(4056, 117, 'Baldones novads', '0800600', 1),
(4057, 117, 'Baloži, Ķekavas novads', '0800807', 1),
(4058, 117, 'Baltinavas novads', '0384400', 1),
(4059, 117, 'Balvi, Balvu novads', '0380201', 1),
(4060, 117, 'Balvu novads', '0380200', 1),
(4061, 117, 'Bauska, Bauskas novads', '0400201', 1),
(4062, 117, 'Bauskas novads', '0400200', 1),
(4063, 117, 'Beverīnas novads', '0964700', 1),
(4064, 117, 'Brocēni, Brocēnu novads', '0840605', 1),
(4065, 117, 'Brocēnu novads', '0840601', 1),
(4066, 117, 'Burtnieku novads', '0967101', 1),
(4067, 117, 'Carnikavas novads', '0805200', 1),
(4068, 117, 'Cesvaine, Cesvaines novads', '0700807', 1),
(4069, 117, 'Cesvaines novads', '0700800', 1),
(4070, 117, 'Cēsis, Cēsu novads', '0420201', 1),
(4071, 117, 'Cēsu novads', '0420200', 1),
(4072, 117, 'Ciblas novads', '0684901', 1),
(4073, 117, 'Dagda, Dagdas novads', '0601009', 1),
(4074, 117, 'Dagdas novads', '0601000', 1),
(4075, 117, 'Daugavpils', '0050000', 1),
(4076, 117, 'Daugavpils novads', '0440200', 1),
(4077, 117, 'Dobele, Dobeles novads', '0460201', 1),
(4078, 117, 'Dobeles novads', '0460200', 1),
(4079, 117, 'Dundagas novads', '0885100', 1),
(4080, 117, 'Durbe, Durbes novads', '0640807', 1),
(4081, 117, 'Durbes novads', '0640801', 1),
(4082, 117, 'Engures novads', '0905100', 1),
(4083, 117, 'Ērgļu novads', '0705500', 1),
(4084, 117, 'Garkalnes novads', '0806000', 1),
(4085, 117, 'Grobiņa, Grobiņas novads', '0641009', 1),
(4086, 117, 'Grobiņas novads', '0641000', 1),
(4087, 117, 'Gulbene, Gulbenes novads', '0500201', 1),
(4088, 117, 'Gulbenes novads', '0500200', 1),
(4089, 117, 'Iecavas novads', '0406400', 1),
(4090, 117, 'Ikšķile, Ikšķiles novads', '0740605', 1),
(4091, 117, 'Ikšķiles novads', '0740600', 1),
(4092, 117, 'Ilūkste, Ilūkstes novads', '0440807', 1),
(4093, 117, 'Ilūkstes novads', '0440801', 1),
(4094, 117, 'Inčukalna novads', '0801800', 1),
(4095, 117, 'Jaunjelgava, Jaunjelgavas novads', '0321007', 1),
(4096, 117, 'Jaunjelgavas novads', '0321000', 1),
(4097, 117, 'Jaunpiebalgas novads', '0425700', 1),
(4098, 117, 'Jaunpils novads', '0905700', 1),
(4099, 117, 'Jelgava', '0090000', 1),
(4100, 117, 'Jelgavas novads', '0540200', 1),
(4101, 117, 'Jēkabpils', '0110000', 1),
(4102, 117, 'Jēkabpils novads', '0560200', 1),
(4103, 117, 'Jūrmala', '0130000', 1),
(4104, 117, 'Kalnciems, Jelgavas novads', '0540211', 1),
(4105, 117, 'Kandava, Kandavas novads', '0901211', 1),
(4106, 117, 'Kandavas novads', '0901201', 1),
(4107, 117, 'Kārsava, Kārsavas novads', '0681009', 1),
(4108, 117, 'Kārsavas novads', '0681000', 1),
(4109, 117, 'Kocēnu novads ,bij. Valmieras)', '0960200', 1),
(4110, 117, 'Kokneses novads', '0326100', 1),
(4111, 117, 'Krāslava, Krāslavas novads', '0600201', 1),
(4112, 117, 'Krāslavas novads', '0600202', 1),
(4113, 117, 'Krimuldas novads', '0806900', 1),
(4114, 117, 'Krustpils novads', '0566900', 1),
(4115, 117, 'Kuldīga, Kuldīgas novads', '0620201', 1),
(4116, 117, 'Kuldīgas novads', '0620200', 1),
(4117, 117, 'Ķeguma novads', '0741001', 1),
(4118, 117, 'Ķegums, Ķeguma novads', '0741009', 1),
(4119, 117, 'Ķekavas novads', '0800800', 1),
(4120, 117, 'Lielvārde, Lielvārdes novads', '0741413', 1),
(4121, 117, 'Lielvārdes novads', '0741401', 1),
(4122, 117, 'Liepāja', '0170000', 1),
(4123, 117, 'Limbaži, Limbažu novads', '0660201', 1),
(4124, 117, 'Limbažu novads', '0660200', 1),
(4125, 117, 'Līgatne, Līgatnes novads', '0421211', 1),
(4126, 117, 'Līgatnes novads', '0421200', 1),
(4127, 117, 'Līvāni, Līvānu novads', '0761211', 1),
(4128, 117, 'Līvānu novads', '0761201', 1),
(4129, 117, 'Lubāna, Lubānas novads', '0701413', 1),
(4130, 117, 'Lubānas novads', '0701400', 1),
(4131, 117, 'Ludza, Ludzas novads', '0680201', 1),
(4132, 117, 'Ludzas novads', '0680200', 1),
(4133, 117, 'Madona, Madonas novads', '0700201', 1),
(4134, 117, 'Madonas novads', '0700200', 1),
(4135, 117, 'Mazsalaca, Mazsalacas novads', '0961011', 1),
(4136, 117, 'Mazsalacas novads', '0961000', 1),
(4137, 117, 'Mālpils novads', '0807400', 1),
(4138, 117, 'Mārupes novads', '0807600', 1),
(4139, 117, 'Mērsraga novads', '0887600', 1),
(4140, 117, 'Naukšēnu novads', '0967300', 1),
(4141, 117, 'Neretas novads', '0327100', 1),
(4142, 117, 'Nīcas novads', '0647900', 1),
(4143, 117, 'Ogre, Ogres novads', '0740201', 1),
(4144, 117, 'Ogres novads', '0740202', 1),
(4145, 117, 'Olaine, Olaines novads', '0801009', 1),
(4146, 117, 'Olaines novads', '0801000', 1),
(4147, 117, 'Ozolnieku novads', '0546701', 1),
(4148, 117, 'Pārgaujas novads', '0427500', 1),
(4149, 117, 'Pāvilosta, Pāvilostas novads', '0641413', 1),
(4150, 117, 'Pāvilostas novads', '0641401', 1),
(4151, 117, 'Piltene, Ventspils novads', '0980213', 1),
(4152, 117, 'Pļaviņas, Pļaviņu novads', '0321413', 1),
(4153, 117, 'Pļaviņu novads', '0321400', 1),
(4154, 117, 'Preiļi, Preiļu novads', '0760201', 1),
(4155, 117, 'Preiļu novads', '0760202', 1),
(4156, 117, 'Priekule, Priekules novads', '0641615', 1),
(4157, 117, 'Priekules novads', '0641600', 1),
(4158, 117, 'Priekuļu novads', '0427300', 1),
(4159, 117, 'Raunas novads', '0427700', 1),
(4160, 117, 'Rēzekne', '0210000', 1),
(4161, 117, 'Rēzeknes novads', '0780200', 1),
(4162, 117, 'Riebiņu novads', '0766300', 1),
(4163, 117, 'Rīga', '0010000', 1),
(4164, 117, 'Rojas novads', '0888300', 1),
(4165, 117, 'Ropažu novads', '0808400', 1),
(4166, 117, 'Rucavas novads', '0648500', 1),
(4167, 117, 'Rugāju novads', '0387500', 1),
(4168, 117, 'Rundāles novads', '0407700', 1),
(4169, 117, 'Rūjiena, Rūjienas novads', '0961615', 1),
(4170, 117, 'Rūjienas novads', '0961600', 1),
(4171, 117, 'Sabile, Talsu novads', '0880213', 1),
(4172, 117, 'Salacgrīva, Salacgrīvas novads', '0661415', 1),
(4173, 117, 'Salacgrīvas novads', '0661400', 1),
(4174, 117, 'Salas novads', '0568700', 1),
(4175, 117, 'Salaspils novads', '0801200', 1),
(4176, 117, 'Salaspils, Salaspils novads', '0801211', 1),
(4177, 117, 'Saldus novads', '0840200', 1),
(4178, 117, 'Saldus, Saldus novads', '0840201', 1),
(4179, 117, 'Saulkrasti, Saulkrastu novads', '0801413', 1),
(4180, 117, 'Saulkrastu novads', '0801400', 1),
(4181, 117, 'Seda, Strenču novads', '0941813', 1),
(4182, 117, 'Sējas novads', '0809200', 1),
(4183, 117, 'Sigulda, Siguldas novads', '0801615', 1),
(4184, 117, 'Siguldas novads', '0801601', 1),
(4185, 117, 'Skrīveru novads', '0328200', 1),
(4186, 117, 'Skrunda, Skrundas novads', '0621209', 1),
(4187, 117, 'Skrundas novads', '0621200', 1),
(4188, 117, 'Smiltene, Smiltenes novads', '0941615', 1),
(4189, 117, 'Smiltenes novads', '0941600', 1),
(4190, 117, 'Staicele, Alojas novads', '0661017', 1),
(4191, 117, 'Stende, Talsu novads', '0880215', 1),
(4192, 117, 'Stopiņu novads', '0809600', 1),
(4193, 117, 'Strenči, Strenču novads', '0941817', 1),
(4194, 117, 'Strenču novads', '0941800', 1),
(4195, 117, 'Subate, Ilūkstes novads', '0440815', 1),
(4196, 117, 'Talsi, Talsu novads', '0880201', 1),
(4197, 117, 'Talsu novads', '0880200', 1),
(4198, 117, 'Tērvetes novads', '0468900', 1),
(4199, 117, 'Tukuma novads', '0900200', 1),
(4200, 117, 'Tukums, Tukuma novads', '0900201', 1),
(4201, 117, 'Vaiņodes novads', '0649300', 1),
(4202, 117, 'Valdemārpils, Talsu novads', '0880217', 1),
(4203, 117, 'Valka, Valkas novads', '0940201', 1),
(4204, 117, 'Valkas novads', '0940200', 1),
(4205, 117, 'Valmiera', '0250000', 1),
(4206, 117, 'Vangaži, Inčukalna novads', '0801817', 1),
(4207, 117, 'Varakļāni, Varakļānu novads', '0701817', 1),
(4208, 117, 'Varakļānu novads', '0701800', 1),
(4209, 117, 'Vārkavas novads', '0769101', 1),
(4210, 117, 'Vecpiebalgas novads', '0429300', 1),
(4211, 117, 'Vecumnieku novads', '0409500', 1),
(4212, 117, 'Ventspils', '0270000', 1),
(4213, 117, 'Ventspils novads', '0980200', 1),
(4214, 117, 'Viesīte, Viesītes novads', '0561815', 1),
(4215, 117, 'Viesītes novads', '0561800', 1),
(4216, 117, 'Viļaka, Viļakas novads', '0381615', 1),
(4217, 117, 'Viļakas novads', '0381600', 1),
(4218, 117, 'Viļāni, Viļānu novads', '0781817', 1),
(4219, 117, 'Viļānu novads', '0781800', 1),
(4220, 117, 'Zilupe, Zilupes novads', '0681817', 1),
(4221, 117, 'Zilupes novads', '0681801', 1),
(4222, 43, 'Arica y Parinacota', 'AP', 1),
(4223, 43, 'Los Rios', 'LR', 1),
(4224, 220, 'Kharkivs\'ka Oblast\'', '63', 1),
(4225, 118, 'Beirut', 'LB-BR', 1),
(4226, 118, 'Bekaa', 'LB-BE', 1),
(4227, 118, 'Mount Lebanon', 'LB-ML', 1),
(4228, 118, 'Nabatieh', 'LB-NB', 1),
(4229, 118, 'North', 'LB-NR', 1),
(4230, 118, 'South', 'LB-ST', 1),
(4231, 99, 'Telangana', 'TS', 1),
(4232, 44, 'Qinghai', 'QH', 1),
(4233, 100, 'Papua Barat', 'PB', 1),
(4234, 100, 'Sulawesi Barat', 'SR', 1),
(4235, 100, 'Kepulauan Riau', 'KR', 1),
(4236, 105, 'Barletta-Andria-Trani', 'BT', 1),
(4237, 105, 'Fermo', 'FM', 1),
(4238, 105, 'Monza Brianza', 'MB', 1);

-- --------------------------------------------------------

--
-- Table structure for table `oc_zone_to_geo_zone`
--

CREATE TABLE `oc_zone_to_geo_zone` (
  `zone_to_geo_zone_id` int(11) NOT NULL,
  `country_id` int(11) NOT NULL,
  `zone_id` int(11) NOT NULL DEFAULT '0',
  `geo_zone_id` int(11) NOT NULL,
  `date_added` datetime NOT NULL,
  `date_modified` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `oc_zone_to_geo_zone`
--

INSERT INTO `oc_zone_to_geo_zone` (`zone_to_geo_zone_id`, `country_id`, `zone_id`, `geo_zone_id`, `date_added`, `date_modified`) VALUES
(1, 222, 0, 4, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 222, 3513, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 222, 3514, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 222, 3515, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, 222, 3516, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(6, 222, 3517, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(7, 222, 3518, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(8, 222, 3519, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(9, 222, 3520, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(10, 222, 3521, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(11, 222, 3522, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(12, 222, 3523, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(13, 222, 3524, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(14, 222, 3525, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(15, 222, 3526, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(16, 222, 3527, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(17, 222, 3528, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(18, 222, 3529, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(19, 222, 3530, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(20, 222, 3531, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(21, 222, 3532, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(22, 222, 3533, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(23, 222, 3534, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(24, 222, 3535, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(25, 222, 3536, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(26, 222, 3537, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(27, 222, 3538, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(28, 222, 3539, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(29, 222, 3540, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(30, 222, 3541, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(31, 222, 3542, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(32, 222, 3543, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(33, 222, 3544, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(34, 222, 3545, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(35, 222, 3546, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(36, 222, 3547, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(37, 222, 3548, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(38, 222, 3549, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(39, 222, 3550, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(40, 222, 3551, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(41, 222, 3552, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(42, 222, 3553, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(43, 222, 3554, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(44, 222, 3555, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(45, 222, 3556, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(46, 222, 3557, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(47, 222, 3558, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(48, 222, 3559, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(49, 222, 3560, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(50, 222, 3561, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(51, 222, 3562, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(52, 222, 3563, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(53, 222, 3564, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(54, 222, 3565, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(55, 222, 3566, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(56, 222, 3567, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(57, 222, 3568, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(58, 222, 3569, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(59, 222, 3570, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(60, 222, 3571, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(61, 222, 3572, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(62, 222, 3573, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(63, 222, 3574, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(64, 222, 3575, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(65, 222, 3576, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(66, 222, 3577, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(67, 222, 3578, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(68, 222, 3579, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(69, 222, 3580, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(70, 222, 3581, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(71, 222, 3582, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(72, 222, 3583, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(73, 222, 3584, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(74, 222, 3585, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(75, 222, 3586, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(76, 222, 3587, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(77, 222, 3588, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(78, 222, 3589, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(79, 222, 3590, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(80, 222, 3591, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(81, 222, 3592, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(82, 222, 3593, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(83, 222, 3594, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(84, 222, 3595, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(85, 222, 3596, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(86, 222, 3597, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(87, 222, 3598, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(88, 222, 3599, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(89, 222, 3600, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(90, 222, 3601, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(91, 222, 3602, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(92, 222, 3603, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(93, 222, 3604, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(94, 222, 3605, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(95, 222, 3606, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(96, 222, 3607, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(97, 222, 3608, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(98, 222, 3609, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(99, 222, 3610, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(100, 222, 3611, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(101, 222, 3612, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(102, 222, 3949, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(103, 222, 3950, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(104, 222, 3951, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(105, 222, 3952, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(106, 222, 3953, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(107, 222, 3954, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(108, 222, 3955, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(109, 222, 3972, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `oc_address`
--
ALTER TABLE `oc_address`
  ADD PRIMARY KEY (`address_id`),
  ADD KEY `customer_id` (`customer_id`);

--
-- Indexes for table `oc_api`
--
ALTER TABLE `oc_api`
  ADD PRIMARY KEY (`api_id`);

--
-- Indexes for table `oc_api_ip`
--
ALTER TABLE `oc_api_ip`
  ADD PRIMARY KEY (`api_ip_id`);

--
-- Indexes for table `oc_api_session`
--
ALTER TABLE `oc_api_session`
  ADD PRIMARY KEY (`api_session_id`);

--
-- Indexes for table `oc_attribute`
--
ALTER TABLE `oc_attribute`
  ADD PRIMARY KEY (`attribute_id`);

--
-- Indexes for table `oc_attribute_description`
--
ALTER TABLE `oc_attribute_description`
  ADD PRIMARY KEY (`attribute_id`,`language_id`);

--
-- Indexes for table `oc_attribute_group`
--
ALTER TABLE `oc_attribute_group`
  ADD PRIMARY KEY (`attribute_group_id`);

--
-- Indexes for table `oc_attribute_group_description`
--
ALTER TABLE `oc_attribute_group_description`
  ADD PRIMARY KEY (`attribute_group_id`,`language_id`);

--
-- Indexes for table `oc_banner`
--
ALTER TABLE `oc_banner`
  ADD PRIMARY KEY (`banner_id`);

--
-- Indexes for table `oc_banner_image`
--
ALTER TABLE `oc_banner_image`
  ADD PRIMARY KEY (`banner_image_id`);

--
-- Indexes for table `oc_blogger`
--
ALTER TABLE `oc_blogger`
  ADD PRIMARY KEY (`blogger_id`);

--
-- Indexes for table `oc_blogger_comment`
--
ALTER TABLE `oc_blogger_comment`
  ADD PRIMARY KEY (`blogger_comment_id`,`blogger_id`);

--
-- Indexes for table `oc_blogger_comment_description`
--
ALTER TABLE `oc_blogger_comment_description`
  ADD PRIMARY KEY (`blogger_comment_id`,`language_id`);

--
-- Indexes for table `oc_blogger_description`
--
ALTER TABLE `oc_blogger_description`
  ADD PRIMARY KEY (`blogger_id`,`language_id`);

--
-- Indexes for table `oc_cart`
--
ALTER TABLE `oc_cart`
  ADD PRIMARY KEY (`cart_id`),
  ADD KEY `cart_id` (`api_id`,`customer_id`,`session_id`,`product_id`,`recurring_id`);

--
-- Indexes for table `oc_category`
--
ALTER TABLE `oc_category`
  ADD PRIMARY KEY (`category_id`),
  ADD KEY `parent_id` (`parent_id`);

--
-- Indexes for table `oc_category_description`
--
ALTER TABLE `oc_category_description`
  ADD PRIMARY KEY (`category_id`,`language_id`),
  ADD KEY `name` (`name`);

--
-- Indexes for table `oc_category_filter`
--
ALTER TABLE `oc_category_filter`
  ADD PRIMARY KEY (`category_id`,`filter_id`);

--
-- Indexes for table `oc_category_path`
--
ALTER TABLE `oc_category_path`
  ADD PRIMARY KEY (`category_id`,`path_id`);

--
-- Indexes for table `oc_category_to_layout`
--
ALTER TABLE `oc_category_to_layout`
  ADD PRIMARY KEY (`category_id`,`store_id`);

--
-- Indexes for table `oc_category_to_store`
--
ALTER TABLE `oc_category_to_store`
  ADD PRIMARY KEY (`category_id`,`store_id`);

--
-- Indexes for table `oc_country`
--
ALTER TABLE `oc_country`
  ADD PRIMARY KEY (`country_id`);

--
-- Indexes for table `oc_coupon`
--
ALTER TABLE `oc_coupon`
  ADD PRIMARY KEY (`coupon_id`);

--
-- Indexes for table `oc_coupon_category`
--
ALTER TABLE `oc_coupon_category`
  ADD PRIMARY KEY (`coupon_id`,`category_id`);

--
-- Indexes for table `oc_coupon_history`
--
ALTER TABLE `oc_coupon_history`
  ADD PRIMARY KEY (`coupon_history_id`);

--
-- Indexes for table `oc_coupon_product`
--
ALTER TABLE `oc_coupon_product`
  ADD PRIMARY KEY (`coupon_product_id`);

--
-- Indexes for table `oc_currency`
--
ALTER TABLE `oc_currency`
  ADD PRIMARY KEY (`currency_id`);

--
-- Indexes for table `oc_customer`
--
ALTER TABLE `oc_customer`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `oc_customer_activity`
--
ALTER TABLE `oc_customer_activity`
  ADD PRIMARY KEY (`customer_activity_id`);

--
-- Indexes for table `oc_customer_affiliate`
--
ALTER TABLE `oc_customer_affiliate`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `oc_customer_approval`
--
ALTER TABLE `oc_customer_approval`
  ADD PRIMARY KEY (`customer_approval_id`);

--
-- Indexes for table `oc_customer_group`
--
ALTER TABLE `oc_customer_group`
  ADD PRIMARY KEY (`customer_group_id`);

--
-- Indexes for table `oc_customer_group_description`
--
ALTER TABLE `oc_customer_group_description`
  ADD PRIMARY KEY (`customer_group_id`,`language_id`);

--
-- Indexes for table `oc_customer_history`
--
ALTER TABLE `oc_customer_history`
  ADD PRIMARY KEY (`customer_history_id`);

--
-- Indexes for table `oc_customer_ip`
--
ALTER TABLE `oc_customer_ip`
  ADD PRIMARY KEY (`customer_ip_id`),
  ADD KEY `ip` (`ip`);

--
-- Indexes for table `oc_customer_login`
--
ALTER TABLE `oc_customer_login`
  ADD PRIMARY KEY (`customer_login_id`),
  ADD KEY `email` (`email`),
  ADD KEY `ip` (`ip`);

--
-- Indexes for table `oc_customer_online`
--
ALTER TABLE `oc_customer_online`
  ADD PRIMARY KEY (`ip`);

--
-- Indexes for table `oc_customer_reward`
--
ALTER TABLE `oc_customer_reward`
  ADD PRIMARY KEY (`customer_reward_id`);

--
-- Indexes for table `oc_customer_search`
--
ALTER TABLE `oc_customer_search`
  ADD PRIMARY KEY (`customer_search_id`);

--
-- Indexes for table `oc_customer_transaction`
--
ALTER TABLE `oc_customer_transaction`
  ADD PRIMARY KEY (`customer_transaction_id`);

--
-- Indexes for table `oc_customer_wishlist`
--
ALTER TABLE `oc_customer_wishlist`
  ADD PRIMARY KEY (`customer_id`,`product_id`);

--
-- Indexes for table `oc_custom_field`
--
ALTER TABLE `oc_custom_field`
  ADD PRIMARY KEY (`custom_field_id`);

--
-- Indexes for table `oc_custom_field_customer_group`
--
ALTER TABLE `oc_custom_field_customer_group`
  ADD PRIMARY KEY (`custom_field_id`,`customer_group_id`);

--
-- Indexes for table `oc_custom_field_description`
--
ALTER TABLE `oc_custom_field_description`
  ADD PRIMARY KEY (`custom_field_id`,`language_id`);

--
-- Indexes for table `oc_custom_field_value`
--
ALTER TABLE `oc_custom_field_value`
  ADD PRIMARY KEY (`custom_field_value_id`);

--
-- Indexes for table `oc_custom_field_value_description`
--
ALTER TABLE `oc_custom_field_value_description`
  ADD PRIMARY KEY (`custom_field_value_id`,`language_id`);

--
-- Indexes for table `oc_download`
--
ALTER TABLE `oc_download`
  ADD PRIMARY KEY (`download_id`);

--
-- Indexes for table `oc_download_description`
--
ALTER TABLE `oc_download_description`
  ADD PRIMARY KEY (`download_id`,`language_id`);

--
-- Indexes for table `oc_event`
--
ALTER TABLE `oc_event`
  ADD PRIMARY KEY (`event_id`);

--
-- Indexes for table `oc_extension`
--
ALTER TABLE `oc_extension`
  ADD PRIMARY KEY (`extension_id`);

--
-- Indexes for table `oc_extension_install`
--
ALTER TABLE `oc_extension_install`
  ADD PRIMARY KEY (`extension_install_id`);

--
-- Indexes for table `oc_extension_path`
--
ALTER TABLE `oc_extension_path`
  ADD PRIMARY KEY (`extension_path_id`);

--
-- Indexes for table `oc_filter`
--
ALTER TABLE `oc_filter`
  ADD PRIMARY KEY (`filter_id`);

--
-- Indexes for table `oc_filter_description`
--
ALTER TABLE `oc_filter_description`
  ADD PRIMARY KEY (`filter_id`,`language_id`);

--
-- Indexes for table `oc_filter_group`
--
ALTER TABLE `oc_filter_group`
  ADD PRIMARY KEY (`filter_group_id`);

--
-- Indexes for table `oc_filter_group_description`
--
ALTER TABLE `oc_filter_group_description`
  ADD PRIMARY KEY (`filter_group_id`,`language_id`);

--
-- Indexes for table `oc_geo_zone`
--
ALTER TABLE `oc_geo_zone`
  ADD PRIMARY KEY (`geo_zone_id`);

--
-- Indexes for table `oc_googleshopping_category`
--
ALTER TABLE `oc_googleshopping_category`
  ADD PRIMARY KEY (`google_product_category`,`store_id`),
  ADD KEY `category_id_store_id` (`category_id`,`store_id`);

--
-- Indexes for table `oc_googleshopping_product`
--
ALTER TABLE `oc_googleshopping_product`
  ADD PRIMARY KEY (`product_advertise_google_id`),
  ADD UNIQUE KEY `product_id_store_id` (`product_id`,`store_id`);

--
-- Indexes for table `oc_googleshopping_product_status`
--
ALTER TABLE `oc_googleshopping_product_status`
  ADD PRIMARY KEY (`product_id`,`store_id`,`product_variation_id`);

--
-- Indexes for table `oc_googleshopping_product_target`
--
ALTER TABLE `oc_googleshopping_product_target`
  ADD PRIMARY KEY (`product_id`,`advertise_google_target_id`);

--
-- Indexes for table `oc_googleshopping_target`
--
ALTER TABLE `oc_googleshopping_target`
  ADD PRIMARY KEY (`advertise_google_target_id`),
  ADD KEY `store_id` (`store_id`);

--
-- Indexes for table `oc_information`
--
ALTER TABLE `oc_information`
  ADD PRIMARY KEY (`information_id`);

--
-- Indexes for table `oc_information_description`
--
ALTER TABLE `oc_information_description`
  ADD PRIMARY KEY (`information_id`,`language_id`);

--
-- Indexes for table `oc_information_to_layout`
--
ALTER TABLE `oc_information_to_layout`
  ADD PRIMARY KEY (`information_id`,`store_id`);

--
-- Indexes for table `oc_information_to_store`
--
ALTER TABLE `oc_information_to_store`
  ADD PRIMARY KEY (`information_id`,`store_id`);

--
-- Indexes for table `oc_ishi_bannerblock`
--
ALTER TABLE `oc_ishi_bannerblock`
  ADD PRIMARY KEY (`ishi_bennerblock_id`);

--
-- Indexes for table `oc_ishi_sliderimage`
--
ALTER TABLE `oc_ishi_sliderimage`
  ADD PRIMARY KEY (`ishi_sliderimage_id`);

--
-- Indexes for table `oc_language`
--
ALTER TABLE `oc_language`
  ADD PRIMARY KEY (`language_id`),
  ADD KEY `name` (`name`);

--
-- Indexes for table `oc_layout`
--
ALTER TABLE `oc_layout`
  ADD PRIMARY KEY (`layout_id`);

--
-- Indexes for table `oc_layout_module`
--
ALTER TABLE `oc_layout_module`
  ADD PRIMARY KEY (`layout_module_id`);

--
-- Indexes for table `oc_layout_route`
--
ALTER TABLE `oc_layout_route`
  ADD PRIMARY KEY (`layout_route_id`);

--
-- Indexes for table `oc_length_class`
--
ALTER TABLE `oc_length_class`
  ADD PRIMARY KEY (`length_class_id`);

--
-- Indexes for table `oc_length_class_description`
--
ALTER TABLE `oc_length_class_description`
  ADD PRIMARY KEY (`length_class_id`,`language_id`);

--
-- Indexes for table `oc_linklist`
--
ALTER TABLE `oc_linklist`
  ADD PRIMARY KEY (`linklist_id`);

--
-- Indexes for table `oc_linklist_description`
--
ALTER TABLE `oc_linklist_description`
  ADD PRIMARY KEY (`linklist_id`,`language_id`);

--
-- Indexes for table `oc_location`
--
ALTER TABLE `oc_location`
  ADD PRIMARY KEY (`location_id`),
  ADD KEY `name` (`name`);

--
-- Indexes for table `oc_manufacturer`
--
ALTER TABLE `oc_manufacturer`
  ADD PRIMARY KEY (`manufacturer_id`);

--
-- Indexes for table `oc_manufacturer_to_store`
--
ALTER TABLE `oc_manufacturer_to_store`
  ADD PRIMARY KEY (`manufacturer_id`,`store_id`);

--
-- Indexes for table `oc_marketing`
--
ALTER TABLE `oc_marketing`
  ADD PRIMARY KEY (`marketing_id`);

--
-- Indexes for table `oc_modification`
--
ALTER TABLE `oc_modification`
  ADD PRIMARY KEY (`modification_id`);

--
-- Indexes for table `oc_module`
--
ALTER TABLE `oc_module`
  ADD PRIMARY KEY (`module_id`);

--
-- Indexes for table `oc_offer`
--
ALTER TABLE `oc_offer`
  ADD PRIMARY KEY (`offer_id`);

--
-- Indexes for table `oc_offer_description`
--
ALTER TABLE `oc_offer_description`
  ADD PRIMARY KEY (`offer_id`,`language_id`);

--
-- Indexes for table `oc_option`
--
ALTER TABLE `oc_option`
  ADD PRIMARY KEY (`option_id`);

--
-- Indexes for table `oc_option_description`
--
ALTER TABLE `oc_option_description`
  ADD PRIMARY KEY (`option_id`,`language_id`);

--
-- Indexes for table `oc_option_value`
--
ALTER TABLE `oc_option_value`
  ADD PRIMARY KEY (`option_value_id`);

--
-- Indexes for table `oc_option_value_description`
--
ALTER TABLE `oc_option_value_description`
  ADD PRIMARY KEY (`option_value_id`,`language_id`);

--
-- Indexes for table `oc_order`
--
ALTER TABLE `oc_order`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `oc_order_history`
--
ALTER TABLE `oc_order_history`
  ADD PRIMARY KEY (`order_history_id`);

--
-- Indexes for table `oc_order_option`
--
ALTER TABLE `oc_order_option`
  ADD PRIMARY KEY (`order_option_id`);

--
-- Indexes for table `oc_order_product`
--
ALTER TABLE `oc_order_product`
  ADD PRIMARY KEY (`order_product_id`),
  ADD KEY `order_id` (`order_id`);

--
-- Indexes for table `oc_order_recurring`
--
ALTER TABLE `oc_order_recurring`
  ADD PRIMARY KEY (`order_recurring_id`);

--
-- Indexes for table `oc_order_recurring_transaction`
--
ALTER TABLE `oc_order_recurring_transaction`
  ADD PRIMARY KEY (`order_recurring_transaction_id`);

--
-- Indexes for table `oc_order_shipment`
--
ALTER TABLE `oc_order_shipment`
  ADD PRIMARY KEY (`order_shipment_id`);

--
-- Indexes for table `oc_order_status`
--
ALTER TABLE `oc_order_status`
  ADD PRIMARY KEY (`order_status_id`,`language_id`);

--
-- Indexes for table `oc_order_total`
--
ALTER TABLE `oc_order_total`
  ADD PRIMARY KEY (`order_total_id`),
  ADD KEY `order_id` (`order_id`);

--
-- Indexes for table `oc_order_voucher`
--
ALTER TABLE `oc_order_voucher`
  ADD PRIMARY KEY (`order_voucher_id`);

--
-- Indexes for table `oc_product`
--
ALTER TABLE `oc_product`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `oc_product_attribute`
--
ALTER TABLE `oc_product_attribute`
  ADD PRIMARY KEY (`product_id`,`attribute_id`,`language_id`);

--
-- Indexes for table `oc_product_description`
--
ALTER TABLE `oc_product_description`
  ADD PRIMARY KEY (`product_id`,`language_id`),
  ADD KEY `name` (`name`);

--
-- Indexes for table `oc_product_discount`
--
ALTER TABLE `oc_product_discount`
  ADD PRIMARY KEY (`product_discount_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `oc_product_filter`
--
ALTER TABLE `oc_product_filter`
  ADD PRIMARY KEY (`product_id`,`filter_id`);

--
-- Indexes for table `oc_product_image`
--
ALTER TABLE `oc_product_image`
  ADD PRIMARY KEY (`product_image_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `oc_product_option`
--
ALTER TABLE `oc_product_option`
  ADD PRIMARY KEY (`product_option_id`);

--
-- Indexes for table `oc_product_option_value`
--
ALTER TABLE `oc_product_option_value`
  ADD PRIMARY KEY (`product_option_value_id`);

--
-- Indexes for table `oc_product_recurring`
--
ALTER TABLE `oc_product_recurring`
  ADD PRIMARY KEY (`product_id`,`recurring_id`,`customer_group_id`);

--
-- Indexes for table `oc_product_related`
--
ALTER TABLE `oc_product_related`
  ADD PRIMARY KEY (`product_id`,`related_id`);

--
-- Indexes for table `oc_product_reward`
--
ALTER TABLE `oc_product_reward`
  ADD PRIMARY KEY (`product_reward_id`);

--
-- Indexes for table `oc_product_to_category`
--
ALTER TABLE `oc_product_to_category`
  ADD PRIMARY KEY (`product_id`,`category_id`),
  ADD KEY `category_id` (`category_id`);

--
-- Indexes for table `oc_product_to_download`
--
ALTER TABLE `oc_product_to_download`
  ADD PRIMARY KEY (`product_id`,`download_id`);

--
-- Indexes for table `oc_product_to_layout`
--
ALTER TABLE `oc_product_to_layout`
  ADD PRIMARY KEY (`product_id`,`store_id`);

--
-- Indexes for table `oc_product_to_store`
--
ALTER TABLE `oc_product_to_store`
  ADD PRIMARY KEY (`product_id`,`store_id`);

--
-- Indexes for table `oc_recurring`
--
ALTER TABLE `oc_recurring`
  ADD PRIMARY KEY (`recurring_id`);

--
-- Indexes for table `oc_recurring_description`
--
ALTER TABLE `oc_recurring_description`
  ADD PRIMARY KEY (`recurring_id`,`language_id`);

--
-- Indexes for table `oc_return`
--
ALTER TABLE `oc_return`
  ADD PRIMARY KEY (`return_id`);

--
-- Indexes for table `oc_return_action`
--
ALTER TABLE `oc_return_action`
  ADD PRIMARY KEY (`return_action_id`,`language_id`);

--
-- Indexes for table `oc_return_history`
--
ALTER TABLE `oc_return_history`
  ADD PRIMARY KEY (`return_history_id`);

--
-- Indexes for table `oc_return_reason`
--
ALTER TABLE `oc_return_reason`
  ADD PRIMARY KEY (`return_reason_id`,`language_id`);

--
-- Indexes for table `oc_return_status`
--
ALTER TABLE `oc_return_status`
  ADD PRIMARY KEY (`return_status_id`,`language_id`);

--
-- Indexes for table `oc_review`
--
ALTER TABLE `oc_review`
  ADD PRIMARY KEY (`review_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `oc_seo_url`
--
ALTER TABLE `oc_seo_url`
  ADD PRIMARY KEY (`seo_url_id`),
  ADD KEY `query` (`query`),
  ADD KEY `keyword` (`keyword`);

--
-- Indexes for table `oc_session`
--
ALTER TABLE `oc_session`
  ADD PRIMARY KEY (`session_id`);

--
-- Indexes for table `oc_setting`
--
ALTER TABLE `oc_setting`
  ADD PRIMARY KEY (`setting_id`);

--
-- Indexes for table `oc_shipping_courier`
--
ALTER TABLE `oc_shipping_courier`
  ADD PRIMARY KEY (`shipping_courier_id`);

--
-- Indexes for table `oc_statistics`
--
ALTER TABLE `oc_statistics`
  ADD PRIMARY KEY (`statistics_id`);

--
-- Indexes for table `oc_stock_status`
--
ALTER TABLE `oc_stock_status`
  ADD PRIMARY KEY (`stock_status_id`,`language_id`);

--
-- Indexes for table `oc_store`
--
ALTER TABLE `oc_store`
  ADD PRIMARY KEY (`store_id`);

--
-- Indexes for table `oc_subscribe`
--
ALTER TABLE `oc_subscribe`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `Index_2` (`email_id`);

--
-- Indexes for table `oc_tax_class`
--
ALTER TABLE `oc_tax_class`
  ADD PRIMARY KEY (`tax_class_id`);

--
-- Indexes for table `oc_tax_rate`
--
ALTER TABLE `oc_tax_rate`
  ADD PRIMARY KEY (`tax_rate_id`);

--
-- Indexes for table `oc_tax_rate_to_customer_group`
--
ALTER TABLE `oc_tax_rate_to_customer_group`
  ADD PRIMARY KEY (`tax_rate_id`,`customer_group_id`);

--
-- Indexes for table `oc_tax_rule`
--
ALTER TABLE `oc_tax_rule`
  ADD PRIMARY KEY (`tax_rule_id`);

--
-- Indexes for table `oc_theme`
--
ALTER TABLE `oc_theme`
  ADD PRIMARY KEY (`theme_id`);

--
-- Indexes for table `oc_themeoption`
--
ALTER TABLE `oc_themeoption`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `oc_translation`
--
ALTER TABLE `oc_translation`
  ADD PRIMARY KEY (`translation_id`);

--
-- Indexes for table `oc_upload`
--
ALTER TABLE `oc_upload`
  ADD PRIMARY KEY (`upload_id`);

--
-- Indexes for table `oc_user`
--
ALTER TABLE `oc_user`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `oc_user_group`
--
ALTER TABLE `oc_user_group`
  ADD PRIMARY KEY (`user_group_id`);

--
-- Indexes for table `oc_voucher`
--
ALTER TABLE `oc_voucher`
  ADD PRIMARY KEY (`voucher_id`);

--
-- Indexes for table `oc_voucher_history`
--
ALTER TABLE `oc_voucher_history`
  ADD PRIMARY KEY (`voucher_history_id`);

--
-- Indexes for table `oc_voucher_theme`
--
ALTER TABLE `oc_voucher_theme`
  ADD PRIMARY KEY (`voucher_theme_id`);

--
-- Indexes for table `oc_voucher_theme_description`
--
ALTER TABLE `oc_voucher_theme_description`
  ADD PRIMARY KEY (`voucher_theme_id`,`language_id`);

--
-- Indexes for table `oc_weight_class`
--
ALTER TABLE `oc_weight_class`
  ADD PRIMARY KEY (`weight_class_id`);

--
-- Indexes for table `oc_weight_class_description`
--
ALTER TABLE `oc_weight_class_description`
  ADD PRIMARY KEY (`weight_class_id`,`language_id`);

--
-- Indexes for table `oc_zone`
--
ALTER TABLE `oc_zone`
  ADD PRIMARY KEY (`zone_id`);

--
-- Indexes for table `oc_zone_to_geo_zone`
--
ALTER TABLE `oc_zone_to_geo_zone`
  ADD PRIMARY KEY (`zone_to_geo_zone_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `oc_address`
--
ALTER TABLE `oc_address`
  MODIFY `address_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `oc_api`
--
ALTER TABLE `oc_api`
  MODIFY `api_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `oc_api_ip`
--
ALTER TABLE `oc_api_ip`
  MODIFY `api_ip_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `oc_api_session`
--
ALTER TABLE `oc_api_session`
  MODIFY `api_session_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `oc_attribute`
--
ALTER TABLE `oc_attribute`
  MODIFY `attribute_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `oc_attribute_group`
--
ALTER TABLE `oc_attribute_group`
  MODIFY `attribute_group_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `oc_banner`
--
ALTER TABLE `oc_banner`
  MODIFY `banner_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `oc_banner_image`
--
ALTER TABLE `oc_banner_image`
  MODIFY `banner_image_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=343;

--
-- AUTO_INCREMENT for table `oc_blogger`
--
ALTER TABLE `oc_blogger`
  MODIFY `blogger_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `oc_blogger_comment`
--
ALTER TABLE `oc_blogger_comment`
  MODIFY `blogger_comment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `oc_cart`
--
ALTER TABLE `oc_cart`
  MODIFY `cart_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=224;

--
-- AUTO_INCREMENT for table `oc_category`
--
ALTER TABLE `oc_category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=108;

--
-- AUTO_INCREMENT for table `oc_country`
--
ALTER TABLE `oc_country`
  MODIFY `country_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=258;

--
-- AUTO_INCREMENT for table `oc_coupon`
--
ALTER TABLE `oc_coupon`
  MODIFY `coupon_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `oc_coupon_history`
--
ALTER TABLE `oc_coupon_history`
  MODIFY `coupon_history_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `oc_coupon_product`
--
ALTER TABLE `oc_coupon_product`
  MODIFY `coupon_product_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `oc_currency`
--
ALTER TABLE `oc_currency`
  MODIFY `currency_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `oc_customer`
--
ALTER TABLE `oc_customer`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `oc_customer_activity`
--
ALTER TABLE `oc_customer_activity`
  MODIFY `customer_activity_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `oc_customer_approval`
--
ALTER TABLE `oc_customer_approval`
  MODIFY `customer_approval_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `oc_customer_group`
--
ALTER TABLE `oc_customer_group`
  MODIFY `customer_group_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `oc_customer_history`
--
ALTER TABLE `oc_customer_history`
  MODIFY `customer_history_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `oc_customer_ip`
--
ALTER TABLE `oc_customer_ip`
  MODIFY `customer_ip_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `oc_customer_login`
--
ALTER TABLE `oc_customer_login`
  MODIFY `customer_login_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `oc_customer_reward`
--
ALTER TABLE `oc_customer_reward`
  MODIFY `customer_reward_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `oc_customer_search`
--
ALTER TABLE `oc_customer_search`
  MODIFY `customer_search_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `oc_customer_transaction`
--
ALTER TABLE `oc_customer_transaction`
  MODIFY `customer_transaction_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `oc_custom_field`
--
ALTER TABLE `oc_custom_field`
  MODIFY `custom_field_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `oc_custom_field_value`
--
ALTER TABLE `oc_custom_field_value`
  MODIFY `custom_field_value_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `oc_download`
--
ALTER TABLE `oc_download`
  MODIFY `download_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `oc_event`
--
ALTER TABLE `oc_event`
  MODIFY `event_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `oc_extension`
--
ALTER TABLE `oc_extension`
  MODIFY `extension_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=145;

--
-- AUTO_INCREMENT for table `oc_extension_install`
--
ALTER TABLE `oc_extension_install`
  MODIFY `extension_install_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `oc_extension_path`
--
ALTER TABLE `oc_extension_path`
  MODIFY `extension_path_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `oc_filter`
--
ALTER TABLE `oc_filter`
  MODIFY `filter_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `oc_filter_group`
--
ALTER TABLE `oc_filter_group`
  MODIFY `filter_group_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `oc_geo_zone`
--
ALTER TABLE `oc_geo_zone`
  MODIFY `geo_zone_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `oc_googleshopping_product`
--
ALTER TABLE `oc_googleshopping_product`
  MODIFY `product_advertise_google_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `oc_information`
--
ALTER TABLE `oc_information`
  MODIFY `information_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `oc_ishi_bannerblock`
--
ALTER TABLE `oc_ishi_bannerblock`
  MODIFY `ishi_bennerblock_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=229;

--
-- AUTO_INCREMENT for table `oc_ishi_sliderimage`
--
ALTER TABLE `oc_ishi_sliderimage`
  MODIFY `ishi_sliderimage_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;

--
-- AUTO_INCREMENT for table `oc_language`
--
ALTER TABLE `oc_language`
  MODIFY `language_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `oc_layout`
--
ALTER TABLE `oc_layout`
  MODIFY `layout_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `oc_layout_module`
--
ALTER TABLE `oc_layout_module`
  MODIFY `layout_module_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7035;

--
-- AUTO_INCREMENT for table `oc_layout_route`
--
ALTER TABLE `oc_layout_route`
  MODIFY `layout_route_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=729;

--
-- AUTO_INCREMENT for table `oc_length_class`
--
ALTER TABLE `oc_length_class`
  MODIFY `length_class_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `oc_linklist`
--
ALTER TABLE `oc_linklist`
  MODIFY `linklist_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `oc_location`
--
ALTER TABLE `oc_location`
  MODIFY `location_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `oc_manufacturer`
--
ALTER TABLE `oc_manufacturer`
  MODIFY `manufacturer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `oc_marketing`
--
ALTER TABLE `oc_marketing`
  MODIFY `marketing_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `oc_modification`
--
ALTER TABLE `oc_modification`
  MODIFY `modification_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `oc_module`
--
ALTER TABLE `oc_module`
  MODIFY `module_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=163;

--
-- AUTO_INCREMENT for table `oc_offer`
--
ALTER TABLE `oc_offer`
  MODIFY `offer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `oc_option`
--
ALTER TABLE `oc_option`
  MODIFY `option_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `oc_option_value`
--
ALTER TABLE `oc_option_value`
  MODIFY `option_value_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `oc_order`
--
ALTER TABLE `oc_order`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `oc_order_history`
--
ALTER TABLE `oc_order_history`
  MODIFY `order_history_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;

--
-- AUTO_INCREMENT for table `oc_order_option`
--
ALTER TABLE `oc_order_option`
  MODIFY `order_option_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT for table `oc_order_product`
--
ALTER TABLE `oc_order_product`
  MODIFY `order_product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;

--
-- AUTO_INCREMENT for table `oc_order_recurring`
--
ALTER TABLE `oc_order_recurring`
  MODIFY `order_recurring_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `oc_order_recurring_transaction`
--
ALTER TABLE `oc_order_recurring_transaction`
  MODIFY `order_recurring_transaction_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `oc_order_shipment`
--
ALTER TABLE `oc_order_shipment`
  MODIFY `order_shipment_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `oc_order_status`
--
ALTER TABLE `oc_order_status`
  MODIFY `order_status_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `oc_order_total`
--
ALTER TABLE `oc_order_total`
  MODIFY `order_total_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=130;

--
-- AUTO_INCREMENT for table `oc_order_voucher`
--
ALTER TABLE `oc_order_voucher`
  MODIFY `order_voucher_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `oc_product`
--
ALTER TABLE `oc_product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `oc_product_discount`
--
ALTER TABLE `oc_product_discount`
  MODIFY `product_discount_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=711;

--
-- AUTO_INCREMENT for table `oc_product_image`
--
ALTER TABLE `oc_product_image`
  MODIFY `product_image_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4708;

--
-- AUTO_INCREMENT for table `oc_product_option`
--
ALTER TABLE `oc_product_option`
  MODIFY `product_option_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=266;

--
-- AUTO_INCREMENT for table `oc_product_option_value`
--
ALTER TABLE `oc_product_option_value`
  MODIFY `product_option_value_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=127;

--
-- AUTO_INCREMENT for table `oc_product_reward`
--
ALTER TABLE `oc_product_reward`
  MODIFY `product_reward_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=774;

--
-- AUTO_INCREMENT for table `oc_recurring`
--
ALTER TABLE `oc_recurring`
  MODIFY `recurring_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `oc_return`
--
ALTER TABLE `oc_return`
  MODIFY `return_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `oc_return_action`
--
ALTER TABLE `oc_return_action`
  MODIFY `return_action_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `oc_return_history`
--
ALTER TABLE `oc_return_history`
  MODIFY `return_history_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `oc_return_reason`
--
ALTER TABLE `oc_return_reason`
  MODIFY `return_reason_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `oc_return_status`
--
ALTER TABLE `oc_return_status`
  MODIFY `return_status_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `oc_review`
--
ALTER TABLE `oc_review`
  MODIFY `review_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `oc_seo_url`
--
ALTER TABLE `oc_seo_url`
  MODIFY `seo_url_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1588;

--
-- AUTO_INCREMENT for table `oc_setting`
--
ALTER TABLE `oc_setting`
  MODIFY `setting_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4559;

--
-- AUTO_INCREMENT for table `oc_statistics`
--
ALTER TABLE `oc_statistics`
  MODIFY `statistics_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `oc_stock_status`
--
ALTER TABLE `oc_stock_status`
  MODIFY `stock_status_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `oc_store`
--
ALTER TABLE `oc_store`
  MODIFY `store_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `oc_subscribe`
--
ALTER TABLE `oc_subscribe`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `oc_tax_class`
--
ALTER TABLE `oc_tax_class`
  MODIFY `tax_class_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `oc_tax_rate`
--
ALTER TABLE `oc_tax_rate`
  MODIFY `tax_rate_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=88;

--
-- AUTO_INCREMENT for table `oc_tax_rule`
--
ALTER TABLE `oc_tax_rule`
  MODIFY `tax_rule_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=129;

--
-- AUTO_INCREMENT for table `oc_theme`
--
ALTER TABLE `oc_theme`
  MODIFY `theme_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `oc_themeoption`
--
ALTER TABLE `oc_themeoption`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `oc_translation`
--
ALTER TABLE `oc_translation`
  MODIFY `translation_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `oc_upload`
--
ALTER TABLE `oc_upload`
  MODIFY `upload_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `oc_user`
--
ALTER TABLE `oc_user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `oc_user_group`
--
ALTER TABLE `oc_user_group`
  MODIFY `user_group_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `oc_voucher`
--
ALTER TABLE `oc_voucher`
  MODIFY `voucher_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `oc_voucher_history`
--
ALTER TABLE `oc_voucher_history`
  MODIFY `voucher_history_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `oc_voucher_theme`
--
ALTER TABLE `oc_voucher_theme`
  MODIFY `voucher_theme_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `oc_weight_class`
--
ALTER TABLE `oc_weight_class`
  MODIFY `weight_class_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `oc_zone`
--
ALTER TABLE `oc_zone`
  MODIFY `zone_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4239;

--
-- AUTO_INCREMENT for table `oc_zone_to_geo_zone`
--
ALTER TABLE `oc_zone_to_geo_zone`
  MODIFY `zone_to_geo_zone_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=110;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
