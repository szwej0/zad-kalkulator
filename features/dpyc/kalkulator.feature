Feature: Obliczenia

  Scenario: Kalkulator x + y
    Given I am on homepage
    When I follow "Kalkulator by dpyc"
    And I fill in "x" with "3"
    And I fill in "y" with "4"
    And I press "Oblicz"
    Then I should see "Wynik wynosi 7"