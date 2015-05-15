Feature: Obliczenia

  Scenario: Kalkulator x + y
    Given I am on homepage
    When I follow "Kalkulator by majdan"
    And I fill in "A" with "1"
    And I fill in "B" with "2"
    And I press "Oblicz"
    Then I should see "Wynik wynosi: 3"
