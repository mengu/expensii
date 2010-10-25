-- --------------------------------------------------------

--
-- Table structure for table `AuthAssignment`
--

CREATE TABLE IF NOT EXISTS `AuthAssignment` (
  `itemname` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `userid` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `bizrule` text COLLATE utf8_unicode_ci,
  `data` text COLLATE utf8_unicode_ci,
  PRIMARY KEY (`itemname`,`userid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `AuthAssignment`
--

INSERT INTO `AuthAssignment` (`itemname`, `userid`, `bizrule`, `data`) VALUES
('admin', '1', '', 's:0:"";');

-- --------------------------------------------------------

--
-- Table structure for table `AuthItem`
--

CREATE TABLE IF NOT EXISTS `AuthItem` (
  `name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `type` int(11) NOT NULL,
  `description` text COLLATE utf8_unicode_ci,
  `bizrule` text COLLATE utf8_unicode_ci,
  `data` text COLLATE utf8_unicode_ci,
  PRIMARY KEY (`name`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `AuthItem`
--

INSERT INTO `AuthItem` (`name`, `type`, `description`, `bizrule`, `data`) VALUES
('createExpense', 0, 'create expense', NULL, NULL),
('updateExpense', 0, 'update expense', '', 's:0:"";'),
('viewExpense', 0, 'view expense.', '', 's:0:"";'),
('deleteExpense', 0, 'delete expense.', '', 's:0:"";'),
('indexExpense', 0, 'expense index.', '', 's:0:"";'),
('deleteCategory', 0, 'delete category.', '', 's:0:"";'),
('createCategory', 0, 'create category', '', 's:0:"";'),
('indexCategory', 0, 'index category.', '', 's:0:"";'),
('updateCategory', 0, 'update category', '', 's:0:"";'),
('admin', 2, 'administrator role.', '', 's:0:"";'),
('user', 2, 'user role.', '', 's:0:"";'),
('canUpdateCategory', 1, 'task for updating category.', '', 's:0:"";'),
('canCreateCategory', 1, 'task for creating category.', '', 's:0:"";'),
('canCreateExpense', 1, 'task for creating expense.', '', 's:0:"";'),
('canViewExpense', 1, '', NULL, NULL),
('canUpdateExpense', 1, '', NULL, NULL),
('canDeleteExpense', 1, '', NULL, NULL),
('canViewCategory', 1, 'task for viewing category.', '', 's:0:"";'),
('canDeleteCategory', 1, 'task for deleting category.', '', 's:0:"";'),
('viewCategory', 0, 'view category operation.', '', 's:0:"";');

-- --------------------------------------------------------

--
-- Table structure for table `AuthItemChild`
--

CREATE TABLE IF NOT EXISTS `AuthItemChild` (
  `parent` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `child` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`parent`,`child`),
  KEY `child` (`child`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `AuthItemChild`
--

INSERT INTO `AuthItemChild` (`parent`, `child`) VALUES
('admin', 'canCreateCategory'),
('admin', 'canCreateExpense'),
('admin', 'canDeleteCategory'),
('admin', 'canDeleteExpense'),
('admin', 'canUpdateCategory'),
('admin', 'canUpdateExpense'),
('admin', 'canViewCategory'),
('admin', 'canViewExpense'),
('canCreateCategory', 'createCategory'),
('canCreateExpense', 'createExpense'),
('canDeleteCategory', 'deleteCategory'),
('canDeleteExpense', 'deleteExpense'),
('canUpdateCategory', 'updateCategory'),
('canUpdateExpense', 'updateExpense'),
('canViewCategory', 'viewCategory'),
('canViewExpense', 'viewExpense');


-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

-- --------------------------------------------------------

--
-- Table structure for table `expenses`
--

CREATE TABLE IF NOT EXISTS `expenses` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `expense_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `cost` double NOT NULL,
  `paid` tinyint(1) NOT NULL,
  `dateline` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=22 ;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;
