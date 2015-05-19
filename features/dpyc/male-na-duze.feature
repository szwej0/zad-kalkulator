Feature: Zamiana małych liter na duże

  Scenario: Zamiana małych liter na duże
    Given I am on homepage
    When I follow "Małe na duże by dpyc"
    And I fill in "Podaj napis" with "Masz Babo Placek"
    And I press "Przetwórz"
    Then I should see "Napis po zamianie: MASZ BABO PLACEK"