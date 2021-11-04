<?php
/**
 * Copied from ./RemotePlugin.php
 * @copyright Copyright (c) 2017 Arthur Schiwon <blizzz@arthur-schiwon.de>
 *
 * @author Arthur Schiwon <blizzz@arthur-schiwon.de>
 * @author Christoph Wurst <christoph@winzerhof-wurst.at>
 * @author Joas Schilling <coding@schilljs.com>
 * @author John Molakvoæ <skjnldsv@protonmail.com>
 * @author Julius Härtl <jus@bitgrid.net>
 *
 * @license GNU AGPL version 3 or any later version
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Affero General Public License as
 * published by the Free Software Foundation, either version 3 of the
 * License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU Affero General Public License for more details.
 *
 * You should have received a copy of the GNU Affero General Public License
 * along with this program. If not, see <http://www.gnu.org/licenses/>.
 *
 */
namespace OC\Collaboration\Collaborators;

use OCP\Collaboration\Collaborators\ISearchPlugin;
use OCP\Collaboration\Collaborators\ISearchResult;
use OCP\Collaboration\Collaborators\SearchResultType;
use OCP\Share\IShare;

class RemotePlugin implements ISearchPlugin {
	public function search($search, $limit, $offset, ISearchResult $searchResult) {
		$result = ['wide' => [], 'exact' => [
			[
				'label' => 'Marie Curie (revad2)',
				'uuid' => 'marie@revad2.docker',
				'name' => 'Marie Curie',
				'type' => '',
				'value' => [
					'shareType' => IShare::TYPE_SCIENCEMESH,
					'shareWith' => 'marie@revad2.docker',
					'server' => 'https://revad2.docker',
				],
			]
		]];
		$resultType = new SearchResultType('sciencemesh');
		$searchResult->addResultSet($resultType, $result['wide'], $result['exact']);

		return true;
	}
}
