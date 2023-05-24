-- MySQL dump 10.13  Distrib 5.7.12, for Win32 (AMD64)
--
-- Host: 127.0.0.1    Database: kpvo_2
-- ------------------------------------------------------
-- Server version	5.5.62

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Temporary view structure for view `all`
--

DROP TABLE IF EXISTS `all`;
/*!50001 DROP VIEW IF EXISTS `all`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE VIEW `all` AS SELECT 
 1 AS `id`,
 1 AS `Tip`,
 1 AS `№_zachoroneniya`,
 1 AS `Oblast`,
 1 AS `Rayon`,
 1 AS `Naselennyy_punkt`,
 1 AS `Familiya`,
 1 AS `Imya`,
 1 AS `Otchestvo`,
 1 AS `God_rozhdeniya`,
 1 AS `Data_vybytiya`,
 1 AS `Voinskoe_zvanie`,
 1 AS `Pervonachalno_zachoronen`,
 1 AS `Voinskaya_chast`,
 1 AS `Strana_rozhdeniya`,
 1 AS `Oblast_rozhdeniya`,
 1 AS `Rajon_rozhdeniya`,
 1 AS `Naselennyy_punkt_chel`,
 1 AS `Dom_rozhdeniya`,
 1 AS `Prizvan_RVK`,
 1 AS `Dolzhnost`,
 1 AS `Rodstvenniki`,
 1 AS `Sostavitel`,
 1 AS `Predlozhenie`,
 1 AS `Reshenie_RIK`,
 1 AS `Primechanie`,
 1 AS `Data_dobavleniya`,
 1 AS `Nomer`,
 1 AS `Tip_Dok`,
 1 AS `Data`,
 1 AS `Nazvanie_istochnika`,
 1 AS `Fond`,
 1 AS `Opis`,
 1 AS `Delo`,
 1 AS `stranitsa`,
 1 AS `Show`*/;
SET character_set_client = @saved_cs_client;

--
-- Temporary view structure for view `vitebskiy_rayon`
--

DROP TABLE IF EXISTS `vitebskiy_rayon`;
/*!50001 DROP VIEW IF EXISTS `vitebskiy_rayon`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE VIEW `vitebskiy_rayon` AS SELECT 
 1 AS `№_zachoroneniya`,
 1 AS `familiya`,
 1 AS `otchestvo`*/;
SET character_set_client = @saved_cs_client;

--
-- Temporary view structure for view `orshanskiy_rayon`
--

DROP TABLE IF EXISTS `orshanskiy_rayon`;
/*!50001 DROP VIEW IF EXISTS `orshanskiy_rayon`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE VIEW `orshanskiy_rayon` AS SELECT 
 1 AS `№_zachoroneniya`,
 1 AS `familiya`,
 1 AS `otchestvo`*/;
SET character_set_client = @saved_cs_client;

--
-- Temporary view structure for view `statistika_rayony`
--

DROP TABLE IF EXISTS `statistika_rayony`;
/*!50001 DROP VIEW IF EXISTS `statistika_rayony`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE VIEW `statistika_rayony` AS SELECT 
 1 AS `nazvanie`,
 1 AS `kolichestvo`*/;
SET character_set_client = @saved_cs_client;

--
-- Final view structure for view `all`
--

/*!50001 DROP VIEW IF EXISTS `all`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8 */;
/*!50001 SET character_set_results     = utf8 */;
/*!50001 SET collation_connection      = utf8_general_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `all` AS select `chelovek`.`id` AS `id`,`chelovek`.`Tip` AS `Tip`,`chelovek`.`№_zachoroneniya` AS `№_zachoroneniya`,`zachoronenie`.`Oblast` AS `Oblast`,`zachoronenie`.`Rayon` AS `Rayon`,`zachoronenie`.`Naselennyy_punkt` AS `Naselennyy_punkt`,`chelovek`.`Familiya` AS `Familiya`,`chelovek`.`Imya` AS `Imya`,`chelovek`.`Otchestvo` AS `Otchestvo`,`chelovek`.`God_rozhdeniya` AS `God_rozhdeniya`,`chelovek`.`Data_vybytiya` AS `Data_vybytiya`,`chelovek`.`Voinskoe_zvanie` AS `Voinskoe_zvanie`,`chelovek`.`Pervonachalno_zachoronen` AS `Pervonachalno_zachoronen`,`chelovek`.`Voinskaya_chast` AS `Voinskaya_chast`,`chelovek`.`Strana_rozhdeniya` AS `Strana_rozhdeniya`,`chelovek`.`Oblast_rozhdeniya` AS `Oblast_rozhdeniya`,`chelovek`.`Rajon_rozhdeniya` AS `Rajon_rozhdeniya`,`chelovek`.`Naselennyy_punkt` AS `Naselennyy_punkt_chel`,`chelovek`.`Dom_rozhdeniya` AS `Dom_rozhdeniya`,`chelovek`.`Prizvan_RVK` AS `Prizvan_RVK`,`chelovek`.`Dolzhnost` AS `Dolzhnost`,`chelovek`.`Rodstvenniki` AS `Rodstvenniki`,`chelovek`.`Sostavitel` AS `Sostavitel`,`chelovek`.`Predlozhenie` AS `Predlozhenie`,`chelovek`.`Reshenie_RIK` AS `Reshenie_RIK`,`chelovek`.`Primechanie` AS `Primechanie`,`chelovek`.`Data_dobavleniya` AS `Data_dobavleniya`,`dokument`.`Nomer` AS `Nomer`,`dokument`.`Tip` AS `Tip_Dok`,`dokument`.`Data` AS `Data`,`dokument`.`Nazvanie_istochnika` AS `Nazvanie_istochnika`,`dokument`.`Fond` AS `Fond`,`dokument`.`Opis` AS `Opis`,`dokument`.`Delo` AS `Delo`,`chelovek_dokument`.`stranitsa` AS `stranitsa`,`chelovek`.`Show` AS `Show` from (((`chelovek` left join `zachoronenie` on((`chelovek`.`№_zachoroneniya` = `zachoronenie`.`Nomer`))) left join `chelovek_dokument` on((`chelovek`.`id` = `chelovek_dokument`.`id_chelovek`))) left join `dokument` on((`chelovek_dokument`.`id_dokument` = `dokument`.`id`))) */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `vitebskiy_rayon`
--

/*!50001 DROP VIEW IF EXISTS `vitebskiy_rayon`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8 */;
/*!50001 SET character_set_results     = utf8 */;
/*!50001 SET collation_connection      = utf8_general_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `vitebskiy_rayon` AS select `chelovek`.`№_zachoroneniya` AS `№_zachoroneniya`,`chelovek`.`Familiya` AS `familiya`,`chelovek`.`Otchestvo` AS `otchestvo` from (`chelovek` join `zachoronenie` on((`chelovek`.`№_zachoroneniya` = `zachoronenie`.`Nomer`))) where (`zachoronenie`.`Rayon` = 50) */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `orshanskiy_rayon`
--

/*!50001 DROP VIEW IF EXISTS `orshanskiy_rayon`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8 */;
/*!50001 SET character_set_results     = utf8 */;
/*!50001 SET collation_connection      = utf8_general_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `orshanskiy_rayon` AS select `chelovek`.`№_zachoroneniya` AS `№_zachoroneniya`,`chelovek`.`Familiya` AS `familiya`,`chelovek`.`Otchestvo` AS `otchestvo` from (`chelovek` join `zachoronenie` on((`chelovek`.`№_zachoroneniya` = `zachoronenie`.`Nomer`))) where (`zachoronenie`.`Rayon` = 130) */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `statistika_rayony`
--

/*!50001 DROP VIEW IF EXISTS `statistika_rayony`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8 */;
/*!50001 SET character_set_results     = utf8 */;
/*!50001 SET collation_connection      = utf8_general_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `statistika_rayony` AS select `rayon`.`nazvanie` AS `nazvanie`,count(`chelovek`.`id`) AS `kolichestvo` from ((`chelovek` join `zachoronenie` on((`chelovek`.`№_zachoroneniya` = `zachoronenie`.`Nomer`))) join `rayon` on((`zachoronenie`.`Rayon` = `rayon`.`id`))) where (not((`chelovek`.`Tip` like 'земляк'))) group by `rayon`.`nazvanie` */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-01-26 12:27:42
