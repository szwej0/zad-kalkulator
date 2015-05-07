Feature: Obliczenia

  Scenario: Mnozenie a*b*c*d
    Given I am on homepage
    When I follow "Mnozenie by pawkrzo"
    And I fill in "a" with "3"
    And I fill in "b" with "3"
    And I fill in "c" with "1"
    And I fill in "d" with "2"
    And I press "Oblicz"
    Then I should see "Wynik wynosi 18"
