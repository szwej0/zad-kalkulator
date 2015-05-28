Feature: Każde słowo z dużej litery

  Scenario: Każde słowo z dużej litery
    Given I am on homepage
    When I follow "Każde słowo z dużej litery by kustra88"
    And I fill in "Text" with "Ala ma Kota"
    And I press "Przetwórz"
    Then I should see "Ala Ma Kota"