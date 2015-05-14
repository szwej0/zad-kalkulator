Feature: Zamiana małych liter na duże

  Scenario: Zamiana małych liter na duże
    Given I am on homepage
    When I follow "Małe na duże by majdan"
    And I fill in "Napis" with "aaa"
    And I press "Przetwórz"
    Then I should see "Napis po zamianie: AAA"
