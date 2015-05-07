Feature: Zamiana dużych liter na małe

  Scenario: Zamiana dużych liter na małe
    Given I am on homepage
    When I follow "Duże na małe by majdan"
    And I fill in "Podaj napis" with "Raz na Wozie, Raz pod Wozem"
    And I press "Przetwórz"
    Then I should see "Napis po zamianie: raz na wozie, raz pod wozem"
