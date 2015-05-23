Feature: Obliczenia

  Scenario: Kalkulator a-b-c
    Given I am on homepage
    When I follow "Odejmowanie by majdan"
    And I fill in "A" with "22"
    And I fill in "B" with "11"
    And I fill in "C" with "2"
    And I press "Oblicz"
    Then I should see "Wynik wynosi: 9"
