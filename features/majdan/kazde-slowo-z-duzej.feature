Feature: Każde słowo z dużej litery

  Scenario: Każde słowo z dużej litery
    Given I am on homepage
    When I follow "Każde słowo z dużej by majdan"
    And I fill in "Podaj napis" with "raz na wozie, raz pod wozem"
    And I press "Przetwórz"
    Then I should see "Napis po zamianie: Raz Na Wozie, Raz Pod Wozem"
