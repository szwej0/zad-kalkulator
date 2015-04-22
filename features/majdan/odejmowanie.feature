Feature: Obliczenia

  Scenario: Kalkulator x-y-z
    Given I am on homepage
    When I follow "Kalkulator by majdan"
    And I fill in "x" with "22"
    And I fill in "y" with "11"
    And I fill in "z" with "2"
    And I press "Oblicz"
    Then I should see "Wynik wynosi 9"
