Feature: Obliczenia

  Scenario: Kalkulator walec pole boczne 6.28 * r * h
    Given I am on homepage
    When I follow "Kalkulator by vincenti"
    And I fill in "r" with "2"
    And I fill in "h" with "1"
    And I press "Oblicz"
    Then I should see "Wynik wynosi 12.56"