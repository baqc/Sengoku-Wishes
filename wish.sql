SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";
CREATE TABLE `list` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL DEFAULT '',
  `fromname` varchar(255) NOT NULL DEFAULT '',
  `toname` varchar(255) NOT NULL DEFAULT '',
  `content` varchar(255) NOT NULL DEFAULT '',
  `template` varchar(255) NOT NULL DEFAULT '',
  `url` varchar(255) NOT NULL DEFAULT ''
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
INSERT INTO `list` (`id`, `title`, `fromname`, `toname`, `content`, `template`, `url`) VALUES
(1, 'I Love you!', '林风', '苏紫', '这片星空属于我和你，我爱你！', 'starry', 'http://m10.music.126.net/20190330210155/3d9333e54b52a4568f17abd22c7a2216/ymusic/7e84/7840/aca2/c4c45aff74b775f1626434a4407d7c5d.mp3'),
(2, '十里春风不如你', '向往', '薛青衣', '只许州官放火，不许你离开我', 'starry', 'http://m10.music.126.net/20190331171659/c9bc1164405bcc8b064152da5966ae2f/ymusic/fdd4/8afa/9db0/91bfe6db8b0772d4424163383f5714ef.mp3'),
(3, '春水初生，春林初盛，春风十里，不如你', 'X~ray', '周俊雯', '我也不知什么原因\r\n可能是某些话没说清\r\n但你放心\r\n接下来的五十多天\r\n我不会影响你\r\n加油中考\r\n但\r\n我只想见你一下\r\n哪怕很远得的见', 'starry', 'xz');
CREATE TABLE `saying` (
  `id` int(11) NOT NULL,
  `content` varchar(255) NOT NULL DEFAULT ''
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
INSERT INTO `saying` (`id`, `content`) VALUES
(1, '生活有度，人生添寿。'),
(2, '你不懂我，我不怪你。'),
(3, '\"时光为何飞逝?\",\"为了甩掉想要消磨它的人\"'),
(4, '有时候读书是一种巧妙地避开思考的方法。'),
(5, '人间有味是清欢。'),
(6, '众里寻他千百度，蓦然回首，那人却在灯火阑珊处。'),
(7, '内外相应，言行相称。'),
(8, '“现在”是刚过去的时间上的一个“点”。'),
(9, '哪有什么天才，都是一些刻苦的人。'),
(10, '酒杯里竟能蹦出友谊来。'),
(11, '最甜美的是爱情，最苦涩的也是爱情。'),
(12, '生活的智慧大概就在于遇事问个为什么。'),
(13, '谁不会休息，谁就不会工作。'),
(14, '半世伶俜空自许,一生风雨却谁知'),
(15, '二物于人谁独无？就中吴侬仍有余；'),
(16, '日暮汉宫传蜡烛，轻烟散入五侯家。'),
(17, '窗外小雨三两声'),
(18, '空山新雨后，天气晚来秋。\r\n'),
(19, '别说再见，说多了真的会再见的'),
(20, '到了大城市才发现，北京太大了'),
(21, '若青木不朽，我恋你三生三世'),
(22, '少年心上有朝夕。'),
(23, '余生路长，愿与你同甘，有我在不会让你受苦\r\n'),
(24, '本是青灯不归客，却因浊酒留风尘'),
(25, '不乱于心，不困于情'),
(26, '傲来雾，花果香，定海一棒万妖朝'),
(27, '纵然万劫不复，纵然相思入骨，我也待你眉眼如初，岁月如故。'),
(28, '宁交一个抬杠的鬼，不要一个嘴甜的贼'),
(29, '当你凝视深渊时，深渊也在凝视着你'),
(30, '这个世界车水马龙，我只对你情有独钟。\r\n'),
(31, '玻璃晴朗，橘子辉煌'),
(32, '彼时当年少，莫负好时光'),
(33, '酒醉不过一夜，情深不过三年'),
(34, '关关雎鸠，在河之洲，窈窕淑女，what is ur QQ?'),
(35, '放弃不难，但坚持一定很酷'),
(36, '一见钟情，明明是见色起意；\r\n日久生情，不过是权衡利弊；\r\n连白头到老，\r\n都只是习惯使然。'),
(37, 'Paris is raining, Tokyo is crying'),
(38, '不要问我心里有没有你，我余光中都是你'),
(39, '所谓世人，不就是你吗'),
(40, '山河远阔，人间烟火，无一是你，无一不是你');
ALTER TABLE `list`
  ADD PRIMARY KEY (`id`);
ALTER TABLE `saying`
  ADD PRIMARY KEY (`id`);
ALTER TABLE `list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
ALTER TABLE `saying`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1124;
COMMIT;