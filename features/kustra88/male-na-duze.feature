Feature: Zamiana małych liter na duże

  Scenario: Zamiana małych liter na duże
    Given I am on homepage
    When I follow "Małe na duże by kustra88"
    And I fill in "Text" with "Ala ma Kota"
    And I press "Przetwórz"
    Then I should see "ALA MA KOTA"