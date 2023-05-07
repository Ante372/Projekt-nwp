
CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `country` char(2) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `archive` enum('Y','N') NOT NULL DEFAULT 'Y'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



INSERT INTO `users` (`id`, `firstname`, `lastname`, `email`, `username`, `password`, `country`, `date`, `archive`) VALUES
(14, 'Ante', 'Ramljak', '', 'aramljak@vvg.hr', '$2y$12$MvEg.TeRkTn9zUUwc0ALyux..9cI5IXSukNi/V3qtyk3wy3DMxbW6', 'HR', '2021-12-13 09:37:04', 'Y'),
(15, 'Andrej', 'Ramljak', 'andrej@vvg.hr', 'andrej', '$2y$12$l6kg1uoF7gLQeyz.fhfItu/2WLcMFkAB0HMSouo8LZH2lMglkqLkS', 'HR', '2021-11-15 12:48:01', 'Y');


ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
