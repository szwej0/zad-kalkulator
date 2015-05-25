Feature: Zamiana małych liter na duże

  Scenario: Zamiana małych liter na duże
    Given I am on homepage
    When I follow "Małe na duże by mrskowron"
    And I fill in "Podaj napis" with "aplikacje internetowe"
    And I press "Przetwórz"
    Then I should see "Napis po zamianie: APLIKACJE INTERNETOWE"